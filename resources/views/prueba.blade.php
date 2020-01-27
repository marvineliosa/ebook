@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<script type="text/javascript">

  var Capitulo = 8;var titulo_text = "Aunque somos iguales, tenemos muchas diferencias: biodiversidad genética";
  var pagina_actual = 69;//*/

  /*var Capitulo = parseInt('{{((isset($datos["capitulo"]))?$datos["capitulo"]:"")}}',10);
  var pagina_actual = parseInt('{{((isset($datos["pagina"]))?$datos["pagina"]:"")}}',10);//*/



  function carga_ejemplo(pagina)
     {
       alert('{{((isset($datos["info"]->comentario_negativo))?$datos["info"]->comentario_negativo:"")}}');
     }

     function datos()
        {
          //carga_ejemplo(Capitulo);
            var element = document.getElementById('myImg');
            element.src = "{{asset('/')}}"+"paginas/Capitulo_"+Capitulo+"/Copia de Pagina_"+pagina_actual+".jpg";



            var element_imagen_uni = document.getElementById('imagen_pre2');
            element_imagen_uni.src = "{{asset('/')}}"+"paginas/Capitulo_"+Capitulo+"/Pagina_"+pagina_actual+".jpg";

            var element_imagen_uni = document.getElementById('imagen_conclusion');
            element_imagen_uni.src = "{{asset('/')}}"+"paginas/Capitulo_"+Capitulo+"/Copia de Pagina_"+pagina_actual+" 2.jpg";

            document.getElementById("titulo").innerHTML = titulo_text;

        }
    function datos2()
        {
             var element2 = document.getElementById('myImg2');
             element2.src = "{{asset('/')}}"+"padres/Capitulo_"+Capitulo+"/Pagina_Padres_"+pagina_actual+".jpg";
             element2.zoomImage = "zoomImage:'{{asset('/')}}"+"padres/Capitulo_"+Capitulo+"/Pagina_Padres_"+pagina_actual+".jpg'";
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
    <div class="box-header with-border" align="center"><button type="submit" class="btn btn-success" onclick="sugerencia()">Sugerencias para papás</button><br></div>
    <div class="box-body">

    </div>

       <!-- aqui inicia formulario ***************************************************************************************-->

       <div class="box-body">
         <div align="">
           <!-- <img src="http://127.0.0.1:8000/paginas/p7.PNG" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'http://127.0.0.1:8000/paginas/p7L.PNG'" > -->
           <div class="login-box ">
             <div class="row">
               <div class="col-xs-2 col-md-2" style="background-color:white;">
                 <img id="myImg" src="{{asset('padres/Padres_1.jpg')}}"  class="img-fluid" style="width:190%;">
               </div>
               <div class="col-xs-10 col-md-10" style="background-color:white;">
                 <br>
                 <img  id = "imagen_pre2"src="{{asset('paginas/p7.PNG')}}" style="width:100%;">
                 <br>
                 <div class="form-group has-warning"><label class="control-label" for="inputWarning"><i class="fa"></i><h3>Ejemplos:</h3></label></div>

                 <p>
                   Me comprometo a leer todas las noches al menos 10 minutos antes de dormir.
                 </p>
                 <br>
                 <div class="row">
                   <div class="col-xs-2 col-md-2" style="background-color:white;">
                     <p class="text-green ">Yo:</p>
                   </div>

                   <div class="col-xs-10 col-md-10" style="background-color:white;">
                     <input type="text" class="form-control" id="Entrada_nombre" placeholder="Escribe tu nombre aquí" value="">
                   </div>
                 </div>
                 <br>
                 <p>
                   me comprometo conmigo mismo a:
                 </p>
                 <input type="text" class="form-control" id="Entrada_Compromiso_individual" placeholder="Escribe tu compromiso individual aquí" value="">
                 <br>
                 <p>
                   Y con mi grupo a:
                 </p>
                 <input type="text" class="form-control" id="Entrada_Compromiso_Grupal" placeholder="Escribe tu compromiso grupal aquí" value="">
                 <br>
                 <p class="text-center">
                   Me acabo de comprometer<br>¿Me ayudas a cumplir mi compromiso?
                 </p>
                 <br>
                 <div class="row">
                   <div class="col-xs-12 col-md-12" style="background-color:white;">
                     <p class="text-green text-center">Yo:</p>
                     <input type="text" class="form-control" id="Entrada_nombre_tutor_1" placeholder="Nombre del padre o tutor" value="">
                   </div>

                   <!-- <div class="col-xs-6 col-md-6" style="background-color:white;">
                     <p class="text-green text-center">Yo:</p>
                     <input type="text" class="form-control" id="Entrada_nombre_tutor_2" placeholder="Mamá" value="">
                   </div> -->
                 </div>
                 <br>
                 <p class="text-center">
                   me comprometo a apoyar el compromiso de mi hijo y a reunirme con mis familiares para platicar respecto a este tema.
                 </p>
                 <br>
                 <p class="text-center">
                       Otros familiares que quieran unirse a este compromiso:
                 </p>
                 <input type="text text-center" class="form-control" align="center" id="Entrada_familiar_1" placeholder="Nombre del familiar" value="">
                 <br>
                 <input type="text text-center" class="form-control" align="center" id="Entrada_familiar_2" placeholder="Nombre del familiar" value="">
                 <br>
                 <input type="text text-center" class="form-control" align="center" id="Entrada_familiar_3" placeholder="Nombre del familiar" value="">
                 <br>
                 <button type="button" class="btn btn-block btn-default" id="Boton_Aceptar()" onclick="almacenarInformacion()">Aceptar</button>

                 <br>
               </div>


             </div>
          </div>
         </div>
       </div>
       <br>


       <div class="row">
             <div class="col-xs-2 col-md-4" style="background-color:white;"></div>
             <div class="col-xs-8 col-md-4" style="background-color:white;">

                   <img  id = "imagen_conclusion"src="{{asset('paginas/p7.PNG')}}" class="img-fluid" style="width:110%;">
             </div>
             <div class="col-xs-2 col-md-4" style="background-color:white;"></div>




               <div class="row"></div><script type="text/javascript"> datos(); </script>
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
                    <source type="audio/wav" src="http://127.0.0.1:8000/audio/Capitulo_8/Pag 66.mp3">
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
  function Agrega_respuestas()
      {
           var url = "/almacenar/Respuestas_Compromiso";
           var pre1 = $('#Entrada_pre1').val();
           var pre2 = $('#Entrada_pre2').val();
           var conclusion = $('#Entrada_con').val();
           var success;


           var dataForm = new FormData();


           dataForm.append('Capitulo',Capitulo);
           dataForm.append('pagina_actual',pagina_actual);
           dataForm.append('pre1',pre1);
           dataForm.append('pre2',pre2);
           dataForm.append('conclusion',conclusion);

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
