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
        Schema::create('user_detail', function (Blueprint $table) {
            $table->id('userdetailId');
            $table->foreignId('userId')->constrained('users')->onDelete('cascade');
            $table->string('username', 20);
            $table->string('profil_pic', 150);
            $table->string('bio', 255)->nullable();
            $table->string('gender', 2);
            $table->date('birthday');
            $table->string('country', 40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_detail');
    }
};
