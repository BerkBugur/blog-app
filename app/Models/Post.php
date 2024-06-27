<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    protected $cast =['published_at' => 'datetime'];

    public function author(){
        return $this->belongsTo(User::class,'id');
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function getExcerpt(){
        return Str::limit(strip_tags($this->body),150);
    }
    public function getReadingTime(){
       $mins = round(str_word_count($this->body) / 250);

       return($mins< 1) ? 1 : $mins;
    }
}
