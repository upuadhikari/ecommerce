<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('name');
            $table->text('description');
            $table->float('rating')->default(0);
            $table->integer('available_stocks')->nullable();
            $table->integer('price');
            $table->integer('category_id')->nullable();
            $table->integer('delivery_charge')->nullable();
            $table->integer('discount_percent')->default(0);
            $table->string('picture_url')->nullable();
            $table->mediumText('image')->nullable();
            $table->integer('no_of_purchase')->default(0);
            $table->integer('customer_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
