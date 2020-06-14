<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->integer('customer_id');
            $table->integer('payment_id');
            $table->dateTime('payment_date', 0)->nullable();
            $table->string('payment_status');
            $table->dateTime('ordered_date', 0);
            $table->dateTime('delivery_date', 0)->nullable();
            $table->string('delivery_status');
            $table->integer('total_amount');
            $table->string('session_key');
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
        Schema::dropIfExists('orders');
    }
}
