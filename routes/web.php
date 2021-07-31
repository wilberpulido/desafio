<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// First challenge Route
Route::get('/firstChallenge', [App\Http\Controllers\PageController::class,'firstChallenge'])->name('firstChallenge.solution');

Route::get('/secondChallenge', [App\Http\Controllers\PageController::class,'secondChallenge'])->name('secondChallenge.solution');

Route::get('/fourthChallenge', [App\Http\Controllers\PageController::class,'fourthChallenge'])->name('fourthChallenge.solution');
