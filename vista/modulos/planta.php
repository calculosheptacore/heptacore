





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Planta</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="desple">Inicio</a></li>
              <li class="breadcrumb-item active">Planta</li>
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
                  <button type="button" class="btn btn-azulHepta" data-toggle="modal" data-target="#IngresarPlanta" >
                    Crear nueva planta
                  </button>


                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="" class="table table-bordered table-striped tablas tablaPlanta">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>País</th>
                    <th>Código cemex</th>
                    <th>Elevación</th>
                    <th>Presión</th>
                    <th>Humendad P/P</th>
                    <th>Temperatura</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                      <input type="hidden" value="" id="taplaOculta">
                     
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

<?php

  $borrarUsuario = new ControladorPlanta();
  $borrarUsuario -> ctrBorrarPlanta();

?> 

<!-- Modal Ingresar Trabajador nuevo -->
<div class="modal fade selectControlTiempos" id="IngresarPlanta" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Nueva planta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="clearModGuardarPlanta" style="color: white;">&times;</span>
        </button>
      </div>

  <form role="form" method="post">

      <div class="modal-body">
<!--hidden-->
      <input type="text" id="envioElevacion" name="envioElevacion" hidden>
      <input type="text" id="envioHumedad" name="envioHumedad" hidden>

      <input type="text" id="envioPresionMMHG" name="envioPresionMMHG" hidden>
      <input type="text" id="envioPresionPSI" name="envioPresionPSI" hidden>
      <input type="text" id="envioPresionMMH2O" name="envioPresionMMH2O" hidden>
      <input type="text" id="envioPresionPANM2" name="envioPresionPANM2" hidden>
      <input type="text" id="envioPresionBAR" name="envioPresionBAR" hidden>
      <input type="text" id="envioPresionMBAR" name="envioPresionMBAR" hidden>
      <input type="text" id="envioPresionKNM2" name="envioPresionKNM2" hidden>
      <input type="text" id="envioPresionInH2O" name="envioPresionInH2O" hidden>
      <input type="text" id="envioPresionInHG" name="envioPresionInHG" hidden>

      <input type="text" id="envioTempMinC" name="envioTempMinC" hidden>
      <input type="text" id="envioTempMinK" name="envioTempMinK" hidden>
      <input type="text" id="envioTempMinF" name="envioTempMinF" hidden>

      <input type="text" id="envioTempProC" name="envioTempProC" hidden>
      <input type="text" id="envioTempProk" name="envioTempProk" hidden>
      <input type="text" id="envioTempProF" name="envioTempProF" hidden>

      <input type="text" id="envioTempMaxC" name="envioTempMaxC" hidden>
      <input type="text" id="envioTempMaxK" name="envioTempMaxK" hidden>
      <input type="text" id="envioTempMaxF" name="envioTempMaxF" hidden>

    <!--Nombre-->
    <div class="form-group">
      <label for="exampleInputFile">Nombre</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
              <i class="nav-icon fas fa-sign-hanging"></i>
            </span>
          </div>
          <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control UserName" placeholder="Nombre de la planta" aria-label="" id="nombrePlanta" name="nombrePlanta" aria-describedby="basic-addon1" required>
        </div>
    </div>

    <!-- Codigo cemex y pais -->

      <div class="row">
        <div class="col-lg-6">
          <label for="exampleInputFile">Código cemex</label>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-bars-staggered"></i>
                </span>
              </div>
              <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control UserName" placeholder="Ingresa cod cemex" aria-label="" id="codeCemexPlanta" name="codeCemexPlanta" aria-describedby="basic-addon1" required>
            </div>
        </div>
        <div class="col-lg-6">
          <label for="exampleInputFile">País</label>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-earth-americas"></i>
                </span>
              </div>
                <select class="form-control input-lg" id="paisPlanta" name="paisPlanta" required>
                  
                  <option value="">Selecionar País</option>

                  <?php

                  $item1 = null;
                  $valor1 = null;

                  $pais = ControladorPais::ctrMostrarPais($item1, $valor1);
                  foreach ($pais as $key => $value) {                   
                    echo '<option value="'.$value["codigo_pais"].'">'.$value["pais_codigo_cemex"].' - '.$value["pais_nombre_es"].'</option>';
                  }

                  ?>
  
                </select>

                <div class="input-group-append ">

                  <button class="btn btn-azulHepta dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"></button>
                  <div class="dropdown-menu">
                    <button class="btn" type="button"  data-toggle="modal" data-target="#GuaradrPais" ><i class="nav-icon fas fa-plus"></i> Agregar País</button>

                    <div role="separator" class="dropdown-divider"></div>
                      <button class="btn" type="button"  data-toggle="modal" data-target="#GuaradrPais" ><i class="nav-icon fas fa-edit"></i> Editar País</button>
                  </div>

                </div>
            </div>
        </div>
      </div>
         
    <!-- elevacion y humedad -->

      <div class="row">
        <div class="col-lg-6">
          <label for="exampleInputFile">Elevación</label>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-ruler-combined"></i>
                </span>
              </div>
              <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="elevacionPlanta" name="elevacionPlanta" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="nav-icon ">m</i>
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
          <label for="exampleInputFile"> Humedad </label>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-thermometer"></i>
                </span>
              </div>
              <input type="text" class="form-control UserName" placeholder="0 " aria-label="" id="humedadPlanta" name="humedadPlanta" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="nav-icon ">%</i>
                  </span>
                </div>
            </div>
        </div>
      </div>

      <!-- presion -->
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card collapsed-card">
              <div class="card-header" type="button"  class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <h3 class="card-title"> <i class="fa-regular fa-clock"></i> &nbsp; Presión</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus" style="color: #2a3c6b;"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: none;">

                  <div class="row">
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="PlantaPresionMMHG" name="PlantaPresionMMHG" placeholder=" 0 mm Hg">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="PlantaPresionPSI" name="PlantaPresionPSI" placeholder=" 0 psi">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="PlantaPresionMMH2O" name="PlantaPresionMMH2O" placeholder=" 0 mm H2O">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="PlantaPresionPANM2" name="PlantaPresionPANM2" placeholder=" 0 Pa (N/m2)">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="PlantaPresionBAR" name="PlantaPresionBAR" placeholder=" 0 bar">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="PlantaPresionMBAR" name="PlantaPresionMBAR" placeholder=" 0 mbar">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="PlantaPresionKNM2" name="PlantaPresionKNM2" placeholder=" 0 kN/m2"> 
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="PlantaPresionInH2O" name="PlantaPresionInH2O" placeholder=" 0 in H20">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="PlantaPresionInHG" name="PlantaPresionInHG" placeholder=" 0 in HG">  
                      </div>
                  </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


       <!-- Temperatura minima -->  
      <label for="exampleInputFile">Temperatura mínima</label>                     
       <div class="row">
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinC" name="GTempMinC" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-c"></i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinK" name="GTempMinK" aria-describedby="basic-addon1" required>
              <div class="input-group-prepend">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="nav-icon fas fa-k"></i> 
                  </span>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMinF" name="GTempMinF" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-f"></i> 
                  </span>
                </div>
            </div>
        </div>
      </div> 

       <!-- Temperatura promedio -->  
      <label for="exampleInputFile">Temperatura promedio</label>                     
       <div class="row">
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempProC" name="GTempProC" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-c"></i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempProK" name="GTempProK" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="nav-icon fas fa-k"></i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempProF" name="GTempProF" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-f"></i> 
                  </span>
                </div>
            </div>
        </div>
      </div> 

      <!-- Temperatura maxima -->
      <label for="exampleInputFile">Temperatura Máxima</label>                     
       <div class="row">
        <div class="col-lg-4">
           <div class="input-group mb-3">
                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMaxC" name="GTempMaxC" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-c"></i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMaxK" name="GTempMaxK" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="nav-icon fas fa-k"></i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="GTempMaxF" name="GTempMaxF" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-f"></i> 
                  </span>
                </div>
            </div>
        </div>
      </div>  



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger clearModGuardarPlanta" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-azulHepta ">Guardar</button>
      </div>


        <?php

          $crearPlanta = new ControladorPlanta();
          $crearPlanta -> ctrCrearPlanta();

        ?>

  </form>

    </div>
  </div>
