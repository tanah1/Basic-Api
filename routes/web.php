<?php

use App\Http\Controllers\bookingController;
use App\Http\Middleware\isTarmeezUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});



Route::get('/login', [bookingController::class, 'login']);
Route::get('/sayHello/{name}', [bookingController::class, 'sayHello'])->middleware(isTarmeezUser::class);




require __DIR__.'/auth.php';
