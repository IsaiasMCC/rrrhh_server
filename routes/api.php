<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PostulanteController;
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

Route::get('areas', [AreaController::class, 'index']);
Route::post('areas', [AreaController::class, 'store']);
Route::post('areas/delete/{id}', [AreaController::class, 'destroy']);
Route::put('areas/edit/{id}', [AreaController::class, 'update']);

Route::get('personal', [PersonalController::class, 'index']);
Route::post('personal', [PersonalController::class, 'store']);
Route::post('personal/delete/{id}', [PersonalController::class, 'destroy']);
Route::put('personal/edit/{id}', [PersonalController::class, 'update']);

Route::get('postulante', [PostulanteController::class, 'index']);
Route::post('postulante', [PostulanteController::class, 'store']);
Route::post('postulante/delete/{id}', [PostulanteController::class, 'destroy']);
Route::put('postulante/edit/{id}', [PostulanteController::class, 'update']);

