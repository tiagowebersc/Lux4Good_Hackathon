<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;

class TownController extends Controller
{
    public function resumeTown(Request $request) {

        $townTable = Town::where('active', 1)->and('id', $request->townId)->get();

        return view('town_manager', ['town' => $townTable]);
    }
}
