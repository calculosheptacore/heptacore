
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tamaños aerodeslizador</h1>
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
                    Agregar nuevo tamaño
                  </button>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example2" class="table table-bordered table-striped tablas">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Tamaño mm</th>
                    <th>Capacidad cu.m/hr  </th>
                    <th>Capacidad cu.ft/hr</th>
                    <th>B mm</th>
                    <th>B in</th>
                    <th>C mm</th>
                    <th>C in</th>
                    <th>D mm</th>
                    <th>D in</th>
                    <th>Peso kg/m</th>
                    <th>Peso lb/ft</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

  
                  <input type="hidden" value="" id="taplaOculta">

<?php

$item = null;
$valor = null;
$proyectos = ControladorAerodeslizador::ctrMostrarAerodeslizador($item, $valor);
foreach ($proyectos as $key => $value){
  echo ' <tr>
          <td>'.($key+1).'</td>
          <td>'.$value["size_mm"].'</td>
          <td>'.$value["capacity_cu_m_hr"].'</td>
          <td>'.$value["capacity_cu_ft_hr"].'</td>
          <td>'.$value["b_mm"].'</td>
          <td>'.$value["b_in"].'</td>
          <td>'.$value["c_mm"].'</td>
          <td>'.$value["c_in"].'</td>
          <td>'.$value["d_mm"].'</td>
          <td>'.$value["d_in"].'</td>
          <td>'.$value["weight_kg_m"].'</td>
          <td>'.$value["weight_lb_ft"].'</td>';

          if($value["estado_tamano_aerodeslizador"] = 0){
            echo '<td><button class="btn btn-success btn-xs " idUsuario="" estadoUsuario="0">Activo</button></td>';

          }else{

            echo '<td><button class="btn btn-danger btn-xs " idUsuario="" estadoUsuario="1">Inactivo</button></td>';

          }             

          echo '
            <td>

            <div class="btn-group">';

            echo  '<button class="btn btn-dark btnEditarUsuario"  data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-edit" style="color: #ffffff;"></i></i></button>

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

<!-- Modal Ingresar Trabajador nuevo -->
<div class="modal fade selectControlTiempos" id="IngresarPlanta" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Nuevo tamaño de material</h5>
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

    



