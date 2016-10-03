<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'NicaraguanController@Index');
Route::get('home', 'NicaraguanController@Home');
Route::get('whyus', 'NicaraguanController@WhyUs');
Route::get('tours/ash-boarding-in-cerro-negro', 'NicaraguanController@CerroNegro');
/*Route::get('/', 'NicaraguanController@Index');
Route::get('/', 'NicaraguanController@Index');
Route::get('/', 'NicaraguanController@Index');
Route::get('/', 'NicaraguanController@Index');
Route::get('/', 'NicaraguanController@Index');
Route::get('/', 'NicaraguanController@Index');
Route::get('/', 'NicaraguanController@Index');*/
