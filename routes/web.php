<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\LanguageController;

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

Route::get('/', [NavigationController::class, 'index'])->name('public.home');
Route::get('/about-us', [NavigationController::class, 'about'])->name('public.about-us');
Route::get('/porfolio', [NavigationController::class, 'porfolio'])->name('public.portfolio');

Auth::routes(['register' => false]);

Route::get('/home', [UserController::class, 'index'])->name('home');

Route::resource('/users', UserController::class);

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');
