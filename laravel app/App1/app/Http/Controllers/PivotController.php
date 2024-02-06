<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PivotController extends Controller
{
    public function showPivotData()
    {
        $user = User::find(1); // Replace 1 with the id of the user whose role you want to retrieve
        $roles = $user->roles;

        return $roles;
    }
}
