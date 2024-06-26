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
                  <button type="button" class="btn btn-azulHepta" data-toggle="modal" data-target="#crearPais" >
                    Crear pais
                  </button>


                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="" class="table table-bordered table-striped tablas tablaPais">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Codigo país</th>
                    <th>País ESP</th>
                    <th>País ENG</th>
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

  $borrarPais = new ControladorPais();
  $borrarPais -> ctrBorrarPais();

?> 


<!-- Modal para crear pais -->

<div class="modal fade selectControlTiempos" id="crearPais" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Nuevo pais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="clearModGuardarPlanta" style="color: white;">&times;</span>
        </button>
      </div>

  <form  method="post">
      <div class="modal-body">



    <!--Codigo del pais-->
    <div class="form-group">
      <label for="exampleInputFile">Código país</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
              <i class="nav-icon fas fa-sign-hanging"></i>
            </span>
          </div>
          <input type="text" class="form-control UserName" placeholder="Codigo pais" aria-label="" id="codigoPais" name="codigoPais" aria-describedby="basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="3" required>
        </div>
    </div>

    <!--Codigo del pais-->
    <div class="form-group">
      <label for="exampleInputFile">Nombre del país en español</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
              <i class="nav-icon fas fa-sign-hanging"></i>
            </span>
          </div>
          <input type="text" class="form-control UserName" placeholder="Nombre del pais" aria-label="" id="nombrePais_Es" name="nombrePais_Es" aria-describedby="basic-addon1" required>
        </div>
    </div>

    <!--Codigo del pais en ingles-->
    <div class="form-group">
      <label for="exampleInputFile">Nombre del país en ingles</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
              <i class="nav-icon fas fa-sign-hanging"></i>
            </span>
          </div>
          <input type="text" class="form-control UserName" placeholder="Nombre del pais" aria-label="" id="nombrePais_En" name="nombrePais_En" aria-describedby="basic-addon1" required>
        </div>
    </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger clearModGuardarPlanta" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-azulHepta ">Guardar</button>
      </div>


        <?php

          $crearPlanta = new ControladorPais();
          $crearPlanta -> ctrCrearPais();

        ?>

        
  </form>
    </div>
  </div>
</div>


<!-- Modal para editar pais -->

<div class="modal fade selectControlTiempos" id="editarPais" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Editar pais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="clearModGuardarPlanta" style="color: white;">&times;</span>
        </button>
      </div>

  <form role="form" method="post">
      <div class="modal-body">

        <input type="text"  aria-label="" id="paisId" name="paisId" hidden>

    <!--Codigo del pais-->
    <div class="form-group">
      <label for="exampleInputFile">Código país</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
              <i class="nav-icon fas fa-sign-hanging"></i>
            </span>
          </div>
          <input type="text" class="form-control UserName" placeholder="Codigo pais" aria-label="" id="editarCodigoPais" name="editarCodigoPais" aria-describedby="basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="3" maxlength="3" required>
        </div>
    </div>

    <!--Codigo del pais-->
    <div class="form-group">
      <label for="exampleInputFile">Nombre del país en español</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
              <i class="nav-icon fas fa-sign-hanging"></i>
            </span>
          </div>
          <input type="text" class="form-control UserName" placeholder="Nombre del pais" aria-label="" id="editarNombrePais_Es" name="editarNombrePais_Es" aria-describedby="basic-addon1" required>
        </div>
    </div>

    <!--Codigo del pais en ingles-->
    <div class="form-group">
      <label for="exampleInputFile">Nombre del país en ingles</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
              <i class="nav-icon fas fa-sign-hanging"></i>
            </span>
          </div>
          <input type="text" class="form-control UserName" placeholder="Nombre del pais" aria-label="" id="editarNombrePais_En" name="editarNombrePais_En" aria-describedby="basic-addon1" required>
        </div>
    </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger clearModGuardarPlanta" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-azulHepta ">Guardar</button>
      </div>


        <?php

          $editarPlanta = new ControladorPais();
          $editarPlanta -> ctrEditarPais();

        ?>

        
  </form>
    </div>
  </div>
</div>













