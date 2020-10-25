<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\PersistenceController;

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



Route::view('/result', 'result')->name('result');

Route::view('/', 'welcome')->name('welcome');

Route::post('/result', [ResultController::class, 'store'])->name('result2');

Route::view('/persistence', 'persistence')->name('persistence');

Route::get('/persistence', [PersistenceController::class, 'store'])->name('persistence2')->middleware('auth');


Auth::routes();



