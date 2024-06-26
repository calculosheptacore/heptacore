<?php 


class ControladorUsuarios{

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	static public function ctrIngresoUsuario(){

		if(isset($_POST["ingUsuario"])){ 


			if(preg_match('/^[#\.\-a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

				$tabla = "users";

				$item = "UserName";

				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

				

				if($respuesta["UserName"] == $_POST["ingUsuario"] ){

					$password = openssl_decrypt($respuesta["UserPassword"], 'AES-256-CBC', $respuesta["claveLogin"], 0, '1234567890123456');

					if ($password  == $_POST["ingPassword"]) {

						if($respuesta["UserState"] == 1){

							$_SESSION["iniciarSesion"] = "ok";
							$_SESSION["UserID"] = $respuesta["UserID"];
							$_SESSION["UserName"] = $respuesta["UserName"];
							$_SESSION["nombre"] = $respuesta["FirstName"];
							$_SESSION["apellido"] = $respuesta["LastName"];
							$_SESSION["rol"] = $respuesta["UserRol"];

							echo '<script>

								setTimeout(() => {
									window.location = "inicio";
								},1000);

								toastr.success("Ingreso exitoso");

							</script>';

							
						}else{

							echo '<br>
								<div class="alert alert-danger">El usuario aún no está activado</div>';
						}						
						
					}else{
						echo '<br><div class="alert alert-danger">Contraseña incorrecta</div>';
					}

				}else{

					echo '<br><div class="alert alert-danger">Usuario incorrecto</div>';

				}

			}	

		}




	}

	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "users";

		$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;
	}





	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function ctrCrearUsuario(){

		if(isset($_POST["userNombre"])){

			if(preg_match('/^[#\.\-a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["userNombre"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["userApellido"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["userPassword"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["userRol"])){

				$tabla = "users";

				$claveLogin = random_int(1, 2000);
				$password = openssl_encrypt($_POST["userPassword"], 'AES-256-CBC', $claveLogin, 0, '1234567890123456');

				echo '<script> console.log("'.$encriptar.'"); </script>';

				$datos = array("nombre" => $_POST["userNombre"],
					           "usuario" => $_POST["envioUsuario"],
					           "apellido" => $_POST["userApellido"],
					           "correo" => $_POST["envioCorreo"],
					           "password" => $password,
					           "clave" => $claveLogin,
					           "rol" => $_POST["userRol"]);

				$respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({
							  icon: "success",
							  text: "Se ingreso el usuario correctamente",
							}).then((result) => {
									if (result.value) {

									window.location = "usuarios";

									}
							});
		
					</script>';

					date_default_timezone_set('America/Bogota');
					$fechaActual = date("d-m-Y");
		   			$horaActual = date("h:i:s");
		   			$user = $_SESSION["UserName"];
		   			$accion = 'CREAR USUARIO';

					$respuesta = ModeloUsuarios::mdlUsuarioLog($fechaActual, $horaActual, $user, $accion);					

				}	

			}else{

					echo '<script>

							Swal.fire({
							  icon: "warning",
							  text: "Los datos ingresados están incorrectos, por favor realiza de nuevo el formulario",
							}).then((result) => {
									if (result.value) {

									window.location = "usuarios";

									}
							});
		
					</script>';

			}


		}


	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function ctrBorrarUsuario(){

		if(isset($_GET["usuario"])){

			$tabla ="users";
			$datos = $_GET["usuario"];

			$respuesta = ModeloUsuarios::mdlBorrarUsuario($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

						Swal.fire({ 
							  icon: "success",
							  text: "Se borró correctamente el usuario",
							}).then((result) => {
									if (result.value) {

									window.location = "usuarios";

									}
							});

				</script>';

				date_default_timezone_set('America/Bogota');
				$fechaActual = date("d-m-Y");
	   			$horaActual = date("h:i:s");
	   			$user = $_SESSION["UserName"];
	   			$accion = 'BORAR USUARIO';

				$respuesta = ModeloUsuarios::mdlUsuarioLog($fechaActual, $horaActual, $user, $accion);

			}		

		}

	}





































}



 ?>