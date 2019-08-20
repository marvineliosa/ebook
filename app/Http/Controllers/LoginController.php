<?php
  namespace App\Http\Controllers;

    use App\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request; //indispensable para usar Request de los JSON
    use Illuminate\Support\Facades\Storage;//gestion de archivos
    use Illuminate\Support\Facades\DB;//consulta a la base de datos

    class LoginController extends Controller
    {
        /**
         * Show the profile for the given user.
         *
         * @param  int  $id
         * @return Response
         */

        public function Login(Request $request){
            //dd($request['usuario']);
            \Session::forget('usuario');

            \Session::push('usuario',$request['usuario']);
            $data = array(
                "usuario"=>\Session::get('usuario')[0],
                "exito" => true
              );
            echo json_encode($data);//*/
        }

        public function Logout(){
            \Session::forget('usuario');
            return redirect('/');
        }
    }