<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
// routes/web.php

Route::get('/planets', [PlanetController::class, 'getAllPlanets']);
Route::get('/planets/{planet}', [PlanetController::class, 'showPlanet']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/planetss', function () {
    return ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});
Route::get('/planets', [App\Http\Controllers\PlanetController::class, 'index']);
Route::get('/planets/{planet}', [App\Http\Controllers\PlanetController::class, 'show']);
