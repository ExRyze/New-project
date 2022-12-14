<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
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

Route::view('/', 'home');
Route::view('/home', 'home');
Route::controller(AnimeController::class)->group(function() {
  Route::get('/anime', 'index');
  Route::get('/anime/create', 'create');
  Route::post('/anime', 'store');
});