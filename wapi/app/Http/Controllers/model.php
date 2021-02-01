<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Utilisateurs;

class model extends Controller
{
    //
    public function creation(Request $request){

        $name = $request->name;

        return $name;
    }
}
