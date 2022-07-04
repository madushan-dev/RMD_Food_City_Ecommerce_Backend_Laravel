<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->foreignId('order_id')->nullable()->constrained('orders');
            $table->foreignId('product_id')->constrained('products')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('customer_id')->constrained('customers')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_cart_products');
    }
};
