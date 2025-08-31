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
        Schema::create('why_choose_us_list', function (Blueprint $table) {
            $table->id();
            $table->string('list_image')->nullable();
            $table->string('user_id');
            $table->string('list_heading')->nullable();
            $table->text('list_description')->nullable();
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
        Schema::dropIfExists('why_choose_us_list');
    }
};
