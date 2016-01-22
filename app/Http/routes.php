<?php
 
Route::get('/','BaseController@index');
Route::get('/cliente/create','ClienteController@create');
Route::post('/cliente/store','ClienteController@store');

Route::get('/clientes','ClienteController@index');

Route::get('/cliente/listar/{id}','ClienteController@show');

Route::get('/cliente/editar/{id}','ClienteController@edit');
Route::post('/cliente/update/{id}','ClienteController@update');

Route::get('/cliente/deletar/{id}','ClienteController@destroy');
