<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalaxyController;
use App\Http\Controllers\SolarSystemController;
use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



    
    //User
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::get('/users', [UserController::class, 'findAll']);
    Route::post('/users', [UserController::class, 'create'])->middleware('auth.basic');
    Route::patch('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}',[UserController::class, 'destroy']);


    //Galaxy
    Route::get('/galaxies/{id}', [GalaxyController::class, 'show']);
    Route::get('/galaxies', [GalaxyController::class, 'findAll']);
    Route::post('/galaxies', [GalaxyController::class, 'create']);
    Route::patch('/galaxies/{id}', [GalaxyController::class, 'update']);
    Route::delete('/galaxies/{id}',[GalaxyController::class, 'destroy']);


    //solar-systems
    Route::get('/solar-systems/{id}', [SolarSystemController::class, 'show']);
    Route::get('/solar-systems', [SolarSystemController::class, 'findAll']);
    Route::post('/galaxies/{id}/solar-systems', [SolarSystemController::class, 'create']);
    Route::patch('/solar-systems/{id}', [SolarSystemController::class, 'update']);
    Route::delete('/solar-systems/{id}',[SolarSystemController::class, 'destroy']);


    //Planets
    Route::get('/planets/{id}', [PlanetController::class, 'show']);
    Route::get('/planets', [PlanetController::class, 'findAll']);
    Route::post('/galaxies/{galaxyId}/solar-systems/{solarSystemId}/planets', [PlanetController::class, 'create']);
    Route::patch('/planets/{id}', [PlanetController::class, 'update']);
    Route::delete('/planets/{id}',[PlanetController::class, 'destroy']);

    

