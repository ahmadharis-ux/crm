<?php

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

Route::get('/',[LoginController::class,'index']);
Route::post('/',[LoginController::class,'authLogin']);

Route::get('/daftar',[DaftarController::class,'index']);

Route::post('/daftar',[DaftarController::class,'input']);

Route::get('/dashboard', function(){
    return view('dashboard');
});
