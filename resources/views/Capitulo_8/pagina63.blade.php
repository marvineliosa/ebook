@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<script type="text/javascript">

  var Capitulo = 8;
  var pagina_actual = 63;


  function carga_ejemplo(pagina)
     {
       alert("pagina: "+pagina_actual);
     }

     function datos()
        {
          var element = document.getElementById('myImg');

          var elemento_imagen = "{{asset('/')}}"+"paginas/Capitulo_"+Capitulo+"/Pagina_"+pagina_actual+".PNG";
          var elemento_imagen_zoom = "zoomImage:'{{asset('/')}}"+"paginas/Capitulo_"+Capitulo+"/Pagina_"+pagina_actual+".PNG'";


          element.src = elemento_imagen;
          element.zoomImage = elemento_imagen_zoom ;
          //document.getElementById('myImg').zoomImage = elemento_imagen_zoom;
          console.log(Object.values(document.getElementById('myImg')));
        }





</script>

<section class="content-header">
  <!-- <h1>
    Nombre de la página
    <small>Algún texto pequeño</small> -->
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
        <img id="myImg" src="{{asset('padres/Padres_1.PNG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Padres_7.PNG')}}'"  style="max-width: 100%">

       </div> <script type="text/javascript"> datos(); </script> </div>

    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-default" onclick="anterior()"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" onclick="siguiente()"><i class="fa fa-arrow-right"></i></button>
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
        <h1 class="modal-title" id="exampleModalLabel">Sugerencia para padres</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div align='center'>
          <img src="{{asset('padres/Padres_7.PNG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Padres_7.PNG')}}'"  style="max-width: 100%">
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
  JetZoom.quickStart();
    function siguiente()
       {

         location.href = "/Libro_5_Capitulo_"+Capitulo+"_Pagina_"+(pagina_actual+1);
         //alert("adelante");
       }
     function anterior()
        {
          location.href = "/Libro_5_Capitulo_"+Capitulo+"_Pagina_"+(pagina_actual-1);
          //alert("atras");
        }
</script>
@endsection
