@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    "En todo está el agua" "La huella hídrica"
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
      <!--<button type="submit" class="btn btn-success" onclick="sugerencia()">Sugerencias para papás</button><br><br><audio id="audio2" controls=""><source type="audio/wav" src="http://127.0.0.1:8000/audio/Padres/Capitulo_8/Pag 66.mp3"></audio><br>-->
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
          <img src="{{asset('paginas/Capitulo_7/recortes/2017PUE_PRIM_65.JPG')}}" class="img-fluid jetzoom" data-jetzoom ="zoomImage:'{{asset('paginas/Capitulo_7/recortes/2017PUE_PRIM_65.JPG')}}'"  style="max-width: 100%">
          <br>
          <br>
          <p class="text-left"> Menciona algo que hayas aprendido sobre <code class="text-purple "><strong>En todo está el agua. La huella hídrica</strong></code>y explicalo con tus propias palabras:</p>
          <input type="text text-center" class="form-control" align="center" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu respuesta" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
          <br>
          <p class="text-left"> ¿Cómo te sientes con el valor que aprendiste hoy?</p>
          <input type="text text-center" class="form-control" align="center" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu respuesta" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
          <br>
          <p class="text-left"> Explica por qué te sientes así:</p>
          <input type="text text-center" class="form-control" align="center" id="Entrada_Que_aprendi_del_Cuento" placeholder="Escribe aqui tu respuesta" value="{{((isset($datos->respuesta1))?$datos->respuesta1:'')}}">
          <br>
          <button type="button" class="btn btn-block btn-default" id="Boton_Enviar_Respuestas()" onclick="almacenarInformacion()">Enviar respuestas</button>

        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-default" onclick="anterior(64)"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" onclick="siguiente(66)"><i class="fa fa-arrow-right"></i></button>
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
          <img src="{{asset('padres/Padres_0.PNG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Padres_0.PNG')}}'"  style="max-width: 100%">
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
  </script>
  <!-- script zoom con jetzoom-->
  <script type="text/javascript">
   JetZoom.quickStart();
  </script>
@endsection
