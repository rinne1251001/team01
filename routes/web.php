<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

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

Route::view('/', 'selections/start');
Route::view('/chick', 'selections/yellow1');
Route::view('/chicken', 'selections/yellow2');
Route::view('/tadpole', 'selections/green1');
Route::view('/frog', 'selections/green2');
Route::view('/boarlest', 'selections/brown1');
Route::view('/boar', 'selections/brown2');
Route::view('/dressup', 'dressup');

Route::get('/collections', [CollectionController::class, 'index'])->name('collections.index');
Route::get('/collections/create', [CollectionController::class, 'create'])->name('collections.create');
Route::post('/collections', [CollectionController::class, 'store'])->name('collections.store');
