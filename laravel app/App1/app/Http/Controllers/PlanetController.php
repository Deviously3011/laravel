<?php
namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
{
    $planets = Planet::all();
    return view('planets.index', ['planets' => $planets]);
}

public function sahow($planetName)
{
    $planet = Planet::where('name', $planetName)->first();
    return view('planets.show', ['planet' => $planet]);
}
}
