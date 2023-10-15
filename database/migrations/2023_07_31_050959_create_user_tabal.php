<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
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
            $table->string('Password');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
