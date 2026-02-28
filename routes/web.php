<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcomecontroller;
use App\Http\Controllers\Registercontroller;
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

Route::get('/',[Welcomecontroller::class,'index']);
Route::get('/about',function(){
    return view('about');
});

Route::controller(Registercontroller::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/signup', 'store')->name('/signup');
});


