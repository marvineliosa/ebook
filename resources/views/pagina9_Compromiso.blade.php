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
                  <div class="box-header with-border">
                          <h3 class="box-title">Título</h3>

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
                                                            <input type="text" class="form-control" id="Entrada_nombre" placeholder="Pon tu nombre aqui...">
                                                      </div>
                                                </div>
                                                <br>
                                                <p>
                                                      Me compremeto conmigo mismo a:
                                                </p>
                                                <input type="text" class="form-control" id="Entrada_Compromiso_individual" placeholder="Pon tu compromiso Individual aqui...">
                                                <br>
                                                <p>
                                                      Y con mi grupo a:
                                                </p>
                                                <input type="text" class="form-control" id="Entrada_Compromiso_Grupal" placeholder="Pon tu compromiso Grupal aqui...">
                                                <br>
                                                <p class="text-center">
                                                      Me acabo de comprometer<br>¿Me ayudas a cumplir mi compromiso?
                                                </p>
                                                <br>
                                                <div class="row">
                                                      <div class="col-xs-6 col-md-6" style="background-color:white;">
                                                            <p class="text-green text-center">Yo:</p>
                                                            <input type="text" class="form-control" id="Entrada_nombre_tutor_1" placeholder="Nombre de Papá">
                                                      </div>

                                                      <div class="col-xs-6 col-md-6" style="background-color:white;">
                                                            <p class="text-green text-center">Yo:</p>
                                                            <input type="text" class="form-control" id="Entrada_nombre_tutor_2" placeholder="Nombre de Mamá">
                                                      </div>
                                                </div>
                                                <br>
                                                <p class="text-center">
                                                      Otros familiares que quieran unirse a este compromiso:
                                                </p>
                                                <input type="text text-center" class="form-control" align="center" id="Entrada_familiar_1" placeholder="Nombre del familiar">
                                                <br>
                                                <input type="text text-center" class="form-control" align="center" id="Entrada_familiar_2" placeholder="Nombre del familiar">
                                                <br>
                                                <input type="text text-center" class="form-control" align="center" id="Entrada_familiar_3" placeholder="Nombre del familiar">
                                                <br>
                                                <button type="button" class="btn btn-block btn-default" id="Boton_Aceptar()">Aceptar</button>
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
                              <button type="button" class="btn btn-default" onclick="anterior()"><i class="fa  fa-arrow-left"></i></button>
                              <button type="button" class="btn btn-default" disabled='true'><i class="fa fa-arrow-right"></i></button>
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
        function siguiente()
           {
             //location.href = 'demo'+pagina+'.html';
             Alert("adelante");
           }
         function anterior()
            {
              //location.href = 'demo'+pagina+'.html';
              Alert("atras");
            }
      </script>
@endsection
