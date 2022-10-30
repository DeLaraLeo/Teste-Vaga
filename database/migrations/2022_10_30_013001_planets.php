<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Planets extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
public function up(){
        Schema::create('planets', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->double('dimension', 15, 0);
        $table->integer('number_of_moons');
        $table->double('light_years_from_the_main_star', 12, 0);
        $table->foreignId('solar_system_id')->references('id')->on('solar_systems')->onDelete('cascade');
        $table->timestamps();
    });
}
 /**
     * Reverse the migrations.
     *
     * @return void
     */
public function down(){
        Schema::dropIfExists('planets');
    }
}