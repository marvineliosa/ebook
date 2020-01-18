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



Route::get('/pag1ina/1', function (){return view('pagina');});
Route::get('/pagina/21', function (){return view('pagina22');});
Route::get('/pagina/31', function (){return view('pagina33');});
Route::get('/pagina/4', function (){return view('pagina44');});
Route::get('/pagina/5', function (){return view('pagina55');});
Route::get('/pagina/6', function (){return view('pagina66');});
Route::get('/pagina/7', function (){return view('pagina77');});
Route::get('/nahuatl', function (){return view('audio_nahuatl');});

//Paginas sin Capitulo
  Route::get('1/1/1', function (){return view('pagina1');});
  Route::get('1/1/2', function (){return view('pagina2');});
  Route::get('1/1/3', function (){return view('pagina3');});
  Route::get('1/1/4', function (){return view('pagina4');});
  Route::get('1/1/5', function (){return view('pagina5');});
  Route::get('1/1/6', function (){return view('pagina6');});
  Route::get('1/1/7', function (){return view('pagina7');});
  Route::get('1/1/8', function (){return view('pagina8');});
  Route::get('1/1/9', function (){return view('pagina9');});
  Route::get('1/1/10', function (){return view('pagina10');});
  Route::get('1/1/11', function (){return view('pagina11');});
  Route::get('1/1/12', function (){return view('pagina12');});
  Route::get('1/1/13', function (){return view('pagina13');});
  Route::get('1/1/14', function (){return view('pagina14');});
  Route::get('1/1/15', function (){return view('pagina15');});
// Fin paginas sin capitulo
Route::get('1/Leopiensoyescribo/1111', function (){return view('pagina9_Compromiso');});
//Capitulo 1
  Route::get('1/1/16', function (){return view('Capitulo_1/pagina16');});
  Route::get('1/1/17', function (){return view('Capitulo_1/pagina17');});
  Route::get('1/1/18', function (){return view('Capitulo_1/pagina18');});
  Route::get('1/1/19', function (){return view('Capitulo_1/pagina19');});
  Route::get('1/1/20', function (){return view('Capitulo_1/pagina20');});
  Route::get('1/1/21', function (){return view('Capitulo_1/pagina21');});
  Route::get('1/1/22', function (){return view('Capitulo_1/pagina22');});
  Route::get('1/1/23', function (){return view('Capitulo_1/pagina23');});

//Capitulo 2
  Route::get('1/2/24', function (){return view('Capitulo_2/pagina24');});
  Route::get('1/2/25', function (){return view('Capitulo_2/pagina25');});
  Route::get('1/2/26', function (){return view('Capitulo_2/pagina26');});
  Route::get('1/2/27', function (){return view('Capitulo_2/pagina27');});
  Route::get('1/2/28', function (){return view('Capitulo_2/pagina28');});
  Route::get('1/2/29', function (){return view('Capitulo_2/pagina29');});
  Route::get('1/2/30', function (){return view('Capitulo_2/pagina30');});

//Capitulo 3
  Route::get('1/3/31', function (){return view('Capitulo_3/pagina31');});
  Route::get('1/3/32', function (){return view('Capitulo_3/pagina32');});
  Route::get('1/3/33', function (){return view('Capitulo_3/pagina33');});
  Route::get('1/3/34', function (){return view('Capitulo_3/pagina34');});
  Route::get('1/3/35', function (){return view('Capitulo_3/pagina35');});
  Route::get('1/3/36', function (){return view('Capitulo_3/pagina36');});
  Route::get('1/3/37', function (){return view('Capitulo_3/pagina37');});

//Capitulo 4
  Route::get('1/4/38', function (){return view('Capitulo_4/pagina38');});
  Route::get('1/4/39', function (){return view('Capitulo_4/pagina39');});
  Route::get('1/4/40', function (){return view('Capitulo_4/pagina40');});
  Route::get('1/4/41', function (){return view('Capitulo_4/pagina41');});
  Route::get('1/4/42', function (){return view('Capitulo_4/pagina42');});
  Route::get('1/4/43', function (){return view('Capitulo_4/pagina43');});
  Route::get('1/4/44', function (){return view('Capitulo_4/pagina44');});

//Capitulo 5
  Route::get('1/5/45', function (){return view('Capitulo_5/pagina45');});
  Route::get('1/5/46', function (){return view('Capitulo_5/pagina46');});
  Route::get('1/5/47', function (){return view('Capitulo_5/pagina47');});
  Route::get('1/5/48', function (){return view('Capitulo_5/pagina48');});
  Route::get('1/5/49', function (){return view('Capitulo_5/pagina49');});
  Route::get('1/5/50', function (){return view('Capitulo_5/pagina50');});
  Route::get('1/5/51', function (){return view('Capitulo_5/pagina51');});

//Capitulo 6
  Route::get('1/6/52', function (){return view('Capitulo_6/pagina52');});
  Route::get('1/6/53', function (){return view('Capitulo_6/pagina53');});
  Route::get('1/6/54', function (){return view('Capitulo_6/pagina54');});
  Route::get('1/6/55', function (){return view('Capitulo_6/pagina55');});
  Route::get('1/6/56', function (){return view('Capitulo_6/pagina56');});
  Route::get('1/6/57', function (){return view('Capitulo_6/pagina57');});
  Route::get('1/6/58', function (){return view('Capitulo_6/pagina58');});

