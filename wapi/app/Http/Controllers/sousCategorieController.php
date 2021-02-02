<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sousCategories;
use Illuminate\Support\Facades\Validator;

class sousCategorieController extends Controller
{
    //
    public function sousCategories(){

        return sousCategories::all();
    }

    public function sousCategorie($id){

        return $sousCategories = sousCategories::find($id);
    }

    public function createSousCategorie(Request $request){

        $validator = Validator::make($request->all(), [
            
            'nomSousCategorie' => 'required|unique:sous_categories|max:100|regex:/[^0-9.-/_]/',
            'categorie_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 201);
            // return $validator->errors();
        }else {

            return sousCategories::create($request->all());
            
        }
    }

    public function putSousCategorie(Request $request, $id)
    {
        //
        $categorie = sousCategories::findOrFail($id);

        $validator = Validator::make($request->all(), [
            
            'nomSousCategorie' => 'required|unique:sous_categories|max:100|regex:/[^0-9.-/_]/',
            'categorie_id' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json($validator->errors(), 201);
            // return $validator->errors();
            
        }else {

            $categorie->update($request->all());
            return $categorie;
            
        }
    }

    // Affichage des categories

    public function getSousCategorie($id){

        return $categorie = sousCategories::find($id)->Categories;

    }
}
