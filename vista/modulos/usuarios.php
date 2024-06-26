
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
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
                    Nuevo 
                  </button>


                </div>



              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="" class="table table-bordered table-striped tablas tablaUsuarios">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Rol</th>                
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>  
                  
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

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

  ?> 



<!-- Modal Ingresar Trabajador nuevo -->
<div class="modal fade selectControlTiempos" id="IngresarUsuarios" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Nuevo usuario</h5>
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
          <div class="form-group">
            <label for="exampleInputFile">Usuario</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="nav-icon fas fa-user"></i>
                  </span>
                </div>
                <input type="text" class="form-control UserName" placeholder="Usuario" aria-label="" id="usuario" name="usuario" aria-describedby="basic-addon1" disabled>
              </div>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Nombre</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="far fa-circle nav-icon"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Email" id="userNombre" name="userNombre" aria-describedby="basic-addon1" required>
              </div>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Apellido</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="far fa-circle nav-icon"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Apellido" aria-label="Email" id="userApellido" name="userApellido" aria-describedby="basic-addon1" required>
              </div>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Correo</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
                <input type="email" class="form-control" placeholder="Correo" aria-label="Correo" id="userCorreo" name="userCorreo" aria-describedby="basic-addon1" disabled>
              </div>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Contraseña</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-lock"></i>
                  </span>
                </div>
                <input type="password" class="form-control" placeholder="contraseña" aria-label="Email" id="userPassword" name="userPassword" aria-describedby="basic-addon1" required>
              </div>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Rol</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-briefcase"></i>
                  </span>
                </div>
              <select id="userRol" name="userRol" class="form-control" required>
                <option value="">Selecionar rol...</option>
                <option value="1">Administrator</option>
                <option value="2">Invitado</option>
                <option value="3">Administrator web tag</option>
                <option value="4">Operario web tag</option>
              </select>
              </div>
          </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger clearRegisterUser" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-azulHepta ">Guardar</button>
      </div>


        <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

  </form>

    </div>
  </div>
</div>





















