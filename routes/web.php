<?php

use App\Http\Controllers\MailController;
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
    Route::get('/evento/{event:slug}', 'event')->name('event');
    Route::get('/projetos', 'projects')->name('projects');
    Route::get('/projeto/{project:slug}', 'project')->name('project');
    Route::get('/palestras', 'talks')->name('talks');
    Route::get('/doacoes', 'donations')->name('donations');
    Route::get('/palestra/{talk:slug}', 'talk')->name('talk');
    Route::get('/contato', 'contact')->name('contact');
});

Route::post('/enviar', [MailController::class, 'contact'])->name('send');
Route::post('/enviar-palestra', [MailController::class, 'talk'])->name('sendTalk');

Route::get('/enviado', fn () => view('web.sent'))->name('sent');
Route::fallback(fn () => view('web.404'));