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


Route::get('/alunos', 'AlunoController@listar');
Route::get('/alunos/form', 'AlunoController@form');
Route::get('/alunos/formUpdate/{id}', 'AlunoController@formUpdate');
Route::post('/alunos/inserir','AlunoController@inserir');
Route::post('/alunos/update/{id}','AlunoController@update');
Route::get('/alunos/delete/{id}', 'AlunoController@delete');



Route::get('/', function () {
    return view('welcome');
});
