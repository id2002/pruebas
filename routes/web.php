<?php
/**
 * Rutas
*/
Route::get('/', function () {
    return 'Home';
});

Route::get('/usuario/nuevo', 'UserController@create');

Route::get('/usuario', 'UserController@index');

Route::get('/usuario/{id}', 'UserController@show')
    ->where('id', '[0-9]+');

Route::get('/usuario/{id}/{nickname}', 'WelcomeController@index');
