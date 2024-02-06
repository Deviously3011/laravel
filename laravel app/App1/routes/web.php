<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

// Define your routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/planetss', function () {
    return ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});

// Use the PlanetController for the planets routes
Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planet}', [PlanetController::class, 'show']);
Route::get('/pivot-data', 'PivotController@showPivotData');


