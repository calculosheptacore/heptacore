<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Condiciones estandar</h1>
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
                    Agregar nueva subarea
                  </button>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example2" class="table table-bordered table-striped tablas">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Temperatura C°</th>
                    <th>Temperatura K°</th>
                    <th>presión Bar</th>
                    <th>presión atm</th>
                    <th>presión kPa</th>
                    <th>presión psi</th>
                    <th>Humedad relativa</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

<?php

$item = null;
$valor = null;

$condicionesestandar = ControladorCondicionesEstandar::ctrMostrarCondicionesEstandar($item, $valor);

foreach ($condicionesestandar as $key => $value){
 
  echo ' <tr>
          <td>'.($key+1).'</td>
          <td>'.$value["temperatura_centigrados"].'</td>
          <td>'.$value["temperatura_kelvin"].'</td>
          <td>'.$value["presion_bar"].'</td>
          <td>'.$value["presion_atm"].'</td>
          <td>'.$value["presion_kPa"].'</td>
          <td>'.$value["presion_psi"].'</td>
          <td>'.$value["humedad_relativa"].'</td>';


          if($value["subarea_estado"] = 0){
            echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="" estadoUsuario="0">Activado</button></td>';

          }else{

            echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="" estadoUsuario="1">Desactivado</button></td>';

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