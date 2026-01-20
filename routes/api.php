<?php

use App\Http\Controllers\UserMOMController;
use App\Http\Controllers\PostMOMController;
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

// Rutas para UserMOM
Route::apiResource('users', UserMOMController::class);

// Rutas para PostMOM
Route::apiResource('posts', PostMOMController::class);

// Rutas adicionales
Route::get('users/{id}/posts', [UserMOMController::class, 'show']); // Posts de un usuario
