<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\MahfuzController::class, 'index'])->name('mahfuz');
Route::post('/comment/store', [App\Http\Controllers\MahfuzController::class, 'commentstore'])->name('commentstore');
Route::post('/contact/store', [App\Http\Controllers\MahfuzController::class, 'store'])->name('store');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
