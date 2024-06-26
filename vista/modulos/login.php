

<div class="login-page hold-transition">
  <div class="login-box ">
    <!-- /.login-logo -->
    <div class="card card-outline card-azulHepta" >
      <div class="card-header text-center">
        <img src="vista/dist/img/logoOK.png" width="200"  >
      </div>
      <div class="card-body">
        <p class="login-box-msg">Inicia sesión para ingresar</p>

        <form action="" method="post">

          <div class="input-group mb-3">
            <input type="test" class="form-control" placeholder="Usuario" name="ingUsuario">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Recordar
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" id="ingreso" class="btn btn-azulHepta btn-block ">Ingresar</button>
            </div>
            <!-- /.col -->
          </div>

        <?php
          $login = new ControladorUsuarios();
          $login -> ctrIngresoUsuario();    
        ?>

        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
</div>









