<?php 


class ControladorEquipos{


	/*=============================================
	MOSTRAR EQUIPOS
	=============================================*/

	static public function ctrMostrarEquipos($item, $valor){
		$tabla = "tbl_equipos";
		$respuesta = ModeloEquipos::mdlMostrarEquipos($tabla, $item, $valor);
		return $respuesta;
	}

}


	/*=============================================
	REGISTRO DE EQUIPO
	=============================================*/

	/*static public function ctrCrearEquipo(){

		if(isset($_POST["nombrePlanta"])){
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["codeCemexPlanta"])){


				$tabla = "tbl_equipos";
				$datos = array("NomPlant" => $_POST["nombrePlanta"],
					           "codCemexPlant" => $_POST["codeCemexPlanta"],
					           "countryPlant" => $_POST["paisPlanta"],
					           "elevacion" => $_POST["envioElevacion"],
					           "tempMaxF" => $_POST["envioTempMaxF"] );

				$respuesta = ModeloEquipos::mdlIngresarEquipo($tabla, $datos);		
				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({
							  icon: "success",
							  text: "Se registró el equipo exitosamente",
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


	}    */



 ?>