<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtilisateursController;
use App\Http\Controllers\model;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\sousCategorieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('Utilisateur', [UtilisateursController::class, 'createUtilisateur']);
Route::post("Login", [AuthController::class, 'login']);

// Secure routes

Route::group(['middleware'=>['auth:sanctum']], function() {

    //Routes concernanats les comptes 

    Route::get('Utilisateurs', [UtilisateursController::class, 'Utilisateurs']);
    Route::get('Utilisateur/{id}', [UtilisateursController::class, 'getUtilisateur']);
    Route::put('Utilisateur/{id}', [UtilisateursController::class, 'putUtilisateur']);
    // Route::delete('Utilisateur/{id}', [UtilisateursController::class, 'deleteUtilisateur']);
    // Route::get("Utilisateur/{login}", [UtilisateursController::class, 'researchUtilisateur']);


    //Routes concernanats lesCategories 

    Route::get('Categories', [CategorieController::class, 'Categories']);
    Route::post('Categorie', [CategorieController::class, 'createCategorie']);
    Route::get('Categorie/{id}', [CategorieController::class, 'Categorie']);
    Route::put('Categorie/{id}', [CategorieController::class, 'putCategorie']);

    //Routes concernanats les sous Categories 

    Route::get('sousCategories', [sousCategorieController::class, 'sousCategories']);
    Route::post('sousCategorie', [sousCategorieController::class, 'createSousCategorie']);
    Route::get('sousCategorie/{id}', [sousCategorieController::class, 'sousCategorie']);
    Route::put('sousCategorie/{id}', [sousCategorieController::class, 'putSousCategorie']);
});