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
        Schema::create('c_d_inquiry', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('heading');
            $table->string('btn_label');
            $table->string('btn_link');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_d_inquiry');
    }
};
