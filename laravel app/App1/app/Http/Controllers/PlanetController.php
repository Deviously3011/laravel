<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    private $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun...'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun...'
        ],
        // ... (Add the other planets here)
    ];

    public function index() {
        return view('planets.index', ['planets' => $this->planets]);
    }

    public function show($planetName = null) {
        $planetsCollection = collect($this->planets);

        if ($planetName) {
            $planetsCollection = $planetsCollection->filter(function ($planet) use ($planetName) {
                return strtolower($planet['name']) === strtolower($planetName);
            });
        }

        return view('planets.show', ['planets' => $planetsCollection->all()]);
    }
}
