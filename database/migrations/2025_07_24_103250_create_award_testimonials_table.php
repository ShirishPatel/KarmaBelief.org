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
        Schema::create('award_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('image');
            $table->string('heading');
            $table->string('tag_line');
            $table->string('counter');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('award_testimonials');
    }
};
