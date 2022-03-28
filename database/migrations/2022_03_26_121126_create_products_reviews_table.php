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
        Schema::create('products_reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('rating');
            $table->timestamp('date');
            $table->string('comments');
            $table->foreignId('product_id')->constrained('products')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('customer_id')->constrained('customers')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('products_reviews');
    }
};
