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
        Schema::create('orders_delivery', function (Blueprint $table) {
            $table->id();
            $table->string('agent_name');
            $table->string('agent_phone');
            $table->string('tracking_code');
            $table->foreignId('order_id')->constrained('orders')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('orders_delivery');
    }
};
