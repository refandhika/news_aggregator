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

Route::get('/trend', 'HomeController@Home');
Route::get('/unikaneh', 'HomeController@Home');
Route::get('/intermezo', 'HomeController@Home');
Route::get('/entertainment', 'HomeController@Home');
Route::get('/travel', 'HomeController@Home');
Route::get('/inspirasi', 'HomeController@Home');
Route::get('/olahraga', 'HomeController@Home');
Route::get('/english', 'HomeController@Home');