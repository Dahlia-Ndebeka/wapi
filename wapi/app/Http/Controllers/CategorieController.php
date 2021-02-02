<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\sousCategories;
use Illuminate\Support\Facades\Validator;


class CategorieController extends Controller
{
    //
    public function Categories(){

        return Categories::all();
    }

    public function Categorie($id){

        return $Categorie = Categories::find($id);
    }

    public function createCategorie(Request $request){

        $validator = Validator::make($request->all(), [
            
            'nomCategorie' => 'required|unique:categories|max:100|regex:/[^0-9.-/_]/',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 201);
            // return $validator->errors();
        }else {

            return Categories::create($request->all());
            
        }
    }

    public function putCategorie(Request $request, $id)
    {
        //
        $categorie = Categories::findOrFail($id);

        $validator = Validator::make($request->all(), [
            
            'nomCategorie' => 'required|unique:categories|max:100|regex:/[^0-9.-/_]/',
        ]);

        if ($validator->fails()) {

            return response()->json($validator->errors(), 201);
            // return $validator->errors();

        }else {

            $categorie->update($request->all());
            return $categorie;
            
        }
    }

    // Affichage des sous categories

    public function getCategories($id){

        return $sousCategorie = Categories::find($id)->SousCategories;
    }
}
