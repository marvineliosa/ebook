<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/imagen_exe.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <!-- <p>Marvin Eliosa</p> -->
          @if( isset(\Session::get('usuario')[0]) )
            <p>{{ \Session::get('usuario')[0] }}</p>
          @else
            <p> Usuario </p>
          @endif
          <a href="#">Alumno/Profesor</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ</li>

        <!-- Maestros -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Maestros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Libros</a></li>
            <li><a href="/pagina/1"><i class="fa fa-circle-o"></i> Libros</a></li>
            <li><a href="/pagina/Guia_Maestro"><i class="fa fa-circle-o"></i> Guía de Maestros</a></li>
            <li><a href="/pagina/Guia_Maestro_Metodo"><i class="fa fa-circle-o"></i> Método ExE</a></li>
          </ul>
        </li>
         -->
        <!-- Maestros -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Catálogo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Libros</a></li> -->
            <li><a href="/1/1/1"><i class="fa fa-circle-o"></i> Quinto grado</a></li>
            <li><a href="/ingles/1"><i class="fa fa-circle-o"></i> Ingles</a></li>
          </ul>
        </li>
        <!-- Maestros -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Libros</a></li> -->
            <li><a href="/pagina/1"><i class="fa fa-circle-o"></i> Gestión de usuarios</a></li>
          </ul>
        </li>

        <li><a href="/salir"><i class="fa fa-sign-out"></i> <span>Salir</span></a></li>
      </ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>