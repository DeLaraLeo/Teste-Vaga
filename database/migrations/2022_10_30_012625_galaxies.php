<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Galaxies extends Migration
{
 /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
 {
    Schema::create('galaxies', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->double('dimension', 15, 0);
        $table->double('number_of_solar_systems', 12, 0);
        $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
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
    Schema::dropIfExists('galaxies');
}
}