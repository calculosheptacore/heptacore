
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Trabajadores</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Trabajadores</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">

                <div class="d-grid gap-2 d-md-block">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IngresarTrabajador">
                    Nuevo 
                  </button>


                </div>



              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped trabajador">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Cont tiempos</th>
                    <th>Inverntor</th>
                    <th>Civil3D</th>
                    <th>RecapPro</th>
                    <th>Revit</th>
                    <th>Navis WK manage</th>
                    <th>Produc Ult Lc</th>
                    <th>Building Pre Lc</th>
                    <th>Office</th>
                    <th>Bentley</th>
                    <th>XDrawer</th>
                    <th>Contapyme</th>
                    <th>Yeminus</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php 

                  $trabajadores = ControladorTrabajador::ctrMostrarTrabajador();

                  foreach ($trabajadores as $key => $value) {
                    
                    echo ' <tr>

                             <td>'.($key+1).'</td>

                             <td>'.$value["TPrimerNombre"].'</td>

                             <td>'.$value["TPrimerApellido"].'</td>

                             <td>'.$value["TUsuario"].'</td>';

                    if ($value["TEstado"] != 0) {
                      echo '<td style="text-align: center;"><i class="fas fa-toggle-on fa-2x" style="color: #0CC800;" ></i></td>';
                    }else{
                      echo '<td style="text-align: center;"><i class="fas fa-toggle-on fa-2x" style="color: red;" ></i></td>';
                    }                               

                    if ($value["IdControlTiempos"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }

                    if ($value["IdInventor"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }                              

                    if ($value["IdCivil3D"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }

                    if ($value["IdRecapPro"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }                         

                    if ($value["IdRevit"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }                             

                    if ($value["IdNavisWorksManage"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }                              

                    if ($value["IdProductUltimateLocal"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }

                    if ($value["IdBuildingPrimiunLocal"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }                              
               
                    if ($value["IdOffice"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }

                    if ($value["IdBentley"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }                           

                    if ($value["IdXdrawer"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }                                                        

                    if ($value["IdContapyme"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }                             

                    if ($value["IdYeminus"] != 0) {
                      echo '<td style="text-align: center;"> <i class="fas fa-check nav-icon" style="color: #0CC800;"></i>  </td>';
                    }else{
                      echo '<td style="text-align: center;"> <i class="fas fa-times nav-icon"  style="color: red;"></i> </td>';
                    }    

                      echo    '<td>

                               <div class="btn-group">

                                <button class="btn btn-info TIngresarLicencias" codeTrabajador="'.$value["IdTrabajador"].'" ><i class="fa fa-folder"  ></i></button>  
 
                                   
                                 <button class="btn btn-warning " codeTrabajador="'.$value["IdTrabajador"].'" data-toggle="modal" data-target="#modalEditarProvedores"><i class="fas fa-edit" style="color: white;"></i></button>


                                   <button class="btn btn-danger " codeTrabajador="'.$value["IdTrabajador"].'"><i class="fa fa-times"></i></button>

                               </div>  

                             </td>

                           </tr>';


                                  //<button class="btn btn-info TIngresarLicencias" codeTrabajador="'.$value["IdTrabajador"].'" data-toggle="modal" data-target="#IngresarLicencias"><i class="fa fa-folder" href="trabajadores" ></i></button>  

                   }                  


                   ?>


                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Cont tiempos</th>
                    <th>Inverntor</th>
                    <th>Civil3D</th>
                    <th>RecapPro</th>
                    <th>Revit</th>
                    <th>Navis WK manage</th>
                    <th>Produc Ult Lc</th>
                    <th>Building Pre Lc</th>
                    <th>Office</th>
                    <th>Bentley</th>
                    <th>XDrawer</th>
                    <th>Contapyme</th>
                    <th>Yeminus</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<!-- Modal Ingresar Trabajador nuevo -->
<div class="modal fade selectControlTiempos" id="IngresarTrabajador" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #343a40;">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Nuevo trabajador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

  <form role="form" method="post">

      <div class="modal-body">

          <div class="row">
            <!--Primer nombre-->
              <div class="input-group mb-3 col-lg-6 col-md-12 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-th"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Primer nombre" aria-label="Primer nombre" id="primerNombre" name="primerNombre" aria-describedby="basic-addon1" required>
              </div>

              <!--segundo nombre-->
              <div class="input-group mb-3 col-lg-6 col-md-12 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-th"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Segundo nombre" aria-label="Segundo nombre" id="segundoNombre" name="segundoNombre" aria-describedby="basic-addon1" required>
              </div>
          </div>

          <div class="row">
            <!--Primer apellido-->
              <div class="input-group mb-3 col-lg-6 col-md-12 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-th"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Primer apellido" aria-label="Primer apellido" id="primerApellido" name="primerApellido" aria-describedby="basic-addon1" required>
              </div>

              <!--segundo apellido-->
              <div class="input-group mb-3 col-lg-6 col-md-12 ">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-th"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Segundo apellido" aria-label="Segundo apellido" id="segundoApellido" name="segundoApellido" aria-describedby="basic-addon1" required>
              </div>
          </div>


          <!--usuario-->
          <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-th"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" id="TUsuario" name="TUsuario" aria-describedby="basic-addon1" required>
              </div>
          </div>

          <!--Email-->
          <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-th"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" id="email" name="email" aria-describedby="basic-addon1" required>
              </div>
          </div>

          <!--Clave-->
          <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-th"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Clave" aria-label="Clave" id="clave" name="clave" aria-describedby="basic-addon1" required>
              </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>


        <?php

          $crearTrabajador = new ControladorTrabajador();
          $crearTrabajador -> ctrCrearTrabajador();

        ?>

  </form>

    </div>
  </div>
</div>



<!-- Modal Ingresar licencias-->
<div class="modal fade" id="IngresarLicencias" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #343a40;">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Asignar licencias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

  <form role="form" method="post">

      <div class="modal-body">


        <input type="text" id="IdTrabajador" hidden>
          <!--usuario-->
          <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-th"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" id="TraerUsuario"  name="TraerUsuario" aria-describedby="basic-addon1" disabled>
              </div>
          </div>


          <label for="basic-url">Control de tiempos</label>
          <div class="form-group">
              <div class="input-group mb-3">


                <select class="custom-select controlTiempos" id="controlTiempos">
                  <option value="0" selected>Seleccionar...</option>

                  <?php 

                  $tipoLicencia = "1";

                  $ControlTiempos = ControladorTrabajador::ctrMostrarLicenciaT($tipoLicencia);

                  foreach ($ControlTiempos as $key => $value) {

                    echo '<option value="'.$value["IdLicencia"].'">'.$value["LicenciaEmail"].'</option>';

                  }


                   ?>


                </select>

              </div>
          </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>


        <?php

          //$crearTrabajador = new ControladorTrabajador();
          //$crearTrabajador -> ctrCrearTrabajador();

        ?>

  </form>

    </div>
  </div>
</div>



















