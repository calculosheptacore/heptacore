var perfilOculto = $("#taplaOculta").val();


    $('.tablaProyecto').DataTable({
      "ajax": "ajax/datatable-proyecto.ajax.php",
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "language": {

        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
        },
        "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }

      }
    });




/*=============================================
Validar presion 
=============================================*/

$(".tablas").on("click", ".btnValidarPersonalACargo", function(){

  var proyectoId = $(this).attr("proyectoId");

  var datos = new FormData();
    datos.append("proyectoId", proyectoId);

    $.ajax({

      url:"ajax/proyecto.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

      //Gerente de proyecto
      $("#ValidarPersonalCargo_GP").val(respuesta['proyecto_firma_GP']); 
      //Ingeniero mecanico
      $("#ValidarPersonalCargo_IM").val(respuesta['proyecto_firma_IM']); 
      //Ingeniero civil
      $("#ValidarPersonalCargo_IC").val(respuesta['proyecto_firma_IC']); 
      //Ingeniero eléctrico
      $("#ValidarPersonalCargo_IE").val(respuesta['proyecto_firma_IE']); 
      //Control de información
      $("#ValidarPersonalCargo_CI").val(respuesta['proyecto_firma_CI']); 

    }

    });

});


/*=============================================
Editar Proyecto
=============================================*/

$(".tablas").on("click", ".btnEditarProyecto", function(){

  var proyectoId = $(this).attr("proyectoId");

  var datos = new FormData();
    datos.append("proyectoId", proyectoId);

    $.ajax({

      url:"ajax/proyecto.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

      //Id de proyecto
      $("#idProyecto").val(respuesta['proyecto_codigo']); 
      //nombre la planta 
      $("#editarNamePlanta").val(respuesta['proyecto_planta']); 
      //codigo hepta
      $("#editarCodigoHepta").val(respuesta['codigo_hepta']);
      //Orden de compra
      $("#editarOrdenCompra").val(respuesta['orden_compra']);
      //nombre de proyecto
      $("#editarNameProyecto").val(respuesta['proyecto_nombre_es']);
      //Gerente de proyecto
      $("#editarPersonal_GP").val(respuesta['proyecto_firma_GP']); 
      //Ingeniero mecanico
      $("#editarPersonal_IM").val(respuesta['proyecto_firma_IM']); 
      //Ingeniero civil
      $("#editarPersonal_IC").val(respuesta['proyecto_firma_IC']); 
      //Ingeniero eléctrico
      $("#editarPersonal_IE").val(respuesta['proyecto_firma_IE']); 
      //Control de información
      $("#editarPersonal_CI").val(respuesta['proyecto_firma_CI']);

    }

    });

});


/*=============================================
ELIMINAR PROYECTO
=============================================*/
$(".tablas").on("click", ".btnEliminarProyecto", function(){

  var proyectoId = $(this).attr("proyectoId");

  Swal.fire({
    title: "¿Está seguro de borrar el proyecto?",
    text: "¡Si no lo está puede cancelar la accíón!",
    icon: "info",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, borrar proyecto!"
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "index.php?ruta=proyectos&proyectoId="+proyectoId; 
    }
  });

});




/*=============================================
CAMBIO DE ESTADO
=============================================*/

$(".tablas").on("click", ".btnActivarProyecto", function(){


  var CamProyectoId = $(this).attr("CamProyectoId");
  var estado = $(this).attr("estadoProyecto");

  var datos = new FormData();
    datos.append("CamProyectoId", CamProyectoId);
    datos.append("estado", estado);

    $.ajax({
      url:"ajax/proyecto.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      success:function(respuesta){
      
          Swal.fire({
                icon: "success",
                text: "Se actualizó correctamente",
              }).then((result) => {
                  if (result.value) {

                  window.location = "proyectos";

                  }
              })
      }

    });

});













