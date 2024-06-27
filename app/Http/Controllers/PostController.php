<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
{
    $posts = Post::orderBy('published_at', 'DESC')->paginate(20);
    return view('posts.index', compact('posts'));
}

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $userPostsToday = Post::where('user_id', $user->id)
            ->whereDate('created_at', now()->toDateString())
            ->count();

        if ($userPostsToday >= 3) {
            return redirect()->back()->withErrors(['MaxPostsPerDay' => 'You reached max daily 3 posting limit.']);
        }
        Cache::flush();
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:posts', // Slug will be unique
            'content' => 'required',
        ]);

        $user = Auth::user();
        $post = new Post();
        $post->title = $validatedData['title'];
        $post->body = $validatedData['content'];
        $post->user_id = $user->id;
        $post->published_at = now();
        $post->slug = Str::slug($validatedData['title'], '-');
        $post->image = "https://via.placeholder.com/640x480.png/001199?text=consequatur";
        $post->save();
        return redirect('/blog');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
