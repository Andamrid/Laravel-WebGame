<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('User')->prefix('user')->name('user.')->group(function(){
    Route::prefix('users')->name('users.')->group(function(){
        Route::get('index','UserController@index')->name('index');

        Route::get('create','UserController@create')->name('create');
        Route::post('store','UserController@store')->name('store');  

        Route::get('edit/{id}','UserController@edit')->name('edit');
        Route::post('update/{id}','UserController@update')->name('update');

        Route::get('destroy/{id}','UserController@destroy')->name('destroy');

        Route::get('login','UserController@login')->name('login');
        Route::post('postlogin','UserController@postlogin')->name('postlogin');

        Route::get('forgot','UserController@forgot')->name('forgot');

        Route::get('createinfo','UserInfoController@createinfo');

        Route::get('home','UserController@home')->name('home');
    });
});

Route::namespace('Game')->prefix('game')->name('game.')->group(function(){

    Route::prefix('games')->name('games.')->group(function(){

        Route::get('index','GameController@index')->name('index');

        Route::get('create', 'GameController@create')->name('create');
        Route::post('store','GameController@store')->name('store');

        Route::get('edit/{id}','GameController@edit')->name('edit');
        Route::post('update/{id}', 'GameController@update')->name('update');

        Route::get('delete/{id}','GameController@delete')->name('delete');

        
    });
});