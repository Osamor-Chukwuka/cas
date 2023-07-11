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

Route::get('/', [App\Http\Controllers\CafetariaController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes to handle each cafetaria main page
Route::get('cafetarias/{id}', [CafetariaController::class, 'index']);

// Route to handle posting commend messages
Route::post('/cafetaria/post/commend/{caf_id}', [CafetariaController::class, 'sendCommendMessage'])->name('post_message');

// Route to handle posting complain messages
Route::post('/cafetaria/post/complain/{caf_id}', [CafetariaController::class, 'sendComplainMessage'])->name('post_message');

// Route to handle commend replies
Route::post('/reply/commend/{commend_id}', [CafetariaController::class, 'commendReply']);

// Route to handle complain replies
Route::post('/reply/complain/{complain_id}', [CafetariaController::class, 'complainReply']);

// Route to handle rating'
Route::post('/cafetaria/rate', [CafetariaController::class, 'rate'])->name('rating');