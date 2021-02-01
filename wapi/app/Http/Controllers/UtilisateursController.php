<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateurs;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UtilisateursController extends Controller
{
    
    //Affichage de tous les utilisateurs

    public function Utilisateurs(){

        return Utilisateurs::All();
    }


    //Recherche d'un utilisateurs

    public function getUtilisateur($id){

        $Utilisateur = Utilisateurs::find($id);

        if ($Utilisateur) {

            return $Utilisateur = Utilisateurs::find($id);

        } else {

            return "Utilisateur n'existe pas";
        }
        

    }


    //Supprimer un utilisateur

    public function deleteUtilisateur(Request $request, $id)
    {
        //
        $Utilisateur = Utilisateurs::findOrFail($id);
        $suppression = $Utilisateur->delete();

        if ($suppression) {

            return "Suppression effectue";

        } else {

            return "Erreur lors de la suppression";
        }
        
    }


    //Rechercher un utilisateur

    public function researchUtilisateur($valeur)
    {
        //
        return Utilisateurs::where("login", "like", "%".$valeur."%")->get();
    }


    //Creation d'un utilisateur 

    public function createUtilisateur(Request $request){
        

        // $Utilisateur = $request->all();

        // return $Utilisateur;
	    // $role = $Utilisateur['role'];

        // if ($role == 'administrateur') {

        //     $validator = Validator::make($request->all(), [
        //         'login' => 'required|unique:utilisateurs|max:100',
        //         'email' => 'required|email|unique:utilisateurs',
        //         'password' => 'required|unique:utilisateurs',
        //         'role' => 'required|max:50',
        //         'photo' => 'required|jpg, jpeg, png, bmp, gif, svg, or webp',
        //         'actif' => 'required',
        //         'nomAdministrateur' => 'required|max:100',
        //         'prenomAdministrateur' => 'required|max:100',
        //         'telephone' => 'required|unique:utilisateurs|max:15'
        //     ]);

        //     if ($validator->fails()) {
                
        //         $Utilisateur = $request->all();
        //         $Utilisateur['password'] = Hash::make($Utilisateur['password']);

        //         // $erreur = $validator->errors();
        //         // return response()->json($validator->errors(), 202);

        //         return "Erreur : W001, lie au champs de saisie";
    
        //     }else {

        //         return Utilisateurs::create($Utilisateur);

        //     }

        // } elseif($role == 'mobinaute') {

        //     $validator = Validator::make($request->all(), [
        //         'login' => 'required',
        //         'email' => 'email|required|unique:utilisateurs',
        //         'password' => 'required|unique:utilisateurs',
        //         'role' => 'required|max:50',
        //         'photo' => 'required',
        //         'actif' => 'required'
        //     ]);

        //     if ($validator->fails()) {

        //         // $erreur = $validator->errors();
        //         // return response()->json($validator->errors(), 202);

        //         return "Erreur : W001, lie au champs de saisie";
        
        //     }else {

        //         $Utilisateur = $request->all();
        //         $Utilisateur['password'] = Hash::make($Utilisateur['password']);

        //         return Utilisateurs::create($Utilisateur);

        //     }

        // }else{
        //     return 'Erreur : W003, lie au serveur';
        // }
        
    }



    //Modification d'un utilisateur

    public function putUtilisateurs(Request $request, $id){

        // $Utilisateur = Utilisateurs::findOrFail($id);

	    // $role = $Utilisateur['role'];

        // if ($role == 'administrateur') {

        //     $validator = Validator::make($request->all(), [
        //         'login' => 'required|unique:utilisateurs|max:100',
        //         'email' => 'required|email|unique:utilisateurs',
        //         'password' => 'required|unique:utilisateurs',
        //         'role' => 'required|max:50',
        //         'photo' => 'required|jpg, jpeg, png, bmp, gif, svg, or webp',
        //         'actif' => 'required',
        //         'nomAdministrateur' => 'required|max:100',
        //         'prenomAdministrateur' => 'required|max:100',
        //         'telephone' => 'required|unique:utilisateurs|max:15'
        //     ]);

        //     if ($validator->fails()) {

        //         // $erreur = $validator->errors();
        //         // return response()->json($validator->errors(), 202);

        //         return "Erreur : W001, lie au champs de saisie";
    
        //     }else {

        //         $Utilisateur['password'] = Hash::make($Utilisateur['password']);
        //         $Utilisateur->update($request->all());
        //         return $Utilisateur;

        //     }

        // } elseif($role == 'mobinaute') {

        //     $validator = Validator::make($request->all(), [
        //         'login' => 'required',
        //         'email' => 'email|required|unique:utilisateurs',
        //         'password' => 'required|unique:utilisateurs',
        //         'role' => 'required|max:50',
        //         'photo' => 'required',
        //         'actif' => 'required'
        //     ]);

        //     if ($validator->fails()) {

        //         // $erreur = $validator->errors();
        //         // return response()->json($validator->errors(), 202);

        //         return "Erreur : W001, lie au champs de saisie";
        
        //     }else {                

                
        //         $Utilisateur['password'] = Hash::make($Utilisateur['password']);
        //         $Utilisateur->update($request->all());
        //         return $Utilisateur;

        //     }

        // }else{

        //     return 'Erreur : W003, lie au serveur';
        // }

    }


}
