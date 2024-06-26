

/*=============================================
CERRAR SECION
=============================================*/
 
	$(".logout").click(function(){
			setTimeout(() => {
				window.location = "salir";
			},1000);		
		toastr.success("Cierre exitoso");
	});



/*=============================================
VALIDAR TABLA
=============================================*/

    $('.tablaUsuarios').DataTable({
      "ajax": "ajax/datatable-usuario.ajax.php",
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
Generador de usuario y de correo 
=============================================*/

	$("#userNombre").change(function(){

	const nombre = $("#userNombre").val();
	const Contador = ('-'+(nombre.length - 1));

	const nombre1 = $("#userNombre").val();
	const Cortarnombre = nombre1.slice(0,Contador)

	$("#usuario").val(Cortarnombre+'.'+$("#userApellido").val());
	$("#envioUsuario").val(Cortarnombre+'.'+$("#userApellido").val());

	$("#userCorreo").val(Cortarnombre+'.'+$("#userApellido").val() + '@heptapro.com');
	$("#envioCorreo").val(Cortarnombre+'.'+$("#userApellido").val() + '@heptapro.com');

	});

	$("#userApellido").change(function(){

	preUsuario = $("#usuario").val();

	$("#usuario").val(preUsuario + $("#userApellido").val());
	$("#envioUsuario").val(preUsuario + $("#userApellido").val());

	$("#userCorreo").val(preUsuario + $("#userApellido").val() + '@heptapro.com');
	$("#envioCorreo").val(preUsuario + $("#userApellido").val() + '@heptapro.com');

	});

	

/*=============================================
Limpiar formulario
=============================================*/

	$(".clearRegisterUser").click(function(){
		$("#usuario").val('');
		$("#userCorreo").val('');
		$("#userNombre").val('');
		$("#userApellido").val('');
		$("#userPasswork").val('');
		$("#userRol").val('select');
	});


/*=============================================
Cambiar estado
=============================================*/

$(".tablas").on("click", ".btnActivarUsuario", function(){

  var CamIdUsuario = $(this).attr("CamIdUsuario");
  var estado = $(this).attr("estadoUsuario");

  var datos = new FormData();
    datos.append("CamIdUsuario", CamIdUsuario);
    datos.append("estado", estado);

    $.ajax({
      url:"ajax/usuario.ajax.php",
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

                  window.location = "usuarios";

                  }
              })
    }

    });

});









/*=============================================
ELIMINAR USUARIO
=============================================*/
$(".tablas").on("click", ".btnEliminarUsuario", function(){

  var usuarioId = $(this).attr("usuarioId");

  Swal.fire({
    title: "¿Está seguro de borrar el usuario?",
    text: "¡Si no lo está puede cancelar la accíón!",
    icon: "info",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, borrar usuario!"
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "index.php?ruta=usuarios&usuario="+usuarioId; 
    }
  });

});










