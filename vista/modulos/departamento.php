<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Departamento</h1>
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
                    Agregar nuevo departamento
                  </button>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example2" class="table table-bordered table-striped tablas">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>depto_codigo</th>
                    <th>depto_subarea_codigo_wbs</th>
                    <th>depto_row_wbs</th>
                    <th>depto_col_wbs</th>
                    <th>depto_nombre_wbs_es</th>
                    <th>depto_nombre_wbs_en</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

<?php

$item = null;
$valor = null;

$departamento = ControladorDepartamento::ctrMostrarDepartamento($item, $valor);
foreach ($departamento as $key => $value){
  echo ' <tr>
          <td>'.($key+1).'</td>
          <td>'.$value["depto_codigo"].'</td>
          <td>'.$value["depto_subarea_codigo_wbs"].'</td>
          <td>'.$value["depto_row_wbs"].'</td>
          <td>'.$value["depto_col_wbs"].'</td>
          <td>'.$value["depto_nombre_wbs_es"].'</td>
          <td>'.$value["depto_nombre_wbs_en"].'</td>';

          if($value["depto_estado"] = 0){
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