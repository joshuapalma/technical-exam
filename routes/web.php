<?php

use App\Http\Controllers\TakenoteController;
use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     return view('layout.template');
// });

//Route For TODO activity
Route::get('/todo/view', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');
Route::post('/todo/update/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todo/delete/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');

//Route for Note Taking Activity
Route::get('/take-note/view', [TakenoteController::class, 'index'])->name('take-note.index');
Route::post('/take-note/store', [TakenoteController::class, 'store'])->name('take-note.store');
Route::post('/take-note/update/{id}', [TakenoteController::class, 'update'])->name('take-note.update');
Route::delete('/take-note/delete/{id}', [TakenoteController::class, 'destroy'])->name('take-note.destroy');
