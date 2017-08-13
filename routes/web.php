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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/reposteria', function () {
    return view('reposteria');
});*/

Route::get('/catalog/{category?}', 'ProductController@index');


Route::resource('catalog', 'ProductController');


Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', 'ContactController@send');
