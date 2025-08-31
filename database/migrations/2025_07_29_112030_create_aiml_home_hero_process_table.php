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
        Schema::create('aiml_home_hero_process', function (Blueprint $table) {
            $table->id();
            $table->string('title_tag')->nullable();
            $table->string('heading')->nullable();
            $table->text('description')->nullable();
            $table->json('process')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aiml_home_hero_process');
    }
};
