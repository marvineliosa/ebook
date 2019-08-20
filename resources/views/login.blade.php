<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>eBooks</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Inicio de sesión</p>

      <div a method="post">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Correo electrónico" id="LoginMail">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Contraseña" id="LoginPassword">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row" align="center">
          <!-- <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <!-- <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div> -->
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="ingresar()">Iniciar sesión</button>
          </div>
        </div>
      </div>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
          Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
          Google+</a>
      </div> -->
      <!-- /.social-auth-links -->

      <a href="#">Recuperar contraseña</a><br>
      <a href="#" class="text-center">Registrarse</a>

    </div>
    <!-- /.login-box-body -->
  </div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

  function ingresar(){
    var usuario = $("#LoginMail").val();
    var password = $("#LoginPassword").val();

    var success;
    var url = "/login/validar";
    var dataForm = new FormData();
    dataForm.append('usuario',usuario);
    dataForm.append('password',password);
    //console.log(usuario);
    //console.log(pass);
    $.ajax({
      url :url,
      data : dataForm,
      contentType:false,
      processData:false,
      headers:{
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
      type: 'POST',
      dataType : 'json',
      beforeSend: function (){
        $("#modalCarga").modal();
      },
      success : function(json){

        location.href='/pagina/1';


      },
      error : function(xhr, status) {
        $("#textoModalMensaje").text('Existió un problema con la operación');
        $("#modalMensaje").modal();
      },
      complete : function(xhr, status){
         $("#modalCarga").modal('hide');
      }
    });//*/
    //location.href='/pagina/1';
  }
</script>
</body>
</html>