//Capitulo 7
  Route::get('1/7/59', function (){return view('Capitulo_7/pagina59');});
  Route::get('1/7/60', function (){return view('Capitulo_7/pagina60');});
  Route::get('1/7/61', function (){return view('Capitulo_7/pagina61');});
  Route::get('1/7/62', function (){return view('Capitulo_7/pagina62');});
  Route::get('1/7/63', function (){return view('Capitulo_7/pagina63');});
  Route::get('1/7/64', function (){return view('Capitulo_7/pagina64');});
  Route::get('1/7/65', function (){return view('Capitulo_7/pagina65');});
  Route::get('1/7/66', function (){return view('Capitulo_7/pagina66');});
//Fin routes 5

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
// Capitulos 16

    Route::get('/1/16/123', function (){return view('Capitulo_16/Pagina_123');});
    Route::get('/1/16/124', function (){return view('Capitulo_16/Pagina_124');});
    Route::get('/1/16/125', function (){return view('Capitulo_16/Pagina_125');});
    Route::get('/1/16/126', function (){return view('Capitulo_16/Pagina_126');});
    Route::get('/1/16/127', function (){return view('Capitulo_16/Pagina_127');});
    Route::get('/1/16/128', function (){return view('Capitulo_16/Pagina_128');});
    Route::get('/1/16/129', function (){return view('Capitulo_16/Pagina_129');});
    Route::get('/1/16/130', function (){return view('Capitulo_16/Pagina_130');});

// Capitulos 17
    Route::get('/1/17/131', function (){return view('Capitulo_17/Pagina_131');});
    Route::get('/1/17/132', function (){return view('Capitulo_17/Pagina_132');});
    Route::get('/1/17/133', function (){return view('Capitulo_17/Pagina_133');});
    Route::get('/1/17/134', function (){return view('Capitulo_17/Pagina_134');});
    Route::get('/1/17/135', function (){return view('Capitulo_17/Pagina_135');});
    Route::get('/1/17/136', function (){return view('Capitulo_17/Pagina_136');});
    Route::get('/1/17/137', function (){return view('Capitulo_17/Pagina_137');});
    Route::get('/1/17/138', function (){return view('Capitulo_17/Pagina_138');});
    Route::get('/1/17/139', function (){return view('Capitulo_17/Pagina_139');});

// Capitulos 18
    Route::get('/1/18/140', function (){return view('Capitulo_18/Pagina_140');});
    Route::get('/1/18/141', function (){return view('Capitulo_18/Pagina_141');});
    Route::get('/1/18/142', function (){return view('Capitulo_18/Pagina_142');});
    Route::get('/1/18/143', function (){return view('Capitulo_18/Pagina_143');});
    Route::get('/1/18/144', function (){return view('Capitulo_18/Pagina_144');});
    Route::get('/1/18/145', function (){return view('Capitulo_18/Pagina_145');});
    Route::get('/1/18/146', function (){return view('Capitulo_18/Pagina_146');});
    Route::get('/1/18/147', function (){return view('Capitulo_18/Pagina_147');});

// Capitulos 19
    Route::get('/1/19/148', function (){return view('Capitulo_19/Pagina_148');});
    Route::get('/1/19/149', function (){return view('Capitulo_19/Pagina_149');});
    Route::get('/1/19/150', function (){return view('Capitulo_19/Pagina_150');});
    Route::get('/1/19/151', function (){return view('Capitulo_19/Pagina_151');});
    Route::get('/1/19/152', function (){return view('Capitulo_19/Pagina_152');});
    Route::get('/1/19/153', function (){return view('Capitulo_19/Pagina_153');});
    Route::get('/1/19/154', function (){return view('Capitulo_19/Pagina_154');});

// Capitulos 20
    Route::get('/1/20/155', function (){return view('Capitulo_20/Pagina_155');});
    Route::get('/1/20/156', function (){return view('Capitulo_20/Pagina_156');});
    Route::get('/1/20/157', function (){return view('Capitulo_20/Pagina_157');});
    Route::get('/1/20/158', function (){return view('Capitulo_20/Pagina_158');});
    Route::get('/1/20/159', function (){return view('Capitulo_20/Pagina_159');});
    Route::get('/1/20/160', function (){return view('Capitulo_20/Pagina_160');});
    Route::get('/1/20/161', function (){return view('Capitulo_20/Pagina_161');});

// Capitulos 21
    Route::get('/1/21/162', function (){return view('Capitulo_21/Pagina_162');});
    Route::get('/1/21/163', function (){return view('Capitulo_21/Pagina_163');});
    Route::get('/1/21/164', function (){return view('Capitulo_21/Pagina_164');});
    Route::get('/1/21/165', function (){return view('Capitulo_21/Pagina_165');});
    Route::get('/1/21/166', function (){return view('Capitulo_21/Pagina_166');});
    Route::get('/1/21/167', function (){return view('Capitulo_21/Pagina_167');});
    Route::get('/1/21/168', function (){return view('Capitulo_21/Pagina_168');});
    Route::get('/1/21/169', function (){return view('Capitulo_21/Pagina_169');});

    //INGLES
    Route::get('/ingles/{pagina}', 'PaginasController@PaginaIngles');

?>
