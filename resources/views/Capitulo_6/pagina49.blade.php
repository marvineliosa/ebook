@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    "La La reutilización de los desechos sólidos en casa"
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
      <h3 class="box-title"><audio id="audio" controls>
          <source type="audio/wav" src="{{asset('audio/alumnos/Pag_49.mp3')}}">
        </audio></h3>

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
        <img src="{{asset('paginas/Capitulo6/0049.JPG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('paginas/Capitulo6/0049.JPG')}}'" style="max-width: 50%" > <!--LINEA TRABJA CON JETZOOM-->
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-default" onclick="anterior(48)"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" onclick="siguiente(50)"><i class="fa fa-arrow-right"></i></button>
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
          <img src="{{asset('padres/Capitulo6/2017PUE_PRIM_FAM_5_54.jpg')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Capitulo6/2017PUE_PRIM_FAM_5_54.jpg')}}'"  style="max-width: 100%">
          <img src="{{asset('padres/Capitulo6/2017PUE_PRIM_FAM_5_55.jpg')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Capitulo6/2017PUE_PRIM_FAM_5_55.jpg')}}'"  style="max-width: 100%">
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
