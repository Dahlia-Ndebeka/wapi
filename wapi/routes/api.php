<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtilisateursController;
use App\Http\Controllers\model;
use App\Http\Controllers\AuthController;

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

    Route::get('Utilisateurs', [UtilisateursController::class, 'Utilisateurs']);

    Route::get('Utilisateur/{id}', [UtilisateursController::class, 'getUtilisateur']);

    Route::put('Utilisateur/{id}', [UtilisateursController::class, 'putUtilisateur']);

    // Route::delete('Utilisateur/{id}', [UtilisateursController::class, 'deleteUtilisateur']);

    // Route::get("Utilisateur/{login}", [UtilisateursController::class, 'researchUtilisateur']);

});