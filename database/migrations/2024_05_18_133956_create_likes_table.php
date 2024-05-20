<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('likesId'); // Primary key
            $table->unsignedInteger('postId'); // Foreign key to posts->postId
            $table->unsignedBigInteger('userId'); // Foreign key to users->id
            $table->timestamps(); // created_at and updated_at columns

            // Define foreign key constraints
            $table->foreign('postId')->references('postId')->on('posts')->onDelete('cascade');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
