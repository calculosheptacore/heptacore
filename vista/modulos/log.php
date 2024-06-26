

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pais</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="desple">Inicio</a></li>
              <li class="breadcrumb-item active">Pais</li>
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
          <div class="row validarLog">

            <div class="col-lg-2">
              <label for="exampleInputFile">Filtro</label>
               <div class="input-group mb-3">
                <select class="form-control input-lg" id="" name="" required>
                  
                  <option value="">Selecionar .. </option>
                  <option value="ususario" >Usuario</option>
                  <option value="accion" >Accion</option>
  
                </select>
              </div>
            </div>

            <div class="col-lg-4">
              <label for="exampleInputFile">Usuario - Accion</label>
               <div class="input-group mb-3">
                <select class="form-control input-lg logUsuario" id="usuarioLog" name="usuarioLog" required>
                  
                  <option value="">Selecionar .. </option>
                  <option value="j.calderon">j.calderon</option>
                  <option value="a.alvaro">a.alvaro</option>
  
                </select>
              </div>
            </div>

            <div class="col-lg-2">
              <label for="exampleInputFile">Fecha inicio</label>
               <div class="input-group mb-3">
                <input type="date" class="form-control datetimepicker-input logFechaInicio" data-target="#calendar" id="fechaInicio" name="fechaInicio" />
              </div>
            </div>

            <div class="col-lg-2">
              <label >Fecha fin</label>
                <div class="input-group mb-3" >
                  <input type="date" class="form-control datetimepicker-input logFechaFin" data-target="#calendar" id="fechaFin" name="fechaFin"/>
                </div>
              </div>

            <div class="col-lg-2">
              <label >&nbsp;</label>

                <div class="input-group mb-3" >
                  <button type="button" class="btn btn-azulHepta btn-block" data-toggle="modal" data-target="#crearPais">
                    Exportar
                  </button>

                </div>
              </div>

            </div>


                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table  class="table table-bordered table-striped  tablaLog ">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Accion</th>
                    <th>Fecha</th>
                    <th>Hora</th>
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







