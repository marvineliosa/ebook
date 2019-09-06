@extends('plantillas.menu')
@section('titulo','Título')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>Método ExE</h1>
      <ol class="breadcrumb"></ol>
</section>

<!-- Main content -->

<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
            <h3 class="box-title">Comentarios</h3>
    </div>
    <div class="box-body">
      <div align='center'>
        <div class="login-box ">
          <div class="row">
            <div class="col-xs-4 col-md-4" style="background-color:white;" ><img src="{{asset('paginas/Tema_1_Actividad_1_borde_hoja_Comentario.PNG')}}" class="img-fluid" style="width:117%;"></div>
            <div class="col-xs-8 col-md-8" style="background-color:white;">

              <img src="{{asset('paginas/Tema_1_Actividad_1_borde_hoja_Comentario_grado.PNG')}}" class="img-fluid" style="width:120%;">
              <br>
              <br>
              <p>Ingresa tus datos:</p>
              <br>
              <div class="row">
                <div class="col-xs-6 col-md-6" style="background-color:white;">
                  <select class="form-control" id="Selector_Edad" onchange ="Cambio_Selector(this)">
                    <option value= "-1">Edad</option>
                    @for($i = 6; $i <= 19; $i++)
                      <option value="{{$i}}" {{ ((strcmp($select['edad'],$i)==0)?'selected':'') }}>{{$i}} Años</option>
                    @endfor
                  </select>
                </div>
                <div class="col-xs-6 col-md-6" style="background-color:white;">
                  <select class="form-control" id="Selector_Sexo" onchange ="Cambio_Selector(this)">
                    <option value= "Sexo">Sexo</option>
                    <option value= "Femenino" {{ ((strcmp($select['sexo'],'Femenino')==0)?'selected':'') }}>Femenino</option>
                    <option value= "Masculino" {{ ((strcmp($select['sexo'],'Masculino')==0)?'selected':'') }}>Masculino</option>
                  </select>
                </div>

              </div>
              <div class="row">
                <div class="col-xs-6 col-md-6" style="background-color:white;">
                  <br>
                  <select class="form-control" id="Selector_Grado" onchange ="Cambio_Selector(this)">
                    <option value= "-1">Grado</option>
                    @for($i = 1; $i <= 6; $i++)
                      <option value="{{$i}}" {{ ((strcmp($select['grado'],$i)==0)?'selected':'') }}>{{$i}} º</option>
                    @endfor
                  </select>
                  <br>
                </div>
                <div class="col-xs-6 col-md-6" style="background-color:white;">
                  <br>
                    <select class="form-control" id="Selector_Estado" onchange ="Cambio_Selector(this)">
                      <option value= "Estado">Estado</option>
                        <?php

                          $Estados = array("Aguascalientes","Baja California","Baja California Sur","Campeche","Chiapas",
                          "Chihuahua","Coahuila","Colima","Durango","Estado de México",
                          "Guanajuato","Guerrero","Hidalgo","Jalisco","Michoacán",
                          "Morelos","Nayarit","Nuevo León","Oaxaca","Puebla",
                          "Querétaro","Quintana Roo","San Luis Potosí","Sinaloa","Sonora",
                          "Tabasco","Tamaulipas","Tlaxcala","Veracruz","Yucatán","Zacatecas");

                        ?>

                        @for($i = 0; $i < count ($Estados); $i++)
                        
                          <option value="{{$Estados[$i]}}" {{ ((strcmp($select['estado'],$Estados[$i])==0)?'selected':'') }}>{{$Estados[$i]}}</option>
                        @endfor
                    </select>
                  <br>
                </div>
              </div>
              <p class="text-green ">Nombre de tu escuela:</p>
              <input type="text" class="form-control" id="Entrada_nombre_Escuela" placeholder="" value="{{((isset($datos->escuela))?$datos->escuela:'')}}">
             <br>

            <div class="form-group shadow-textarea">
              <label for="exampleFormControlTextarea6" class="active">Cuéntanos lo que más te gustó de este libro.</label>
              <br>
              <br>
              <textarea class="form-control z-depth-1" id="Area_Texto_Comentario" rows="10" placeholder="">{{((isset($datos->descripcion))?$datos->descripcion:'')}}</textarea>
            </div>
            <button type="button" class="btn btn-block btn-default" id="Boton_Aceptar_comentarios()" onclick="almacenarInformacion()">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- /.box-body -->

    <div class="box-footer" align="center">
      <div class="btn-group">
        <button type="button" class="btn btn-default" onclick="anterior(8)"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" disabled="true"><i class="fa fa-arrow-right"></i></button>
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

  function almacenarInformacion(){
      var edad = $('#Selector_Edad').val();
      var sexo = $('#Selector_Sexo').val();
      var grado = $('#Selector_Grado').val();
      var estado = $('#Selector_Estado').val();
      var escuela = $('#Entrada_nombre_Escuela').val();
      var cometarios = $('#Area_Texto_Comentario').val();
      //$("#div_cuadro").hide();
      var success;
      var url = "/almacenar/pagina-comentarios";
      var dataForm = new FormData();
      dataForm.append('edad',edad);
      dataForm.append('sexo',sexo);
      dataForm.append('grado',grado);
      dataForm.append('estado',estado);
      dataForm.append('escuela',escuela);
      dataForm.append('cometarios',cometarios);
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

  function siguiente()
     {
       location.href = '/pagina/Tema_1_Compromiso';
     }
   function anterior()
      {
        location.href = '/pagina/Tema_1_Compromiso';
      }
    function Cambio_Selector(elemento){
      // var Tipo_Selector = elemento.id;
      // var Selector   = document. getElementById(elemento.id);
      // var valor = Selector. value;

      // switch (Tipo_Selector){
      //   case "Selector_Edad":
      //     alert("Edad: "+valor);
      //   break;
      //   case "Selector_Sexo":
      //     alert("Sexo: "+valor);
      //   break;
      //   case "Selector_Grado":
      //     alert("Grado: "+valor);
      //   break;
      //   case "Selector_Estado":
      //     alert("Estado: "+valor);
      //   break;
      //   default:
      //   break;
      // }

    }


</script>
@endsection
