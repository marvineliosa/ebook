@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<script type="text/javascript">

  var Capitulo = 8;var titulo_text = "Aunque somos iguales, tenemos muchas diferencias: biodiversidad genética";
  var pagina_actual = 69;

  function carga_ejemplo(pagina)
     {
       alert("pagina: "+pagina_actual);
     }

     function datos()
        {
            var element = document.getElementById('myImg');
            element.src = "{{asset('/')}}"+"paginas/Capitulo_"+Capitulo+"/Pagina_"+pagina_actual+".jpg";
            element.zoomImage = "zoomImage:'{{asset('/')}}"+"paginas/Capitulo_"+Capitulo+"/Pagina_"+pagina_actual+".jpg'";
            document.getElementById("titulo").innerHTML = titulo_text;
        }
    function datos2()
        {
             var element2 = document.getElementById('myImg2');
             element2.src = "{{asset('/')}}"+"padres/Capitulo_"+Capitulo+"/Pagina_Padres_"+pagina_actual+".jpg";
             element2.zoomImage = "zoomImage:'{{asset('/')}}"+"padres/Capitulo_"+Capitulo+"/Pagina_Padres_"+pagina_actual+".jpg'";var element_audio = document.getElementById('audio2');element_audio.src = "{{asset('/')}}"+"audio/Capitulo_"+Capitulo+"/Pag "+pagina_actual+".mp3";
        }

</script>

<section class="content-header">
   <h1 id= "titulo">
    Nombre de la página
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
      <button type="submit" class="btn btn-success" onclick="sugerencia()">Sugerencias para papás</button><br><br><audio id="audio2" controls=""><source type="audio/wav" src="http://127.0.0.1:8000/audio/Padres/Capitulo_8/Pag 66.mp3"></audio><br>
      <br>

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
        <img id="myImg" src="{{asset('padres/Padres_1.jpg')}}" class="img-fluid jetzoom"  data-jetzoom =""  style="max-width: 50%">

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
        <h1 class="modal-title" id="exampleModalLabel">Familiares</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div align='center'>
          <br>
          <audio id="audio" controls="">
                    <source type="audio/wav" src="http://127.0.0.1:8000/audio/Capitulo_8/Pag 69.mp3">
                  </audio>
          <img id="myImg2" src="{{asset('padres/Padres_1.jpg')}}" class="img-fluid jetzoom"  data-jetzoom =""  style="max-width: 100%">

        </div>
      </div>
    </div> <script type="text/javascript"> datos2(); </script> </div>
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


       if( pagina_actual == 69  || pagina_actual == 78  || pagina_actual == 85 || pagina_actual == 92 || pagina_actual == 100 || pagina_actual == 107 || pagina_actual == 114 || pagina_actual == 122)
         {
           Capitulo =  Capitulo + 1;
         }
       location.href = "/1/"+Capitulo+"/"+(pagina_actual+1);

     }
   function anterior()
      {
        if( pagina_actual == 63  || pagina_actual == 70 || pagina_actual == 79 || pagina_actual == 86 || pagina_actual == 93 || pagina_actual == 101 || pagina_actual == 108 || pagina_actual == 115)
          {
            Capitulo = Capitulo - 1;
          }
        location.href = "/1/"+Capitulo+"/"+(pagina_actual-1);
        //alert("atras");
      }
</script>
@endsection
