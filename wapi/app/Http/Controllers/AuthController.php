<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateurs;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){

        $utilisateur = Utilisateurs::where('email', $request->email)->first();


        if (!$utilisateur || !Hash::check($request->password, $utilisateur->password)) {
            return response([
                'message' => ['mot de passe ou email incoorecte']
            ], 404);
        }

        $token = $utilisateur->createToken('token-name')->plainTextToken;

        return response([
            'message' => 'success',
            'token' => $token
        ], 200);
        
    }
}
