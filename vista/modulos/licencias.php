  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Licencias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Licencias</li>
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevaLicencia">
                    Nuevo 
                  </button>
                </div>



              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>licencia</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                    <th>Usuario Trabajador</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php 

                  $trabajadores = ControladorLicencia::ctrMostrarLicencia();

                  foreach ($trabajadores as $key => $value) {
                    
                    echo ' <tr>

                             <td>'.($key+1).'</td>';

                    switch ($value["LicenciaTipo"]) {

                        case 1:
                            echo '<td><p>Control de tiempos</p></td>';
                            break;
                        case 2:
                            echo '<td><p>Inventor</p></td>';
                            break;
                        case 3:
                            echo '<td><p>Civil 3D</p></td>';
                            break;
                        case 4:
                            echo '<td><p>Recap Pro</p></td>';
                            break;
                        case 5:
                            echo '<td><p>Revit</p></td>';
                            break;
                        case 6:
                            echo '<td><p>NavisWorksManage</p></td>';
                            break;
                        case 7:
                            echo '<td><p>Product Ultimate Local</p></td>';
                            break;
                        case 8:
                            echo '<td><p>Building Premiun Local</p></td>';
                            break;
                        case 9:
                            echo '<td><p>Office</p></td>';
                            break;
                        case 10:
                            echo '<td><p>Bentley</p></td>';
                            break;
                        case 11:
                            echo '<td><p>XDrawer</p></td>';
                            break;
                        case 12:
                            echo '<td><p>Contapyme</p></td>';
                            break;
                        case 13:
                            echo '<td><p>Yeminus</p></td>';
                            break;
                    }                    


                    if ($value["LicenciaTipo"] == "1") {
                      echo '<td>Numero: '.$value["LicenciaEmail"].'</td>';
                    }elseif ($value["LicenciaTipo"] == "7" || $value["LicenciaTipo"] == "8" || $value["LicenciaTipo"] == "11" ) {
                      echo '<td>Key: '.$value["LicenciaEmail"].'</td>';
                    }else{
                      echo '<td>Email: '.$value["LicenciaEmail"].'</td>';
                    }

                     

                     echo '  <td>'.$clave = substr($value["LicenciaClave"], 50).'.....</td>';


                


                    if ($value["LicenciaEstado"] != 0) {
                      echo '<td style="text-align: center;"><i class="fas fa-toggle-on fa-2x" style="color: #0CC800;" ></i></td>';
                    }else{
                      echo '<td style="text-align: center;"><i class="fas fa-toggle-on fa-2x" style="color: red;" ></i></td>';
                    }   


                    echo ' <td>'.$value["IdTrabajador"].'</td>';


                    echo    '<td>

                               <div class="btn-group">


                                  <button class="btn btn-info ProductosProvedor" codeTrabajador="'.$value["IdLicencia"].'" data-toggle="modal" data-target="#modalProductosPorProvedor"><i class="fa fa-folder" ></i></button>   
                                   
                                 <button class="btn btn-warning btnEditarProvedores" codeTrabajador="'.$value["IdLicencia"].'" data-toggle="modal" data-target="#modalEditarProvedores"><i class="fas fa-edit" style="color: white;"></i></button>


                                   <button class="btn btn-danger btnEliminarProvedores" codeTrabajador="'.$value["IdLicencia"].'"><i class="fa fa-times"></i></button>

                                 

                               </div>  

                             </td>

                           </tr>';
                   }                  


                   ?>


                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>licencia</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                    <th>Usuario Trabajador</th>
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
<div class="modal fade" id="nuevaLicencia" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #343a40;">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Nueva licencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

  <form role="form" method="post">


      <div class="modal-body">

          <!--Tipo de licencia-->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01"><i class="nav-icon fas fa-th"></i></label>
            </div>
            <select class="custom-select" id="tipoLicencia" name="tipoLicencia">
              <option selected>Selecionar...</option>
              <option value="1">Control de tiempos</option>
              <option value="2">Inventor</option>
              <option value="3">Civil 3D</option>
              <option value="4">Recap Pro</option>
              <option value="5">Revit</option>
              <option value="6">NavisWorksManage</option>
              <option value="7">Product Ultimate Local</option>
              <option value="8">Building Premiun Local</option>
              <option value="9">Office</option>
              <option value="10">Bentley</option>
              <option value="11">XDrawer</option>
              <option value="12">Contapyme</option>
              <option value="13">Yeminus</option>
            </select>
          </div>

          <!--Resumen Email o KEY-->
          <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-th"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Email o KEY" aria-label="Email o KEY" id="emailkEY" name="emailkEY" aria-describedby="basic-addon1">
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
                <input type="text" class="form-control" placeholder="Clave" aria-label="Clave" id="clave" name="clave" aria-describedby="basic-addon1">
              </div>
          </div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>


        <?php

          $crearLicencia = new ControladorLicencia();
          $crearLicencia -> ctrCrearLicencia();

        ?>

  </form>




    </div>
  </div>
</div>