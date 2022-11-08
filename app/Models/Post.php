<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{

    private static $post;
    use HasFactory;

    public static  function store($request)
    {
        self::$post = new Post();

        self::$post->post_title  = $request->post_title;
        self::$post->post_desc  = $request->post_desc;
        self::$post->save();

    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }


    // many to many

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
