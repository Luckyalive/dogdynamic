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
        Schema::create('inquiry_quantities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_inquiry_id');
            $table->foreign('product_inquiry_id')
                  ->references('id')->on('product_inquiries')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('set null');

            $table->integer('quantity')->nullable();


            

            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiry_quantities');
    }
};
