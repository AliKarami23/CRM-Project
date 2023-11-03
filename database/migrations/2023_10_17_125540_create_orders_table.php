<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('user_id');
            $table->text('Description');
            $table->integer('Total_price');
            $table->integer('order_number');
            $table->string('Status');
            $table->string('product_id');
            $table->time('Shipping_time');
            $table->string('distance');
            $table->float('lag');
            $table->float('lat');
            $table->string('location');
            $table->string('vehicle');
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
};
