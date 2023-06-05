<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userLoginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    // return view('welcome');
    echo "in login Test";
    echo Auth::user()->name;
});
Route::get('/signup', [userLoginController::class,"signupform"]);
Route::get('/login',  [userLoginController::class,"loginform"]);
// Route::post('/signup', [userLoginController::class,"signup"]);
// Route::post('/login',  [userLoginController::class,"login"]);

