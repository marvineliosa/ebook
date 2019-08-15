@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Nombre de la página
    <small>Algún texto pequeño</small>
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
      <h3 class="box-title">Título</h3>

      <!-- <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div> -->
    </div>
    <div class="box-body">
      <div align='center' id="zoomdiv">
        <!--<img src="{{asset('paginas/p2.PNG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('paginas/p1L.PNG')}}'" > -->
        <span class='zoom' id='ex1'><img src="{{asset('paginas/p1.PNG')}}" id='jack' alt='Daisy on the Ohoopee'/> <!-- LINEA TRABAJA CON JQUERYZOOM -->
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-default" onclick="anterior(1)"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" onclick="siguiente(3)"><i class="fa fa-arrow-right"></i></button>
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
     function anterior(pagina)
        {
          location.href = '/pagina/'+pagina;
          //alert("atras");
        }

        $(document).ready(function () {
          $('#zoomdiv').zoom({magnify:1.3}); //linea trabaja con jqueryzomm
        })
</script>
@endsection
