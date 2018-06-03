<?php


Route::get('/', 'TestController@welcome');

// podemos ver esta es una ruta la cual nos genero el comando Php artisan make:auth
//no genera un servicio de autentificacion automarico
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
