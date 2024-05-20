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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('postId'); // Primary key, int(11)
            $table->string('caption', 100); // Varchar(100)
            $table->unsignedBigInteger('userId'); // Foreign key to users->id
            $table->timestamps(); // created_at and updated_at columns

            // Define foreign key constraint
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
