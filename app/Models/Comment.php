<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    private static $comment;

    public static function postComment($request)
    {
        self::$comment = new Comment();

        self::$comment->post_id         = $request->post_id;
        self::$comment->comment_desc    = $request->comment_desc;
        self::$comment->save();
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
