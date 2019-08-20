@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

  <!-- Content Header (Page header) -->

  <section class="content-header">
    <h1>Nombre de la página<small>Algún texto pequeño</small></h1>
    <ol class="breadcrumb"><!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><li><a href="#">Examples</a></li><li class="active">Blank page</li> --> </ol>
  </section>

  <!-- Main content -->

  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border" align="center">
      <button type="submit" class="btn btn-success" onclick="sugerencia()">Sugerencias Para Papás</button>
        <!-- <h3 class="box-title">Título</h3> -->

        <!-- <div class="box-tools pull-right">

          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button></div> -->
      </div>
      <div class="box-body">
        <div align='center'>
          <!-- <img src="{{asset('paginas/p7.PNG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('paginas/p7L.PNG')}}'" > -->
          <div class="login-box ">
            <div class="row">
              <div class="col-xs-10 col-md-10" style="background-color:white;">
                <br>
                <img src="{{asset('paginas/Tema_1_Actividad_1_firma_compromiso.PNG')}}" class="img-fluid" style="width:115%;">
                <div class="form-group has-warning"><label class="control-label" for="inputWarning"><i class="fa"></i><h3>Ejemplo:</h3></label></div>

                <p>
                  Me compremeto a leer todas las noches almenos 10 minutos antes de dormir.
                </p>
                <br>
                <div class="row">
                  <div class="col-xs-2 col-md-2" style="background-color:white;">
                    <p class="text-green ">Yo:</p>
                  </div>

                  <div class="col-xs-10 col-md-10" style="background-color:white;">
                    <input type="text" class="form-control" id="Entrada_nombre" placeholder="Pon tu nombre aqui..." value="{{((isset($datos->nombre))?$datos->nombre:'')}}">
                  </div>
                </div>
                <br>
                <p>
                  Me compremeto conmigo mismo a:
                </p>
                <input type="text" class="form-control" id="Entrada_Compromiso_individual" placeholder="Pon tu compromiso Individual aqui..." value="{{((isset($datos->compromiso))?$datos->compromiso:'')}}">
                <br>
                <p>
                  Y con mi grupo a:
                </p>
                <input type="text" class="form-control" id="Entrada_Compromiso_Grupal" placeholder="Pon tu compromiso Grupal aqui..." value="{{((isset($datos->compromisogrupal))?$datos->compromisogrupal:'')}}">
                <br>
                <p class="text-center">
                  Me acabo de comprometer<br>¿Me ayudas a cumplir mi compromiso?
                </p>
                <br>
                <div class="row">
                  <div class="col-xs-6 col-md-6" style="background-color:white;">
                    <p class="text-green text-center">Yo:</p>
                    <input type="text" class="form-control" id="Entrada_nombre_tutor_1" placeholder="Nombre de Papá" value="{{((isset($datos->ayuda1))?$datos->ayuda1:'')}}">
                  </div>

                  <div class="col-xs-6 col-md-6" style="background-color:white;">
                    <p class="text-green text-center">Yo:</p>
                    <input type="text" class="form-control" id="Entrada_nombre_tutor_2" placeholder="Nombre de Mamá" value="{{((isset($datos->ayuda2))?$datos->ayuda2:'')}}">
                  </div>
                </div>
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
                <img src="{{asset('paginas/Tema_1_Actividad_1_Preguntas_reflexivas.PNG')}}" class="img-fluid" style="width:110%;">
              </div>

              <div class="col-xs-2 col-md-2" style="background-color:white;" >
                <img src="{{asset('paginas/Tema_1_Actividad_1_borde_hoja.PNG')}}" class="img-fluid" style="width:190%;">
              </div>
            </div>
         </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer" align="center">
        <div class="btn-group">
          <button type="button" class="btn btn-default" onclick="anterior(8)"><i class="fa  fa-arrow-left"></i></button>
          <button type="button" class="btn btn-default" onclick="siguiente(9)"><i class="fa fa-arrow-right"></i></button>
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
          <img src="{{asset('padres/Padres_9.PNG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Padres_9.PNG')}}'"  style="max-width: 100%">
        </div>
        <div align='center'>
          <img src="{{asset('padres/Padres_9-2.PNG')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Padres_9.PNG')}}'"  style="max-width: 100%">
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
    function almacenarInformacion(){
      var nombre = $('#Entrada_nombre').val();
      var compromiso = $('#Entrada_Compromiso_individual').val();
      var compromiso_grupal = $('#Entrada_Compromiso_Grupal').val();
      var papa = $('#Entrada_nombre_tutor_1').val();
      var mama = $('#Entrada_nombre_tutor_2').val();
      var familiar1 = $('#Entrada_familiar_1').val();
      var familiar2 = $('#Entrada_familiar_2').val();
      var familiar3 = $('#Entrada_familiar_3').val();
      //$("#div_cuadro").hide();
      var success;
      var url = "/almacenar/pagina-9";
      var dataForm = new FormData();
      dataForm.append('nombre',nombre);
      dataForm.append('compromiso',compromiso);
      dataForm.append('compromiso_grupal',compromiso_grupal);
      dataForm.append('papa',papa);
      dataForm.append('mama',mama);
      dataForm.append('familiar1',familiar1);
      dataForm.append('familiar2',familiar2);
      dataForm.append('familiar3',familiar3);
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

    function siguiente(pagina){
      location.href = '/pagina/Comentario/1';
      //alert("adelante");
    }
    function anterior(pagina){
      location.href = '/pagina/Tema_1_Actividad';
      //alert("atras");
    }
  </script>
@endsection
