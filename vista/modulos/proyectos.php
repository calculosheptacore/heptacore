
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Proyecto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Proyectos</li>
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
                  <button type="button" class="btn btn-azulHepta" data-toggle="modal" data-target="#IngresarProyecto"  >
                     Nuevo proyecto
                  </button>


                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="" class="table table-bordered table-striped tablas tablaProyecto">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Planta</th>
                    <th>codigo_hepta</th>
                    <th>Nombre de proyecto</th>
                    <th>Orden de compra</th>
                    <th>Personal a cargo</th> 
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

  $borrarProyecto = new ControladorProyectos();
  $borrarProyecto -> ctrBorrarProyecto();

?> 

<!-- Modal Ingresar Trabajador nuevo -->
<div class="modal fade selectControlTiempos" id="IngresarProyecto" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Ingresar Poryecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="clearRegisterUser" style="color: white;">&times;</span>
        </button>
      </div>

  <form role="form" method="post">


      <div class="modal-body">

          <div class="form-group">
            <label for="exampleInputFile">Nombre de planta</label>
              <div class="input-group mb-3">
                

                  <select class="form-control input-lg" id="namePlanta" name="namePlanta" >
                    
                    <option value="">Selecionar planta</option>

                    <?php

                    $item1 = null;
                    $valor1 = null;

                    $pais = ControladorPlanta::ctrMostrarPlanta($item1, $valor1);

                    foreach ($pais as $key => $value) {
                      
                      echo '<option value="'.$value["PlantID"].'">'.$value["PlantName"].'</option>';
                    }

                    ?>

                  </select>
              </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label for="exampleInputFile">Codigo hepta</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" placeholder="Ingresar codigo hepta" aria-label="" id="codigoHepta" name="codigoHepta" aria-describedby= "basic-addon1"  >
                </div>
            </div>
            <div class="col-lg-6">
              <label for="exampleInputFile">Orden de compra</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" placeholder="Ingresar orden de compra" aria-label="" id="ordenCompra" name="ordenCompra" aria-describedby="basic-addon1"   >
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label for="exampleInputFile">Nombre del proyecto</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del proyecto" id="nameProyecto" name="nameProyecto" aria-describedby= "basic-addon1"  >
                </div>
            </div>
            <div class="col-lg-6">
              <label for="exampleInputFile">Gerente de proyecto</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del gerente del proyecto" id="personal_GP" name="personal_GP" aria-describedby="basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();"  >
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label for="exampleInputFile">Ingeniero mecanico</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del ingeniero mecanico" id="personal_IM" name="personal_IM" aria-describedby= "basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();"  >
                </div>
            </div>
            <div class="col-lg-6">
              <label for="exampleInputFile">Ingeniero civil</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del ingeniero civil " id="personal_IC" name="personal_IC" aria-describedby="basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();"  >
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label for="exampleInputFile">Ingeniero eléctrico</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del ingeniero eléctrico" id="personal_IE" name="personal_IE" aria-describedby= "basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();"  >
                </div>
            </div>
            <div class="col-lg-6">
              <label for="exampleInputFile">Control de información</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del control de información" id="personal_CI" name="personal_CI" aria-describedby="basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();"  >
                </div>
            </div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger clearRegisterUser" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-azulHepta ">Guardar</button>
      </div>

        <?php

          $crearProyecto = new ControladorProyectos();
          $crearProyecto -> ctrCrearProyecto();

        ?>

  </form>

    </div>
  </div>
</div>




<!-- Modal para visualizar el personal a cargo-->

