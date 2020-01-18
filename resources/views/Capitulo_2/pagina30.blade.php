@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    "Compromiso ante la familia"
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
      <!--<button type="submit" class="btn btn-success" onclick="sugerencia()">Sugerencias para papás</button>-->
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
        <div class="login-box ">
          <div class="row">
            <div class="col-xs-2 col-md-2" style="background-color:white;" >
              <img src="{{asset('paginas/Capitulo_2/recortes/2017PUE_PRIM_30_1.JPG')}}" class="img-fluid" style="width:190%;">
            </div>
            <div class="col-xs-10 col-md-10" style="background-color:white;">
              <br>
              <img src="{{asset('paginas/Capitulo_2/recortes/2017PUE_PRIM_30_2.JPG')}}" class="img-fluid" style="width:110%;">
              <div class="form-group"><label class="control-label text-aqua "><i class="fa"></i><h3>Ejemplos:</h3></label></div>
              <div class="has-error">
                <label class="control-label"><i class="fa fa-times-circle-o"></i></label>
                <span clas="has-error">Me comprometo a ayudar a mis padres a recoger los trastes de la mesa cuando terminemos de comer.</span>
                <br>
                <label class="control-label"><i class="fa fa-times-circle-o"></i></label>
                <span>Me comprometo a no dejar tirada mi ropa sucia después de quitármela.</span>
              </div>
              <div class="row">
                <div class="col-xs-2 col-md-2" style="background-color:white;">
                  <p class="text-aqua ">Yo:</p>
                </div>
                <div class="col-xs-10 col-md-10" style="background-color:white;">
                  <input type="text" class="form-control" id="Entrada_nombre" placeholder="Escribe tu nombre aquí" value="{{((isset($datos->nombre))?$datos->nombre:'')}}">
                </div>
              </div>
              <br>
              <span>me comprometo conmigo mismo a:</span>
              <input type="text" class="form-control" id="Entrada_Compromiso_individual" placeholder="Escribe tu compromiso individual aquí" value="{{((isset($datos->compromiso))?$datos->compromiso:'')}}">
              <br>
              <span>Y con mi grupo a:</span>
              <input type="text" class="form-control" id="Entrada_Compromiso_Grupal" placeholder="Escribe tu compromiso grupal aquí" value="{{((isset($datos->compromisogrupal))?$datos->compromisogrupal:'')}}">
              <br>
              <p class="text-center">
                Me acabo de comprometer<br>¿Me ayudas a cumplir mi compromiso?
              </p>

              <div class="row">
                <div class="col-xs-12 col-md-12" style="background-color:white;">
                  <p class="text-purple text-center">Yo:</p>
                  <input type="text" class="form-control" id="Entrada_nombre_tutor_1" placeholder="Nombre del padre o tutor" value="{{((isset($datos->ayuda1))?$datos->ayuda1:'')}}">
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
              <input type="text text-center" class="form-control" align="center" id="Entrada_familiar_1" placeholder="Nombre del familiar" value="{{((isset($datos->familiar1))?$datos->familiar1:'')}}">
              <br>
              <input type="text text-center" class="form-control" align="center" id="Entrada_familiar_2" placeholder="Nombre del familiar" value="{{((isset($datos->familiar2))?$datos->familiar2:'')}}">
              <br>
              <input type="text text-center" class="form-control" align="center" id="Entrada_familiar_3" placeholder="Nombre del familiar" value="{{((isset($datos->familiar3))?$datos->familiar3:'')}}">
              <br>
              <button type="button" class="btn btn-block btn-default" id="Boton_Aceptar()" onclick="almacenarInformacion()">Aceptar</button>
              <br>
              <img src="{{asset('paginas/Capitulo_2/recortes/2017PUE_PRIM_30_3.JPG')}}" class="img-fluid jetzoom" data-jetzoom ="zoomImage:'{{asset('paginas/Capitulo_1/recortes/2017PUE_PRIM_22.JPG')}}'" style="width:110%;">
            </div>
          </div>
       </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-default" onclick="anterior(29)"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" onclick="siguiente(31)"><i class="fa fa-arrow-right"></i></button>
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
         window.location.replace('http://localhost:8000/1/3/31');
        //location.href = pagina;
         //alert("adelante");
       }
     function anterior(pagina)
        {
          location.href = pagina;

        }
  </script>
  <!-- script zoom con jetzoom-->
  <script type="text/javascript">
   JetZoom.quickStart();
  </script>
@endsection
