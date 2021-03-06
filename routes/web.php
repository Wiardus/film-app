<?php

use Illuminate\Support\Facades\Route;

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
    return view('films.index');
});

Route::get('/films', [\App\Http\Controllers\FilmsController::class, 'index']);
Route::get('/films/{film}', [\App\Http\Controllers\FilmsController::class, 'show']);
Route::get('/films/create', [\App\Http\Controllers\FilmsController::class, 'create']);
Route::post('/films/create', [\App\Http\Controllers\FilmsController::class, 'store']);
Route::get('/films/{film}/edit', [\App\Http\Controllers\FilmsController::class, 'edit']);
Route::put('/films/{film}/edit', [\App\Http\Controllers\FilmsController::class, 'update']);
Route::delete('/films/{film}', [\App\Http\Controllers\FilmsController::class, 'destroy']);