<?php 


require_once "conexion.php";

class ModeloProyectos{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarProyectos($tabla, $item, $valor){
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

	/*============================================= PARAM_INT  PARAM_STR
	REGISTRO DEL PROYECTO
	=============================================*/

	static public function mdlIngresarProyecto($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (proyecto_planta, codigo_hepta, proyecto_nombre_es, orden_compra, proyecto_firma_GP, proyecto_firma_IM, proyecto_firma_IC, proyecto_firma_IE, proyecto_firma_CI, proyecto_estado) VALUES (:namePlanta, :codigoHepta, :nameProyecto, :ordenCompra, :personal_GP, :personal_IM, :personal_IC,:personal_IE, :personal_CI,'1')");

		$stmt->bindParam(":namePlanta", $datos["namePlanta"], PDO::PARAM_INT);
		$stmt->bindParam(":codigoHepta", $datos["codigoHepta"], PDO::PARAM_STR);
		$stmt->bindParam(":ordenCompra", $datos["ordenCompra"], PDO::PARAM_STR);
		$stmt->bindParam(":nameProyecto", $datos["nameProyecto"], PDO::PARAM_STR);
		$stmt->bindParam(":personal_GP", $datos["personal_GP"], PDO::PARAM_STR);
		$stmt->bindParam(":personal_IM", $datos["personal_IM"], PDO::PARAM_STR);
		$stmt->bindParam(":personal_IC", $datos["personal_IC"], PDO::PARAM_STR);
		$stmt->bindParam(":personal_IE", $datos["personal_IE"], PDO::PARAM_STR);
		$stmt->bindParam(":personal_CI", $datos["personal_CI"], PDO::PARAM_STR);



		if($stmt->execute()){
			return "ok";	
		}else{
			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*============================================= PARAM_INT  PARAM_STR
	EDITAR PROYECTO
	=============================================*/

	static public function mdlEditarProyecto($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET proyecto_planta = :editarNamePlanta, 																																			codigo_hepta = :editarCodigoHepta, 																																	proyecto_nombre_es = :editarNameProyecto, 																																	orden_compra = :editarOrdenCompra , 																																	proyecto_firma_GP = :editarPersonal_GP , 																																	proyecto_firma_IM = :editarPersonal_IM , 																																	proyecto_firma_IC = :editarPersonal_IC , 																																	proyecto_firma_IE = :editarPersonal_IE , 																																	proyecto_firma_CI = :editarPersonal_CI   																																	WHERE proyecto_codigo   = :idProyecto");


		$stmt->bindParam(":idProyecto", $datos["idProyecto"], PDO::PARAM_STR);
		$stmt->bindParam(":editarNamePlanta", $datos["editarNamePlanta"], PDO::PARAM_INT);
		$stmt->bindParam(":editarCodigoHepta", $datos["editarCodigoHepta"], PDO::PARAM_STR);
		$stmt->bindParam(":editarOrdenCompra", $datos["editarOrdenCompra"], PDO::PARAM_STR);
		$stmt->bindParam(":editarNameProyecto", $datos["editarNameProyecto"], PDO::PARAM_STR);
		$stmt->bindParam(":editarPersonal_GP", $datos["editarPersonal_GP"], PDO::PARAM_STR);
		$stmt->bindParam(":editarPersonal_IM", $datos["editarPersonal_IM"], PDO::PARAM_STR);
		$stmt->bindParam(":editarPersonal_IC", $datos["editarPersonal_IC"], PDO::PARAM_STR);
		$stmt->bindParam(":editarPersonal_IE", $datos["editarPersonal_IE"], PDO::PARAM_STR);
		$stmt->bindParam(":editarPersonal_CI", $datos["editarPersonal_CI"], PDO::PARAM_STR);


		if($stmt->execute()){
			return "ok";	
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	BORRAR PROYECTO
	=============================================*/

	static public function mdlBorrarPais($tabla, $datos){
		
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE proyecto_codigo = :id");

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

	static public function mdlActualizarEstadoProyecto($tabla, $item, $valor, $ValorEstado){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET proyecto_estado = :estado WHERE $item  = $valor ");

		$stmt -> bindParam(":estado", $ValorEstado, PDO::PARAM_INT);
		if($stmt -> execute()){

			return "ok";
		}else{
			return "error";	
		}

		$stmt -> close();
		$stmt = null;
		
	}







}

 ?>