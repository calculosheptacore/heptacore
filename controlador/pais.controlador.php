<?php 

class ControladorPais{


	/*=============================================
	MOSTRAR PLANTAS
	=============================================*/

	static public function ctrMostrarPais($item1, $valor1){

		$tabla = "country";
		$respuesta = ModeloPais::mdlMostrarPais($tabla, $item1, $valor1);
		return $respuesta;
	}

	/*=============================================
	REGISTRO DE PAIS
	=============================================*/

	static public function ctrCrearPais(){
		if(isset($_POST["codigoPais"])){
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["nombrePais_Es"])){


				$tabla = "country";
				$datos = array("codPaos" => $_POST["codigoPais"],
					           "nombrePais_Es" => $_POST["nombrePais_Es"],
					           "nombrePais_En" => $_POST["nombrePais_En"]);
				$respuesta = ModeloPais::mdlIngresarPais($tabla, $datos);
				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({
							  icon: "success",
							  text: "Se registró el pais correctamente",
							}).then((result) => {
									if (result.value) {

									window.location = "pais";

									}
							});
		
					</script>';

					date_default_timezone_set('America/Bogota');
					$fechaActual = date("d-m-Y");
		   			$horaActual = date("h:i:s");
		   			$user = $_SESSION["UserName"];
		   			$accion = 'CREAR PAIS';

					$respuesta = ModeloPais::mdlPaisLog($fechaActual, $horaActual, $user, $accion);

				}	

			}else{
				echo '<script>							
				</script>';

			}
		}
	}


	/*=============================================
	EDITAR PAIS
	=============================================*/

	static public function ctrEditarPais(){
		if(isset($_POST["editarCodigoPais"])){
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["editarNombrePais_Es"])){


				$tabla = "country";
				$datos = array("paisId" => $_POST["paisId"],
							   "codPais" => $_POST["editarCodigoPais"],
					           "nombrePais_Es" => $_POST["editarNombrePais_Es"],
					           "nombrePais_En" => $_POST["editarNombrePais_En"]);

				$respuesta = ModeloPais::mdlEditarPais($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({
							  icon: "success",
							  text: "Se edito el pais correctamente",
							}).then((result) => {
									if (result.value) {

									window.location = "pais";

									}
							});
		
					</script>';

					date_default_timezone_set('America/Bogota');
					$fechaActual = date("d-m-Y");
		   			$horaActual = date("h:i:s");
		   			$user = $_SESSION["UserName"];
		   			$accion = 'EDITAR PAIS';

					$respuesta = ModeloPais::mdlPaisLog($fechaActual, $horaActual, $user, $accion);

				}	

			}else{
				echo '<script>							
				</script>';

			}
		}
	}



	/*=============================================
	BORRAR PAIS
	=============================================*/

	static public function ctrBorrarPais(){

		if(isset($_GET["paisId"])){

			$tabla ="country";
			$datos = $_GET["paisId"];

			$respuesta = ModeloPais::mdlBorrarPais($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

						Swal.fire({
							  icon: "success",
							  text: "Se borró correctamente el pais",
							}).then((result) => {
									if (result.value) {

									window.location = "pais";

									}
							});

				</script>';

				date_default_timezone_set('America/Bogota');
				$fechaActual = date("d-m-Y");
	   			$horaActual = date("h:i:s");
	   			$user = $_SESSION["UserName"];
	   			$accion = 'BORAR PAIS';

				$respuesta = ModeloPais::mdlPaisLog($fechaActual, $horaActual, $user, $accion);

			}		

		}

	}



	/*=============================================
	ESTADO DE PAIS
	=============================================*/

	static public function ctrEstadoPais($item, $valor, $ValorEstado){

		$tabla = "country";

		$respuesta = ModeloPais::mdlActualizarEstadoPais($tabla, $item, $valor, $ValorEstado);


		if ($respuesta == "ok") {

				date_default_timezone_set('America/Bogota');
				$fechaActual = date("d-m-Y");
	   			$horaActual = date("h:i:s");
	   			$user = $_SESSION["UserName"];
	   			$accion = 'ACTUALIZAR ESTADO PAIS';

				

				$respuesta = ModeloPais::mdlPaisLog($fechaActual, $horaActual, $user, $accion);
		}

		return $respuesta;




	}








}

?>