<?php

use App\Http\Controllers\ArticalController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/hello', function(){
    return "Hello API";
});

Route::get('/getArticals', [ArticalController::class, 'allArticals']);

Route::post('/CreateRandomUser', [UserController::class, 'CreateRandomUser']);

Route::post('/createArtical', [ArticalController::class, 'createArtical'])->middleware('auth:sanctum');

Route::get('/getartical/{id}', [ArticalController::class, 'showArtical']);
Route::delete('/deleteArtical/{id}', [ArticalController::class, 'deleteArtical'])->middleware('auth:sanctum');

Route::put('/updateArtical/{id}', [ArticalController::class, 'update']);



Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
