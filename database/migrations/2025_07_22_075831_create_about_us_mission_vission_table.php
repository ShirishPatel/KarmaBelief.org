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
        Schema::create('about_us_mission_vission', function (Blueprint $table) {
            $table->id();
            $table->string('heading_1')->nullable();
            $table->string('heading_2')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_mission_vission');
    }
};
