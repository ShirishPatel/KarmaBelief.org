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
        Schema::create('aiml_home_hero', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('tag_line');
            $table->string('heading');
            $table->string('description');
            $table->string('image');
            $table->string('btn_label');
            $table->string('btn_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aiml_home_hero');
    }
};
