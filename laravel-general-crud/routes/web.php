<?php

use Illuminate\Support\Facades\Route;

//Home
Route::get('/home', 'MainController@home')
-> name('home');

//show
Route::get('/show/{id}', 'MainController@show')
-> name('show');

//aggiungere elemento
Route::get('/match/create', 'MainController@create')
-> name('create');
Route::post('/match/store', 'MainController@store')
-> name('store');

//eliminare elemento
Route::get('destroy/{id}', 'MainController@destroy')
-> name('destroy');

// modifica elemento
Route::get('edit/match/{id}', 'MainController@edit')
-> name('edit');
Route::post('update/match/{id}', 'MainController@update')
-> name('update');
