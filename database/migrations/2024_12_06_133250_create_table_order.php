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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->Integer ('user_id')->nullable();
            $table->float('sub_total')->nullable();
            $table->float('coupon')->nullable();
            $table->float('total_amount')->nullable();
            $table->Integer('quantity');
            $table->enum('payment_method',['cod','phone pay','paytm','google pay','credit card','debit card','net banking']);
            $table->enum(' payment_status',['paid','unpaid']);
            $table->enum('status',['new', 'processing','dispatched','cancel','delivered','out for delivery']);
            $table->String('shipping_id');           
          $table->String('first_name');
          $table->String('last_name');
          $table->String('email');
          $table->text('address');
          $table->Integer('mobile_no');
          $table->Integer('pincode');
          $table->text('address_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_order');
    }
};
