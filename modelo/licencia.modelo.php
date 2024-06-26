<?php 


require_once "conexion.php";

class ModeloLicencias{


	/*=============================================
	REGISTRO DE LA LICENCIA 
	=============================================*/
	static public function mdlIngresarLicencias($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (LicenciaTipo, LicenciaEmail, LicenciaClave, LicenciaEstado, IdTrabajador) VALUES (:tipoLicencia, :emailkEY, :clave, '1', '0')");


		$stmt->bindParam(":tipoLicencia", $datos["tipoLicencia"], PDO::PARAM_STR);
		$stmt->bindParam(":emailkEY", $datos["emailkEY"], PDO::PARAM_STR);
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
	MOSTRAR lICENCIAS
	=============================================*/

	static public function mdlMostrarLicencias($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}





}


 ?>