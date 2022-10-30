<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SolarSystems extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
 public function up(){
    Schema::create('solar_systems', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->double('dimension', 15, 0);
    $table->double('number_of_planets', 12, 0);
    $table->string('main_star');
    $table->foreignId('galaxies_id')->references('id')->on('galaxies')->onDelete('cascade');
    $table->timestamps();
    });
}

/**
     * Reverse the migrations.
     *
     * @return void
     */
public function down(){
    Schema::dropIfExists('solar_systems');
}
}