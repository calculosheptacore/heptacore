<?php 

require_once "conexion.php";

class ModeloPais{

	/*=============================================
	MOSTRAR PAIS
	=============================================*/

	static public function mdlMostrarPais($tabla, $item1, $valor1){

		if($item1 != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item1 = :valor");
			$stmt -> bindParam(":valor", $valor1, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}



	/*============================================= PARAM_INT  PARAM_STR
	REGISTRO DEL PAIS
	=============================================*/

	static public function mdlIngresarPais($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(pais_codigo, pais_nombre_es, pais_nombre_en, state) VALUES (:codPaos, :nombrePais_Es, :nombrePais_En, '1')");

		$stmt->bindParam(":codPaos", $datos["codPaos"], PDO::PARAM_STR);
		$stmt->bindParam(":nombrePais_Es", $datos["nombrePais_Es"], PDO::PARAM_STR);
		$stmt->bindParam(":nombrePais_En", $datos["nombrePais_En"], PDO::PARAM_STR);


		if($stmt->execute()){

			echo "<script> console.log('ingreso pais'); </script>";
			return "ok";

			/*$stmtLog = Conexion::conectar()->prepare("INSERT INTO log (log_id, log_usuario, log_accion, log_fecha, log_hora) VALUES (NULL, 'alvaro', 'EDITAR', current_timestamp(), '11:47:16')");

			//$stmtLog->bindParam(":user", $_SESSION["UserID"], PDO::PARAM_STR);

			
			if ($stmtLog->execute()) {
				echo "<script> console.log('ingreso log'); </script>";
			}else{
				echo "<script> console.log('error log'); </script>";
			}

			$stmtLog->close();
			$stmtLog = null;*/

		}else{
			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*============================================= PARAM_INT  PARAM_STR
	EDITAR PAIS
	=============================================*/

	static public function mdlEditarPais($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET pais_codigo = :codPais, 																													pais_nombre_es = :nombrePais_Es, 																																pais_nombre_en = :nombrePais_En  WHERE codigo_pais  = :paisId");


		$stmt->bindParam(":paisId", $datos["paisId"], PDO::PARAM_STR);
		$stmt->bindParam(":codPais", $datos["codPais"], PDO::PARAM_STR);
		$stmt->bindParam(":nombrePais_Es", $datos["nombrePais_Es"], PDO::PARAM_STR);
		$stmt->bindParam(":nombrePais_En", $datos["nombrePais_En"], PDO::PARAM_STR);


		if($stmt->execute()){
			return "ok";	
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}



	/*=============================================
	BORRAR PAIS
	=============================================*/

	static public function mdlBorrarPais($tabla, $datos){
		
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE codigo_pais = :id");

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
	ACTUALIZAR ESTADO
	=============================================*/

	static public function mdlActualizarEstadoPais($tabla, $item, $valor, $ValorEstado){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET state = :estado WHERE $item  = $valor ");

		$stmt -> bindParam(":estado", $ValorEstado, PDO::PARAM_INT);
		if($stmt -> execute()){

			return "ok";
		}else{
			return "error";	
		}

		$stmt -> close();
		$stmt = null;
		
	}


	/*=============================================
	LOG
	=============================================*/


	static public function mdlPaisLog($fechaActual, $horaActual, $user, $accion){

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