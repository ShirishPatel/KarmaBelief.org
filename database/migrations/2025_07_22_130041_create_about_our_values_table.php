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
        Schema::create('about_our_values', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('image')->nullable();
            $table->string('title');
            $table->text('disc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_our_values');
    }
};
