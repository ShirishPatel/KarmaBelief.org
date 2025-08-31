<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avtar')->nullable();
            $table->string('position')->nullable();
            $table->string('company_name')->nullable();
            $table->text('description');
            $table->string('user_id')->nullable();
            $table->enum('status', ['0', '1'])->default(1);
            $table->json('display_show')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
