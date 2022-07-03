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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('cost_price');
            $table->integer('selling_price');
            $table->tinyInteger('count');
            $table->string('product_image');
            $table->string('description');
            $table->foreignId('category_id')->constrained('categories')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
