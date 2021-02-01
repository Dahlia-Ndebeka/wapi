<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtilisateursController;

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

Route::get('get/Utilisateurs', [UtilisateursController::class, 'Utilisateurs']);

Route::get('get/Utilisateur/{id}', [UtilisateursController::class, 'getUtilisateur']);

Route::post('post/Utilisateur', [UtilisateursController::class, 'createUtilisateur']);

Route::put('put/Utilisateur/{id}', [UtilisateursController::class, 'updateUtilisateur']);

Route::delete('delete/Utilisateur/{id}', [UtilisateursController::class, 'deleteUtilisateur']);

Route::get("research/Utilisateur/{login}", [UtilisateursController::class, 'researchUtilisateur']);
