<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Storage;



class ProfileController extends Controller
{
    public function member(Profile $profile)
    {
        return view('users/member')->with(['profiles' => $profile->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    
    
    public function user(Profile $profile)
    {
        
        return view('users/user')->with(['profile' => $profile->first()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function detail(Profile $profile)
{
    return view('users/detail')->with(['profile' => $profile]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function profile()
{
    return view('users/profile');
}

public function keep(Request $request, Profile $profile)
{
    $input = $request['profile'];
    
    //s3アップロード開始
    $image = $request->file('image_name');
    
      // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('/',$image,);
    
      // アップロードした画像のフルパスを取得
    $profile->image_name= Storage::disk('s3')->url($path);

    
    
    $profile->fill($input)->save();
    
    
    
    return redirect('/indexes');
}

public function remake(Profile $profile)
{
    return view('users/remake')->with(['profile' => $profile]);
}

public function update(Request $request, Profile $profile)
{
    $input_profile = $request['profile'];
    $profile->fill($input_profile)->save();

    return redirect('/users/');
}
}
