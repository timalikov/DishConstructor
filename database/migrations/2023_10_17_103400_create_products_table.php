<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $talbe
            $table->integer('protein');
            $table->integer('fat');
            $table->integer('carbohydrate');
            $table->integer('fiber');
            $table->integer('total_sugar');
            $table->integer('kilocalories');
            $table->integer('health_factor');
            $table->string('image_url')->nullable();
            $table->boolean('can_be_dish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
