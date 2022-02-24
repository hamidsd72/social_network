<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Group;
use App\Message;
use App\Comment;
use App\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $u = User::all();
        $m = Message::all();
        $p = Post::all();
        $array = [$u,$m,$p];
        return view('home', compact('array'));
    }

    public function follower()
    {
        $p = Post::all();
        return view('views.followers', compact('p'));
    }
    
    public function site()
    {
        $p = Post::all();
        $c = Comment::all();
        return view('views.sites', compact('p','c'));
    }
    
    public function group()
    {
        $messages = Message::where('receiver_id',Auth::user()->id)->get()->sortByDesc('created_at')->unique('sender_id');
        $users    = User::Find($messages->pluck('sender_id'));
        //->pluck('sender_id');
        $g = Group::all();
        return view('views.groups', compact('g','messages','users'));
    }
}
