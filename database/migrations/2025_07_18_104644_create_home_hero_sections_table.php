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
        Schema::create('home_hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('tag_line');
            $table->string('heading');
            $table->text('description');
            $table->text('image');
            $table->string('btn_label_1');
            $table->string('btn_link_1');
            $table->string('btn_label_2');
            $table->string('btn_link_2');
              $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_hero_sections');
    }
};
