<?php 

class ControladorLicencia{


	/*=============================================
	REGISTRO DE LA LICENCIA 
	=============================================*/

	static public function ctrCrearLicencia(){
	
		if(isset($_POST["emailkEY"])){

			if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["tipoLicencia"])){


				$tabla = "licencias";

				$encriptar = crypt($_POST["clave"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datos = array("tipoLicencia" => $_POST["tipoLicencia"],
					           "emailkEY" => $_POST["emailkEY"],
					           "clave" => $encriptar);

				$respuesta = ModeloLicencias::mdlIngresarLicencias($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					Swal.fire({

						icon: "success",
						title: "¡La licencia ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "licencias";

						}

					});
				

					</script>';

				}	


			}else{

				echo '<script>
					Swal.fire({

						icon: "error",
						title: "¡La licencia no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "licencias";

						}

					});		

				</script>';

			}


		}

	}



	/*=============================================
	MOSTRAR LAS LICENCIAS 
	=============================================*/

	static public function ctrMostrarLicencia(){

		$tabla = "licencias";

		$respuesta = ModeloLicencias::mdlMostrarLicencias($tabla);

		return $respuesta;
	}


}







 ?>