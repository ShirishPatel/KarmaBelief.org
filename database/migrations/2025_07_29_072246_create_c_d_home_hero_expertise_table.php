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
        Schema::create('c_d_home_hero_expertise', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('title_tag')->nullable();
            $table->string('heading')->nullable();
            $table->text('description')->nullable();
            $table->string('btn_label')->nullable();
            $table->string('btn_link')->nullable();
            $table->json('expertise')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_d_home_hero_expertise');
    }
};
