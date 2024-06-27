<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MaxPostsPerDay implements Rule
{
    public function passes($attribute, $value)
    {
        $user = Auth::user();

        $postCount = Post::where('user_id', $user->id)
                        ->where('created_at', '>=', Carbon::now()->subDay())
                        ->count();

        return $postCount <= 2;
    }

    public function message()
    {
        return 'You can only create up to 3 posts per day.';
    }
}
