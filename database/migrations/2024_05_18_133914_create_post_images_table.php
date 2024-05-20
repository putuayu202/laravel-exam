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
        Schema::create('post_images', function (Blueprint $table) {
            $table->increments('postImgId'); // Primary key
            $table->unsignedInteger('postId'); // Foreign key to posts->postId
            $table->string('imgDir', 30); // Varchar(30)
            $table->string('imgUrl', 40); // Varchar(40)
            $table->timestamps(); // created_at and updated_at columns

            // Define foreign key constraint
            $table->foreign('postId')->references('postId')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_images');
    }
};
