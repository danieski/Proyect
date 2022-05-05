<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //return Post::all();
        $some = Post::all();
        return view('welcome',['Posts' => $some]);
    }
    public function store(Request $request){
        Post::create([
            'body' => $request->body,
            
        ]);
        //return view("text");
        return redirect('/');
    }
}
