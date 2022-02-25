<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [Eventcontroller::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [Eventcontroller::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::delete('/events/{id}', [Eventcontroller::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [Eventcontroller::class, 'edit'])->middleware('auth');
Route::put('events/update/{id}', [Eventcontroller::class, 'update'])->middleware('auth');
Route::post('/events/join/{id}', [Eventcontroller::class, 'joinEvent'])->middleware('auth');



