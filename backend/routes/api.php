<?php

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/users', function (){
    return UserResource::collection(User::all());
});

// Ruta para obtener el token CSRF
Route::get('/csrf-token', function () {
    return response()->json(['token' => csrf_token()]);
});

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);


// // Rutas protegidas por autenticación y CSRF
// Route::middleware(['auth:sanctum', 'web'])->group(function () {
//     Route::get('/users', [UserController::class, 'index']);
//     Route::post('/users', [UserController::class, 'store']);
//     Route::delete('/users/{id}', [UserController::class, 'destroy']);
// });

// Route::middleware('auth:sanctum')->group(function (Request $request) {
//     Route::get('/users', [UserController::class, 'index']);
//     Route::post('/users', [UserController::class, 'store']);
//     Route::delete('/users/{id}', [UserController::class, 'destroy']);
//     $token = $request->session()->token();

//     $token = csrf_token();
// });




