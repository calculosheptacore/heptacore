<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Historial aerodeslizador</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Historial aerodeslizador</li>
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
<!--<button type="button" class="btn btn-azulHepta" data-toggle="modal" data-target="#IngresarUsuarios" >
                    Agregar nuevo país
                  </button>-->
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example2" class="table table-bordered table-striped tablas">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>N° Memoria de calculo</th>
                    <th>Numero de equipo</th>
                    <th>Detalle de memoria</th>
                    <th>Estado</th>
                    <th>Comentarios</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php

                  $item = null;
                  $valor = null;

                  $HistorialAerodeslizador = calcularAerodeslizador::ctrMostrarHistorialAerodeslizador($item, $valor);

                  foreach ($HistorialAerodeslizador as $key => $value){
                   
                    echo ' <tr>
                            <td>'.($key+1).'</td>
                            <td>'.$value["codigo_calculo_aerodeslizador"].'</td>
                            <td>'.$value["codigo_aerodeslizador"].'</td>';


                      echo '<td><button class="btn btn-azulHepta btn-sm validarDetalleCalculoAerodeslizador" data-toggle="modal" data-target="#detalleCalculo" idCalculoAerodeslizador="'.$value["idresultado_calculo_aerodeslizador"].'">Detalle del calculo</button></td>';

                    

                            if($value["subarea_estado"] = 0){
                              echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="" estadoUsuario="0">Activado</button></td>';

                            }else{

                              //echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="" estadoUsuario="1">Desactivado</button></td>';
                              echo '<td><button class="btn btn-warning btn-sm" >Enviado</button></td>';

                            }  

                    echo '<td><button class="btn btn-azulHepta btn-sm" >Comentarios</button></td>';



                            echo '
                              <td>
                              <div class="btn-group">';
                              echo  '<button class="btn btn-warning"  data-toggle="modal" data-target="#modalEditarUsuario" data-toggle="tooltip" data-placement="top" title="Enviar auditoria"><i class="fa fa-envelope-open-text" style="color: #ffffff;"></i></button>

                                <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Congelar"><i class="fa fa-lock"></i></button>

                                <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="PDF"><i class="fa fa-file-pdf"></i></button>

                                <button class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Tech format"><i class="fa fa-file-lines"></i></button>

                                <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Excel" id="enviarIdAerodeslizador" idexcel="'.$value["idresultado_calculo_aerodeslizador"].'"><i class="fa fa-file-excel"></i></button>


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











<!-- Modal datos de salida  -->
<div class="modal fade selectControlTiempos " id="detalleCalculo" data-backdrop="static" data-keyboard="false"  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">RESULTADOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="clearModGuardarPlanta" style="color: white;">&times;</span>
        </button>
      </div>

  

      <div class="modal-body">


        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Datos de entrada</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">

                  <div class="row">
                      <div class="col-lg-6" style="background-color: white" >

                          <!-- Datos de entrada -->
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-12">
                                <!-- Default box -->
                                <div class="card">
                                  <div class="card-header" style="background-color: #2a3c6b">
                                    <h3 class="card-title color-text-white" >Datos</h3>

                                    <div class="card-tools">
                                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus color-text-white"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <div class="card-body">

                                    <!-- Datos de entrada del Pais -->
                                    <div class="form-group">
                                      <label for="exampleInputFile">País</label>
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-earth-americas"></i>
                                            </span>
                                          </div>
                                            <select class="form-control input-lg" id="paisAerodeslizadorCalcular" name="paisAerodeslizadorCalcular" >
                                              
                                              <option value="">Selecionar Pais</option>

                                              <?php

                                              $item1 = null;
                                              $valor1 = null;

                                              $pais = ControladorPais::ctrMostrarPais($item1, $valor1);

                                              foreach ($pais as $key => $value) {
                                                
                                                echo '<option value="'.$value["codigo_pais"].'">'.$value["pais_codigo"].' - '.$value["pais_nombre_es"].'</option>';
                                              }

                                              ?>

                                            </select>
                                        </div>
                                    </div> 

                                    <!-- Datos de entrada de la planta -->
                                    <div class="form-group">
                                      <label for="exampleInputFile">Planta</label>
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-building"></i>
                                            </span>
                                          </div>
                                            <select class="form-control input-lg" id="PlantaAerodeslizadorCalcular" name="PlantaAerodeslizadorCalcular" >
                                              <option value="">Selecionar planta</option>
                                            </select>
                                        </div>
                                    </div> 

                                    <!-- Datos de entrada del proyecto -->
                                    <div class="form-group">
                                      <label for="exampleInputFile">Proyecto</label>
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-gears"></i>
                                            </span>
                                          </div>
                                            <select class="form-control input-lg" id="proyectoAerodeslizadorCalcular" name="proyectoAerodeslizadorCalcular" >
                                              
                                              <option value="">Seleciona el proyecto</option>

                                                <?php

                                                $item = null;
                                                $valor = null;

                                                $proyectos = ControladorProyectos::ctrMostrarProyectos($item, $valor);

                                                foreach ($proyectos as $key => $value) {
                                                  
                                                  echo '<option value="'.$value["proyecto_codigo"].'">'.$value["proyecto_codigo_cemex"].' - '.$value["proyecto_nombre_es"].'</option>';
                                                }

                                                ?>

                                            </select>
                                        </div>
                                    </div> 

                                    <!-- Datos de entrada del diagrama de flujo -->
                                    <div class="form-group">
                                      <label for="exampleInputFile">Diagrama de flujo</label>
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-file-circle-check"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0000000000_0A_BLC" aria-label="" id="diagramaFlujoAerodeslizadorCalcular" name="diagramaFlujoAerodeslizadorCalcular" aria-describedby="basic-addon1"  >
                                        </div>
                                    </div>

                                    <!-- Datos de entrada del codigo del aerodeslizador -->
                                    <div class="form-group">
                                      <label for="exampleInputFile">Código de aerodeslizador</label>
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-wrench"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="XXX-XX-416-XX" aria-label="" id="codigoAerodeslizadorCalcular" name="codigoAerodeslizadorCalcular" aria-describedby="basic-addon1"  >
                                        </div>
                                    </div>

                                    <!-- Datos de entrada del codigo del ventilador -->
                                    <div class="form-group">
                                      <label for="exampleInputFile">Código de ventilador</label>
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-fan"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="XXX-XX-321-XX" aria-label="" id="codigoVentiladorCalcular" name="codigoVentiladorCalcular" aria-describedby="basic-addon1"  >
                                        </div>
                                    </div>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                              </div>
                            </div>
                          </div> 

                          <!-- Condiciones de planta -->
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-12">
                                <!-- Default box -->
                                <div class="card">
                                  <div class="card-header" style="background-color: #2a3c6b">
                                    <h3 class="card-title color-text-white">Condiciones de planta</h3>

                                    <div class="card-tools">
                                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus color-text-white"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <div class="card-body">

                                    <!-- Condiciones de planta   ---  Elevacion -->
                                    <div class="form-group">
                                      <label for="exampleInputFile">Elevación</label>
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-ruler-combined"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0 " id="elevacionPlantaCalculo" name="elevacionPlantaCalculo" aria-describedby="basic-addon1"  readonly>
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">m</i>
                                              </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Condiciones de planta   ---  Temperatura minima -->
                                   <label for="exampleInputFile">Temperatura minima</label>                
                                     <div class="row">
                                      <div class="col-lg-6">
                                         <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">
                                                <i class="nav-icon fas fa-temperature-low"></i>
                                              </span>
                                            </div>
                                            <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="temperaturaMinC_Calculo" name="temperaturaMinC_Calculo" aria-describedby="basic-addon1"  readonly>
                                              <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                  <i class="nav-icon ">°C</i>
                                                </span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-temperature-low"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="temperaturaMinF_Calculo" name="temperaturaMinF_Calculo" aria-describedby="basic-addon1"  readonly>
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">°F</i>
                                              </span>
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Condiciones de planta   ---  Temperatura promedio -->
                                    <label for="exampleInputFile">Temperatura promedio</label>                     
                                     <div class="row">
                                      <div class="col-lg-6">                                        
                                         <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">
                                                <i class="nav-icon fas fa-temperature-low"></i>
                                              </span>
                                            </div>
                                            <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="temperaturaProC_Calculo" name="temperaturaProC_Calculo" aria-describedby="basic-addon1"  readonly>
                                              <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                  <i class="nav-icon ">°C</i>
                                                </span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-temperature-low"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="temperaturaProF_Calculo" name="temperaturaProF_Calculo" aria-describedby="basic-addon1"  readonly>
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">°F</i>
                                              </span>
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Condiciones de planta   ---  Temperatura maxima -->
                                    <label for="exampleInputFile">Temperatura maxima</label>                     
                                     <div class="row">
                                      <div class="col-lg-6">             
                                         <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">
                                                <i class="nav-icon fas fa-temperature-low"></i>
                                              </span>
                                            </div>
                                            <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="temperaturaMaxC_Calculo" name="temperaturaMaxC_Calculo" aria-describedby="basic-addon1"  readonly>
                                              <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                  <i class="nav-icon ">°C</i>
                                                </span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">                                       
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-temperature-low"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="temperaturaMaxF_Calculo" name="temperaturaMaxF_Calculo" aria-describedby="basic-addon1"  readonly>
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">°F</i>
                                              </span>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                              </div>
                            </div>
                          </div> 

                      </div>
                      
                      <div class="col-lg-6" style="background-color: white">

                        <!-- Caracterización de material  -->
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-12">
                              <!-- Default box -->
                              <div class="card">
                                <div class="card-header" style="background-color: #2a3c6b">
                                  <h3 class="card-title color-text-white">Caracterización de material</h3>

                                  <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                      <i class="fas fa-minus color-text-white"></i>
                                    </button>
                                  </div>
                                </div>
                                <div class="card-body">

                                  <!-- Caracterización de material  --- Material -->
                                  <div class="form-group">
                                    <label for="">Material</label>
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-briefcase"></i>
                                          </span>
                                        </div>
                                          <select class="form-control input-lg" id="MaterialCalcular" name="MaterialCalcular" >
                                            
                                            <option value="">Selecionar material</option>

                                              <?php

                                              $item1 = null;
                                              $valor1 = null;
                                              $pais = ControladorMateriales::ctrMostrarMateriales($item1, $valor1);
                                              foreach ($pais as $key => $value) {                                             
                                                echo '<option value="'.$value["MaterialID"].'">'.$value["MaterialName"].'</option>';
                                              }

                                              ?>
                            
                                          </select>
                                      </div>
                                  </div> 

                                  <!-- Caracterización de material  --- Densidad de transporte -->
                                  <label for="exampleInputFile">Densidad de transporte</label>                     
                                   <div class="row">
                                    <div class="col-lg-6">
                                      
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-water"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="density_Transport_kg_m3_Calcular" name="density_Transport_kg_m3_Calcular" aria-describedby="basic-addon1"  readonly>
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">kg/m³</i>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                      
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-water"></i>
                                          </span>
                                        </div>
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="densidad_Transport_lb_ft3_Calcular" name="densidad_Transport_lb_ft3_Calcular" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">lb/ft³</i>
                                            </span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Caracterización de material  --- Densidad de material aireado -->
                                  <label for="exampleInputFile">Densidad de material aireado</label>                     
                                   <div class="row">
                                    <div class="col-lg-6">
                                      
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-water"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="density_MaterialAreado_kg_m3_Calcular" name="density_MaterialAreado_kg_m3_Calcular" aria-describedby="basic-addon1"  readonly>
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">kg/m³</i>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                      
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-water"></i>
                                          </span>
                                        </div>
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="density_MaterialAreado_lb_ft3_Calcular" name="density_MaterialAreado_lb_ft3_Calcular" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">lb/ft³</i>
                                            </span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Caracterización de material  --- Densidad de material aireado -->
                                  <div class="form-group">
                                      <label for="exampleInputFile">Angulo de reposo</label>
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-ruler-combined"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="anguloReposoCalcular" name="anguloReposoCalcular" aria-describedby="basic-addon1"  readonly>
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">°</i>
                                              </span>
                                            </div>
                                        </div>
                                  </div>

                                  <!-- Caracterización de material  --- Humedad -->
                                  <label for="exampleInputFile">Humedad</label>                     
                                   <div class="row">
                                    <div class="col-lg-6">                               
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-water"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="Humedad_P_P_Calcular" name="Humedad_P_P_Calcular" aria-describedby="basic-addon1" >
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">% p/p</i>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                      
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-water"></i>
                                          </span>
                                        </div>
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="Humedad_W_W_Calcular" name="Humedad_W_W_Calcular" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">% w/w</i>
                                            </span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Caracterización de material  --- Temperatura de material -->
                                  <label for="exampleInputFile">Temperatura de material</label>                     
                                   <div class="row">
                                    <div class="col-lg-6">                            
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-temperature-low"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="temperaturaMaterial_C_Calcular" name="temperaturaMaterial_C_Calcular" aria-describedby="basic-addon1"  >
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">°C</i>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">                                      
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-temperature-low"></i>
                                          </span>
                                        </div>
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="temperaturaMaterial_F_Calcular" name="temperaturaMaterial_F_Calcular" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">°F</i>
                                            </span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>                                  
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                            </div>
                          </div>
                        </div> 


                        <!-- Aerodeslizador  -->
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-12">
                              <!-- Default box -->
                              <div class="card">
                                <div class="card-header" style="background-color: #2a3c6b">
                                  <h3 class="card-title color-text-white">Aerodeslizador</h3>

                                  <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                      <i class="fas fa-minus color-text-white"></i>
                                    </button>
                                  </div>
                                </div>
                                <div class="card-body">

                                  <!-- Aerodeslizador --- Capacidad de operacion  (C.O.) -->
                                  <label for="exampleInputFile">Capacidad de operacion  (C.O.)</label>                     
                                   <div class="row">
                                    <div class="col-lg-6">                                      
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-mound"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadOperacion_tph_Calcular" name="capacidadOperacion_tph_Calcular" aria-describedby="basic-addon1"  >
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">tph</i>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">                                      
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-mound"></i>
                                          </span>
                                        </div>
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadOperacion_stph_Calcular" name="capacidadOperacion_stph_Calcular" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">stph</i>
                                            </span>
                                          </div>
                                      </div>
                                    </div>
                                  </div> 

                                  <!-- Aerodeslizador --- Inclinación -->
                                  <label for="exampleInputFile">Inclinación</label>                     
                                   <div class="row">
                                    <div class="col-lg-6">                                      
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-brands fa-stack-overflow"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="InclinacionCalcular" name="InclinacionCalcular" aria-describedby="basic-addon1"  >
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">°</i>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">                                      
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-brands fa-stack-overflow"></i>
                                          </span>
                                        </div>
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="InclinacionCalcular2" name="InclinacionCalcular2" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">°</i>
                                            </span>
                                          </div>
                                      </div>
                                    </div>
                                  </div>  

                                  <!-- Aerodeslizador --- Longitud -->
                                  <label for="exampleInputFile">Longitud</label>                     
                                   <div class="row">
                                    <div class="col-lg-6">                                      
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-ruler-horizontal"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="longitud_mm_Calcular" name="longitud_mm_Calcular" aria-describedby="basic-addon1"  >
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="basic-addon2">
                                                <i class="nav-icon ">mm</i>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">                                      
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-ruler-horizontal"></i>
                                          </span>
                                        </div>
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="longitud_ft_Calcular" name="longitud_ft_Calcular" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">ft</i>
                                            </span>
                                          </div>
                                      </div>
                                    </div>
                                  </div> 

                                    <!-- Efeciencia -->
                                    <div class="form-group">
                                      <label for="exampleInputFile">Efeciencia</label>
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-fan"></i>
                                            </span>
                                          </div>
                                          <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="eficiencia_Ventilador_Calcular" name="eficiencia_Ventilador_Calcular" aria-describedby="basic-addon1"  >
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">%</i>
                                            </span>
                                          </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                            </div>
                          </div>
                        </div> 

                      </div>
                  </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div> 


        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Detalle del calculo</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">

                  
                  <div class="row">
                      <div class="col-lg-6" style="background-color: white" >
                          <div class="row">
                              <div class="col-lg-12" >
                                  <div class="card">
                                    <div class="card-header" style="background-color: #2a3c6b">
                                      <h3 class="card-title color-text-white" >Datos del material</h3>

                                      <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                          <i class="fas fa-minus color-text-white"></i>
                                        </button>
                                      </div>
                                    </div>
                                      <div class="card-body">

                                        <div class="form-group">
                                          <label for="">Material</label>
                                            <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                  <i class="nav-icon fas fa-briefcase"></i>
                                                </span>
                                              </div>
                                                <select class="form-control input-lg" id="nombreMaterial" name="nombreMaterial" disabled>
                                                                                  
                                                </select>
                                            </div>
                                        </div> 

                                        <div class="row">
                                          <div class="col-lg-6">
                                            <label for="exampleInputFile">Densidad</label>
                                             <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon1">
                                                    <i class="nav-icon fas fa-water"></i>
                                                  </span>
                                                </div>
                                                <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="densidad_Transport_kg_m3" name="densidad_Transport_kg_m3" aria-describedby= "basic-addon1"  disabled>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                      <i class="nav-icon ">t/m³</i>
                                                    </span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-6">
                                            <label for="exampleInputFile">.</label>
                                             <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon1">
                                                    <i class="nav-icon fas fa-water"></i>
                                                  </span>
                                                </div>
                                                <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="densidad_Transport_lb_ft3" name="densidad_Transport_lb_ft3" aria-describedby="basic-addon1"  disabled>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                      <i class="nav-icon ">lb/ft³</i>
                                                    </span>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="exampleInputFile">Temperatura</label>
                                           <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                  <i class="nav-icon fas fa-temperature-low"></i>
                                                </span>
                                              </div>
                                              <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="temperaturaMaterial" name="temperaturaMaterial" aria-describedby="basic-addon1" readonly>
                                                <div class="input-group-append">
                                                  <span class="input-group-text" id="basic-addon2">
                                                    <i class="nav-icon ">°C</i>
                                                  </span>
                                                </div>
                                            </div>
                                        </div>

                                      </div>
                                  </div>

                              </div>
                              <div class="col-lg-12" >
                                  <div class="card">
                                    <div class="card-header" style="background-color: #2a3c6b">
                                      <h3 class="card-title color-text-white" >Capacidad del aerodeslizador</h3>

                                      <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                          <i class="fas fa-minus color-text-white"></i>
                                        </button>
                                      </div>
                                    </div>
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <label for="exampleInputFile">Capacidad del diseño</label>
                                             <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon1">
                                                    <i class="nav-icon fas fa-warehouse"></i>
                                                  </span>
                                                </div>
                                                <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadDiseno_tph" name="capacidadDiseno_tph" aria-describedby= "basic-addon1"  readonly>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                      <i class="nav-icon ">tph</i>
                                                    </span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-6">
                                            <label for="exampleInputFile">.</label>
                                             <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon1">
                                                    <i class="nav-icon fas fa-warehouse"></i>
                                                  </span>
                                                </div>
                                                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="capacidadDiseno_stph" name="capacidadDiseno_stph" aria-describedby="basic-addon1"  readonly>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                      <i class="nav-icon ">stph</i>
                                                    </span>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="exampleInputFile">Factor Cemex</label>
                                           <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                  <i class="nav-icon fas fa-gem"></i>
                                                </span>
                                              </div>
                                              <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="factorCemex" name="factorCemex" value="1.25" aria-describedby="basic-addon1"  readonly>
                                            </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-lg-6">
                                            <label for="exampleInputFile">Capacidad de operación</label>
                                             <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon1">
                                                    <i class="nav-icon fas fa-warehouse"></i>
                                                  </span>
                                                </div>
                                                <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadOperacion_tph" name="capacidadOperacion_tph" aria-describedby= "basic-addon1"  readonly>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                      <i class="nav-icon ">tph</i>
                                                    </span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-6">
                                            <label for="exampleInputFile">.</label>
                                             <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon1">
                                                    <i class="nav-icon fas fa-warehouse"></i>
                                                  </span>
                                                </div>
                                                <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadOperacion_stph" name="capacidadOperacion_stph" aria-describedby="basic-addon1"  readonly>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                      <i class="nav-icon ">stph</i>
                                                    </span>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                          <br>
                                          <br>
                                          <br>
                                          <br>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6" style="background-color: white">
                        <div class="card">
                          <div class="card-header" style="background-color: #2a3c6b">
                            <h3 class="card-title color-text-white" >Tamaño de aerodeslizador</h3>

                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus color-text-white"></i>
                              </button>
                            </div>
                          </div>
                          <br>
                            <div class="card-body">

                              <div class="form-group">
                                <label for="exampleInputFile">Inclinación</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">
                                        <i class="nav-icon fas fa-lines-leaning"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="calculoInclinacion" name="calculoInclinacion" aria-describedby="basic-addon1"  readonly>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">°</i>
                                        </span>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputFile">Flujo de material</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">
                                        <i class="nav-icon fas fa-faucet-drip"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="flujoMaterial_m3_h" name="flujoMaterial_m3_h" aria-describedby="basic-addon1"  readonly>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">m³/h</i>
                                        </span>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                <div class="col-lg-6">
                                  <label for="exampleInputFile">Tamaño A</label>
                                   <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                          <i class="nav-icon fas fa-ruler-vertical"></i>
                                        </span>
                                      </div>
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="tamanoA" name="tamanoA" aria-describedby= "basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">mm</i>
                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                  <label for="exampleInputFile">Tamaño B</label>
                                   <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                          <i class="nav-icon fas fa-solid fa-b"></i>
                                        </span>
                                      </div>
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="tamanoB" name="tamanoB" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">mm</i>
                                          </span>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputFile">Tamaño C</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">
                                        <i class="nav-icon fas fa-solid fa-c"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="tamanoC" name="tamanoC" aria-describedby="basic-addon1"  readonly>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">mm</i>
                                        </span>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputFile">Tamaño D</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">
                                        <i class="nav-icon fas fa-solid fa-d"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="tamanoD" name="tamanoD" aria-describedby="basic-addon1"  readonly>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">mm</i>
                                        </span>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputFile">Ancho</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">
                                        <i class="nav-icon fas fa-ruler-vertical"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="anchoAerodeslizador" name="anchoAerodeslizador" aria-describedby="basic-addon1"  readonly>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">mm</i>
                                        </span>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputFile">Longitud</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">
                                        <i class="nav-icon fas fa-ruler-vertical"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="longitudAerodeslizador" name="longitudAerodeslizador" aria-describedby="basic-addon1" readonly >
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">mm</i>
                                        </span>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputFile">Área de tela</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">
                                        <i class="nav-icon fas fa-chart-area"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="AreaTela_aerodeslizador" name="AreaTela_aerodeslizador" aria-describedby="basic-addon1"  readonly>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">m²</i>
                                        </span>
                                      </div>
                                  </div>
                              </div>


                            </div>
                        </div>
                      </div>
                  </div>


                  <div class="row">
                      <div class="col-lg-12" style="background-color: white">

                          <img src="vista/dist/img/hepta/imagen_aerodeslizador.jpeg" alt="" class="mx-auto d-block img-fluid">

                      </div>
                      
                  </div>


                  <div class="row">
                      <div class="col-lg-6" style="background-color: white">
                          <div class="card">
                            <div class="card-header" style="background-color: #2a3c6b">
                              <h3 class="card-title color-text-white" >Capacidad del ventilador</h3>

                              <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                  <i class="fas fa-minus color-text-white"></i>
                                </button>
                              </div>
                            </div>

                              <div class="card-body">

                                <label for="exampleInputFile">Flujo de aire requerido por area de tela</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-wind"></i>
                                            </span>
                                          </div>                                      
                                          <input type="text" class="form-control UserName" value="10" aria-label="" id="flujo_Aire_Area_Tela_Scfm_ft2" name="flujo_Aire_Area_Tela_Scfm_ft2" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">Scfm/ft²</i> 
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-wind"></i>
                                            </span>
                                          </div> 
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="flujo_Aire_Area_Tela_Nm3_h_m2" name="flujo_Aire_Area_Tela_Nm3_h_m2" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-prepend">
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">Nm³/h.m²</i> 
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div> 

                              <div class="form-group">
                                <label for="exampleInputFile">Flujo de aire normal</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">
                                        <i class="nav-icon fas fa-fan"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="flujo_Aire_Normal" name="flujo_Aire_Normal" aria-describedby="basic-addon1"  readonly>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">Nm³/h</i>
                                        </span>
                                      </div>
                                  </div>
                              </div>


                                <label for="exampleInputFile">Presión (g)</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-square-parking"></i>
                                            </span>
                                          </div>                                      
                                          <input type="text" class="form-control UserName" value="508" aria-label="" id="presion_g_mm_H2O" name="presion_g_mm_H2O" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">mm H<sub>2</sub>O</i> 
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-square-parking"></i>
                                            </span>
                                          </div> 
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="presion_g_mbar" name="presion_g_mbar" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-prepend">
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">mbar</i> 
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div> 

                                <!-- Capacidad del ventilador --- Flujo de aire actual -->
                                <label for="exampleInputFile">Flujo de aire actual</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-wind"></i>
                                            </span>
                                          </div>                                      
                                          <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="flujoAireActual_am3_h" name="flujoAireActual_am3_h" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">Am³/h</i> 
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-wind"></i>
                                            </span>
                                          </div> 
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="flujoAireActual_acfm" name="flujoAireActual_acfm" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-prepend">
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">Acfm</i> 
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>

                              </div>
                          </div>
                      </div>

                      <div class="col-lg-6" style="background-color: white">
                        <div class="card">
                          <div class="card-header" style="background-color: #2a3c6b">
                            <h3 class="card-title color-text-white" >Potencia del ventilador</h3>

                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus color-text-white"></i>
                              </button>
                            </div>
                          </div>

                            <div class="card-body">

                              <label for="exampleInputFile">Perdida de presión</label>                     
                               <div class="row">
                                <div class="col-lg-4">
                                  
                                   <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="perdidaPresion_mbar" name="perdidaPresion_mbar" aria-describedby="basic-addon1" readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="">mbar</i> 
                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                  
                                   <div class="input-group mb-3">            
                                      <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="perdidaPresion_pa" name="perdidaPresion_pa" aria-describedby="basic-addon1" readonly>
                                      <div class="input-group-prepend">
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="">Pa</i> 
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                  
                                   <div class="input-group mb-3">            
                                      <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="perdidaPresion_In_H2O" name="perdidaPresion_In_H2O" aria-describedby="basic-addon1" readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="">in H<sub>2</sub>O</i> 
                                          </span>
                                        </div>
                                    </div>
                                </div>
                              </div> 

                                <label for="exampleInputFile">Flujo de aire actual</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-wind"></i>
                                            </span>
                                          </div>                                      
                                          <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="flujoAireActual_am3_s" name="flujoAireActual_am3_s" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">Am³/s</i> 
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-wind"></i>
                                            </span>
                                          </div> 
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="flujoAireActual_PotenciaVentilador_acfm" name="flujoAireActual_PotenciaVentilador_acfm" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-prepend">
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">Acfm</i> 
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputFile">Eficiencia</label>
                                   <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                          <i class="nav-icon fas fa-person-running"></i>
                                        </span>
                                      </div>
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="eficiencia_Ventilador" name="eficiencia_Ventilador" aria-describedby="basic-addon1"  readonly>
                                    </div>
                                </div>

                                <label for="exampleInputFile">Potencia</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-plug-circle-check"></i>
                                            </span>
                                          </div>                                      
                                          <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="potencia_kw" name="potencia_kw" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">kW</i> 
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-plug-circle-check"></i>
                                            </span>
                                          </div> 
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="potencia_hp" name="potencia_hp" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-prepend">
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">HP</i> 
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>



                            </div>
                        </div>
                      </div>
                  </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div> 

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Datos de salida</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">

                  <div class="row">
                    <div class="col-lg-6" >
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                              <div class="card-header" style="background-color: #2a3c6b">
                                <h3 class="card-title color-text-white">Aerodeslizador</h3>

                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus color-text-white"></i>
                                  </button>
                                </div>
                              </div>
                              <div class="card-body">

                                <label for="exampleInputFile">Capacidad de operación (C.O)</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadOperacion_aerodeslizador_tph" name="capacidadOperacion_aerodeslizador_tph" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">tph</i>
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                   <div class="input-group mb-3">
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadOperacion_aerodeslizador_stph" name="capacidadOperacion_aerodeslizador_stph" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">stph</i>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                </div> 

                                <label for="exampleInputFile">Capacidad de diseño (C.D)</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadDiseno_aerodeslizador_tph" name="capacidadDiseno_aerodeslizador_tph" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">tph</i>
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                   <div class="input-group mb-3">
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadDiseno_aerodeslizador_stph" name="capacidadDiseno_aerodeslizador_stph" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">stph</i>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                </div> 


                               <label for="exampleInputFile">Densidad de material</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="dencidadMaterial_Aerodeslizador_kg_m3" name="dencidadMaterial_Aerodeslizador_kg_m3" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">kg/m³</i>
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                   <div class="input-group mb-3">
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="dencidadMaterial_Aerodeslizador_lb_ft3" name="dencidadMaterial_Aerodeslizador_lb_ft3" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">lb/ft³</i>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                </div> 


                                <label for="exampleInputFile">Ancho</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="ancho_aerodeslizador_mm" name="ancho_aerodeslizador_mm" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">mm</i>
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                   <div class="input-group mb-3">
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="ancho_aerodeslizador_inches" name="ancho_aerodeslizador_inches" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">inches</i>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                </div>


                                <label for="exampleInputFile">Longitud</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="longitud_aerodeslizador_m" name="longitud_aerodeslizador_m" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">m</i>
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                   <div class="input-group mb-3">
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="longitud_aerodeslizador_ft" name="longitud_aerodeslizador_ft" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">ft</i>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <label for="exampleInputFile">Inclinación</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="inclinacion_0" name="inclinacion_0" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">°</i>
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                   <div class="input-group mb-3">
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="inclinacion_1" name="inclinacion_1" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">°</i>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                        </div>
                      </div> 
                    </div>

                    <div class="col-lg-6" >
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                              <div class="card-header" style="background-color: #2a3c6b">
                                <h3 class="card-title color-text-white">ventilador</h3>

                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus color-text-white"></i>
                                  </button>
                                </div>
                              </div>
                              <div class="card-body">

                                <label for="exampleInputFile">Capacidad de operación (C.O)</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadOperacion_Ventilador_am3_h" name="capacidadOperacion_Ventilador_am3_h" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">Am³/h</i>
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                   <div class="input-group mb-3">
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadOperacion_Ventilador_acfm" name="capacidadOperacion_Ventilador_acfm" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">Acfm</i>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                </div> 

                                <label for="exampleInputFile">Potencia (PO)</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="potencia_ventilador_kw" name="potencia_ventilador_kw" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">kW</i>
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                   <div class="input-group mb-3">
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="potencia_ventilador_hp" name="potencia_ventilador_hp" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">HP</i>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                </div> 


                               <label for="exampleInputFile">Temperatura</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="temperatura_Ventilador_C" name="temperatura_Ventilador_C" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">°C</i>
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                   <div class="input-group mb-3">
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="temperatura_Ventilador_F" name="temperatura_Ventilador_F" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">°F</i>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                </div> 


                                <label for="exampleInputFile">Presión manométrica (D.P)</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="presionManometrica_Ventilador_mm_h2o" name="presionManometrica_Ventilador_mm_h2o" aria-describedby="basic-addon1"  readonly>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="nav-icon ">mm H<sub>2</sub>O</i>
                                            </span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    
                                   <div class="input-group mb-3">
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="presionManometrica_Ventilador_in_h2o" name="presionManometrica_Ventilador_in_h2o" aria-describedby="basic-addon1"  readonly>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="nav-icon ">in H<sub>2</sub>O</i>
                                          </span>
                                        </div>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>


































      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-danger " data-dismiss="modal">Cancelar</button>

      </div>




 

    </div>
  </div>
</div>

















