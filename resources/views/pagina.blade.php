@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    "El Recado Secreto 2"
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
      <h3 class="box-title"><audio id="audio" controls>
          <source type="audio/wav" src="{{asset('audio/Parte 0.wav')}}">
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
        <img src="{{asset('paginas/p1.PNG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('paginas/p1L.PNG')}}'" > <!--LINEA TRABJA CON JETZOOM-->
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-default" disabled='true'><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" onclick="siguiente(2)"><i class="fa fa-arrow-right"></i></button>
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
    function siguiente(pagina)
       {
         location.href = '/pagina/'+pagina;
         //alert("adelante");
       }
     function anterior()
        {
          //location.href = 'demo'+pagina+'.html';
          //alert("atras");
        }
  </script>
  <!-- script zoom con jetzoom-->
  <script type="text/javascript">
   JetZoom.quickStart();
  </script>
@endsection
