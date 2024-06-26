<?php 


class ControladorPlanta{


	/*=============================================
	MOSTRAR PLANTAS
	=============================================*/

	static public function ctrMostrarPlanta($item, $valor){

		$tabla = "plant";


		$respuesta = ModeloPlanta::mdlMostrarPlanta($tabla, $item, $valor);

		return $respuesta;
	}


	/*=============================================
	MOSTRAR PLANTAS POR PAIS
	=============================================*/

	static public function ctrMostrarPlantaPorPais($item, $valor){

		$tabla = "plant";


		$respuesta = ModeloPlanta::mdlMostrarPlantaPorPais($tabla, $item, $valor);

		return $respuesta;
	}




	/*=============================================
	REGISTRO DE PLANTA
	=============================================*/

	static public function ctrCrearPlanta(){

		if(isset($_POST["nombrePlanta"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["codeCemexPlanta"])){


				$tabla = "plant";

				$datos = array("NomPlant" => $_POST["nombrePlanta"],
					           "codCemexPlant" => $_POST["codeCemexPlanta"],
					           "countryPlant" => $_POST["paisPlanta"],
					           "elevacion" => $_POST["envioElevacion"],
					           "humedad" => $_POST["humedadPlanta"],
					           "PresionMMHG" => $_POST["envioPresionMMHG"],
					           "PresionPSI" => $_POST["envioPresionPSI"],
					           "PresionMMH2O" => $_POST["envioPresionMMH2O"],
					           "PresionPANM2" => $_POST["envioPresionPANM2"],
					           "PresionBAR" => $_POST["envioPresionBAR"],
					           "PresionMBAR" => $_POST["envioPresionMBAR"],
					           "PresionKNM2" => $_POST["envioPresionKNM2"],
					           "PresionInH2O" => $_POST["envioPresionInH2O"],
					           "PresionInHG" => $_POST["envioPresionInHG"],
					           "tempMinC" => $_POST["envioTempMinC"],
					           "tempMinK" => $_POST["envioTempMinK"],
					           "tempMinF" => $_POST["envioTempMinF"],
					           "tempProC" => $_POST["envioTempProC"],
					           "tempProK" => $_POST["envioTempProk"],					           
					           "tempProF" => $_POST["envioTempProF"],
					           "tempMaxC" => $_POST["envioTempMaxC"],
					           "tempMaxK" => $_POST["envioTempMaxK"],
					           "tempMaxF" => $_POST["envioTempMaxF"] );

				$respuesta = ModeloPlanta::mdlIngresarPlanta($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({
							  icon: "success",
							  text: "Se registró la planta exitosamente",
							}).then((result) => {
									if (result.value) {

									window.location = "planta";

									}
							});

					</script>';


				}	


			}else{

				echo '<script>


						
							window.location = "planta";


				

				</script>';

			}


		}


	}


	/*=============================================
	BORRAR PLANTA
	=============================================*/

	static public function ctrBorrarPlanta(){

		if(isset($_GET["PlantaId"])){

			$tabla ="plant";
			$datos = $_GET["PlantaId"];

			$respuesta = ModeloPlanta::mdlBorrarPlanta($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

						Swal.fire({
							  icon: "success",
							  text: "Se borró correctamente la planta",
							}).then((result) => {
									if (result.value) {

									window.location = "planta";

									}
							});

				</script>';

			}		

		}

	}


	/*=============================================
	ESTADO DE PLANTAS
	=============================================*/

	static public function ctrEstadoPlanta($item, $valor, $ValorEstado){

		$tabla = "plant";

		$respuesta = ModeloPlanta::mdlActualizarEstadoPlanta($tabla, $item, $valor, $ValorEstado);

		return $respuesta;
	}





	/*=============================================
	 EDITAR PLANTA
	=============================================*/

	static public function ctrEditarPlanta(){


		if(isset($_POST["EditarMombrePlanta"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["EditarCodeCemexPlanta"])){


				$tabla = "plant";

				$datos = array("idPlanta" => $_POST["idPlanta"],
							   "NomPlant" => $_POST["EditarMombrePlanta"],
					           "codCemexPlant" => $_POST["EditarCodeCemexPlanta"],
					           "countryPlant" => $_POST["EditarPaisPlanta"],
					           "elevacion" => $_POST["editarElevacion"],
					           "humedad" => $_POST["editarHumedad"],
					           "PresionMMHG" => $_POST["editarPresionMMHG"],
					           "PresionPSI" => $_POST["editarPresionPSI"],
					           "PresionMMH2O" => $_POST["editarPresionMMH2O"],
					           "PresionPANM2" => $_POST["editarPresionPANM2"],
					           "PresionBAR" => $_POST["editarPresionBAR"],
					           "PresionMBAR" => $_POST["editarPresionMBAR"],
					           "PresionKNM2" => $_POST["editarPresionKNM2"],
					           "PresionInH2O" => $_POST["editarPresionInH2O"],
					           "PresionInHG" => $_POST["editarPresionInHG"],
					           "tempMinC" => $_POST["editarTempMinC"],
					           "tempMinK" => $_POST["editarTempMinK"],
					           "tempMinF" => $_POST["editarTempMinF"],
					           "tempProC" => $_POST["editarTempProC"],
					           "tempProK" => $_POST["editarTempProk"],					           
					           "tempProF" => $_POST["editarTempProF"],
					           "tempMaxC" => $_POST["editarTempMaxC"],
					           "tempMaxK" => $_POST["editarTempMaxK"],
					           "tempMaxF" => $_POST["editarTempMaxF"] );

				$respuesta = ModeloPlanta::mdlEditarPlanta($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({
							  icon: "success",
							  text: "Se edito la planta exitosamente",
							}).then((result) => {
									if (result.value) {

									window.location = "planta";

									}
							});

					</script>';


				}	


			}else{

				echo '<script>
						
						window.location = "planta";
			
				</script>';

			}


		}


	}


}

 ?>