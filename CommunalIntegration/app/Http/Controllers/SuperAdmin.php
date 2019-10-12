<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;
use App\User;
use DB;

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

    public function getResumoScreen(){
        $queryGender = DB::select("select a.gender, count(1) total from outcome a group by a.gender;", []);
        $queryAge = DB::select("select a.age, count(1) total from outcome a group by a.age;", []);
        $queryNationality = DB::select("select c.name, count(1) total from outcome a, nationality b, country c where a.id = b.outcome_id and b.country_id = c.id group by c.name", []);
    
        return view('summary_manager', ['queryGender' => $queryGender, 'queryAge' => $queryAge, 'nationality' => $queryNationality]);
    }

    public function userList(){
        return view('user_manager',[]);
    }
}
