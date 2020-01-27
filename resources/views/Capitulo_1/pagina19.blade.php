@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    "Leo, pienso y escribo 5°"
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
      <div align=''>
        <!-- <img src="{{asset('paginas/p7.PNG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('paginas/p7L.PNG')}}'" > -->
        <div class="login-box ">
          <div class="row">
            <div class="col-xs-2 col-md-2" style="background-color:white;" >
              <img src="{{asset('paginas/Capitulo1/recortes/2017PUE_PRIM_23_1.JPG')}}" class="img-fluid" style="width:190%;">
            </div>
            <div class="col-xs-10 col-md-10" style="background-color:white;">
              <br>
              <img src="{{asset('paginas/Capitulo1/recortes/2017PUE_PRIM_23_2.JPG')}}" class="img-fluid" style="width:110%;">
              <div class="form-group has-warning"><label class="control-label" for="inputWarning"><i class="fa"></i><h3>Ejemplos:</h3></label></div>
              <div class="has-error">
                <label class="control-label"><i class="fa fa-times-circle-o"></i></label>
                <span clas="has-error">Me comprometo a leer algo nuevo cada día.</span>
                <br>
                <label class="control-label"><i class="fa fa-times-circle-o"></i></label>
                <span>Me comprometo pensar cuidadosamente antes de escribir mis ideas.</span>
              </div>
              <div class="row">
                <div class="col-xs-2 col-md-2" style="background-color:white;">
                  <p class="text-green ">Yo:</p>
                </div>
                <div class="col-xs-10 col-md-10" style="background-color:white;">
                  <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre aquí" value="{{((isset($datos->nombre))?$datos->nombre:'')}}">
                </div>
              </div>
              <br>
              <span>me comprometo conmigo mismo a:</span>
              <input type="text" class="form-control" id="individual" placeholder="Escribe tu compromiso individual aquí" value="{{((isset($datos->compromiso_individual))?$datos->compromiso_individual:'')}}">
              <br>
              <span>Y con mi grupo a:</span>
              <input type="text" class="form-control" id="Grupal" placeholder="Escribe tu compromiso grupal aquí" value="{{((isset($datos->compromiso_grupal))?$datos->compromiso_grupal:'')}}">
              <br>
              <p class="text-center">
                Me acabo de comprometer<br>¿Me ayudas a cumplir mi compromiso?
              </p>

              <div class="row">
                <div class="col-xs-12 col-md-12" style="background-color:white;">
                  <p class="text-green text-center">Yo:</p>
                  <input type="text" class="form-control" id="tutor_1" placeholder="Nombre del padre o tutor" value="{{((isset($datos->tutor))?$datos->tutor:'')}}">
                </div>

                <!-- <div class="col-xs-6 col-md-6" style="background-color:white;">
                  <p class="text-green text-center">Yo:</p>
                  <input type="text" class="form-control" id="Entrada_nombre_tutor_2" placeholder="Mamá" value="{{((isset($datos->ayuda2))?$datos->ayuda2:'')}}">
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
              <input type="text text-center" class="form-control" align="center" id="familiar_1" placeholder="Nombre del familiar" value="{{((isset($datos->familiar_1))?$datos->familiar_1:'')}}">
              <br>
              <input type="text text-center" class="form-control" align="center" id="familiar_2" placeholder="Nombre del familiar" value="{{((isset($datos->familiar_2))?$datos->familiar_2:'')}}">
              <br>
              <input type="text text-center" class="form-control" align="center" id="familiar_3" placeholder="Nombre del familiar" value="{{((isset($datos->familiar_3))?$datos->familiar_3:'')}}">
              <br>
              <button type="button" class="btn btn-block btn-default" id="Boton_Aceptar()" onclick="almacenarInformacion()">Aceptar</button>
              <br>
              <img src="{{asset('paginas/Capitulo1/recortes/2017PUE_PRIM_23_3.JPG')}}" class="img-fluid jetzoom" data-jetzoom ="zoomImage:'{{asset('paginas/Capitulo1/recortes/2017PUE_PRIM_22.JPG')}}'" style="width:110%;">
            </div>
          </div>
       </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-default" onclick="anterior(18)"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" onclick="siguiente(20)"><i class="fa fa-arrow-right"></i></button>
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
          <audio id="audio" controls=""><source type="audio/wav" src="http://127.0.0.1:8000/audio/Capitulo1/familiares/Pag 24.mp3"></audio>
          <img src="{{asset('padres/Capitulo1/2017PUE_PRIM_FAM_5_24.jpg')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Capitulo1/2017PUE_PRIM_FAM_5_24.jpg')}}'"  style="max-width: 100%">
          <audio id="audio" controls=""><source type="audio/wav" src="http://127.0.0.1:8000/audio/Capitulo1/familiares/Pag 25.mp3"></audio>
          <img src="{{asset('padres/Capitulo1/2017PUE_PRIM_FAM_5_25.jpg')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Capitulo1/2017PUE_PRIM_FAM_5_25.jpg')}}'"  style="max-width: 100%">
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
        window.location.replace('http://localhost:8000/1/2/20');
         //alert("adelante");
       }
     function anterior(pagina)
        {
          location.href = pagina;
          //alert("atras");
        }

        function almacenarInformacion(){
          var nombre = $('#nombre').val();
          var individual = $('#individual').val();
          var grupal = $('#Grupal').val();
          var tutor = $('#tutor_1').val();
          var familiar1 = $('#familiar_1').val();
          var familiar2 = $('#familiar_2').val();
          var familiar3 = $('#familiar_3').val();
          var unidad = 1;
          var pagina = 19;

          //$("#div_cuadro").hide();
          var success;
          var url = "/almacenar/pagina19";
          var dataForm = new FormData();
          dataForm.append('nombre',nombre);
          dataForm.append('individual',individual);
          dataForm.append('grupal',grupal);
          dataForm.append('tutor',tutor);
          dataForm.append('familiar1',familiar1);
          dataForm.append('familiar2',familiar2);
          dataForm.append('familiar3',familiar3);
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
