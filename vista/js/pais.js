

var perfilOculto = $("#perfilOculto").val();


    $('.tablaPais').DataTable({
      "ajax": "ajax/datatable-pais.ajax.php?perfilOculto="+perfilOculto,
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
VALIDACION DE CODE CEMEX DEL PAIS 
=============================================*/

	$("#codigoPais").change(function(){
	var CodePais = $("#codigoPais").val();
	var datos = new FormData();
    	datos.append("CodePais", CodePais);

    $.ajax({

      url:"ajax/pais.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

      	if (respuesta != false) {

          Swal.fire({
                icon: "warning",
                text: "El codigo del pais ya esta registrado, por favor ingresa uno nuevo ",
              }).then((result) => {
                  if (result.value) {

                  $("#codigoPais").val('');

                  }
              })
      	}
	  }

  	});

	});

  $("#editarCodigoPais").change(function(){
  var CodePais = $("#editarCodigoPais").val();
  var datos = new FormData();
      datos.append("CodePais", CodePais);

    $.ajax({

      url:"ajax/pais.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

        if (respuesta != false) {

          Swal.fire({
                icon: "warning",
                text: "El codigo del pais ya esta registrado, por favor ingresa uno nuevo ",
              }).then((result) => {
                  if (result.value) {

                  $("#editarCodigoPais").val('');

                  }
              })
        }
    }

    });

  });



/*=============================================
Editar Planta 
=============================================*/

$(".tablas").on("click", ".btnEditarPais", function(){

  var paisId = $(this).attr("paisId");

  var datos = new FormData();
    datos.append("paisId", paisId);

    $.ajax({

      url:"ajax/pais.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

      //Pais id
      $("#paisId").val(respuesta['codigo_pais']); 
      //pais codigo
      $("#editarCodigoPais").val(respuesta['pais_codigo']); 
      //nombre del pais es
      $("#editarNombrePais_Es").val(respuesta['pais_nombre_es']); 
      //nombre del pais en 
      $("#editarNombrePais_En").val(respuesta['pais_nombre_en']);       

    }

    });

});



/*=============================================
ELIMINAR PAIS
=============================================*/
$(".tablas").on("click", ".btnEliminarPais", function(){

  var paisId = $(this).attr("paisId");

  Swal.fire({
    title: "¿Está seguro de borrar el pais?",
    text: "¡Si no lo está puede cancelar la accíón!",
    icon: "info",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, borrar pais!"
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "index.php?ruta=pais&paisId="+paisId; 
    }
  });

});

 
/*=============================================
CAMBIO DE ESTADO
=============================================*/

$(".tablas").on("click", ".btnActivarPais", function(){


  var CamPaisId = $(this).attr("CamPaisId");
  var estado = $(this).attr("estadoPais");

  var datos = new FormData();
    datos.append("CamPaisId", CamPaisId);
    datos.append("estado", estado);

    $.ajax({
      url:"ajax/pais.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      success:function(respuesta){
      
          Swal.fire({
                icon: "success",
                text: "Se actualizó correctamente ",
              }).then((result) => {
                  if (result.value) {

                  window.location = "pais";

                  }
              })
      }

    });

});


