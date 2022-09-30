<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function member(Profile $profile)
    {
        return view('users/member')->with(['profiles' => $profile->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    
    
    public function user(Profile $profile)
    {
        return view('users/user')->with(['profiles' => $profile->get()]);  
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
    $profile->fill($input)->save();
    return redirect('/indexes');
}
}
