<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SinopseController;
use App\Http\Controllers\SugestionController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/series', SeriesController::class);

Route::resource('/sugestion', SugestionController::class);

Route::get('/series/{series}/sinopse', [SinopseController::class, 'index'])->name('sinopse.index');

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');

Route::get('/series/{series}/season/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');

Route::post('/series/{series}/season/{season}/episodes', function (Request $request) {
    dd($request->all());
});
