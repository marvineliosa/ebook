@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

  <!-- Content Header (Page header) -->

  <section class="content-header" align="center">
        <!-- <h1>Nombre de la página<small>Algún texto pequeño</small></h1> -->
        <h1>Consecuencias negativas</h1>
        <ol class="breadcrumb"><!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><li><a href="#">Examples</a></li><li class="active">Blank page</li> --> </ol>
  </section>

  <!-- Main content -->

  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <!-- <h3 class="box-title">Para aprender</h3> -->

        <!-- <div class="box-tools pull-right">

        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button></div> -->
        </div>
        <div class="box-body">
          <div align='center'>
            <!-- <img src="{{asset('paginas/p7.PNG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('paginas/p7L.PNG')}}'" > -->
            <div class="login-box ">
              <img src="{{asset('paginas/8_.JPG')}}" class="img-fluid" style="width:100%;">
              <br>
              <br>
              <p class="text-left"><code class="text-blue "><strong>Yo</strong></code></p>
              <input type="text text-center" class="form-control" align="center" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu respuesta" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
              <p class="text-left"> me comprometo conmigo mismo a:</p>
              <input type="text text-center" class="form-control" align="center" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu respuesta" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
              <p class="text-left">Y con mi grupo a:</p>
              <input type="text text-center" class="form-control" align="center" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu respuesta" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
              <br>
              <br>
              <input type="text text-center" size="20" align="center" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu firma" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
              <p class="text-center"><code class="text-blue "><strong>Firma del alumno</strong></code></p>
              <p class="text-center">Me acabo de comprometer</p>
              <p class="text-center">¿Me ayudas a compartir mi compromiso?</p>
              <p class="text-left"><code class="text-blue "><strong>Yo</strong></code></p>
              <input type="text text-center" class="form-control" align="center" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu respuesta" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
              <p class="text-center">me comprometo a apoyar el compromiso de mi hijo y a reunirme con mis familiares para platicar respecto a este tema.</p>
              <br>
              <input type="text text-center" size="20" align="left" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu firma" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
              <input type="text text-center" size="20" align="right" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu firma" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
              <p class="text-center"><code class="text-blue "><strong>Firma de los padres o tutores</strong></code></p>
              <br>
              <p class="text-center">Otros familiares que aceptan sumarse a este compromiso</p>
              <br>
              <input type="text text-center" size="20" align="left" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu firma" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
              <input type="text text-center" size="20" align="center" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu firma" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
              <input type="text text-center" size="20" align="right" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu firma" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
              <p class="text-center"><code class="text-blue "><strong>Firma de otros familiares</strong></code></p>
              <br>
              <img src="{{asset('paginas/8_1.JPG')}}" class="img-fluid" style="width:100%;">
              <button type="button" class="btn btn-block btn-default" id="Boton_Enviar_Respuestas()" onclick="almacenarInformacion()">Enviar respuestas</button>

            </div>
          </div>
        </div>

        <!-- /.box-body -->

        <div class="box-footer" align="center">
        <div class="btn-group">
          <button type="button" class="btn btn-default" onclick="anterior(7)"><i class="fa  fa-arrow-left"></i></button>
          <button type="button" class="btn btn-default" onclick="siguiente(9)"><i class="fa fa-arrow-right"></i></button>
        </div>
        </div>

        <!-- /.box-footer-->

    </div>

    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection

@section('script')
  <script type="text/javascript">
    function siguiente(pagina){
      location.href = '/pagina/'+pagina;
     //alert("adelante");
    }
    function anterior(pagina){
        location.href = '/pagina/'+pagina;
        //alert("atras");
      }

    function almacenarInformacion(){
      var respuesta1 = $('#Entrada_Que_aprendi_del_Cuento').val();
      var respuesta2 = $('#Entrada_Valores_hoy').val();
      var respuesta3 = $('#Entrada_Como_me_siento').val();
      //$("#div_cuadro").hide();
      var success;
      var url = "/almacenar/pagina-8";
      var dataForm = new FormData();
      dataForm.append('respuesta1',respuesta1);
      dataForm.append('respuesta2',respuesta2);
      dataForm.append('respuesta3',respuesta3);
      //lamando al metodo ajax

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



        },
        error : function(xhr, status) {
          $("#textoModalMensaje").text('Existió un problema con la operación');
          $("#modalMensaje").modal();
        },
        complete : function(xhr, status){
           $("#modalCarga").modal('hide');
        }
      });//*/
    }

  </script>
@endsection
