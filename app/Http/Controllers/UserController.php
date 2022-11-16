<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Active;
use Auth;

class UserController extends Controller
{
    public function host()
    {
        $posts = Post::where('user_id', \Auth::user()->id)->get();
        
        $post_desc = Post::where('user_id', Auth::id())->orderBy('updated_at', 'DESC')->get();
  //idが、リクエストされた$userのidと一致するuserを取得
        //$posts = Post::where('user_id', User::id())->get()->orderBy('created_at', 'desc'); //$userによる投稿を取得
        //->orderBy('created_at', 'desc');
        
        return view('posts/host')->with(['posts' => $post_desc]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function user()
    {   
        
       
        
        $actives = Active::where('user_id', \Auth::user()->id)->get();
        //$profile = Profile::where('user_id',\Auth::user()->id)->first();
        
        //$Auth_user=Auth::id();
        $profile =Auth::user()->profiles;
        $active_desc = Active::where('user_id', Auth::id())->orderBy('updated_at', 'DESC')->get();
  //idが、リクエストされた$userのidと一致するuserを取得
        //$posts = Post::where('user_id', User::id())->get()->orderBy('created_at', 'desc'); //$userによる投稿を取得
        //->orderBy('created_at', 'desc');
        
        return view('users/user')->with(['actives' => $active_desc,'profile' => $profile]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function account(User $user)
    {
        
        $posts = Post::where('user_id',$user->id)->get();
        $actives = Active::where('user_id',$user->id)->get();
        
        $post_desc = Post::where('user_id', $user->id)->orderBy('updated_at', 'DESC')->get();
        $active_desc = Active::where('user_id', $user->id)->orderBy('updated_at', 'DESC')->get();
        
        $profile = $user->profiles;
        //dd($user);
        
        return view('users/account')->with(['actives' => $active_desc,'posts' => $post_desc,'profile' => $profile,'account' => $user]);
        
    }
}
