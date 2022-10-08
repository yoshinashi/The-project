<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Sport;
use Storage;

class PostController extends Controller


{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    
    
    public function host(Post $post)
    {
        return view('posts/host')->with(['posts' => $post->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function show(Post $post)
{
    return view('posts/show')->with(['post' => $post]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function create(Sport $sport)
{
    return view('posts/create')->with(['sports' => $sport->get()]);
}

public function store(Request $request, Post $post)
{
    $input = $request['post'];
    
    $input_sports = $request->sports_array; 
    
    //s3アップロード開始
    $image = $request->file('image');
    
    
      // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('/',$image,);
    
      // アップロードした画像のフルパスを取得
    $post->image_path = Storage::disk('s3')->url($path);
   
    
    $post->fill($input)->save();
    
    $post->sports()->attach($input_sports); 
    
    
    return redirect('/hosts');
}

public function edit(Post $post)
{
    
    return view('posts/edit')->with(['post' => $post]);
}

public function update(Request $request, Post $post)
{
    $input_post = $request['post'];
    
    //s3アップロード開始
    
    $image = $request->file('image');
    
    // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('/',$image,);
    
    $post->image_path = Storage::disk('s3')->url($path);
    
    $post->fill($input_post)->save();

    return redirect('/hosts');
}

public function delete(Post $post)
{
    $post->delete();
    return redirect('/indexes');
}

}
?>