<div class="modal fade selectControlTiempos" id="validarPersonal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel">Personal a cargo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <!--Gerente de proyecto-->
        <div class="form-group">
          <label for="exampleInputFile">Gerente de proyecto</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-sign-hanging"></i>
                </span>
              </div>
              <input type="text" class="form-control UserName"  aria-label="" id="ValidarPersonalCargo_GP" name="ValidarPersonalCargo_GP" aria-describedby="basic-addon1" disabled>
            </div>
        </div>

        <!--Ingeniero mecanico-->
        <div class="form-group">
          <label for="exampleInputFile">Ingeniero mecanico</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-sign-hanging"></i>
                </span>
              </div>
              <input type="text" class="form-control UserName"  aria-label="" id="ValidarPersonalCargo_IM" name="ValidarPersonalCargo_IM" aria-describedby="basic-addon1" disabled>
            </div>
        </div>

        <!--Ingeniero civil-->
        <div class="form-group">
          <label for="exampleInputFile">Ingeniero civil</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-sign-hanging"></i>
                </span>
              </div>
              <input type="text" class="form-control UserName"  aria-label="" id="ValidarPersonalCargo_IC" name="ValidarPersonalCargo_IC" aria-describedby="basic-addon1" disabled>
            </div>
        </div>

        <!--Ingeniero eléctrico-->
        <div class="form-group">
          <label for="exampleInputFile">Ingeniero eléctrico</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-sign-hanging"></i>
                </span>
              </div>
              <input type="text" class="form-control UserName"  aria-label="" id="ValidarPersonalCargo_IE" name="ValidarPersonalCargo_IE" aria-describedby="basic-addon1" disabled>
            </div>
        </div>

        <!--Control de información-->
        <div class="form-group">
          <label for="exampleInputFile">Control de información</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                  <i class="nav-icon fas fa-sign-hanging"></i>
                </span>
              </div>
              <input type="text" class="form-control UserName"  aria-label="" id="ValidarPersonalCargo_CI" name="ValidarPersonalCargo_CI" aria-describedby="basic-addon1" disabled>
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Atras</button>
      </div>


    </div>
  </div>
</div>



<!-- Modal Editar Trabajador nuevo -->
<div class="modal fade selectControlTiempos" id="EditarProyecto" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2a3c6b">
        <h5 class="modal-title" style="color: white;" id="staticBackdropLabel"> Editar poryecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="clearRegisterUser" style="color: white;">&times;</span>
        </button>
      </div>

  <form role="form" method="post">


      <div class="modal-body">

            <input type="text" id="idProyecto" name="idProyecto" hidden >  


          <div class="form-group">
            <label for="exampleInputFile">Nombre de planta</label>
              <div class="input-group mb-3">
                
                  <select class="form-control input-lg" id="editarNamePlanta" name="editarNamePlanta" >
                    
                    <option value="">Selecionar planta</option>

                    <?php

                    $item1 = null;
                    $valor1 = null;

                    $pais = ControladorPlanta::ctrMostrarPlanta($item1, $valor1);

                    foreach ($pais as $key => $value) {
                      
                      echo '<option value="'.$value["PlantID"].'">'.$value["PlantName"].'</option>';
                    }

                    ?>

                  </select>
              </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label for="exampleInputFile">Codigo hepta</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" placeholder="Ingresar codigo hepta" aria-label="" id="editarCodigoHepta" name="editarCodigoHepta" aria-describedby= "basic-addon1"  >
                </div>
            </div>
            <div class="col-lg-6">
              <label for="exampleInputFile">Orden de compra</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" placeholder="Ingresar orden de compra" aria-label="" id="editarOrdenCompra" name="editarOrdenCompra" aria-describedby="basic-addon1"   >
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label for="exampleInputFile">Nombre del proyecto</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del proyecto" id="editarNameProyecto" name="editarNameProyecto" aria-describedby= "basic-addon1"  >
                </div>
            </div>
            <div class="col-lg-6">
              <label for="exampleInputFile">Gerente de proyecto</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del gerente del proyecto" id="editarPersonal_GP" name="editarPersonal_GP" aria-describedby="basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();"  >
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label for="exampleInputFile">Ingeniero mecanico</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del ingeniero mecanico" id="editarPersonal_IM" name="editarPersonal_IM" aria-describedby= "basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();"  >
                </div>
            </div>
            <div class="col-lg-6">
              <label for="exampleInputFile">Ingeniero civil</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del ingeniero civil " id="editarPersonal_IC" name="editarPersonal_IC" aria-describedby="basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();"  >
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label for="exampleInputFile">Ingeniero eléctrico</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del ingeniero eléctrico" id="editarPersonal_IE" name="editarPersonal_IE" aria-describedby= "basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();"  >
                </div>
            </div>
            <div class="col-lg-6">
              <label for="exampleInputFile">Control de información</label>
               <div class="input-group mb-3">
                  <input type="text" class="form-control UserName" aria-label="" placeholder="Ingresar nombre del control de información" id="editarPersonal_CI" name="editarPersonal_CI" aria-describedby="basic-addon1" onkeyup="javascript:this.value=this.value.toUpperCase();"  >
                </div>
            </div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger clearRegisterUser" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-azulHepta ">Guardar</button>
      </div>

        <?php

         $crearProyecto = new ControladorProyectos();
         $crearProyecto -> ctrEditarProyecto();

        ?>

  </form>

    </div>
  </div>
</div>



















