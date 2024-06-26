<?php


session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HEPTA</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vista/plugins/fontawesome-free-6/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/dist/css/adminlte.css">

  <!-- Theme style toastr -->
  <link rel="stylesheet" href="vista/plugins/toastr-master/build/toastr.css">

  <link rel="stylesheet" href="vista/plugins/fontawesome-free-6/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="vista/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vista/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vista/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/dist/css/adminlte.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="vista/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <link rel="stylesheet" href="vista/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Select2 
  <link href="vista/plugins/select2/css/select2.min.css">-->

  
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



  <!-- OPTIONAL SCRIPTS -->
  <script src="vista/plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes 
  <script src="vista/dist/js/demo.js"></script>-->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) 
  <script src="vista/dist/js/pages/dashboard3.js"></script>-->

  <!-- SweetAlert2 -->
  <script src="vista/plugins/sweetalert2/sweetalert2.min.js"></script>


  <!-- jQuery -->
  <script src="vista/componentes/jquery/dist/jquery.js"></script>
  <script src="vista/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="vista/plugins/jquery-ui/jquery-ui.min.js"></script>
  
  <!-- Bootstrap 4 -->
  <script src="vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="vista/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="vista/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="vista/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="vista/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="vista/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="vista/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="vista/plugins/jszip/jszip.min.js"></script>
  <script src="vista/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="vista/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="vista/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="vista/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="vista/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vista/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->

  <!-- Select2 
  <script src="vista/plugins/select2/js/select2.js"></script>-->

  <!-- Toastr -->
  <script src="vista/plugins/toastr-master/toastr.js"></script>



</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">

<script src="vista/js/plantilla.js"></script>


<?php 

if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

//Navbar

  include "modulos/navbar.php";


  //Menu

  include "modulos/menu.php";

  //include "modulos/iframer.php";




  



  //tablas
      if(isset($_GET["ruta"])){

          if($_GET["ruta"] == "usuarios" ||
           $_GET["ruta"] == "salir" ||
           $_GET["ruta"] == "equipo" || 
           $_GET["ruta"] == "materiales" ||
           $_GET["ruta"] == "inicio" ||
           $_GET["ruta"] == "proyectos" ||
           $_GET["ruta"] == "pais" ||
           $_GET["ruta"] == "log" ||
           $_GET["ruta"] == "tamanosAerodeslizador" ||
           $_GET["ruta"] == "calcularEquipos" ||
           $_GET["ruta"] == "calcularAerodeslizador" ||
           $_GET["ruta"] == "historialCalcularEquipos" ||
           $_GET["ruta"] == "historialAerodeslizador" ||
           $_GET["ruta"] == "detalleCalculoaerodeslizador" ||
           $_GET["ruta"] == "departamentos" ||
           $_GET["ruta"] == "condicionesestandar" ||
           $_GET["ruta"] == "departamento" ||
           $_GET["ruta"] == "planta"){


          include "modulos/".$_GET["ruta"].".php";

        }else{

          include "modulos/error400.php";

        }




      }else{

        include "modulos/error500.php";

      }







  //Fotter

  include "modulos/footer.php";

}else{

  include "modulos/login.php";

}


 ?>






<script src="vista/js/usuarios.js"></script>
<script src="vista/js/planta.js"></script>
<script src="vista/js/proyecto.js"></script>
<script src="vista/js/materiales.js"></script>
<script src="vista/js/calcularAerodeslizador.js"></script>
<!--<script src="vista/js/tamanosAerodeslizador.js"></script>-->
<script src="vista/js/pais.js"></script>
<script src="vista/js/log.js"></script>
<script src="vista/js/login.js"></script>



<!-- REQUIRED SCRIPTS -->



<!-- Page specific script -->


</body>
</html>
