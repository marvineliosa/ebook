@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

  <!-- Content Header (Page header) -->

  <section class="content-header">
        <!-- <h1>Nombre de la página<small>Algún texto pequeño</small></h1> -->
        <h1>"Compromiso ante la familia"</h1>
        <ol class="breadcrumb"><!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li><li><a href="#">Examples</a></li><li class="active">Blank page</li> --> </ol>
  </section>

  <!-- Main content -->

  <section class="content">

    <!-- Default box -->
    <div class="box">
     <div class="box-header with-border" align="center">
      <!--<button type="submit" class="btn btn-success" onclick="sugerencia()">Sugerencias para papás</button><br><br><audio id="audio2" controls=""><source type="audio/wav" src="http://127.0.0.1:8000/audio/Padres/Capitulo_8/Pag 66.mp3"></audio><br>-->
      <br>
      <br>
      <!--<h3 class="box-title"><audio id="audio" controls>
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
              <img src="{{asset('paginas/Capitulo2/0021.JPG')}}" class="img-fluid jetzoom" data-jetzoom ="zoomImage:'{{asset('paginas/Capitulo2/0021.JPG')}}'"  style="max-width: 50%">
          </div>
        </div>

        <!-- /.box-body -->

        <div class="box-footer" align="center">
        <div class="btn-group">
          <button type="button" class="btn btn-default" onclick="anterior(20)"><i class="fa  fa-arrow-left"></i></button>
          <button type="button" class="btn btn-default" onclick="siguiente(22)"><i class="fa fa-arrow-right"></i></button>
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
            <img src="{{asset('padres/Capitulo2/2017PUE_PRIM_FAM_5_27.jpg')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Capitulo2/2017PUE_PRIM_FAM_5_27.jpg')}}'"  style="max-width: 100%">
            <img src="{{asset('padres/Capitulo2/2017PUE_PRIM_FAM_5_28.jpg')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Capitulo2/2017PUE_PRIM_FAM_5_28.jpg')}}'"  style="max-width: 100%">
            <img src="{{asset('padres/Capitulo2/2017PUE_PRIM_FAM_5_29.jpg')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('padres/Capitulo2/2017PUE_PRIM_FAM_5_29.jpg')}}'"  style="max-width: 100%">
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
    function siguiente(pagina){
      location.href = pagina;
     //alert("adelante");
    }
    function anterior(pagina){
        location.href = pagina;
        //alert("atras");
      }

    function almacenarInformacion(){
      var respuesta1 = $('#Entrada_Que_aprendi_del_Cuento').val();
      var respuesta2 = $('#Entrada_Valores_hoy').val();
      var respuesta3 = $('#Entrada_Como_me_siento').val();
      //$("#div_cuadro").hide();
      var success;
      var url = "/almacenar/pagina-8";
      var dataForm = new FormData();
      dataForm.append('respuesta1',respuesta1);
      dataForm.append('respuesta2',respuesta2);
      dataForm.append('respuesta3',respuesta3);
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

   JetZoom.quickStart();
  </script>
@endsection
