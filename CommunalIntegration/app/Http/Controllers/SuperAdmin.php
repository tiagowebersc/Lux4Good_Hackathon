<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;
use App\User;

class SuperAdmin extends Controller
{
    public function getTowns() {

        $towns = Town::where('active', 1)->get();

        return view('town_manager', ['towns' => $towns]);
    }
}
