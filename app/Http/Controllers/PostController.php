<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
//        $posts = Post::get(); //returns a collection
        $posts = Post::paginate(20); //returns a paginator

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function createPost(Request $request){
        $this->validate($request,[
            'body' => 'required'
        ]);

       $request->user()->posts()->create([
          'body' => $request->body
       ]);

       return back();
    }
}
