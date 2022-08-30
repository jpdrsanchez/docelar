<?php

use App\Http\Controllers\Web\WebController;
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

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/sobre', 'about')->name('about');
    Route::get('/eventos', 'events')->name('events');
    Route::get('/projetos', 'projects')->name('projects');
    Route::get('/palestras', 'talks')->name('talks');
    Route::get('/doacoes', 'donations')->name('donations');
});