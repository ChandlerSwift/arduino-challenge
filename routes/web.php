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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/challenges', 'HomeController@showChallenges')->name('challenges');
Route::get('/leaderboard', 'HomeController@showLeaderboard')->name('leaderboard');
Route::get('/documentation', 'HomeController@showDocumentation')->name('documentation');

Route::resource('attempts', 'AttemptController');
