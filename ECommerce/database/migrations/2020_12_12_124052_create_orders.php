<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->date("date");
            $table->text("status");
            $table->date("del_date");
            $table->decimal("price",8,2);
            $table->text("name");
            $table->text("email");
            $table->text("adresse");
            $table->integer("zip");
            $table->text("country");
            $table->text("city");
            $table->text("phone");
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
