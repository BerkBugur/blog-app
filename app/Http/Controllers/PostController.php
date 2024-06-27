<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{


    public function index(){
        $allPosts = Cache::remember('$allPosts',60*24,function(){
          return  Post::orderBy('published_at','DESC')->paginate(20);
        });
        return view('posts.index',
      ['posts' => $allPosts]);
    }

    public function show(Post $post){
        return view('posts.show',
        ['post' =>$post]);

    }

}
