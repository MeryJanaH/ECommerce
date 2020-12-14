<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("order_id")->nullable(false)->unsigned();
            $table->unsignedBigInteger("paypal_payment_id");
            $table->integer("paypal_payer_id");
            $table->date("date");
            $table->decimal("amount", 8, 2);
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('payments');
    }
}
