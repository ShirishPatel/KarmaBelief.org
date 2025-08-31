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
        Schema::create('client_stories_section', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('client_heading');
            $table->string('client_image');
            $table->string('client_name');
            $table->string('client_role');
            $table->string('client_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_stories_section');
    }
};
