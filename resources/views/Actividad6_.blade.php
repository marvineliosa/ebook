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
              <img src="{{asset('paginas/13_.JPG')}}" class="img-fluid" style="width:100%;">
              <br>
              <br>
              <p class="text-left"> <textarea name="mensaje" placeholder="Anota otras consecuencias negativas" rows="5" cols="50"></textarea></p>

              <button type="button" class="btn btn-block btn-default" id="Boton_Enviar_Respuestas()" onclick="almacenarInformacion()">Enviar respuestas</button>

            </div>
          </div>
        </div>

        <!-- /.box-body -->

        <div class="box-footer" align="center">
        <div class="btn-group">
          <button type="button" class="btn btn-default" onclick="anterior(12)"><i class="fa  fa-arrow-left"></i></button>
          <button type="button" class="btn btn-default" onclick="siguiente(14)"><i class="fa fa-arrow-right"></i></button>
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
