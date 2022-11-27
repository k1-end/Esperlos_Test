<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/login',[WebController::class, 'loginPage'])->name('login');
Route::post('/login',[WebController::class, 'login']);

Route::get('/register',[WebController::class, 'registerPage'])->name('register');
Route::post('/register',[WebController::class, 'register']);


Route::get('/dashboard',[WebController::class, ''])->name('dashboard')->middleware('auth');;
Route::get('/logout',[WebController::class, 'logout'])->name('logout')->middleware('auth');;


