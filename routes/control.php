<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TalkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Control Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Control routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Control" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get("/", fn () => view("control.home"));
    Route::resource("medias", MediaController::class)->except(['create']);
    Route::resource('banners', BannerController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('events', EventController::class);
    Route::resource('talks', TalkController::class);
    Route::resource('banks', BankController::class);
    Route::controller(ConfigController::class)->group(function () {
        Route::get('configurations', 'index')->name('configs.index');
    });
});