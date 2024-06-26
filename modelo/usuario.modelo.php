<?php 



require_once "conexion.php";
class ModeloUsuarios{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}


	/*============================================= echo '<script> console.log("'.$datos.'"); </script>';
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarUsuario($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(UserName, FirstName, LastName, UserEmail, UserPassword, claveLogin, UserRol, UserState) VALUES 															 (:usuario, :nombre, :apellido, :correo, :password, :clave, :rol, '1')");

		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
		$stmt->bindParam(":rol", $datos["rol"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}


	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function mdlBorrarUsuario($tabla, $datos){
		
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE UserID = :id");

		$stmt->bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";
		}else{
			return "error";	
		}

		$stmt->close();
		$stmt = null;
	}


	

	/*=============================================
	LOG
	=============================================*/

	static public function mdlUsuarioLog($fechaActual, $horaActual, $user, $accion){

		$stmt = Conexion::conectar()->prepare("INSERT INTO log (log_id, log_usuario, log_accion, log_fecha, log_hora) VALUES (NULL, :user, :accion, :fechaActual, :horaActual)");

		$stmt -> bindParam(":fechaActual", $fechaActual, PDO::PARAM_STR);
		$stmt -> bindParam(":horaActual", $horaActual, PDO::PARAM_STR);
		$stmt -> bindParam(":user", $user, PDO::PARAM_STR);
		$stmt -> bindParam(":accion", $accion, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		}else{
			return "error";	
		}


		$stmt->close();
		$stmt = null;

	}























}


 ?>