</div>



<!-- Modal para visualizar las temperaturas -->

<div class="modal fade selectControlTiempos" id="validarTemperatura" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Temperaturas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

      <div class="modal-body">




        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card collapsed-card">
              <div class="card-header" type="button"  class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <h3 class="card-title">Temperatura minima</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus" style="color: #2a3c6b;"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: none;">

                        <p id="TempMinC"></p>
                        <p id="TempMinK"></p>
                        <p id="TempMinF"></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card collapsed-card">
              <div class="card-header" type="button"  class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <h3 class="card-title">Temperatura promedio</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus" style="color: #2a3c6b;"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: none;">

                        <p id="TempProC"></p>
                        <p id="TempProK"></p>
                        <p id="TempProF"></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card collapsed-card">
              <div class="card-header" type="button"  class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <h3 class="card-title">Temperatura maxima</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus" style="color: #2a3c6b;"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: none;">

                        <p id="TempMaxC"></p>
                        <p id="TempMaxK"></p>
                        <p id="TempMaxF"></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Atras</button>
      </div>


    </div>
  </div>
</div>

<!-- Modal para visualizar las presiones -->

<div class="modal fade selectControlTiempos" id="validarPresion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Presión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <div class="row">
            <div class="col-lg-4">
              <input type="text" readonly class="form-control-plaintext" id="PresionMMHG" name="PresionMMHG" placeholder=" 0 mm Hg">
            </div>
            <div class="col-lg-4">
              <input type="text" readonly class="form-control-plaintext" id="PresionPSI" name="PresionPSI" placeholder=" 0 psi">
            </div>
            <div class="col-lg-4">
              <input type="text" readonly class="form-control-plaintext" id="PresionMMH2O" name="PresionMMH2O" placeholder=" 0 mm H2O">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
              <input type="text" readonly class="form-control-plaintext" id="PresionPANM2" name="PresionPANM2" placeholder=" 0 Pa (N/m2)">
            </div>
            <div class="col-lg-4">
              <input type="text" readonly class="form-control-plaintext" id="PresionBAR" name="PresionBAR" placeholder=" 0 bar">
            </div>
            <div class="col-lg-4">
              <input type="text" readonly class="form-control-plaintext" id="PresionMBAR" name="PresionMBAR" placeholder=" 0 mbar">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
              <input type="text" readonly class="form-control-plaintext" id="PresionKNM2" name="PresionKNM2" placeholder=" 0 KN/m2">
            </div>
            <div class="col-lg-4">
              <input type="text" readonly class="form-control-plaintext" id="PresionInH2O" name="PresionInH2O" placeholder=" 0 inH20">
            </div>
            <div class="col-lg-4">
              <input type="text" readonly class="form-control-plaintext" id="PresionInHG" name="PresionInHG" placeholder=" 0 inHG">  
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Atras</button>
      </div>


    </div>
  </div>
