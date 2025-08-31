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
        Schema::create('success', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('background_image')->nullable();
            $table->string('poster_image')->nullable();
            $table->string('success_title');
            $table->string('success_heading');
            $table->text('success_disc');
            $table->string('btn_label')->nullable();
            $table->string('btn_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('success');
    }
};
