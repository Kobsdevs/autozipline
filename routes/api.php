<?php

use App\Http\Controllers\ModelCarController;
use Illuminate\Http\Request;
use App\Http\Controllers\API\RegisterController;
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

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register')->name('api.register');
    Route::post('login', 'login')->name('api.login');
});


Route::middleware('auth:sanctum')->group( function () {
    Route::resource('models', ModelCarController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
