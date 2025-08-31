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
        Schema::create('aiml_home_gallery', function (Blueprint $table) {
            $table->id();
            $table->string('tag_title')->nullable();
            $table->string('header')->nullable();
            $table->text('description')->nullable();
            $table->json('data')->nullable(); 
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aiml_home_gallery');
    }
};
