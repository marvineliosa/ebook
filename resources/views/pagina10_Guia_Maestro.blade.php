@extends('plantillas.menu')
@section('titulo','Guía de Maestros')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header" align="center">
  <h1>
    Guía de Maestros
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
    <div class="box-header with-border">
      <!-- <h3 class="box-title">Guía de Maestros</h3> -->

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
        <img src="{{asset('paginas/Guia_maestro.png')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('paginas/Guia_maestroL.png')}}'" >
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <!-- <button type="button" class="btn btn-default" onclick="anterior()"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" onclick="siguiente()"><i class="fa fa-arrow-right"></i></button> -->
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
  function siguiente()
     {
       //location.href = 'demo'+pagina+'.html';
       Alert("adelante");
     }
   function anterior()
      {
        //location.href = 'demo'+pagina+'.html';
        Alert("atras");
      }
</script>
@endsection
