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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/eingabe','PagesController@eingabe');

Route::get('/pruefen','PagesController@pruefen');

Route::get('/freigeben','PagesController@freigeben');
Route::post('/freigeben', 'PagesController@sendEmails');

Route::get('/ergebnis','PagesController@ergebnis');

Route::get('/startseite','PagesController@startseite');

Route::get('/fertig','PagesController@fertig');

Route::get('/befragung', 'PagesController@befragung');

Route::get('/anmeldung', 'PagesController@anmeldung');


Route::get('/register', 'Auth\RegisterController@create');

Route::post('/register', 'Auth\RegisterController@store');


Route::get('/login', 'Auth\LoginController@create');

Route::post('/login', 'Auth\LoginController@store');

Route::get('/logout', 'Auth\LoginController@destroy');

Route::post('/createrequirement', 'RequirementsController@store');
