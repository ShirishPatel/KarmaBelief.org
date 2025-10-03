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
        Schema::create('galleries', function (Blueprint $table) {
             $table->id();
             $table->string('user_id')->nullable();
            $table->string('category_id')->nullable();  
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('path')->nullable();
            $table->string('desc')->nullable();
            $table->enum('status',['1','0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
