<?php 

require_once "conexion.php";

class SubArea{

	/*=============================================
	MOSTRAR PAIS
	=============================================*/

	static public function mdlMostrarSubarea($tabla, $item1, $valor1){
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
}
    ?>