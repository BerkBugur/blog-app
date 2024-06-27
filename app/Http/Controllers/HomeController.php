<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $latestPost = Cache::remember('latestPost',60*24,function(){
            return Post::published()->latest('published_at')->get()->take(3);
        });

        return view('home',[
            'latestPost' => $latestPost

        ]);
    }
}
