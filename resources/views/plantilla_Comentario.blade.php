@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<script type="text/javascript">

  /*var Capitulo = parseInt("{{((isset($datos->unidad))?$datos->unidad:'')}}",10);
  var pagina_actual = parseInt("{{((isset($datos->pagina))?$datos->pagina:'')}}",10);//*/

  var Capitulo = parseInt('{{((isset($datos["capitulo"]))?$datos["capitulo"]:"")}}',10);
  var pagina_actual = parseInt('{{((isset($datos["pagina"]))?$datos["pagina"]:"")}}',10);//*/
  var titulo_text = "";

  switch (Capitulo)
    {
          case 8:titulo_text = "Aunque somos iguales, tenemos muchas diferencias: biodiversidad genética"; break;
          case 9:titulo_text = "Los animales de la granja no deben sufrir"; break;
          case 10:titulo_text = "Expresión de emociones y apoyo para su regulación"; break;
          case 11:titulo_text = "Camino a la adolescencia"; break;
          case 12:titulo_text = "Juntos somos más fuertes"; break;
          case 13:titulo_text = "Diversidad y discriminación"; break;
          case 14:titulo_text = "La influencia de mis compañeros"; break;
          case 15:titulo_text = "Crecimiento, cambios físicos y emocionales"; break;
          default:titulo_text = "Pagina aun en desarrollo"; break;break;

    }


  function carga_ejemplo(pagina)
     {
       alert('{{((isset($datos["info"]->comentario_negativo))?$datos["info"]->comentario_negativo:"")}}');
     }

     function datos()
        {
          //carga_ejemplo(Capitulo);
            var element = document.getElementById('myImg');
            element.src = "{{asset('/')}}"+"paginas/Capitulo_"+Capitulo+"/Pagina_"+pagina_actual+".jpg";
            element.zoomImage = "zoomImage:'{{asset('/')}}"+"paginas/Capitulo_"+Capitulo+"/Pagina_"+pagina_actual+".jpg'";
            document.getElementById("titulo").innerHTML = titulo_text;

            var element_imagen_uni = document.getElementById('imagen_uni');
            element_imagen_uni.src = "{{asset('/')}}"+"paginas/Capitulo_"+Capitulo+"/Copia de Pagina_"+pagina_actual+".jpg";

        }
    function datos2()
        {
             var element2 = document.getElementById('myImg2');
             element2.src = "{{asset('/')}}"+"padres/Capitulo_"+Capitulo+"/Pagina_Padres_"+pagina_actual+".jpg";
             element2.zoomImage = "zoomImage:'{{asset('/')}}"+"padres/Capitulo_"+Capitulo+"/Pagina_Padres_"+pagina_actual+".jpg'";var element_audio = document.getElementById('audio2');element_audio.src = "{{asset('/')}}"+"audio/Capitulo_"+Capitulo+"/Pag "+pagina_actual+".mp3";

             var element_audio = document.getElementById('audio');
             element_audio.src = "{{asset('/')}}"+"audio/Padres/Capitulo_"+Capitulo+"/Pag "+pagina_actual+".mp3";

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
    <div class="box-header with-border" align="center"><button type="submit" class="btn btn-success" onclick="sugerencia()">Sugerencias para papás</button><br><br><audio id="audio2" controls=""><source type="audio/wav" src="http://127.0.0.1:8000/audio/Padres/Capitulo_8/Pag 66.mp3"></audio><br><br></div>
    <div class="box-body">
          <div align='center'>
                <img id="myImg" src="{{asset('padres/Padres_1.jpg')}}" class="img-fluid jetzoom"  data-jetzoom =""  style="max-width: 65%">
          </div>
    </div>

       <!-- aqui inicia formulario ***************************************************************************************-->



             <div class="row">
                   <div class="col-xs-1 col-md-1" style="background-color:white;"></div>
                   <div class="col-xs-11 col-md-11" style="background-color:white;">

                         <div class="col-xs-6 col-md-6" style="background-color:white;">

                              <img  id = "imagen_uni"src="{{asset('paginas/p7.PNG')}}" style="width:65%;">

                         </div>

                         <div class="col-xs-6 col-md-6" style="background-color:white;">

                                <br><h3 class="text-center"> <code class="text-red "><strong>Anota otras consecuencias:</strong></code></h3><br>
                                <textarea id="Entrada_Comentario" class="form-control" name="mensaje" placeholder="Anota otras consecuencias " rows="5" cols="50">{{((isset($datos["info"]->comentario_negativo))?$datos["info"]->comentario_negativo:"")}}</textarea>
                                <br><button type="button" class="btn btn-block btn-default" id="Boton_Enviar_Respuestas()" onclick="Agrega_Comentarios()">Enviar respuestas</button>
                         </div>

                   </div>
             </div>


               <div class="row">


               </div><script type="text/javascript"> datos(); </script>
    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-default" onclick="anterior()"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" onclick="siguiente()"><i class="fa fa-arrow-right"></i></button>
      </div>
    </div>
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
                    <source type="audio/wav" src="http://127.0.0.1:8000/audio/Padres/Capitulo_8/Pag 66.mp3">
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
  function Agrega_Comentarios()
      {
          if(
              pagina_actual == 67 ||
              pagina_actual == 76 ||
              pagina_actual == 83 ||
              pagina_actual == 90 ||
              pagina_actual == 98 ||
              pagina_actual == 105 ||
              pagina_actual == 112 ||
              pagina_actual == 120

            )
            {
              var url = "/almacenar/Almacenar_Comentarios_Pos";
            }
          else
            {
              var url = "/almacenar/Almacenar_Comentarios_Neg";
            }

           var comentario = $('#Entrada_Comentario').val();
           var success;


           var dataForm = new FormData();


           dataForm.append('Capitulo',Capitulo);
           dataForm.append('pagina_actual',pagina_actual);
           dataForm.append('comentario',comentario);

           $.ajax(
                   {
                       url :url,
                       data : dataForm,
                       contentType:false,
                       processData:false,
                       headers:
                           {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                           },
                       type: 'POST',
                       dataType : 'json',
                       beforeSend: function (){ $("#modalCarga").modal();},
                       success : function(json){ location.reload(); },
                       error : function(xhr, status)
                           {
                             $("#textoModalMensaje").text('Existió un problema con la operación');
                             $("#modalMensaje").modal();
                           },
                       complete : function(xhr, status){ $("#modalCarga").modal('hide');}
                 });
     }//*/
</script>
@endsection
