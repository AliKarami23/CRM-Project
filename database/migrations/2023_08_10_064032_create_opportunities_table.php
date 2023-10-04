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
     */
    public function down(): void
    {
        Schema::dropIfExists('opportunities');
    }
};
