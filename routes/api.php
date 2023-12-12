<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Muestra todos los usuarios
Route::get('/usuario', [UsuarioController::class, 'index']);

Route::post('/usuario', [UsuarioController::class, 'store']);

// Muestra un usuairo 
Route::get('/usuario/{id}', [UsuarioController::class, 'show']);

//Edita un usuario
Route::put('/usuario/{id}', [UsuarioController::class, 'update']);

// Delete borra un usuario
Route::delete('/usuario/{id}', [UsuarioController::class, 'delete']); 