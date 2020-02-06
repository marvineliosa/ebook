@extends('plantillas.menu')
@section('titulo','Catálogo')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Método ExE
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
    <div class="box-header with-border">
      <!-- <h3 class="box-title">Método ExE</h3> -->

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
        <!-- <img src="{{asset('paginas/Guia_maestro_metodo.png')}}" class="img-fluid jetzoom"  data-jetzoom ="zoomImage:'{{asset('paginas/Guia_maestro_metodoL.png')}}'" > -->
        <table class="table table-unbordered">
          <!-- <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead> -->
          <tbody>
            <tr>
              <td align="center">
                <a href="/1/1/1"><img src="{{asset('Portadas/Quinto.JPG')}}" style="max-width: 50%;margin: 0 auto;" >
                <br>
                <strong>5° Primaria</strong></a>
              </td>
              <td align="center">
                <a href="/ingles/1"><img src="{{asset('Portadas/Ingles_Cuarto.JPG')}}" style="max-width: 50%" >
                <br>
                <strong>Ethical education for life</strong>
                <br>
                <strong>4th elementary school students</strong></a>

              </td>
              <td align="center">
                <a href="/nahuatl/1"><img src="{{asset('Portadas/Nahuatl.JPG')}}" style="max-width: 50%" >
                <br>
                <strong>Náhuatl</strong>
                <br>
                <strong>Nemachtil ika uejkaunemilis</strong></a>
                <!-- <br>
                <strong>4th elementary school students</strong> -->

              </td>
            </tr>
            <tr>
              <td align="center">
                <a href="/totonaco/1"><img src="{{asset('Portadas/Totonaco.JPG')}}" style="max-width: 50%" >
                <br>
                <strong>Totonaco</strong>
                <br>
                <strong></strong></a>
              </td>
              <td align="center">

              </td>
              <td align="center">

              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer" align="center">
      <div class="btn-group">
        <!-- <button type="button" class="btn btn-default" onclick="anterior()"><i class="fa  fa-arrow-left"></i></button>
        <button type="button" class="btn btn-default" disabled><i class="fa fa-arrow-right"></i></button> -->
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
