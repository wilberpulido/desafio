<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
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
Route::get('/firstChallenge', [PageController::class,'firstChallenge'])->name('firstChallenge.solution');

Route::get('/secondChallenge', [PageController::class,'secondChallenge'])->name('secondChallenge.solution');

Route::get('/thirdChallenge', [PageController::class,'thirdChallenge'])->name('thirdChallenge.solution');

Route::get('/fourthChallenge', [PageController::class,'fourthChallenge'])->name('fourthChallenge.solution');

Route::resource('/tasks',App\Http\Controllers\TaskController::class)->middleware('auth');

Route::resource('/logs',App\Http\Controllers\LogController::class)->middleware('auth');
