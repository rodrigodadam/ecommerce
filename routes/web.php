<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basic\BasicController;

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

Route::controller(BasicController::class)->group(function () {
    Route::get('/', 'home')->name('home.page');
    Route::get('/about', 'about')->name('about.page');
    Route::get('/contact', 'contact')->name('contact.page');
});