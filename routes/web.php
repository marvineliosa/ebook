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
});//*/

Route::get('/prueba', function () {
    return view('prueba');
});
Route::get('/salir', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/pagina/{numero}', function () {
    return view('pagina');
});
