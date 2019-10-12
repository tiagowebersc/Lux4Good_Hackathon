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

    public function createTown(Request $request) {

        if(hasValue($request->name)) {
            $town = new Town;
            $town->name = $request->newTownName;
            $town->created_at = now();
            $town->created_by = backpack_user()->id;
            $town->updated_at = now();
            $town->updated_by = backpack_user()->id;
            $town->save();
        }
    }
}
