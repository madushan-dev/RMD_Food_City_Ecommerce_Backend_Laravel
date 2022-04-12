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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('status');
            $table->foreignId('customer_id')->constrained('customers')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('payment_type');
            $table->integer('payment_amount');
            $table->string('delivery_company')->nullable();
            $table->string('tracking_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
