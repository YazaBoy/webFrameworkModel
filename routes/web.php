<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmcontrol;
use App\Http\Controllers\homecontrol;

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

Route::get('/home', [homecontrol::class, 'home'])->name('home');
Route::redirect('/', '/home');
Route::resource('films', filmcontrol::class);
