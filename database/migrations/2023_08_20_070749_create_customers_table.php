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
            $table->string('fname');
            $table->string('dadname');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('country');
            $table->string('City');
            $table->string('Address');
            $table->string('gender');
            $table->integer('nationalcode');
            $table->string('job');
            $table->string('image');
            $table->string('education');
            $table->string('cityofeducation');
            $table->string('password');
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

