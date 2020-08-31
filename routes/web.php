<?php

use Illuminate\Support\Facades\Route;

/**/

Route::get('/pesquisas', 'PesquisasController@index')
    ->name('listar_orcamentos');
Route::get('/pesquisas/cadastrar', 'PesquisasController@create')
    ->name('form_criar_orcamento');
Route::post('/pesquisas/cadastrar', 'PesquisasController@store');
Route::delete('/pesquisas/{id}', 'PesquisasController@destroy');
