<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_frontends', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('dish_item');
            $table->string('price');
            $table->string('contract');
            $table->string('description');
            $table-> string('image')->null;
            $table->string('quantity');
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
        Schema::dropIfExists('restaurant_frontends');
    }
};
