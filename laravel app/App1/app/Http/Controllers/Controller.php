<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    private $planets = [
        'Mercury',
        'Venus',
        'Earth',
        'Mars',
        'Jupiter',
        'Saturn',
        'Uranus',
        'Neptune'
    ];
    public function index() {
        return view('planets.index', ['planets' => $this->planets]);
    }
    
    public function show($planet) {
        if (in_array($planet, $this->planets)) {
            return view('planets.show', ['planet' => $planet]);
        } else {
            return redirect('/planets');
        }
    }
    
    use AuthorizesRequests, ValidatesRequests;
}
