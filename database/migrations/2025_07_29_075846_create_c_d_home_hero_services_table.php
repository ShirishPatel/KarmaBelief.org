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
        Schema::create('c_d_home_hero_services', function (Blueprint $table) {
            $table->id();
            $table->string('title_tag')->nullable();
            $table->string('heading')->nullable();
            $table->text('description')->nullable();
            $table->json('services')->nullable();
            $table->string('image')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_d_home_hero_services');
    }
};
