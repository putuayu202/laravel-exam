<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'postId';

    // Define the relationship to the PostImage model
    public function images()
    {
        return $this->hasMany(PostImage::class, 'postId', 'postId');
    }

    // Define the relationship to the Like model
    public function likes()
    {
        return $this->hasMany(Like::class, 'postId', 'postId');
    }

    // Define the relationship to the Comment model
    public function comments()
    {
        return $this->hasMany(Comment::class, 'postId', 'postId');
    }

    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }
}
