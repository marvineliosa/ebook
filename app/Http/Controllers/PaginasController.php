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

        public function PaginaIngles($pagina){
            
        }

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

    }
