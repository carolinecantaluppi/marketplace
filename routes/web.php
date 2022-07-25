<?php

use App\Http\Controllers\HomeController;
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

Route::group([], function () {
    Route::get('/{id?}', [HomeController::class, 'home'])->name('home');
    Route::post('/home/create', [HomeController::class, 'createTshirt'])->name('createTshirt'); 
    Route::get('/home/alltshirts', [HomeController::class, 'allTshirts'])->name('allTshirts'); 
    Route::get('/home/alltshirts/{id?}', [HomeController::class, 'search'])->name('search');
    Route::get('/home/edit/{id}', [HomeController::class, 'editTshirt'])->name('editTshirt');   
    Route::delete('/home/{id}', [HomeController::class, 'deleteTshirt'])->name('deleteTshirt');   
});