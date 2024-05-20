<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    use HasFactory;

    protected $primaryKey = 'postImgId';

    // Define the relationship to the Post model
    public function post()
    {
        return $this->belongsTo(Post::class, 'postId', 'postId');
    }
}
