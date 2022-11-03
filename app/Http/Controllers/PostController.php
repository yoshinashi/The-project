<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Sport;
use Auth;
use Storage;

class PostController extends Controller


{
    public function index(Post $post, Request $request,Sport $sport)
    {
        $keyword = $request->input('keyword');
       
        $query = Post::query();
        
    
        if(isset($keyword)) {
            $query->where('place',"$keyword");
        }

        $posts = $query->get();
            
            
        $sportId = $request->sports_array;
      
        
        
        if(isset($sportId)){
            $query->whereHas('sports', function($q) use($sportId)  {
                $q->whereIn('post_sport.sport_id', $sportId);
            });
        }
        
        $posts = $query->get();
        $sports =$sport->get();
        
        return view('posts/index',compact('posts','keyword','sports'));  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function host(Post $post)
{
    return view('posts/host')->with(['posts' => $post->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
 }
    
    public function show(Post $post)
{
    return view('posts/show')->with(['posts' => $post->get(),'post' => $post]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function create(Sport $sport)
{
    return view('posts/create')->with(['sports' => $sport->get()]);
}

public function store(PostRequest $request, Post $post)
{
    $input = $request['post'];
    //dd($input);
    $input_sports = $request->sports_array; 
    
    //s3アップロード開始
    $image = $request->file('image');
    
    
      // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('/',$image,);
    
      // アップロードした画像のフルパスを取得
    $post->image_path = Storage::disk('s3')->url($path);
    
    $post->user_id = Auth::id();
    
    $post->fill($input)->save();
    
    
    $post->sports()->attach($input_sports); 
    
    
    return redirect('/hosts');
}

public function edit(Post $post,Sport $sport)
{
    $query = \DB::table('post_sport')->where('post_id', '=', $post->id)->get();
    $selectedSport = array();
    foreach($query as $q){
        array_push($selectedSport, $q->sport_id);
    }
    //dd($selectedSport);
    $places=['東京', '神奈川','千葉','群馬','栃木','埼玉','茨城','その他の地域'];
    return view('posts/edit')->with(['post' => $post,'sports' => $sport->get(), 'selectedSport'=> $selectedSport,'places'=> $places]);
}

public function update(PostRequest $request, Post $post)
{
    $input_post = $request['post'];
    
    $input_sports = $request->sports_array; 
    
    //s3アップロード開始
    
    $image = $request->file('image');
    
    // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('/',$image,);
    
    $post->image_path = Storage::disk('s3')->url($path);
    
    $post->sports()->sync($input_sports);
    
    
    
    $post->fill($input_post)->save();
    
     

    return redirect('/hosts');
}

public function delete(Post $post)
{
    $post->delete();
    return redirect('/hosts');
}

}
?>
