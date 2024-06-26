
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Materiales</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Materiales</li>
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
                  <button type="button" class="btn btn-azulHepta" data-toggle="modal" data-target="#IngresarUsuarios" >
                    Agregar nuevo material
                  </button>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example2" class="table table-bordered table-striped tablas">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Ang reposo°</th>
                    <th>Ang sobrecarga°</th>
                    <th>Dens de transporte y almacenamiento</th>
                    <th>Dens aireada</th>
                    <th>Cap calorifica J/K</th>
                    <th>Peso especifico N/m³</th>
                    <th>Minimum_Size_mm</th>
                    <th>Maximum_Size_mm</th>
                    <th>Plana</th>
                    <th>Año</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

<?php

                  $item = null;
                  $valor = null;

                  $meteriales = ControladorMateriales::ctrMostrarMateriales($item, $valor);


                 foreach ($meteriales as $key => $value){

                    echo ' <tr>
                            <td>'.($key+1).'</td>
                            <td>'.$value["MaterialName"].'</td>
                            <td>'.$value["Respose_Angle"].'</td>
                            <td>'.$value["Overload_Angle"].'</td>';

                    echo '  <td><button type="button" class="btn btn-azulHepta btn-sm btnValidarDensidad" MaterialId="'.$value["MaterialID"].'" data-toggle="modal" data-target="#validarDensiadad" > Densidades </button></td>';
                    echo '  <td><button type="button" class="btn btn-azulHepta btn-sm btnValidarDensidad" MaterialId="'.$value["MaterialID"].'" data-toggle="modal" data-target="#validarDensidad" > Densidades </button></td>';
                    echo '  <td>'.$value["Heat_Capacity_J_K"].'</td>
                            <td>'.$value["Specific_Weight_NM"].'</td>
                            <td>'.$value["Minimum_Size_mm"].'</td>
                            <td>'.$value["Plant"].'</td>
                            <td>'.$value["Plant"].'</td>
                            <td>'.$value["Density_aerated_lb_ft3"].'</td>';


                            if($value["MaterialState"] != 0){

                              echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="" estadoUsuario="0">Activado</button></td>';

                            }else{

                              echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="" estadoUsuario="1">Desactivado</button></td>';

                            }

                            echo '
                              <td>

                              <div class="btn-group">';


                              echo  '<button class="btn btn-warning btnEditarUsuario"  data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-edit" style="color: #ffffff;"></i></i></button>

                                <button class="btn btn-danger btnEliminarUsuario" ><i class="fa fa-times"></i></button>
                              </div>
                            </td>
                          </tr>';
                  }

                  ?>

                  </tbody>

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



