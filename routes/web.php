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
Route::get('/pagina/2', function (){return view('pagina2');});
Route::get('/pagina/3', function (){return view('pagina3');});
Route::get('/pagina/4', function (){return view('pagina4');});
Route::get('/pagina/5', function (){return view('pagina5');});
Route::get('/pagina/6', function (){return view('pagina6');});
Route::get('/pagina/7', function (){return view('pagina7');});
Route::get('/nahuatl', function (){return view('audio_nahuatl');});

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
            Route::get('/Libro_5_Capitulo_8_Pagina_63', function (){return view('Capitulo_8/pagina63');});
            Route::get('/Libro_5_Capitulo_8_Pagina_64', function (){return view('Capitulo_8/pagina64');});
            Route::get('/Libro_5_Capitulo_8_Pagina_65', function (){return view('Capitulo_8/pagina65');});
            Route::get('/Libro_5_Capitulo_8_Pagina_66', function (){return view('Capitulo_8/pagina66');});
            Route::get('/Libro_5_Capitulo_8_Pagina_67', function (){return view('Capitulo_8/pagina67');});
            Route::get('/Libro_5_Capitulo_8_Pagina_68', function (){return view('Capitulo_8/pagina68');});
            Route::get('/Libro_5_Capitulo_8_Pagina_69', function (){return view('Capitulo_8/pagina69');});

    //Capitulo 9
            Route::get('/Libro_5_Capitulo_9_Pagina_70', function (){return view('Capitulo_9/pagina70');});
            Route::get('/Libro_5_Capitulo_9_Pagina_71', function (){return view('Capitulo_9/pagina71');});
            Route::get('/Libro_5_Capitulo_9_Pagina_72', function (){return view('Capitulo_9/pagina72');});
            Route::get('/Libro_5_Capitulo_9_Pagina_73', function (){return view('Capitulo_9/pagina73');});
            Route::get('/Libro_5_Capitulo_9_Pagina_74', function (){return view('Capitulo_9/pagina74');});
            Route::get('/Libro_5_Capitulo_9_Pagina_75', function (){return view('Capitulo_9/pagina75');});
            Route::get('/Libro_5_Capitulo_9_Pagina_76', function (){return view('Capitulo_9/pagina76');});
            Route::get('/Libro_5_Capitulo_9_Pagina_77', function (){return view('Capitulo_9/pagina77');});
            Route::get('/Libro_5_Capitulo_9_Pagina_78', function (){return view('Capitulo_9/pagina78');});

    //Capitulo 10
            Route::get('/Libro_5_Capitulo_10_Pagina_79', function (){return view('Capitulo_10/pagina79');});
            Route::get('/Libro_5_Capitulo_10_Pagina_80', function (){return view('Capitulo_10/pagina80');});
            Route::get('/Libro_5_Capitulo_10_Pagina_81', function (){return view('Capitulo_10/pagina81');});
            Route::get('/Libro_5_Capitulo_10_Pagina_82', function (){return view('Capitulo_10/pagina82');});
            Route::get('/Libro_5_Capitulo_10_Pagina_83', function (){return view('Capitulo_10/pagina83');});
            Route::get('/Libro_5_Capitulo_10_Pagina_84', function (){return view('Capitulo_10/pagina84');});
            Route::get('/Libro_5_Capitulo_10_Pagina_85', function (){return view('Capitulo_10/pagina85');});

    //Capitulo 11

            Route::get('/Libro_5_Capitulo_11_Pagina_86', function (){return view('Capitulo_11/pagina86');});
            Route::get('/Libro_5_Capitulo_11_Pagina_87', function (){return view('Capitulo_11/pagina87');});
            Route::get('/Libro_5_Capitulo_11_Pagina_88', function (){return view('Capitulo_11/pagina88');});
            Route::get('/Libro_5_Capitulo_11_Pagina_89', function (){return view('Capitulo_11/pagina89');});
            Route::get('/Libro_5_Capitulo_11_Pagina_90', function (){return view('Capitulo_11/pagina90');});
            Route::get('/Libro_5_Capitulo_11_Pagina_91', function (){return view('Capitulo_11/pagina91');});
            Route::get('/Libro_5_Capitulo_11_Pagina_92', function (){return view('Capitulo_11/pagina92');});

    //Capitulo 12

            Route::get('/Libro_5_Capitulo_12_Pagina_93', function (){return view('Capitulo_12/pagina93');});
            Route::get('/Libro_5_Capitulo_12_Pagina_94', function (){return view('Capitulo_12/pagina94');});
            Route::get('/Libro_5_Capitulo_12_Pagina_95', function (){return view('Capitulo_12/pagina95');});
            Route::get('/Libro_5_Capitulo_12_Pagina_96', function (){return view('Capitulo_12/pagina96');});
            Route::get('/Libro_5_Capitulo_12_Pagina_97', function (){return view('Capitulo_12/pagina97');});
            Route::get('/Libro_5_Capitulo_12_Pagina_98', function (){return view('Capitulo_12/pagina98');});
            Route::get('/Libro_5_Capitulo_12_Pagina_99', function (){return view('Capitulo_12/pagina99');});
            Route::get('/Libro_5_Capitulo_12_Pagina_100', function (){return view('Capitulo_12/pagina100');});

   //Capitulo 13

            Route::get('/Libro_5_Capitulo_13_Pagina_101', function (){return view('Capitulo_13/pagina101');});
            Route::get('/Libro_5_Capitulo_13_Pagina_102', function (){return view('Capitulo_13/pagina102');});
            Route::get('/Libro_5_Capitulo_13_Pagina_103', function (){return view('Capitulo_13/pagina103');});
            Route::get('/Libro_5_Capitulo_13_Pagina_104', function (){return view('Capitulo_13/pagina104');});
            Route::get('/Libro_5_Capitulo_13_Pagina_105', function (){return view('Capitulo_13/pagina105');});
            Route::get('/Libro_5_Capitulo_13_Pagina_106', function (){return view('Capitulo_13/pagina106');});
            Route::get('/Libro_5_Capitulo_13_Pagina_107', function (){return view('Capitulo_13/pagina107');});

  //Capitulo 14

            Route::get('/Libro_5_Capitulo_14_Pagina_108', function (){return view('Capitulo_14/pagina108');});
            Route::get('/Libro_5_Capitulo_14_Pagina_109', function (){return view('Capitulo_14/pagina109');});
            Route::get('/Libro_5_Capitulo_14_Pagina_110', function (){return view('Capitulo_14/pagina110');});
            Route::get('/Libro_5_Capitulo_14_Pagina_111', function (){return view('Capitulo_14/pagina111');});
            Route::get('/Libro_5_Capitulo_14_Pagina_112', function (){return view('Capitulo_14/pagina112');});
            Route::get('/Libro_5_Capitulo_14_Pagina_113', function (){return view('Capitulo_14/pagina113');});
            Route::get('/Libro_5_Capitulo_14_Pagina_114', function (){return view('Capitulo_14/pagina114');});

  //Capitulo 15

            Route::get('/Libro_5_Capitulo_15_Pagina_115', function (){return view('Capitulo_15/pagina115');});
            Route::get('/Libro_5_Capitulo_15_Pagina_116', function (){return view('Capitulo_15/pagina116');});
            Route::get('/Libro_5_Capitulo_15_Pagina_117', function (){return view('Capitulo_15/pagina117');});
            Route::get('/Libro_5_Capitulo_15_Pagina_118', function (){return view('Capitulo_15/pagina118');});
            Route::get('/Libro_5_Capitulo_15_Pagina_119', function (){return view('Capitulo_15/pagina119');});
            Route::get('/Libro_5_Capitulo_15_Pagina_120', function (){return view('Capitulo_15/pagina120');});
            Route::get('/Libro_5_Capitulo_15_Pagina_121', function (){return view('Capitulo_15/pagina121');});
            Route::get('/Libro_5_Capitulo_15_Pagina_122', function (){return view('Capitulo_15/pagina122');});

// Capitulos 8 al 15 *******************************************************************************************************
