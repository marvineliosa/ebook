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

// Capitulos 8 al 15 *******************************************************************************************************

    //Capitulo 8
            Route::get('/5/8/63', function (){return view('Capitulo_8/pagina63');});
            Route::get('/5/8/64', function (){return view('Capitulo_8/pagina64');});
            Route::get('/5/8/65', function (){return view('Capitulo_8/pagina65');});

            Route::get('/5/8/66', 'PaginasController@Pagina66');

            Route::get('/5/8/67', function (){return view('Capitulo_8/pagina67');});
            Route::get('/5/8/68', function (){return view('Capitulo_8/pagina68');});
            Route::get('/5/8/69', function (){return view('Capitulo_8/pagina69');});

    //Capitulo 9
            Route::get('/5/9/70', function (){return view('Capitulo_9/pagina70');});
            Route::get('/5/9/71', function (){return view('Capitulo_9/pagina71');});
            Route::get('/5/9/72', function (){return view('Capitulo_9/pagina72');});
            Route::get('/5/9/73', function (){return view('Capitulo_9/pagina73');});
            Route::get('/5/9/74', function (){return view('Capitulo_9/pagina74');});
            Route::get('/5/9/75', function (){return view('Capitulo_9/pagina75');});
            Route::get('/5/9/76', function (){return view('Capitulo_9/pagina76');});
            Route::get('/5/9/77', function (){return view('Capitulo_9/pagina77');});
            Route::get('/5/9/78', function (){return view('Capitulo_9/pagina78');});

    //Capitulo 10
            Route::get('/5/10/79', function (){return view('Capitulo_10/pagina79');});
            Route::get('/5/10/80', function (){return view('Capitulo_10/pagina80');});
            Route::get('/5/10/81', function (){return view('Capitulo_10/pagina81');});
            Route::get('/5/10/82', function (){return view('Capitulo_10/pagina82');});
            Route::get('/5/10/83', function (){return view('Capitulo_10/pagina83');});
            Route::get('/5/10/84', function (){return view('Capitulo_10/pagina84');});
            Route::get('/5/10/85', function (){return view('Capitulo_10/pagina85');});

    //Capitulo 11

            Route::get('/5/11/86', function (){return view('Capitulo_11/pagina86');});
            Route::get('/5/11/87', function (){return view('Capitulo_11/pagina87');});
            Route::get('/5/11/88', function (){return view('Capitulo_11/pagina88');});
            Route::get('/5/11/89', function (){return view('Capitulo_11/pagina89');});
            Route::get('/5/11/90', function (){return view('Capitulo_11/pagina90');});
            Route::get('/5/11/91', function (){return view('Capitulo_11/pagina91');});
            Route::get('/5/11/92', function (){return view('Capitulo_11/pagina92');});

    //Capitulo 12

            Route::get('/5/12/93', function (){return view('Capitulo_12/pagina93');});
            Route::get('/5/12/94', function (){return view('Capitulo_12/pagina94');});
            Route::get('/5/12/95', function (){return view('Capitulo_12/pagina95');});
            Route::get('/5/12/96', function (){return view('Capitulo_12/pagina96');});
            Route::get('/5/12/97', function (){return view('Capitulo_12/pagina97');});
            Route::get('/5/12/98', function (){return view('Capitulo_12/pagina98');});
            Route::get('/5/12/99', function (){return view('Capitulo_12/pagina99');});
            Route::get('/5/12/100', function (){return view('Capitulo_12/pagina100');});

   //Capitulo 13

            Route::get('/5/13/101', function (){return view('Capitulo_13/pagina101');});
            Route::get('/5/13/102', function (){return view('Capitulo_13/pagina102');});
            Route::get('/5/13/103', function (){return view('Capitulo_13/pagina103');});
            Route::get('/5/13/104', function (){return view('Capitulo_13/pagina104');});
            Route::get('/5/13/105', function (){return view('Capitulo_13/pagina105');});
            Route::get('/5/13/106', function (){return view('Capitulo_13/pagina106');});
            Route::get('/5/13/107', function (){return view('Capitulo_13/pagina107');});

  //Capitulo 14

            Route::get('/5/14/108', function (){return view('Capitulo_14/pagina108');});
            Route::get('/5/14/109', function (){return view('Capitulo_14/pagina109');});
            Route::get('/5/14/110', function (){return view('Capitulo_14/pagina110');});
            Route::get('/5/14/111', function (){return view('Capitulo_14/pagina111');});
            Route::get('/5/14/112', function (){return view('Capitulo_14/pagina112');});
            Route::get('/5/14/113', function (){return view('Capitulo_14/pagina113');});
            Route::get('/5/14/114', function (){return view('Capitulo_14/pagina114');});

  //Capitulo 15

            Route::get('/5/15/115', function (){return view('Capitulo_15/pagina115');});
            Route::get('/5/15/116', function (){return view('Capitulo_15/pagina116');});
            Route::get('/5/15/117', function (){return view('Capitulo_15/pagina117');});
            Route::get('/5/15/118', function (){return view('Capitulo_15/pagina118');});
            Route::get('/5/15/119', function (){return view('Capitulo_15/pagina119');});
            Route::get('/5/15/120', function (){return view('Capitulo_15/pagina120');});
            Route::get('/5/15/121', function (){return view('Capitulo_15/pagina121');});
            Route::get('/5/15/122', function (){return view('Capitulo_15/pagina122');});

// Capitulos 8 al 15 *******************************************************************************************************
?>
