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
    return view('login');
});//*/

Route::get('/prueba', function () {
    return view('prueba');
});
// Route::get('/salir', function () {
//     return view('login');
// });
Route::get('/login', function () {
    return view('login');
});

//************  LO QUE HABIA    ****************
/*
Route::get('/pagina/{numero}', function () {
    return view('pagina');
});//*/

Route::get('/pagina/1', function (){return view('pagina');});
Route::get('/pagina/21', function (){return view('pagina2');});
Route::get('/pagina/31', function (){return view('pagina3');});
Route::get('/pagina/4', function (){return view('pagina4');});
Route::get('/pagina/5', function (){return view('pagina5');});
Route::get('/pagina/6', function (){return view('pagina6');});
Route::get('/pagina/7', function (){return view('pagina7');});
Route::get('/nahuatl', function (){return view('audio_nahuatl');});

//Routes 5°
Route::get('/pagina/1', function (){return view('pagina1_');});
Route::get('/pagina/2', function (){return view('pagina2_');});
Route::get('/pagina/3', function (){return view('pagina3_');});
Route::get('/pagina/4', function (){return view('pagina4_');});
Route::get('/pagina/5', function (){return view('Actividad1_');});
Route::get('/pagina/6', function (){return view('Actividad2_');});
Route::get('/pagina/7', function (){return view('Actividad3_');});
Route::get('/pagina/8', function (){return view('Actividad4_');});
Route::get('/pagina/9', function (){return view('pagina9_');});
Route::get('/pagina/10', function (){return view('pagina10_');});
Route::get('/pagina/11', function (){return view('pagina11_');});
Route::get('/pagina/12', function (){return view('Actividad5_');});
Route::get('/pagina/13', function (){return view('Actividad6_');});
Route::get('/pagina/14', function (){return view('Actividad7_');});
Route::get('/pagina/15', function (){return view('Actividad8_');});
Route::get('/pagina/16', function (){return view('pagina16_');});
Route::get('/pagina/17', function (){return view('pagina17_');});
Route::get('/pagina/18', function (){return view('pagina18_');});
Route::get('/pagina/19', function (){return view('Actividad9_');});
Route::get('/pagina/20', function (){return view('Actividad10_');});
Route::get('/pagina/21', function (){return view('Actividad11_');});
Route::get('/pagina/22', function (){return view('Actividad12_');});
Route::get('/pagina/23', function (){return view('pagina23_');});
Route::get('/pagina/24', function (){return view('pagina24_');});
Route::get('/pagina/25', function (){return view('pagina25_');});

Route::get('/pagina/30', function (){return view('pagina30_');});
Route::get('/pagina/31', function (){return view('pagina31_');});
Route::get('/pagina/32', function (){return view('pagina32_');});


//Fin routes 5|

//Route::get('/pagina/Tema_1_Actividad', function (){return view('pagina8_Actividad');});
Route::get('/pagina/Tema_1_Actividad', 'PaginasController@Pagina8');

//Route::get('/pagina/Tema_1_Compromiso', function (){return view('pagina9_Compromiso');});
Route::get('/pagina/Tema_1_Compromiso', 'PaginasController@Pagina9');

Route::get('/pagina/Guia_Maestro', function (){return view('pagina10_Guia_Maestro');});
Route::get('/pagina/Guia_Maestro_Metodo', function (){return view('pagina11_Guia_Maestro_Metodo');});
//Route::get('/pagina/Comentario/1', function (){return view('pagina12_Comentario_Libro_1');});

Route::get('/pagina/Comentario/1', 'PaginasController@PaginaComentarios');

Route::post('/login/validar', 'LoginController@Login');
Route::get('/salir', 'LoginController@Logout');

Route::post('/almacenar/pagina-8', 'PaginasController@AlmacenarPagina8');
Route::post('/almacenar/pagina-9', 'PaginasController@AlmacenarPagina9');
Route::post('/almacenar/pagina-comentarios', 'PaginasController@AlmacenarPaginaComentarios');
