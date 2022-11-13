<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chat(User $user)
{
    
    //dd($user->name);
    $comments = Comment::where(
        'send_id','=',auth()->id())->where('receive_id','=',$user->id
        );
        //->orWhere('send_id','=','user_id'
        //)->where('receive_id','=','auth()->id');
    return view('chat', ['comments' => $comments->get(),'user' => $user]);
}

    public function add(Request $request)
{
    $user = $request->user;
    
    $comment = $request->input('comment');
    Comment::create([
        'login_id' => auth()->id(),
        'send_id' => auth()->id(),
        'receive_id' => $user,
        'comment' => $comment
    ]);
    return redirect('/chats/'.$user);
}
    
    public function getData(User $user)
{   
    
    //$comments = Comment::orderBy('created_at', 'desc')->get();
    $comments = Comment::where(
        'send_id','=',auth()->id())->where('receive_id','=',$user->id
        )->get();
        //dd($comments);
    $json = ["comments" => $comments];
    return response()->json($json);
}
    
}


