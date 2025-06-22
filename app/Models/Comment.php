<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    public function relatedPost(){
        return $this->belongsToMany(Post::class, 'post_comments', 'post_id', 'comment_id');
    }
}
