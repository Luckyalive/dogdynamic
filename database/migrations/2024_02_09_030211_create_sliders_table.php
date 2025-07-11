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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->text('item_no')->nullable();
            $table->text('image')->nullable();
            $table->text('title')->nullable();
            $table->text('type')->nullable();
            $table->text('description')->nullable();
            $table->text('url')->nullable();

            $table->text('youtube_embed')->nullable();
            $table->text('video')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
