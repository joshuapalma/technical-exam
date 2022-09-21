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


//Route for Note Taking Activity
Route::get('/take-note/view', [TakenoteController::class, 'index'])->name('take-note.index');