<!-- Modal Ingresar nuevo material -->
<div class="modal fade selectControlTiempos" id="IngresarUsuarios" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Agregar nuevo material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="clearRegisterUser" style="color: white;">&times;</span>
        </button>
      </div>

  <form role="form" method="post">

    <!--Valor de envio -->
    <input type="text" class="" id="envioUsuario" name="envioUsuario" hidden>
    <input type="text" class="" id="envioCorreo" name="envioCorreo" hidden>


      <div class="modal-body">
          <!--Email-->
          <div class="row">
          <div class="form-group col-lg-4">
            <label for="exampleInputFile">Nombre de material</label>
            <div class="col-lg-12">
              <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" placeholder="Nombre de material" aria-label="" id="#" name="GTempMinC" aria-describedby="basic-addon1" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">
                      <i class="fa-solid fa-ruler-combined"><b></b>&nbsp; </i> 
                    </span>
                  </div>
              </div>
            </div>
            </div>

          <div class="form-group col-lg-4">
            <label for="exampleInputFile">Angulo de reposo</label>
            <div class="col-lg-12">
              <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" placeholder="Por vafor ingrese un valor" aria-label="" id="#" name="GTempMinC" aria-describedby="basic-addon1" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">
                      <i class="fa-solid fa-ruler-combined"><b></b>&nbsp; </i> 
                    </span>
                  </div>
              </div>
            </div>
            </div>

          <div class="form-group col-lg-4">
            <label for="exampleInputFile">Angulo de sobrecarga</label>
            <div class="col-lg-12">
              <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" placeholder="Por vafor ingrese un valor" aria-label="" id="#" name="GTempMinC" aria-describedby="basic-addon1" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">
                      <i class="fa-solid fa-ruler-combined"><b></b>&nbsp; </i> 
                    </span>
                  </div>
              </div>
            </div>
            </div>
          </div>


          <label for="exampleInputFile">Densidad de transporte</label>                     
       <div class="row">
        <div class="col-lg-6">
          
           <div class="input-group mb-3">
                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="#" name="GTempMinC" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> kg/m³ </b>&nbsp; </i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="#" name="GTempMinK" aria-describedby="basic-addon1" required>
              <div class="input-group-prepend">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                  <i class=""><b> lb/ft³ </b>&nbsp; </i> 
                  </span>
                </div>
              </div>
            </div>
        </div>        
      </div> 

       <!-- Temperatura promedio -->  
      <label for="exampleInputFile">Densidad de almacenamiento</label>                     
       <div class="row">
        <div class="col-lg-6">
          
           <div class="input-group mb-3">
                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="#" name="GTempProC" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b>kg/m³</b>&nbsp; </i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="#" name="GTempProK" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                  <i class=""><b>lb/ft³</b>&nbsp; </i> 
                  </span>
                </div>
            </div>
        </div>
      </div>


      <!-- Densidad aireada -->  
      <label for="exampleInputFile">Densidad aireada</label>                     
       <div class="row">
        <div class="col-lg-6">
          
           <div class="input-group mb-3">
                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="#" name="GTempProC" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b>kg/m³</b>&nbsp; </i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="#" name="GTempProK" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                  <i class=""><b>lb/ft³</b>&nbsp; </i> 
                  </span>
                </div>
            </div>
        </div>
      </div>

      <div class="row">
          <div class="form-group col-lg-6">
            <label for="exampleInputFile">Heat_Capacity_J_K</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-user"></i>
                  </span>
                </div>
                <input type="number" class="form-control UserName" placeholder="Nombre" aria-label="" id="usuario" name="usuario" aria-describedby="basic-addon1">
              </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="exampleInputFile">Specific_Weight_NM</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="far fa-circle nav-icon"></i>
                  </span>
                </div>
                <input type="number" class="form-control" placeholder="Ang reposo" aria-label="Email" id="userNombre" name="userNombre" aria-describedby="basic-addon1" required>
              </div>
          </div>
          </div>


          <div class="row">
          <div class="form-group col-lg-6">
            <label for="exampleInputFile">Minimum_Size_mm</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-user"></i>
                  </span>
                </div>
                <input type="number" class="form-control UserName" placeholder="Nombre" aria-label="" id="usuario" name="usuario" aria-describedby="basic-addon1">
              </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="exampleInputFile">Maximum_Size_mm</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="far fa-circle nav-icon"></i>
                  </span>
                </div>
                <input type="number" class="form-control" placeholder="Maximum size" aria-label="Email" id="#" name="userNombre" aria-describedby="basic-addon1" required>
              </div>
          </div>
          </div>

          <div class="row">
          <div class="form-group col-lg-6">
            <label for="exampleInputFile">Planta</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-user"></i>
                  </span>
                </div>
                <input type="number" class="form-control UserName" placeholder="Planta" aria-label="" id="#" name="planta" aria-describedby="basic-addon1">
              </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="exampleInputFile">Año</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="far fa-circle nav-icon"></i>
                  </span>
                </div>
                <input type="number" class="form-control" placeholder="Año" aria-label="Email" id="userNombre" name="userNombre" aria-describedby="basic-addon1" required>
              </div>
          </div>
          </div>


       


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger clearRegisterUser" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-azulHepta ">Guardar</button>
      </div>


        <?php

          //$crearUsuario = new ControladorUsuarios();
          //$crearUsuario -> ctrCrearUsuario();

        ?>

  </form>

    </div>
  </div>
</div>


<!-- Modal para visualizar las densidades -->

<div class="modal fade selectControlTiempos" id="validarDensiadad" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Densidades</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-lg-12">
              <input type="text" readonly class="form-control-plaintext" id="DEN_TRANSPORTE_KG_m3" name="DEN_TRANSPORTE_KG" placeholder=" 0 Kg m3">
            </div>
            <div class="col-lg-12">
              <input type="text" readonly class="form-control-plaintext" id="DEN_TRANSPORTE_lb_ft3" name="DEN_TRANSPORTE_lb_ft3" placeholder=" 0 lb ft3">
            </div>
            <div class="col-lg-12">
              <input type="text" readonly class="form-control-plaintext" id="DEN_ALMANECANIENTO_kg_m3" name="DEN_ALMANECANIENTO_kg_m3" placeholder=" 0 Kg m3">
            </div>
            <div class="col-lg-12">
              <input type="text" readonly class="form-control-plaintext" id="DEN_ALMACENAMIENTO_lb_ft3" name="DEN_ALMACENAMIENTO_lb_ft3" placeholder=" 0 lb ft3">
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Atras</button>
      </div>


    </div>
  </div>
</div>

<!-- Modal para visualizar las densidades aireadas -->

<div class="modal fade selectControlTiempos" id="validarDensidad" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Densidades Aireadas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-lg-12">
              <input type="text" readonly class="form-control-plaintext" id="DEN_AIREADA_KG_M3" name="DEN_AIREADA_KG" placeholder=" 0 Kg m3">
            </div>
            <div class="col-lg-12">
              <input type="text" readonly class="form-control-plaintext" id="DEN_AIREADA_LB_FT3" name="DEN_AIREADA_LB_FT3" placeholder=" 0 lb ft3">
            </div>            
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Atras</button>
      </div>


    </div>
  </div>
</div>



















