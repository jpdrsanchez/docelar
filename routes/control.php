<?php

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

Route::get('/', function () {
    return view('control.home');
});
