<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\DonatePageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventsPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectsPageController;
use App\Http\Controllers\TalkController;
use App\Http\Controllers\TalksPageController;
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
    Route::get("/", ControlController::class)->name('home');
    Route::resource("medias", MediaController::class)->except(['create', 'show']);
    Route::resource('banners', BannerController::class)->except(['show']);
    Route::resource('projects', ProjectController::class);
    Route::resource('events', EventController::class);
    Route::resource('talks', TalkController::class);
    Route::resource('banks', BankController::class);
    Route::controller(ConfigController::class)->group(function () {
        Route::get('configurations', 'index')->name('configs.index');
    });
    Route::resource("homepage", HomePageController::class)->except(['create', 'store', 'index', 'show']);
    Route::resource("aboutpage", AboutPageController::class)->except(['create', 'store', 'index', 'show']);
    Route::resource("donatepage", DonatePageController::class)->except(['create', 'store', 'index', 'show']);
    Route::resource("contactpage", ContactPageController::class)->except(['create', 'store', 'index', 'show']);
    Route::resource("eventspage", EventsPageController::class)->except(['create', 'store', 'index', 'show']);
    Route::resource("projectspage", ProjectsPageController::class)->except(['create', 'store', 'index', 'show']);
    Route::resource("talkspage", TalksPageController::class)->except(['create', 'store', 'index', 'show']);
});