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

Route::get('/', 'PagesController@home');

Route::get('/eingabe','PagesController@eingabe');

Route::get('/pruefen','PagesController@pruefen');

Route::get('/freigeben','PagesController@freigeben');

Route::get('/ergebnis','PagesController@ergebnis');

Route::get('/startseite','PagesController@startseite');

Route::get('/fertig','PagesController@fertig');

Route::get('/befragung', 'PagesController@befragung');
