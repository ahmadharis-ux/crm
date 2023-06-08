<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'guest'], function(){   
    Route::get('/',[LoginController::class,'index']);
        Route::post('/',[LoginController::class,'authLogin']);
        Route::get('/daftar',[DaftarController::class,'index']);
        
        Route::post('/daftar',[DaftarController::class,'input']);
});

Route::group(['middleware' => 'auth'], function(){
    Route::post('/logout',[LoginController::class, 'logout']);

    Route::prefix('customer')->group(function(){
        Route::get('/dashboard',[CustomerController::class,'index']);
    });
});
