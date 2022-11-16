<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\ActiveRequest;
use App\Models\Profile;
use App\Models\Active;
use App\Models\User;
use App\Models\Post;
use Auth;
use Storage;



class ProfileController extends Controller
{
    public function member(Active $active, Request $request)

    {
         $keyword = $request->input('keyword');

        $query = Active::query();

        if(!empty($keyword)) {
            $query->where('activity', 'LIKE', "%{$keyword}%");
        
        }
        
        $actives = $query->with("user.profiles")->orderBy('updated_at', 'DESC')->paginate(20);
        //dd($actives);
        return view('users/member',compact('actives','keyword'));  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    
    
    public function user(Profile $profile, Active $active)
    {
       //$Auth_user=Auth::id();
       $profile = Profile::find($Auth_user);
       $active_desc = $active->where('user_id', Auth::id())>orderBy('updated_at', 'DESC')->get();
       //$active->where('user_id', Auth::id())>orderBy('updated_at', 'DESC')->get();
        
        return view('users/user')->with(['profile' => $profile,'actives' => $active_desc]); 
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
       
    }
    
    public function account(Profile $profile,Active $active,Post $post,User $user)
{
    $active->user_id = Auth::id();
    $profile = $profile->where('user_id', Auth::id())->first();
    //dd($test);
    return view('users/account')->with(['profile' => $profile,'active' => $active,'actives' => $active->orderBy('updated_at', 'DESC')->get(),'posts' => $post->orderBy('updated_at', 'DESC')->get()]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function profile()
{
    return view('users/profile');
}

//プロフィールの登録
public function keep(ProfileRequest $request, Profile $profile)
{
    $input = $request['profile'];
   
    //s3アップロード開始
    $image = $request->file('image_name');
    
      // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('/',$image,);
    
      // アップロードした画像のフルパスを取得
    $profile->image_name= Storage::disk('s3')->url($path);
    $profile->user_id = Auth::id();
    
    
    $profile->fill($input)->save();
    
    return redirect('/users');
}

//プロフィール画面の編集画面を開く
public function remake(Profile $profile)
{
     $Auth_user=Auth::id();
     $profile = Profile::find($Auth_user);
     $places=['東京', '神奈川','千葉','群馬','栃木','埼玉','茨城','その他の地域'];
     $ages=['20歳未満','20-29歳','30-39歳','40-49歳','50-59歳','60歳以上'];
    //$profile->user_id = Auth::id();
    return view('users/remake')->with(['profile' => $profile,'places' => $places,'ages' => $ages]);
}

//プロフィールの編集実行
public function update(ProfileRequest $request, Profile $profile)
{
    $input_profile = $request['profile'];
   
    //s3アップロード開始
    $image = $request->file('image_name');

      // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('/',$image,);
    // dd($path);
      // アップロードした画像のフルパスを取得
    $input_profile['image_name']= Storage::disk('s3')->url($path);
    
    $profile->user_id = Auth::id();
    
    //$profile->fill($input_profile)->save();

    $profile::find(auth()->id())->fill($input_profile)->save();
    return redirect('/users/');
}

//活動投稿画面
public function active()
{
    return view('users/active');
}

//活動投稿の実行
public function save(ActiveRequest $request, Active $active)
{
    $input_active = $request['active'];
    
    //s3アップロード開始
    $image = $request->file('image_active');
   
      // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('/',$image,);
    
      // アップロードした画像のフルパスを取得
    $active->image_active = Storage::disk('s3')->url($path);
    $active->user_id = Auth::id();
   
    $active->fill($input_active)->save();
    
    return redirect('/users/');
}


public function reactive(Active $active)
{
    return view('users/reactive')->with(['active' => $active]);
}


   public function repost(ActiveRequest $request, Active $active)
{
    $input_active = $request['active'];
    
    //s3アップロード開始
    
    $image = $request->file('image_active');
    
    // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('/',$image,);
    
    $active->image_active = Storage::disk('s3')->url($path);
    $active->user_id = Auth::id();
    
    $active->fill($input_active)->save();

    return redirect('/users');
}

public function delete(Active $active)
{
    $active->delete();
    return redirect('/users');
}
}
