<?php 


class ControladorProyectos{

	/*=============================================
	MOSTRAR PROYECTO
	=============================================*/

	static public function ctrMostrarProyectos($item, $valor){

		$tabla = "project";
		$respuesta = ModeloProyectos::mdlMostrarProyectos($tabla, $item, $valor);
		return $respuesta;
	}

	/*=============================================
	REGISTRO DEL PROYECTO
	=============================================*/

	static public function ctrCrearProyecto(){

		if(isset($_POST["namePlanta"])){
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["namePlanta"])){


				$tabla = "project";

				$datos = array("namePlanta" => $_POST["namePlanta"],
					           "codigoHepta" => $_POST["codigoHepta"],
					           "ordenCompra" => $_POST["ordenCompra"],
					           "nameProyecto" => $_POST["nameProyecto"],
					           "personal_GP" => $_POST["personal_GP"],
					           "personal_IM" => $_POST["personal_IM"],
					           "personal_IC" => $_POST["personal_IC"],
					           "personal_IE" => $_POST["personal_IE"],
					           "personal_CI" => $_POST["personal_CI"]);


				$respuesta = ModeloProyectos::mdlIngresarProyecto($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({
							  icon: "success",
							  text: "Se registró el proyecto correctamente",
							}).then((result) => {
									if (result.value) {

									window.location = "proyectos";

									}
							});
		
					</script>';

				}

			}else{
				echo '<script>							
				</script>';

			}
		}
	}



	/*=============================================
	EDITAR EL PROYECTO
	=============================================*/

	static public function ctrEditarProyecto(){

		if(isset($_POST["editarNamePlanta"])){
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["editarNamePlanta"])){

				$tabla = "project";

				$datos = array("idProyecto" => $_POST["idProyecto"],
							   "editarNamePlanta" => $_POST["editarNamePlanta"],
					           "editarCodigoHepta" => $_POST["editarCodigoHepta"],
					           "editarOrdenCompra" => $_POST["editarOrdenCompra"],
					           "editarNameProyecto" => $_POST["editarNameProyecto"],
					           "editarPersonal_GP" => $_POST["editarPersonal_GP"],
					           "editarPersonal_IM" => $_POST["editarPersonal_IM"],
					           "editarPersonal_IC" => $_POST["editarPersonal_IC"],
					           "editarPersonal_IE" => $_POST["editarPersonal_IE"],
					           "editarPersonal_CI" => $_POST["editarPersonal_CI"]);


				$respuesta = ModeloProyectos::mdlEditarProyecto($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({
							  icon: "success",
							  text: "Se edito el proyecto correctamente",
							}).then((result) => {
									if (result.value) {

									window.location = "proyectos";

									}
							});
		
					</script>';

				}

			}else{
				echo '<script>							
				</script>';

			}
		}
	}



	/*=============================================
	BORRAR PROYECTO
	=============================================*/

	static public function ctrBorrarProyecto(){

		if(isset($_GET["proyectoId"])){

			$tabla ="project";
			$datos = $_GET["proyectoId"];

			$respuesta = ModeloProyectos::mdlBorrarPais($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

						Swal.fire({
							  icon: "success",
							  text: "Se borró correctamente el proyecto",
							}).then((result) => {
									if (result.value) {

									window.location = "proyectos";

									}
							});

				</script>';

			}		

		}

	}


	/*=============================================
	ESTADO DE PAIS
	=============================================*/

	static public function ctrEstadoProyecto($item, $valor, $ValorEstado){

		$tabla = "project";

		$respuesta = ModeloProyectos::mdlActualizarEstadoProyecto($tabla, $item, $valor, $ValorEstado);

		return $respuesta;
	}

















}

?>