</div>



<!-- Modal editar planta -->
<div class="modal fade selectControlTiempos" id="EditarPlanta" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Editar planta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="clearRegisterUser" style="color: white;">&times;</span>
        </button>
      </div>

  <form role="form" method="post">

      <div class="modal-body">

      <input type="text" id="idPlanta" name="idPlanta" hidden>  

      <input type="text" id="editarElevacion" name="editarElevacion" hidden>
      <input type="text" id="editarHumedad" name="editarHumedad" hidden>

      <input type="text" id="editarPresionMMHG" name="editarPresionMMHG" hidden>
      <input type="text" id="editarPresionPSI" name="editarPresionPSI" hidden>
      <input type="text" id="editarPresionMMH2O" name="editarPresionMMH2O" hidden>
      <input type="text" id="editarPresionPANM2" name="editarPresionPANM2" hidden>
      <input type="text" id="editarPresionBAR" name="editarPresionBAR" hidden>
      <input type="text" id="editarPresionMBAR" name="editarPresionMBAR" hidden>
      <input type="text" id="editarPresionKNM2" name="editarPresionKNM2" hidden>
      <input type="text" id="editarPresionInH2O" name="editarPresionInH2O" hidden>
      <input type="text" id="editarPresionInHG" name="editarPresionInHG" hidden>

      <input type="text" id="editarTempMinC" name="editarTempMinC" hidden>
      <input type="text" id="editarTempMinK" name="editarTempMinK" hidden>
      <input type="text" id="editarTempMinF" name="editarTempMinF" hidden>

      <input type="text" id="editarTempProC" name="editarTempProC" hidden>
      <input type="text" id="editarTempProk" name="editarTempProk" hidden>
      <input type="text" id="editarTempProF" name="editarTempProF" hidden>

      <input type="text" id="editarTempMaxC" name="editarTempMaxC" hidden>
      <input type="text" id="editarTempMaxK" name="editarTempMaxK" hidden>
      <input type="text" id="editarTempMaxF" name="editarTempMaxF" hidden>

    <!--Nombre-->
    <div class="form-group">
      <label for="exampleInputFile">Nombre</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
              <i class="nav-icon fas fa-sign-hanging"></i>
            </span>
          </div>
          <input type="text" class="form-control UserName" placeholder="Nombre de la planta" aria-label="" id="EditarMombrePlanta" name="EditarMombrePlanta" aria-describedby="basic-addon1" required>
        </div>
    </div>

    <!-- Codigo cemex y pais -->

      <div class="row">
        <div class="col-lg-6">
          <label for="exampleInputFile">Código cemex</label>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-bars-staggered"></i>
                </span>
              </div>
              <input type="text" class="form-control UserName" placeholder="Ingresar codigo cemex" aria-label="" id="EditarCodeCemexPlanta" name="EditarCodeCemexPlanta" aria-describedby="basic-addon1" required>
            </div>
        </div>
        <div class="col-lg-6">
          <label for="exampleInputFile">País</label>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-earth-americas"></i>
                </span>
              </div>
                <select class="form-control input-lg" id="EditarPaisPlanta" name="EditarPaisPlanta" required>
                  
                  <option value="">Selecionar País</option>

                  <?php

                  $item1 = null;
                  $valor1 = null;

                  $pais = ControladorPais::ctrMostrarPais($item1, $valor1);
                  foreach ($pais as $key => $value) {
                    
                    echo '<option value="'.$value["codigo_pais"].'">'.$value["pais_codigo_cemex"].' - '.$value["pais_nombre_es"].'</option>';
                  }

                  ?>
  
                </select>
            </div>
        </div>
      </div>
         
    <!-- elevacion y humedad -->

      <div class="row">
        <div class="col-lg-6">
          <label for="exampleInputFile">Elevación</label>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-ruler-combined"></i>
                </span>
              </div>
              <input type="text" class="form-control UserName" placeholder="0 m" aria-label="" id="EditarElevacionPlanta" name="EditarElevacionPlanta" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="nav-icon ">m</i>
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
          <label for="exampleInputFile"> Humedad </label>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-thermometer"></i>
                </span>
              </div>
              <input type="text" class="form-control UserName" placeholder="0 %" aria-label="" id="EditarHumedadPlanta" name="EditarHumedadPlanta" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="nav-icon ">%</i>
                  </span>
                </div>
            </div>
        </div>
      </div>

      <!-- presion -->
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card collapsed-card">
              <div class="card-header" type="button"  class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <h3 class="card-title"> <i class="fa-regular fa-clock"></i> &nbsp; Presión</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus" style="color: #2a3c6b;"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: none;">

                  <div class="row">
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="EditarPlantaPresionMMHG" name="EditarPlantaPresionMMHG" placeholder=" 0 mm Hg">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="EditarPlantaPresionPSI" name="EditarPlantaPresionPSI" placeholder=" 0 psi">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="EditarPlantaPresionMMH2O" name="EditarPlantaPresionMMH2O" placeholder=" 0 mm H2O">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="EditarPlantaPresionPANM2" name="EditarPlantaPresionPANM2" placeholder=" 0 Pa (N/m2)">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="EditarPlantaPresionBAR" name="EditarPlantaPresionBAR" placeholder=" 0 bar">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="EditarPlantaPresionMBAR" name="EditarPlantaPresionMBAR" placeholder=" 0 mbar">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="EditarPlantaPresionKNM2" name="EditarPlantaPresionKNM2" placeholder=" 0 kN/m2"> 
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="EditarPlantaPresionInH2O" name="EditarPlantaPresionInH2O" placeholder=" 0 inH2O">
                      </div>
                      <div class="col-lg-4">
                        <input type="text" readonly class="form-control-plaintext" id="EditarPlantaPresionInHG" name="EditarPlantaPresionInHG" placeholder=" 0 inHG">
                      </div>
                  </div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>



       
       <!-- Temperatura minima -->  
      <label for="exampleInputFile">Temperatura minima</label>                     
       <div class="row">
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="EditarGTempMinC" name="EditarGTempMinC" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-c"></i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="EditarGTempMinK" name="EditarGTempMinK" aria-describedby="basic-addon1" required>
              <div class="input-group-prepend">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="nav-icon fas fa-k"></i> 
                  </span>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="EditarGTempMinF" name="EditarGTempMinF" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-f"></i> 
                  </span>
                </div>
            </div>
        </div>
      </div> 

       <!-- Temperatura promedio -->  
      <label for="exampleInputFile">Temperatura promedio</label>                     
       <div class="row">
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="EditarGTempProC" name="EditarGTempProC" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-c"></i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="EditarGTempProK" name="EditarGTempProK" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="nav-icon fas fa-k"></i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="EditarGTempProF" name="EditarGTempProF" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-f"></i> 
                  </span>
                </div>
            </div>
        </div>
      </div> 

      <!-- Temperatura maxima -->
      <label for="exampleInputFile">Temperatura Maxíma</label>                     
       <div class="row">
        <div class="col-lg-4">
           <div class="input-group mb-3">
                <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="EditarGTempMaxC" name="EditarGTempMaxC" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-c"></i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="EditarGTempMaxK" name="GTempMaxK" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="nav-icon fas fa-k"></i> 
                  </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          
           <div class="input-group mb-3">
              <input type="text" class="form-control UserName" placeholder="0" aria-label="" id="EditarGTempMaxF" name="EditarGTempMaxF" aria-describedby="basic-addon1" required>
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">
                    <i class=""><b> ° </b>&nbsp; </i><i class="nav-icon fas fa-f"></i> 
                  </span>
                </div>
            </div>
        </div>
      </div>  



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger clearRegisterUser" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-azulHepta ">Actualizar</button>
      </div>


        <?php

          $crearPlanta = new ControladorPlanta();
          $crearPlanta -> ctrEditarPlanta();

        ?>

  </form>

    </div>
  </div>
</div>













