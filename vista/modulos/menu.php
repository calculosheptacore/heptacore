
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #2a3c6b">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="vista/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HEPTACORE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">,,
        <div class="image">
          <img src="vista/dist/img/anonymous.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php  echo '<p>'. $_SESSION["nombre"] .' '. $_SESSION["apellido"] .'</p>'; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-sd-card"></i>
              <p>
                Heptaprocess
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="calcularEquipos" class="nav-link">
                   <i class="far fa-solid fa-solid fa-toolbox"></i>
                   <p>Calcular equipos</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="historialAerodeslizador" class="nav-link">
                   <i class="far fa-solid fa-solid fa-floppy-disk"></i>
                   <p>Historial de cálculos</p>
                </a>
              </li>
            </ul>
        </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-solid fa-tags"></i>
              <p>
                Web tag
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="detalleCalculoaerodeslizador" class="nav-link">
                  <i class="far fa-solid fa-tag"></i>
                  <p>TAG equipos</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tagplanos" class="nav-link">
                  <i class="far fa-solid fa-tag"></i>
                  <p>TAG planos</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tagdocumentos" class="nav-link">
                  <i class="far fa-solid fa-tag"></i>
                  <p>TAG documentos</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="trasmital" class="nav-link">
                  <i class="far fa-solid fa-tag"></i>
                  <p>Trasmital</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-book-open-reader"></i>
                <p>
                  Biblioteca
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tamanosAerodeslizador" class="nav-link">
                  <i class="far fa-solid fa-hat-cowboy-side"></i>
                  <p>Tamaños aerodeslizador</p>
                </a>
              </li>
          </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="tamanosAerodeslizador" class="nav-link">
                    <i class="far fa-solid fa-solid fa-leaf"></i>
                    <p>Condiciones normales</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="condicionesestandar" class="nav-link">
                    <i class="far fa-solid fa-solid fa-leaf"></i>
                    <p>Condiciones estandar</p>
                  </a>
                </li>
              </ul>
            </li>

        <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-layer-group"></i>
                  <p>
                    Módulos
                    <i class="fas fa-angle-left right"></i>
                  </p>
              </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pais" class="nav-link">
                    <i class="far fa-solid fa-flag"></i>
                    <p>Países</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="planta" class="nav-link">
                    <i class="far fa-solid fa-user-group"></i>
                    <p>Planta</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="equipo" class="nav-link">
                    <i class="far fa-solid fa-cubes"></i>
                    <p>Equipos</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="materiales" class="nav-link">
                    <i class="far fa-solid fa-dolly"></i>
                    <p>Materiales</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="departamentos" class="nav-link">
                    <i class="far fa-solid fa-clone"></i>
                    <p>Departamentos</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="proyectos" class="nav-link">
                    <i class="far fa-solid fa-diagram-project"></i>
                    <p>Proyecto</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="equipo" class="nav-link">
                    <i class="far fa-solid fa-toolbox"></i>
                    <p>Equipos</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="departamento" class="nav-link">
                    <i class="far fa-solid fa-hard-drive"></i>
                    <p>Departamentos</p>
                  </a>
                </li>
              </ul>

            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-users-gear"></i>
                  <p>
                    Control de usuarios
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="usuarios" class="nav-link">
                      <i class="far fa-solid fa-user-group"></i>
                      <p>Usuarios</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="log" class="nav-link">
                      <i class="far fa-solid fa-satellite-dish"></i>
                      <p>Log</p>
                    </a>
                  </li>
                </ul>
              </li>
              </ul>
            </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  