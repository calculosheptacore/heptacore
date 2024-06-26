
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Aerodeslizador</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Aerodeslizador</li>
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

                  <div class="row">
                    <div class="col-lg-4">
                      <label for="exampleInputFile">Planta</label>
                       <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="nav-icon fas fa-building"></i>
                            </span>
                          </div>
                            <select class="form-control input-lg" id="PlantaAerodeslizador" name="PlantaAerodeslizador" required>
                              
                              <option value="">Selecionar planta</option>

                              <?php

                              $item1 = null;
                              $valor1 = null;

                              $pais = ControladorPlanta::ctrMostrarPlanta($item1, $valor1);

                              foreach ($pais as $key => $value) {
                                
                                echo '<option value="'.$value["PlantID"].'">'.$value["PlantCodeCemex"].' - '.$value["PlantName"].'</option>';
                              }

                              ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <label for="exampleInputFile">País</label>
                       <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="nav-icon fas fa-earth-americas"></i>
                            </span>
                          </div>
                            <select class="form-control input-lg" id="paisAerodeslizador" name="paisAerodeslizador" required>
                              
                              <option value="">Selecionar Pais</option>

                              <?php

                              $item1 = null;
                              $valor1 = null;

                              $pais = ControladorPais::ctrMostrarProvedorPais($item1, $valor1);

                              foreach ($pais as $key => $value) {
                                
                                echo '<option value="'.$value["codigo_pais"].'">'.$value["pais_codigo_cemex"].' - '.$value["pais_nombre_es"].'</option>';
                              }

                              ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <label for="exampleInputFile">Código del equipo</label>
                       <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="nav-icon fas fa-bars-staggered"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="" name="" aria-describedby="basic-addon1" required disabled>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                  <div class="row">
                      <div class="col-lg-6" style="background-color: white" >
                          <div class="row">
                              <div class="col-lg-12" >
                                  <div class="card">
                                    <div class="card-header">
                                      Datos del material
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
                                                <select class="form-control input-lg" id="nombreMaterial" name="nombreMaterial" required>
                                                  
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

                                        <div class="row">
                                          <div class="col-lg-6">
                                            <label for="exampleInputFile">Densidad</label>
                                             <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon1">
                                                    <i class="nav-icon fas fa-water"></i>
                                                  </span>
                                                </div>
                                                <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="densidad_Transport_kg_m3" name="densidad_Transport_kg_m3" aria-describedby= "basic-addon1" required disabled>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                      <i class="nav-icon ">t/m3</i>
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
                                                <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="densidad_Transport_lb_ft3" name="densidad_Transport_lb_ft3" aria-describedby="basic-addon1" required disabled>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                      <i class="nav-icon ">lb/ft3</i>
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
                                              <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="temperaturaMaterial" name="temperaturaMaterial" aria-describedby="basic-addon1" required>
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
                                    <div class="card-header">
                                      Capacidad del aerodeslizador
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
                                                <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadDiseño_tph" name="capacidadDiseño_tph" aria-describedby= "basic-addon1" required disabled>
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
                                                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="capacidadDiseño_stph" name="capacidadDiseño_stph" aria-describedby="basic-addon1" required disabled>
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
                                              <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="factorCemex" name="factorCemex" value="1.25" aria-describedby="basic-addon1" required disabled>
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
                                                <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadOperacion_tph" name="capacidadOperacion_tph" aria-describedby= "basic-addon1" required >
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
                                                <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="capacidadOperacion_stph" name="capacidadOperacion_stph" aria-describedby="basic-addon1" required disabled>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                      <i class="nav-icon ">stph</i>
                                                    </span>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="exampleInputFile">Grado de llenado</label>
                                           <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                  <i class="nav-icon fas fa-glass-water"></i>
                                                </span>
                                              </div>
                                              <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="" name="" aria-describedby="basic-addon1" required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text" id="basic-addon2">
                                                    <i class="nav-icon ">%</i>
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
                          <div class="card-header">
                            Tamaño de aerodeslizador
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
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="calculoInclinacion" name="calculoInclinacion" aria-describedby="basic-addon1" required>
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
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="flujoMaterial_m3_h" name="flujoMaterial_m3_h" aria-describedby="basic-addon1" required disabled>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">m3/h</i>
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
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="tamañoA" name="tamañoA" aria-describedby= "basic-addon1" required disabled>
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
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="tamañoB" name="tamañoB" aria-describedby="basic-addon1" required disabled>
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
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="tamañoC" name="tamañoC" aria-describedby="basic-addon1" required disabled>
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
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="tamañoD" name="tamañoD" aria-describedby="basic-addon1" required disabled>
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
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="anchoAerodeslizador" name="anchoAerodeslizador" aria-describedby="basic-addon1" required disabled>
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
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="longitudAerodeslizador" name="longitudAerodeslizador" aria-describedby="basic-addon1" required >
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
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="AreaTela_aerodeslizador" name="AreaTela_aerodeslizador" aria-describedby="basic-addon1" required disabled>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">m2</i>
                                        </span>
                                      </div>
                                  </div>
                              </div>


                            </div>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-lg-6" style="background-color: white">
                          <div class="card">
                            <div class="card-header">
                              Capacidad del ventilador
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
                                          <input type="text" class="form-control UserName" value="10" aria-label="" id="flujo_Aire_Area_Tela_Scfm_ft2" name="flujo_Aire_Area_Tela_Scfm_ft2" aria-describedby="basic-addon1" required disabled>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">Scfm/ft2</i> 
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
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="flujo_Aire_Area_Tela_Nm3_h_m2" name="flujo_Aire_Area_Tela_Nm3_h_m2" aria-describedby="basic-addon1" required disabled>
                                        <div class="input-group-prepend">
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">Nm3/h.m2</i> 
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
                                    <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="flujo_Aire_Normal" name="flujo_Aire_Normal" aria-describedby="basic-addon1" required disabled>
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                          <i class="nav-icon ">Nm3/h</i>
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
                                          <input type="text" class="form-control UserName" value="508" aria-label="" id="presion_g_mm_H2O" name="presion_g_mm_H2O" aria-describedby="basic-addon1" required disabled>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">mm H2O</i> 
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
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="presion_g_mbar" name="presion_g_mbar" aria-describedby="basic-addon1" required disabled>
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

                                <label for="exampleInputFile">Flujo de aire actual</label>                     
                                 <div class="row">
                                  <div class="col-lg-6">
                                    
                                     <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                              <i class="nav-icon fas fa-wind"></i>
                                            </span>
                                          </div>                                      
                                          <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinC" name="GTempMinC" aria-describedby="basic-addon1" required disabled>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">Am3/h</i> 
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
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinK" name="GTempMinK" aria-describedby="basic-addon1" required disabled>
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
                          <div class="card-header">
                            Potencial del ventilador
                          </div>

                            <div class="card-body">

                              <label for="exampleInputFile">Perdida de presión</label>                     
                               <div class="row">
                                <div class="col-lg-4">
                                  
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-light fa-wind"></i>
                                          </span>
                                        </div> 
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinC" name="GTempMinC" aria-describedby="basic-addon1" required>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="">mbar</i> 
                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                  
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-light fa-wind"></i>
                                          </span>
                                        </div>             
                                      <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinK" name="GTempMinK" aria-describedby="basic-addon1" required>
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
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <i class="nav-icon fas fa-light fa-wind"></i>
                                          </span>
                                        </div>             
                                      <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinF" name="GTempMinF" aria-describedby="basic-addon1" required>
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2">
                                            <i class="">In H2O</i> 
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
                                          <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinC" name="GTempMinC" aria-describedby="basic-addon1" required disabled>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">Am3/s</i> 
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
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinK" name="GTempMinK" aria-describedby="basic-addon1" required disabled>
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
                                      <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="" name="" aria-describedby="basic-addon1" required >
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
                                          <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinC" name="GTempMinC" aria-describedby="basic-addon1" required disabled>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                              <i class="">KW</i> 
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
                                        <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinK" name="GTempMinK" aria-describedby="basic-addon1" required disabled>
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

                    <div class="d-grid gap-2 d-md-block">
                      <button type="button" class="btn btn-azulHepta btn-lg btn-block" data-toggle="modal" data-target="#" >
                        Realizar cálculo 
                      </button>
                    </div>
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



