<?php

use Illuminate\Support\Facades\Route;

/**/

Route::get('/pesquisas', 'PesquisasController@index');
Route::get('/pesquisas/cadastrar', 'PesquisasController@create');
Route::post('/pesquisas/cadastrar', 'PesquisasController@store');
