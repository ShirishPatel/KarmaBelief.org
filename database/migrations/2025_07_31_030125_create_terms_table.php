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
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('terms_title');
            $table->string('terms_slug');
            $table->text('description');
            $table->string('user_id')->nullable();
            $table->enum('status', ['0', '1'])->default(1);
            $table->timestamps();
            $table->string('meta_title');
            $table->string('meta_slug')->unique();
            $table->text('meta_content')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('meta_og_title')->nullable();
            $table->text('meta_og_description')->nullable();
            $table->string('meta_og_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};
