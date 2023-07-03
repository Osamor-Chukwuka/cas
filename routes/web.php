<?php

use App\Http\Controllers\CafetariaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes to handle each cafetaria main page
Route::get('cafetarias/one', [CafetariaController::class, 'index']);

// Route to handle posting messages
Route::post('cafetaria/post', [CafetariaController::class, 'sendMessage'])->name('post_message');
