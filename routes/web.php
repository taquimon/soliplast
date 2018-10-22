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
    return view('welcome', ['name' => 'SOLIPLAST']);
});

Route::get('/', function()
{
   return view('pages.home');

});

// Route::get('inventario', function()
// {
//    return view('pages.inventario');

// });
Route::get('inventario', 'ProductController@index');


