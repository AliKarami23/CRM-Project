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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Role');
            $table->string('Email')->unique();
            $table->string('PhoneNumber')->unique();
            $table->string('FullName')->nullable();
            $table->string('CompanyName')->nullable();
            $table->string('CompanyAddress')->nullable();
            $table->integer('NumberOfCustomers')->nullable();
            $table->string('FatherName')->nullable();
            $table->string('Country')->nullable();
            $table->string('City')->nullable();
            $table->string('Address')->nullable();
            $table->string('Gender')->nullable();
            $table->integer('NationalCode')->nullable();
            $table->string('Job')->nullable();
            $table->string('Image')->nullable();
            $table->string('Education')->nullable();
            $table->string('CityEducation')->nullable();
            $table->string('origin_lag')->nullable();
            $table->string('origin_lat')->nullable();
            $table->string('Password');
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
        Schema::dropIfExists('users');
    }
};
