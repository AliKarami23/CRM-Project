<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_id');
            $table->string('name');
            $table->string('Lastname');
            $table->string('FatherName');
            $table->string('Email');
            $table->string('PhoneNumber');
            $table->string('Country');
            $table->string('City');
            $table->string('Address');
            $table->string('Gender');
            $table->integer('NationalCode');
            $table->string('Job');
            $table->string('Image');
            $table->string('Education');
            $table->string('CityEducation');
            $table->string('Password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

