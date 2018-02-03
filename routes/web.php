<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/editoras', 'EditoraController@index');

Route::get('/editoras/cria', 'EditoraController@cria');

Route::post('/editoras', 'EditoraController@armazena');
