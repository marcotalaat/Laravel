<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    public function relatedComment(){
        return $this->belongsToMany(Comment::class, 'post_comments', 'post_id', 'comment_id');
    }
}
