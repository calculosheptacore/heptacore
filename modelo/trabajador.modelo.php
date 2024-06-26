<?php 


require_once "conexion.php";

class ModeloTrabajador{


	/*=============================================
	REGISTRO DEL TRABAJADOR
	=============================================*/
	static public function mdlIngresarTrabajador($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( TPrimerNombre, TSegundoNombre, TPrimerApellido, TSegundoApellido, TUsuario, TEmail, TClave_VPN_Equipo_Email, IdEquipo, IdAlquilado, TEstado, IdControlTiempos, IdInventor, IdCivil3D, IdRecapPro, IdRevit, IdNavisWorksManage, IdProductUltimateLocal, IdBuildingPrimiunLocal, IdOffice, IdBentley, IdXdrawer, IdContapyme, IdYeminus) VALUES (:primerNombre, :segundoNombre, :primerApellido, :segundoApellido, :usuario, :email, :clave, '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')");


		$stmt->bindParam(":primerNombre", $datos["primerNombre"], PDO::PARAM_STR);
		$stmt->bindParam(":segundoNombre", $datos["segundoNombre"], PDO::PARAM_STR);
		$stmt->bindParam(":primerApellido", $datos["primerApellido"], PDO::PARAM_STR);
		$stmt->bindParam(":segundoApellido", $datos["segundoApellido"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR TRABAJADORES
	=============================================*/

	static public function mdlMostrarTrabajador($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	TRAER TRABAJADORES
	=============================================*/

	static public function mdlTraerTrabajador($tabla, $item, $valor){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = $valor");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	TRAER LICENCIA
	=============================================*/

	static public function mdlMostrarLicencia($tipoLicencia){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM licencias WHERE LicenciaTipo = $tipoLicencia AND LicenciaEstado = 1 ");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}



}














 ?>