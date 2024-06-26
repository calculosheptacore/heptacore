<?php 

class ControladorTrabajador{

	static public function ctrCrearTrabajador(){

		if(isset($_POST["primerNombre"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["primerNombre"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["primerApellido"]) &&
			    preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"])){
								
				$tabla = "trabajadores";
				$datos = array("primerNombre" => $_POST["primerNombre"],
					           "segundoNombre" => $_POST["segundoNombre"],
					           "primerApellido" => $_POST["primerApellido"],
					           "segundoApellido" => $_POST["segundoApellido"],
					           "usuario" => $_POST["TUsuario"],
					           "email" => $_POST["email"],
					           "clave" => $_POST["clave"]);

				$respuesta = ModeloTrabajador::mdlIngresarTrabajador($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					Swal.fire({

						icon: "success",
						title: "¡El trabajador ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "trabajadores";

						}

					});
				

					</script>';

				}	


			}else{

				echo '<script>
					Swal.fire({

						icon: "error",
						title: "¡El trabajador no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "trabajadores";

						}

					});		

				</script>';

			}


		}

	}	


	/*=============================================
	MOSTRAR TRABAJADORES
	=============================================*/
	static public function ctrMostrarTrabajador(){

		$tabla = "trabajadores";

		$respuesta = ModeloTrabajador::mdlMostrarTrabajador($tabla);

		return $respuesta;
	}

		

	/*=============================================
	TRAER TRABAJADORES
	=============================================*/
	static public function ctrTraerTrabajador($item, $valor){

		$tabla = "trabajadores";

		$respuesta = ModeloTrabajador::mdlTraerTrabajador($tabla, $item, $valor);

		return $respuesta;
	}


	/*=============================================
	MOSTRAR LICENCIA
	=============================================*/
	static public function ctrMostrarLicenciaT($tipoLicencia){

		$respuesta = ModeloTrabajador::mdlMostrarLicencia($tipoLicencia);

		return $respuesta;
	}



























}
























 ?>