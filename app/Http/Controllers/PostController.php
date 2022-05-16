<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //return Post::all();
        $some = Post::orderBy('id', 'DESC')->paginate(5);
        return view('welcome',['Posts' => $some]);
    }
    public function store(Request $request){
        //Verify correct input
        $this->validate($request, [
            'body' => 'required|max:70'
        ]);
        //We are adding user_id from ur user authentication id
        Post::create([
            'user_id' => auth()->id(),
            'body' => $request->body,
            
        ]);
        //return view("text");
        return redirect('/');
    }
}
