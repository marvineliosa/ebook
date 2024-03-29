@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    "Compromiso ante la familia"
    <!-- <small>Algún texto pequeño</small> -->
  </h1>
  <ol class="breadcrumb">
    <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li> -->
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
      <div class="box-header with-border" align="center">
      <button type="submit" class="btn btn-success" onclick="sugerencia()">Sugerencias para papás</button>
      <br>
      <br>
    <!--  <h3 class="box-title"><audio id="audio" controls>
          <source type="audio/wav" src="{{asset('audio/Parte 0.wav')}}">
        </audio></h3>-->

      <!-- <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div> -->
    </div>
    <div class="box-body">
      <div align='center'>
        <div class="login-box">
          <img src="{{asset('paginas/Capitulo2/recortes/2017PUE_PRIM_28.JPG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('paginas/Capitulo2/recortes/2017PUE_PRIM_28.JPG')}}'" style="max-width: 100%" >
          <br>
          <br>
          <p class="text-left"><textarea class="form-control" name="mensaje" id="respuesta" placeholder="Anota otras consecuencias positivas" rows="5" cols="50"> {{((isset($datos->comentario_negativo))?$datos->comentario_negativo:'')}}</textarea></p>
          <button type="button" class="btn btn-block btn-default" id="Boton_Enviar_Respuestas()" onclick="almacenarInformacion()">Enviar respuestas</button>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-default" onclick="anterior(23)"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" onclick="siguiente(25)"><i class="fa fa-arrow-right"></i></button>
      </div>
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="ModalPadres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <h1 class="modal-title" id="exampleModalLabel">Familiares</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div align='center'>
          <audio id="audio" controls=""><source type="audio/wav" src="http://127.0.0.1:8000/audio/Capitulo2/familiares/Pag 31.mp3"></audio>
          <img src="{{asset('padres/Capitulo2/2017PUE_PRIM_FAM_5_31.jpg')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Capitulo2/2017PUE_PRIM_FAM_5_31.jpg')}}'"  style="max-width: 100%">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
  <script type="text/javascript">
    function siguiente(pagina)
       {
        location.href = pagina;
         //alert("adelante");
       }
     function anterior(pagina)
        {
          location.href = pagina;
          //alert("atras");
        }

        function almacenarInformacion(){
          var respuesta = $('#respuesta').val();
          var unidad = 2;
          var pagina = 24;

          //$("#div_cuadro").hide();
          var success;
          var url = "/almacenar/pagina24";
          var dataForm = new FormData();
          dataForm.append('respuesta',respuesta);
          dataForm.append('unidad',unidad);
          dataForm.append('pagina',pagina);
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
  <!-- script zoom con jetzoom-->
  <script type="text/javascript">
   JetZoom.quickStart();
  </script>
@endsection
