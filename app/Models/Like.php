<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $primaryKey = 'likesId';

    // Define the relationship to the Post model
    public function post()
    {
        return $this->belongsTo(Post::class, 'postId', 'postId');
    }

    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }
}
