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

//************  LO QUE HABIA    ****************
/*
Route::get('/pagina/{numero}', function () {
    return view('pagina');
});//*/

Route::get('/pagina/1', function (){return view('pagina');});
Route::get('/pagina/2', function (){return view('pagina2');});
Route::get('/pagina/3', function (){return view('pagina3');});
Route::get('/pagina/4', function (){return view('pagina4');});
Route::get('/pagina/5', function (){return view('pagina5');});
Route::get('/pagina/6', function (){return view('pagina6');});
Route::get('/pagina/7', function (){return view('pagina7');});
Route::get('/pagina/Tema_1_Actividad', function (){return view('pagina8_Actividad');});
Route::get('/pagina/Tema_1_Compromiso', function (){return view('pagina9_Compromiso');});
Route::get('/pagina/Guia_Maestro', function (){return view('pagina10_Guia_Maestro');});
Route::get('/pagina/Guia_Maestro_Metodo', function (){return view('pagina11_Guia_Maestro_Metodo');});
