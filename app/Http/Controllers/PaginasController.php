<?php
  namespace App\Http\Controllers;

    use App\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request; //indispensable para usar Request de los JSON
    use Illuminate\Support\Facades\Storage;//gestion de archivos
    use Illuminate\Support\Facades\DB;//consulta a la base de datos

    class PaginasController extends Controller
    {
        /**
         * Show the profile for the given user.
         *
         * @param  int  $id
         * @return Response
         */

// <<<<<<< HEAD
        public function PaginaIngles($pagina){
            $ruta = '';
            if($pagina < 10){
                $ruta = '../libro_ingles/000'.$pagina.'.jpg';
            }else if($pagina > 9 && $pagina < 100){
                $ruta = '../libro_ingles/00'.$pagina.'.jpg';
            }else{
                $ruta = '../libro_ingles/0'.$pagina.'.jpg';
            }

            // dd($ruta);
            return view('ingles.pagina_ingles')->with(["ruta"=>$ruta,'pagina'=>$pagina]);
        }

// =======

        /* sin capitulo  */
        public function AlmacenarPagina1(Request $request){
            date_default_timezone_set('America/Mexico_City');
            //dd($request['respuesta2']);
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $tipo = null;
            $existe = DB::table('table_resp_ac1')
                ->where('user',$usuario)
                ->get();
            if(count($existe)>0){
                $tipo = 'update';
                //dd('Update');
                DB::table('table_resp_ac1')
                    ->where('user', $usuario)
                    ->update([
                                'respuesta1' => $request['respuesta1'],
                                'respuesta2' => $request['respuesta2'],
                                'respuesta3' => $request['respuesta3'],
                                'updated_at' => date('Y-m-d H:i:s')
                            ]
                        );
            }else{
                //dd('Insert');
                $tipo = 'insert';
                DB::table('table_resp_ac1')
                    ->insert(
                        [
                            'respuesta1' => $request['respuesta1'],
                            'respuesta2' => $request['respuesta2'],
                            'respuesta3' => $request['respuesta3'],
                            'user' => $usuario,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
            }
            $data = array(
                "exito" => $tipo
              );
            echo json_encode($data);//*/

        }


        public function Pagina1(Request $request){
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $datos = DB::table('table_resp_ac1')
                ->where('user',$usuario)
                ->get();
            if(count($datos)>0){
                $datos = $datos[0];
            }
            //dd($datos);
            return view('pagina1')->with(["datos"=>$datos]);
        }
        /* sin capitulo  */

        /*capitulo1 */
        public function AlmacenarPagina16(Request $request){
            date_default_timezone_set('America/Mexico_City');
            //dd($request['respuesta2']);
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $tipo = null;
            $existe = DB::table('comentarios_negativos')
                ->where('user',$usuario)
                ->get();
            if(count($existe)>0){
                $tipo = 'update';
                //dd('Update');
                DB::table('comentarios_negativos')
                    ->where('user', $usuario)
                    ->update([
                                'unidad' => $request['unidad'],
                                'pagina' => $request['pagina'],
                                'comentario_negativo' => $request['respuesta'],
                                'updated_at' => date('Y-m-d H:i:s')
                            ]
                        );
            }else{
                //dd('Insert');
                $tipo = 'insert';
                DB::table('comentarios_negativos')
                    ->insert(
                        [
                          'unidad' => $request['unidad'],
                          'pagina' => $request['pagina'],
                          'comentario_negativo' => $request['respuesta'],
                            'user' => $usuario,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
            }
            $data = array(
                "exito" => $tipo
              );
            echo json_encode($data);//*/

        }


        public function Pagina16(Request $request){
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $datos = DB::table('comentarios_negativos')
                ->where('user',$usuario)
                ->get();
            if(count($datos)>0){
                $datos = $datos[0];
            }
            //dd($datos);
            return view('Capitulo_1/pagina16')->with(["datos"=>$datos]);
        }

        public function AlmacenarPagina17(Request $request){
            date_default_timezone_set('America/Mexico_City');
            //dd($request['respuesta2']);
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $tipo = null;
            $existe = DB::table('comentarios_positivos')
                ->where('user',$usuario)
                ->get();

            if(count($existe)>0){
                $tipo = 'update';
                //dd('Update');
                DB::table('comentarios_positivos')
                    ->where('user', $usuario)
                    ->update([
                                'unidad' => $request['unidad'],
                                'pagina' => $request['pagina'],
                                'comentario_negativo' => $request['respuesta'],
                                'updated_at' => date('Y-m-d H:i:s')
                            ]
                        );
            }else{
                $tipo = 'insert';
                DB::table('comentarios_positivos')
                    ->insert(
                        [
                          'unidad' => $request['unidad'],
                          'pagina' => $request['pagina'],
                          'comentario_negativo' => $request['respuesta'],
                            'user' => $usuario,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
            }
            $data = array(
                "exito" => $tipo
              );
              //dd($datos);
            echo json_encode($data);//*/
        }


        public function Pagina17(Request $request){
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $datos = DB::table('comentarios_positivos')
                ->where('user',$usuario)
                ->get();
            if(count($datos)>0){
                $datos = $datos[0];
            }
            //dd($datos);
            return view('Capitulo_1/pagina17')->with(["datos"=>$datos]);
        }

        public function AlmacenarPagina18(Request $request){
            date_default_timezone_set('America/Mexico_City');
            //dd($request['respuesta2']);
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $tipo = null;
            $existe = DB::table('opinion')
                ->where('user',$usuario)
                ->get();

            if(count($existe)>0){
                $tipo = 'update';
                //dd('Update');
                DB::table('opinion')
                    ->where('user', $usuario)
                    ->update([
                                'unidad' => $request['unidad'],
                                'pagina' => $request['pagina'],
                                'pre1' => $request['respuesta1'],
                                'pre2' => $request['respuesta2'],
                                'conclusion' => $request['conclusion'],
                                'updated_at' => date('Y-m-d H:i:s')
                            ]
                        );
            }else{
                $tipo = 'insert';
                DB::table('opinion')
                    ->insert(
                        [
                          'unidad' => $request['unidad'],
                          'pagina' => $request['pagina'],
                          'pre1' => $request['respuesta1'],
                          'pre2' => $request['respuesta2'],
                          'conclusion' => $request['conclusion'],
                            'user' => $usuario,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
            }
            $data = array(
                "exito" => $tipo
              );
              //dd($datos);
            echo json_encode($data);//*/
        }


        public function Pagina18(Request $request){
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $datos = DB::table('opinion')
                ->where('user',$usuario)
                ->get();
            if(count($datos)>0){
                $datos = $datos[0];
            }
            //dd($datos);
            return view('Capitulo_1/pagina18')->with(["datos"=>$datos]);
          }

          public function AlmacenarPagina19(Request $request){
              date_default_timezone_set('America/Mexico_City');
              //dd($request['respuesta2']);
              $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
              $tipo = null;
              $existe = DB::table('compromiso')
                  ->where('user',$usuario)
                  ->get();

              if(count($existe)>0){
                  $tipo = 'update';
                  //dd('Update');
                  DB::table('compromiso')
                      ->where('user', $usuario)
                      ->update([
                                  'unidad' => $request['unidad'],
                                  'pagina' => $request['pagina'],
                                  'nombre' => $request['nombre'],
                                  'compromiso_individual' => $request['individual'],
                                  'compromiso_grupal' => $request['grupal'],
                                  'tutor' => $request['tutor'],
                                  'familiar_1' => $request['familiar1'],
                                  'familiar_2' => $request['familiar2'],
                                  'familiar_3' => $request['familiar3'],
                                  'updated_at' => date('Y-m-d H:i:s')
                              ]
                          );
              }else{
                  $tipo = 'insert';
                  DB::table('compromiso')
                      ->insert(
                          [
                            'unidad' => $request['unidad'],
                            'pagina' => $request['pagina'],
                            'nombre' => $request['nombre'],
                            'compromiso_individual' => $request['individual'],
                            'compromiso_grupal' => $request['grupal'],
                            'tutor' => $request['tutor'],
                            'familiar_1' => $request['familiar1'],
                            'familiar_2' => $request['familiar2'],
                            'familiar_3' => $request['familiar3'],
                              'user' => $usuario,
                              'created_at' => date('Y-m-d H:i:s')
                          ]
                      );
              }
              $data = array(
                  "exito" => $tipo
                );
                //dd($datos);
              echo json_encode($data);//*/
          }


          public function Pagina19(Request $request){
              $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
              $datos = DB::table('compromiso')
                  ->where('user',$usuario)
                  ->get();
              if(count($datos)>0){
                  $datos = $datos[0];
              }
              //dd($datos);
              return view('Capitulo_1/pagina19')->with(["datos"=>$datos]);
            }
        /**/

        /*capitulo 2*/
        public function AlmacenarPagina23(Request $request){
            date_default_timezone_set('America/Mexico_City');
            //dd($request['respuesta2']);
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $tipo = null;
            $existe = DB::table('comentarios_negativos')
                ->where('user',$usuario)
                ->get();
            if(count($existe)>0){
                $tipo = 'update';
                //dd('Update');
                DB::table('comentarios_negativos')
                    ->where('user', $usuario)
                    ->update([
                                'unidad' => $request['unidad'],
                                'pagina' => $request['pagina'],
                                'comentario_negativo' => $request['respuesta'],
                                'updated_at' => date('Y-m-d H:i:s')
                            ]
                        );
            }else{
                //dd('Insert');
                $tipo = 'insert';
                DB::table('comentarios_negativos')
                    ->insert(
                        [
                          'unidad' => $request['unidad'],
                          'pagina' => $request['pagina'],
                          'comentario_negativo' => $request['respuesta'],
                            'user' => $usuario,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
            }
            $data = array(
                "exito" => $tipo
              );
            echo json_encode($data);//*/

        }


        public function Pagina23(Request $request){
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $datos = DB::table('comentarios_negativos')
                ->where('user',$usuario)
                ->get();
            if(count($datos)>0){
                $datos = $datos[0];
            }
            //dd($datos);
            return view('Capitulo_2/pagina23')->with(["datos"=>$datos]);
        }

        public function AlmacenarPagina24(Request $request){
            date_default_timezone_set('America/Mexico_City');
            //dd($request['respuesta2']);
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $tipo = null;
            $existe = DB::table('comentarios_positivos')
                ->where('user',$usuario)
                ->get();

            if(count($existe)>0){
                $tipo = 'update';
                //dd('Update');
                DB::table('comentarios_positivos')
                    ->where('user', $usuario)
                    ->update([
                                'unidad' => $request['unidad'],
                                'pagina' => $request['pagina'],
                                'comentario_negativo' => $request['respuesta'],
                                'updated_at' => date('Y-m-d H:i:s')
                            ]
                        );
            }else{
                $tipo = 'insert';
                DB::table('comentarios_positivos')
                    ->insert(
                        [
                          'unidad' => $request['unidad'],
                          'pagina' => $request['pagina'],
                          'comentario_negativo' => $request['respuesta'],
                            'user' => $usuario,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
            }
            $data = array(
                "exito" => $tipo
              );
              //dd($datos);
            echo json_encode($data);//*/
        }


        public function Pagina24(Request $request){
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $datos = DB::table('comentarios_positivos')
                ->where('user',$usuario)
                ->get();
            if(count($datos)>0){
                $datos = $datos[0];
            }
            //dd($datos);
            return view('Capitulo_2/pagina24')->with(["datos"=>$datos]);
        }

        public function AlmacenarPagina25(Request $request){
            date_default_timezone_set('America/Mexico_City');
            //dd($request['respuesta2']);
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $tipo = null;
            $existe = DB::table('opinion')
                ->where('user',$usuario)
                ->get();

            if(count($existe)>0){
                $tipo = 'update';
                //dd('Update');
                DB::table('opinion')
                    ->where('user', $usuario)
                    ->update([
                                'unidad' => $request['unidad'],
                                'pagina' => $request['pagina'],
                                'pre1' => $request['respuesta1'],
                                'pre2' => $request['respuesta2'],
                                'conclusion' => $request['conclusion'],
                                'updated_at' => date('Y-m-d H:i:s')
                            ]
                        );
            }else{
                $tipo = 'insert';
                DB::table('opinion')
                    ->insert(
                        [
                          'unidad' => $request['unidad'],
                          'pagina' => $request['pagina'],
                          'pre1' => $request['respuesta1'],
                          'pre2' => $request['respuesta2'],
                          'conclusion' => $request['conclusion'],
                            'user' => $usuario,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
            }
            $data = array(
                "exito" => $tipo
              );
              //dd($datos);
            echo json_encode($data);//*/
        }


        public function Pagina25(Request $request){
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $datos = DB::table('opinion')
                ->where('user',$usuario)
                ->get();
            if(count($datos)>0){
                $datos = $datos[0];
            }
            //dd($datos);
            return view('Capitulo_2/pagina25')->with(["datos"=>$datos]);
          }

          public function AlmacenarPagina26(Request $request){
              date_default_timezone_set('America/Mexico_City');
              //dd($request['respuesta2']);
              $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
              $tipo = null;
              $existe = DB::table('compromiso')
                  ->where('user',$usuario)
                  ->get();

              if(count($existe)>0){
                  $tipo = 'update';
                  //dd('Update');
                  DB::table('compromiso')
                      ->where('user', $usuario)
                      ->update([
                                  'unidad' => $request['unidad'],
                                  'pagina' => $request['pagina'],
                                  'nombre' => $request['nombre'],
                                  'compromiso_individual' => $request['individual'],
                                  'compromiso_grupal' => $request['grupal'],
                                  'tutor' => $request['tutor'],
                                  'familiar_1' => $request['familiar1'],
                                  'familiar_2' => $request['familiar2'],
                                  'familiar_3' => $request['familiar3'],
                                  'updated_at' => date('Y-m-d H:i:s')
                              ]
                          );
              }else{
                  $tipo = 'insert';
                  DB::table('compromiso')
                      ->insert(
                          [
                            'unidad' => $request['unidad'],
                            'pagina' => $request['pagina'],
                            'nombre' => $request['nombre'],
                            'compromiso_individual' => $request['individual'],
                            'compromiso_grupal' => $request['grupal'],
                            'tutor' => $request['tutor'],
                            'familiar_1' => $request['familiar1'],
                            'familiar_2' => $request['familiar2'],
                            'familiar_3' => $request['familiar3'],
                              'user' => $usuario,
                              'created_at' => date('Y-m-d H:i:s')
                          ]
                      );
              }
              $data = array(
                  "exito" => $tipo
                );
                //dd($datos);
              echo json_encode($data);//*/
          }


          public function Pagina26(Request $request){
              $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
              $datos = DB::table('compromiso')
                  ->where('user',$usuario)
                  ->get();
              if(count($datos)>0){
                  $datos = $datos[0];
              }
              //dd($datos);
              return view('Capitulo_2/pagina26')->with(["datos"=>$datos]);
            }
        /**/

// >>>>>>> cb67c2d240b545be9200f46bc13a1ee9dee7d38f
        public function PaginaComentarios(Request $request){
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $datos = DB::table('table_resp_encuesta')
                ->where('user',$usuario)
                ->get();
            $select = array(
                        'edad' => null,
                        'sexo' => null,
                        'grado' => null,
                        'estado' => null
                    );
            if(count($datos)>0){
                $datos = $datos[0];
                $select['edad']=$datos->edad;
                $select['sexo']=$datos->sexo;
                $select['grado']=$datos->grado;
                $select['estado']=$datos->estado;
            }

            //dd($datos);
            //dd($select);
            return view('pagina12_Comentario_Libro_1')->with(["datos"=>$datos,'select'=>$select]);
        }

        public function AlmacenarPaginaComentarios(Request $request){
            date_default_timezone_set('America/Mexico_City');
            //dd($request);
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $tipo = null;
            $existe = DB::table('table_resp_encuesta')
                ->where('user',$usuario)
                ->get();

            if(count($existe)>0){
                $tipo = 'update';
                //dd('Update');
                DB::table('table_resp_encuesta')
                    ->where('user', $usuario)
                    ->update(
                            [
                                'edad' => $request['edad'],
                                'sexo' => $request['sexo'],
                                'grado' => $request['grado'],
                                'escuela' => $request['escuela'],
                                'estado' => $request['estado'],
                                'descripcion' => $request['cometarios'],
                                'updated_at' => date('Y-m-d H:i:s')
                            ]
                        );
            }else{
                //dd('Insert');
                $tipo = 'insert';
                DB::table('table_resp_encuesta')
                    ->insert(
                        [
                            'edad' => $request['edad'],
                            'sexo' => $request['sexo'],
                            'grado' => $request['grado'],
                            'escuela' => $request['escuela'],
                            'estado' => $request['estado'],
                            'descripcion' => $request['cometarios'],
                            'user' => $usuario,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
            }
            $data = array(
                "exito" => $tipo
              );
            echo json_encode($data);//*/

        }

        public function Pagina9(Request $request){
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $datos = DB::table('table_resp_compromiso')
                ->where('user',$usuario)
                ->get();
            if(count($datos)>0){
                $datos = $datos[0];
            }
            //dd($datos);
            return view('pagina9_Compromiso')->with(["datos"=>$datos]);
        }

        public function AlmacenarPagina9(Request $request){
            date_default_timezone_set('America/Mexico_City');
            //dd($request);
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $tipo = null;
            $existe = DB::table('table_resp_compromiso')
                ->where('user',$usuario)
                ->get();
            if(count($existe)>0){
                $tipo = 'update';
                //dd('Update');
                DB::table('table_resp_compromiso')
                    ->where('user', $usuario)
                    ->update(
                            [
                                'nombre' => $request['nombre'],
                                'compromiso' => $request['compromiso'],
                                'compromisogrupal' => $request['compromiso_grupal'],
                                'ayuda1' => $request['papa'],
                                'ayuda2' => $request['mama'],
                                'familiar1' => $request['familiar1'],
                                'familiar2' => $request['familiar2'],
                                'familiar3' => $request['familiar3'],
                                'updated_at' => date('Y-m-d H:i:s')
                            ]
                        );
            }else{
                //dd('Insert');
                $tipo = 'insert';
                DB::table('table_resp_compromiso')
                    ->insert(
                        [
                            'nombre' => $request['nombre'],
                            'compromiso' => $request['compromiso'],
                            'compromisogrupal' => $request['compromiso_grupal'],
                            'ayuda1' => $request['papa'],
                            'ayuda2' => $request['mama'],
                            'familiar1' => $request['familiar1'],
                            'familiar2' => $request['familiar2'],
                            'familiar3' => $request['familiar3'],
                            'user' => $usuario,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
            }
            $data = array(
                "exito" => $tipo
              );
            echo json_encode($data);//*/
        }

        public function Pagina8(Request $request){
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $datos = DB::table('table_resp_ac1')
                ->where('user',$usuario)
                ->get();
            if(count($datos)>0){
                $datos = $datos[0];
            }
            //dd($datos);
            return view('pagina8_Actividad')->with(["datos"=>$datos]);
        }

        public function AlmacenarPagina8(Request $request){
            date_default_timezone_set('America/Mexico_City');
            //dd($request['respuesta2']);
            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
            $tipo = null;
            $existe = DB::table('table_resp_ac1')
                ->where('user',$usuario)
                ->get();
            if(count($existe)>0){
                $tipo = 'update';
                //dd('Update');
                DB::table('table_resp_ac1')
                    ->where('user', $usuario)
                    ->update([
                                'respuesta1' => $request['respuesta1'],
                                'respuesta2' => $request['respuesta2'],
                                'respuesta3' => $request['respuesta3'],
                                'updated_at' => date('Y-m-d H:i:s')
                            ]
                        );
            }else{
                //dd('Insert');
                $tipo = 'insert';
                DB::table('table_resp_ac1')
                    ->insert(
                        [
                            'respuesta1' => $request['respuesta1'],
                            'respuesta2' => $request['respuesta2'],
                            'respuesta3' => $request['respuesta3'],
                            'user' => $usuario,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
            }
            $data = array(
                "exito" => $tipo
              );
            echo json_encode($data);//*/

        }
//*************************************************************************************************************

//Capitulo 8

        public function Pagina66(Request $request)
            {
                $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');

                $datos = DB::table('table_resp_ac1')
                            ->where('user',$usuario)
                            ->get();

                if(count($datos)>0)
                    {
                        $datos = $datos[0];
                    }

                return view('Capitulo_8/pagina66')->with(["datos"=>$datos]);
            }

        public function AlmacenarPagina66(Request $request)
            {
                date_default_timezone_set('America/Mexico_City');

                $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
                $tipo = null;

                $existe = DB::table('table_resp_ac1')
                            ->where('user',$usuario)
                            ->get();

                if(count($existe)>0)
                    {
                        $tipo = 'update';

                        DB::table('table_resp_ac1')
                            ->where('user', $usuario)
                            ->update([
                                        'respuesta1' => $request['respuesta1'],
                                        'respuesta2' => $request['respuesta2'],
                                        'respuesta3' => $request['respuesta3'],
                                        'updated_at' => date('Y-m-d H:i:s')
                                     ]);
                    }
                else
                    {
                        $tipo = 'insert';
                        DB::table('table_resp_ac1')
                            ->insert(
                                        [
                                            'respuesta1' => $request['respuesta1'],
                                            'respuesta2' => $request['respuesta2'],
                                            'respuesta3' => $request['respuesta3'],
                                            'user' => $usuario,
                                            'created_at' => date('Y-m-d H:i:s')
                                        ]
                                    );
                    }
                $data = array
                              (
                                  "exito" => $tipo
                              );

                echo json_encode($data);//*/

            }

                      public function pagina67(Request $request)
                        {
                            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');

                            $datos = DB::table('table_resp_ac1')
                                        ->where('user',$usuario)
                                        ->get();

                            if(count($datos)>0)
                                {
                                    $datos = $datos[0];
                                }

                            return view('Capitulo_8/pagina67')->with(["datos"=>$datos]);
                        }

                      public function Almacenarpagina67(Request $request)
                        {
                            date_default_timezone_set('America/Mexico_City');

                            $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
                            $tipo = null;

                            $existe = DB::table('table_resp_ac1')
                                        ->where('user',$usuario)
                                        ->get();

                            if(count($existe)>0)
                                {
                                    $tipo = 'update';

                                    DB::table('table_resp_ac1')
                                        ->where('user', $usuario)
                                        ->update([
                                                    'respuesta1' => $request['respuesta1'],
                                                    'respuesta2' => $request['respuesta2'],
                                                    'respuesta3' => $request['respuesta3'],
                                                    'updated_at' => date('Y-m-d H:i:s')
                                                 ]);
                                }
                            else
                                {
                                    $tipo = 'insert';
                                    DB::table('table_resp_ac1')
                                        ->insert(
                                                    [
                                                        'respuesta1' => $request['respuesta1'],
                                                        'respuesta2' => $request['respuesta2'],
                                                        'respuesta3' => $request['respuesta3'],
                                                        'user' => $usuario,
                                                        'created_at' => date('Y-m-d H:i:s')
                                                    ]
                                                );
                                }
                            $data = array
                                          (
                                              "exito" => $tipo
                                          );

                            echo json_encode($data);//*/

                        }

        //********************************************************************************

                public function Obtener_Comentarios($capitulo,$pagina)
                    {
                      $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');

                      if( $pagina == 68  || $pagina == 77  || $pagina == 84  || $pagina == 91  || $pagina == 99  || $pagina == 106  || $pagina == 113  || $pagina == 121 )
                          {
                               //manejo de sesion
                              $datos = DB::table('opinion')
                                          ->where('user',$usuario)
                                          ->where('unidad',$capitulo)
                                          ->where('pagina',$pagina)//*/
                                          ->get();
                              if(count($datos)>0) { $datos = $datos[0];}
                              $json = array ( "info" => $datos,"capitulo" => $capitulo,"pagina" => $pagina);
                              return view("plantilla_Opinion")->with(["datos"=>$json]);
                          }
                      else
                          {
                              if( $pagina == 67  || $pagina == 76  || $pagina == 83  ||$pagina == 90  || $pagina == 98  || $pagina == 105  ||$pagina == 112  || $pagina == 120 )
                                  {
                                    $datos = DB::table('comentarios_positivos')
                                                ->where('user',$usuario)
                                                ->where('unidad',$capitulo)
                                                ->where('pagina',$pagina)//*/
                                                ->get();
                                  }
                                elseif ($pagina == 69  || $pagina == 78  || $pagina == 85  || $pagina == 92  || $pagina == 100  || $pagina == 107  || $pagina == 114  || $pagina == 122 )
                                  {
                                    $datos = DB::table('compromiso')
                                                ->where('user',$usuario)
                                                ->where('unidad',$capitulo)
                                                ->where('pagina',$pagina)//*/
                                                ->get();
                                    if(count($datos)>0) { $datos = $datos[0];}
                                    $json = array ( "info" => $datos,"capitulo" => $capitulo,"pagina" => $pagina);
                                    return view("plantilla_Compromiso")->with(["datos"=>$json]);
                                  }
                              else
                                {
                                  $datos = DB::table('comentarios_negativos')
                                              ->where('user',$usuario)
                                              ->where('unidad',$capitulo)
                                              ->where('pagina',$pagina)//*/
                                              ->get();
                                }

                              if(count($datos)>0) { $datos = $datos[0];}
                              $json = array ( "info" => $datos,"capitulo" => $capitulo,"pagina" => $pagina);

                              return view("plantilla_Comentario")->with(["datos"=>$json]);
                          }
                    }

                    public function Almacenar_Comentario_neg(Request $request)
                          {
                              date_default_timezone_set('America/Mexico_City');

                              $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
                              $tipo = null;
                              $existe = DB::table('comentarios_negativos')
                                          ->where('user',$usuario)
                                          ->where('unidad',$request['Capitulo'])
                                          ->where('pagina',$request['pagina_actual'])
                                          ->get();

                              if(count($existe)>0)
                                {
                                    $tipo = 'update';
                                    DB::table('comentarios_negativos')
                                              ->where('user', $usuario)
                                              ->where('unidad',$request['Capitulo'])
                                              ->where('pagina',$request['pagina_actual'])
                                              ->update(
                                                        [
                                                            'user' => $usuario,
                                                            'unidad' => $request['Capitulo'],
                                                            'pagina' => $request['pagina_actual'],
                                                            'comentario_negativo' => $request['comentario'],
                                                            'updated_at' => date('Y-m-d H:i:s')
                                                        ]);
                                }
                              else
                                {
                                    $tipo = 'insert';
                                    DB::table('comentarios_negativos')
                                              ->insert(
                                                        [
                                                            'user' => $usuario,
                                                            'unidad' => $request['Capitulo'],
                                                            'pagina' => $request['pagina_actual'],
                                                            'comentario_negativo' => $request['comentario'],
                                                            'created_at' => date('Y-m-d H:i:s')
                                                        ]);
                                }
                              $data = array("exito" => $tipo);
                              echo json_encode($data);//*/

                          }
                          public function Almacenar_Comentario_pos(Request $request)
                                {
                                    date_default_timezone_set('America/Mexico_City');

                                    $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
                                    $tipo = null;
                                    $existe = DB::table('comentarios_positivos')
                                                ->where('user',$usuario)
                                                ->where('unidad',$request['Capitulo'])
                                                ->where('pagina',$request['pagina_actual'])
                                                ->get();

                                    if(count($existe)>0)
                                      {
                                          $tipo = 'update';
                                          DB::table('comentarios_positivos')
                                                    ->where('user', $usuario)
                                                    ->where('unidad',$request['Capitulo'])
                                                    ->where('pagina',$request['pagina_actual'])
                                                    ->update(
                                                              [
                                                                  'user' => $usuario,
                                                                  'unidad' => $request['Capitulo'],
                                                                  'pagina' => $request['pagina_actual'],
                                                                  'comentario_negativo' => $request['comentario'],
                                                                  'updated_at' => date('Y-m-d H:i:s')
                                                              ]);
                                      }
                                    else
                                      {
                                          $tipo = 'insert';
                                          DB::table('comentarios_positivos')
                                                    ->insert(
                                                              [
                                                                  'user' => $usuario,
                                                                  'unidad' => $request['Capitulo'],
                                                                  'pagina' => $request['pagina_actual'],
                                                                  'comentario_negativo' => $request['comentario'],
                                                                  'created_at' => date('Y-m-d H:i:s')
                                                              ]);
                                      }
                                    $data = array("exito" => $tipo);
                                    echo json_encode($data);//*/

                                }
                                public function Almacenar_Opinion(Request $request)
                                      {
                                          date_default_timezone_set('America/Mexico_City');

                                          $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
                                          $tipo = null;
                                          $existe = DB::table('opinion')
                                                      ->where('user',$usuario)
                                                      ->where('unidad',$request['Capitulo'])
                                                      ->where('pagina',$request['pagina_actual'])
                                                      ->get();

                                          if(count($existe)>0)
                                            {
                                                $tipo = 'update';
                                                DB::table('opinion')
                                                          ->where('user', $usuario)
                                                          ->where('unidad',$request['Capitulo'])
                                                          ->where('pagina',$request['pagina_actual'])
                                                          ->update(
                                                                    [
                                                                        'user' => $usuario,
                                                                        'unidad' => $request['Capitulo'],
                                                                        'pagina' => $request['pagina_actual'],
                                                                        'pre1' => $request['pre1'],
                                                                        'pre2' => $request['pre2'],
                                                                        'conclusion' => $request['conclusion'],
                                                                        'updated_at' => date('Y-m-d H:i:s')
                                                                    ]);
                                            }
                                          else
                                            {
                                                $tipo = 'insert';
                                                DB::table('opinion')
                                                          ->insert(
                                                                    [
                                                                        'user' => $usuario,
                                                                        'unidad' => $request['Capitulo'],
                                                                        'pagina' => $request['pagina_actual'],
                                                                        'pre1' => $request['pre1'],
                                                                        'pre2' => $request['pre2'],
                                                                        'conclusion' => $request['conclusion'],
                                                                        'created_at' => date('Y-m-d H:i:s')
                                                                    ]);
                                            }
                                          $data = array("exito" => $tipo);
                                          echo json_encode($data);//*/

                                      }

                                      public function Respuestas_Compromiso(Request $request)
                                            {
                                                date_default_timezone_set('America/Mexico_City');

                                                $usuario = (isset(\Session::get('usuario')[0])?\Session::get('usuario')[0]:'Usuario');
                                                $tipo = null;
                                                $existe = DB::table('compromiso')
                                                            ->where('user',$usuario)
                                                            ->where('unidad',$request['Capitulo'])
                                                            ->where('pagina',$request['pagina_actual'])
                                                            ->get();

                                                if(count($existe)>0)
                                                  {
                                                      $tipo = 'update';
                                                      DB::table('compromiso')
                                                                ->where('user', $usuario)
                                                                ->where('unidad',$request['Capitulo'])
                                                                ->where('pagina',$request['pagina_actual'])
                                                                ->update(
                                                                          [
                                                                              'user' => $usuario,
                                                                              'unidad' => $request['Capitulo'],
                                                                              'pagina' => $request['pagina_actual'],

                                                                              'nombre' => $request['nombre'],
                                                                              'compromiso_individual' => $request['compromiso_individual'],
                                                                              'compromiso_grupal' => $request['compromiso_grupal'],
                                                                              'tutor' => $request['tutor'],
                                                                              'familiar_1' => $request['familiar_1'],
                                                                              'familiar_2' => $request['familiar_2'],
                                                                              'familiar_3' => $request['familiar_3'],
                                                                              'updated_at' => date('Y-m-d H:i:s')
                                                                          ]);
                                                  }
                                                else
                                                  {
                                                      $tipo = 'insert';
                                                      DB::table('compromiso')
                                                                ->insert(
                                                                          [
                                                                            'user' => $usuario,
                                                                            'unidad' => $request['Capitulo'],
                                                                            'pagina' => $request['pagina_actual'],

                                                                            'nombre' => $request['nombre'],
                                                                            'compromiso_individual' => $request['compromiso_individual'],
                                                                            'compromiso_grupal' => $request['compromiso_grupal'],
                                                                            'tutor' => $request['tutor'],
                                                                            'familiar_1' => $request['familiar_1'],
                                                                            'familiar_2' => $request['familiar_2'],
                                                                            'familiar_3' => $request['familiar_3'],
                                                                            'created_at' => date('Y-m-d H:i:s')
                                                                          ]);
                                                  }
                                                $data = array("exito" => $tipo);
                                                echo json_encode($data);//*/

                                            }
        //********************************************************************************

    }
