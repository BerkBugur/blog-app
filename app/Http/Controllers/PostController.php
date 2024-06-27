<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index',
      ['posts' => Post::orderBy('published_at','DESC')->paginate(20)]);
    }

    public function show(Post $post){
        return view('posts.show',
        ['post' =>$post]);

    }

}
