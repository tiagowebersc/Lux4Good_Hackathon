<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/superAdmin', function () {
    return view('town_manager');
});
Route::get('/superAdmin2', function () {
    return view('summary_manager');
});
Route::get('/superAdmin3', function () {
    return view('user_manager');
});