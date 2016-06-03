<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');
Route::get('users/{users}/reservations', 'ReservationController@oneUser');
//Route::get('users/{users}/reservations/create', 'ReservationController@create');

Route::get('articles/json', 'ArticleController@json');
Route::resource('articles', 'ArticleController');

Route::resource('programs', 'ProgramController');

Route::resource('reservations', 'ReservationController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// zgornji nej bi bli namesto teh
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);


