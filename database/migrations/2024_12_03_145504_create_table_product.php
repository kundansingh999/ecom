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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_title')->nullable();
            $table->string('category_id')->nullable();
            $table->string('product_description')->nullable();
            $table->string('slug')->nullable();
            $table->string('product_price')->nullable();
            $table->text('product_summary')->nullable();
            $table->string('status')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('brand')->nullable();
            $table->string('stock')->nullable();
            $table->string('size')->nullable();
            $table->text('condition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_product');
    }
};
