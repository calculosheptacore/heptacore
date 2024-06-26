



$(".validarLog").on("change", ".logUsuario", function(){

    var usuarioLog = $("#usuarioLog").val();
    var fechaInicio = $("#fechaInicio").val();
    var fechaFin = $("#fechaFin").val();

      var datos = new FormData();
      datos.append("usuarioLog", usuarioLog);
      datos.append("fechaInicio", fechaInicio);
      datos.append("fechaFin", fechaFin);

    console.log(datos.get('usuarioLog'));
    console.log(datos.get('fechaInicio'));
    console.log(datos.get('fechaFin'));

    $('.tablaLog').DataTable().clear().draw().destroy();

if (usuarioLog != "") {



    $('.tablaLog').DataTable({
      "ajax": "ajax/datatable-log.ajax.php?perfilOculto="+usuarioLog,
      "paging": false,
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



  } else {

              Swal.fire({
                icon: "warning",
                text: "Se actualizó correctamente ",
              }).then((result) => {
                  if (result.value) {

                 // window.location = "pais";
                 //$('#log').remove(); 
                 //$('.tablaLog').DataTable().clear().draw().destroy();


                  }
              })

  }
















});




