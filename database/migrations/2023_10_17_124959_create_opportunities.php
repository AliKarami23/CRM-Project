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
        Schema::create('Opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('Category');
            $table->text('product_id');
            $table->string('Number');
            $table->string('Color');
            $table->string('Price');
            $table->string('TotalPrice');
            $table->string('Description');
            $table->string('Status');
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
        Schema::dropIfExists('Opportunities');
    }
};
