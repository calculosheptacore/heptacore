<?php

require_once "conexion.php";

class ModeloPlanta{

	/*=============================================
	MOSTRAR PLANTAS
	=============================================*/

	static public function mdlMostrarPlanta($tabla, $item, $valor){
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

	/*=============================================
	MOSTRAR PLANTAS POR PAID
	=============================================*/

	static public function mdlMostrarPlantaPorPais($tabla, $item, $valor){
		
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetchAll();

		$stmt -> close();
		$stmt = null;
	}



	/*============================================= PARAM_INT  PARAM_STR
	REGISTRO DE PLANTA
	=============================================*/

	static public function mdlIngresarPlanta($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(PlantCodeCemex, 																																		PlantName, 																																			PlantCountry, 																																		PlantElevación,																																		Humedad_porcent,																																	AtmosphericPressure_mm_HG, 																															AtmosphericPressure_psi, 																															AtmosphericPressure_mm_H2O, 																														AtmosphericPressure_Pa_N_m2,																														AtmosphericPressure_bar, 																															AtmosphericPressure_mbar, 																															AtmosphericPressure_KN_m2, 																															AtmosphericPressure_in_H20, 																														AtmosphericPressure_in_HG,																															PlantTemperatureMin_C, 																																PlantTemperatureMin_K, 																																PlantTemperatureMin_F, 																																PlantTemperatureProm_C, 																															PlantTemperatureProm_K, 																															PlantTemperatureProm_F, 																															PlantTemperatureMax_C, 																																PlantTemperatureMax_K, 																																PlantTemperatureMax_F, 																																PlantState) VALUES 																																					(:codCemexPlant, :NomPlant, :countryPlant, :elevacion, :humedad, :PresionMMHG, :PresionPSI, :PresionMMH2O, :PresionPANM2, :PresionBAR, :PresionMBAR, :PresionKNM2, :PresionInH2O, :PresionInHG, :tempMinC, :tempMinK, :tempMinF, :tempProC, :tempProK, :tempProF, :tempMaxC, :tempMaxK, :tempMaxF, '1')");

		$stmt->bindParam(":codCemexPlant", $datos["codCemexPlant"], PDO::PARAM_STR);
		$stmt->bindParam(":NomPlant", $datos["NomPlant"], PDO::PARAM_STR);
		$stmt->bindParam(":countryPlant", $datos["countryPlant"], PDO::PARAM_INT);
		$stmt->bindParam(":elevacion", $datos["elevacion"], PDO::PARAM_INT);
		$stmt->bindParam(":humedad", $datos["humedad"], PDO::PARAM_INT);
		$stmt->bindParam(":PresionMMHG", $datos["PresionMMHG"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionPSI", $datos["PresionPSI"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionMMH2O", $datos["PresionMMH2O"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionPANM2", $datos["PresionPANM2"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionBAR", $datos["PresionBAR"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionMBAR", $datos["PresionMBAR"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionKNM2", $datos["PresionKNM2"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionInH2O", $datos["PresionInH2O"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionInHG", $datos["PresionInHG"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMinC", $datos["tempMinC"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMinK", $datos["tempMinK"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMinF", $datos["tempMinF"], PDO::PARAM_STR);
		$stmt->bindParam(":tempProC", $datos["tempProC"], PDO::PARAM_STR);
		$stmt->bindParam(":tempProK", $datos["tempProK"], PDO::PARAM_STR);		
		$stmt->bindParam(":tempProF", $datos["tempProF"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMaxC", $datos["tempMaxC"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMaxK", $datos["tempMaxK"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMaxF", $datos["tempMaxF"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";	
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;
	}

	/*=============================================
	BORRAR PLANTA
	=============================================*/

	static public function mdlBorrarPlanta($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE PlantID = :id");
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

	static public function mdlActualizarEstadoPlanta($tabla, $item, $valor, $ValorEstado){

		//$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item = $valor  WHERE PlantState = :estado");
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET PlantState = :estado WHERE $item  = $valor ");
		$stmt -> bindParam(":estado", $ValorEstado, PDO::PARAM_INT);
		if($stmt -> execute()){

			return "ok";
		}else{
			return "error";	
		}

		$stmt -> close();
		$stmt = null;

	}

	/*============================================= PARAM_INT  PARAM_STR
	EDITAR PLANTA
	=============================================*/

	static public function mdlEditarPlanta($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET PlantCodeCemex = :codCemexPlant, 																													PlantName = :NomPlant, 																																PlantCountry = :countryPlant, 																														PlantElevación = :elevacion, 																														Humedad_porcent = :humedad, 																														AtmosphericPressure_mm_HG = :PresionMMHG, 																											AtmosphericPressure_psi = :PresionPSI, 																												AtmosphericPressure_mm_H2O = :PresionMMH2O, 																										AtmosphericPressure_Pa_N_m2 = :PresionPANM2, 																										AtmosphericPressure_bar = :PresionBAR, 																												AtmosphericPressure_mbar = :PresionMBAR, 																											AtmosphericPressure_KN_m2 = :PresionKNM2, 																											AtmosphericPressure_in_H20 = :PresionInH2O, 																										AtmosphericPressure_in_HG = :PresionInHG, 																											PlantTemperatureMin_C = :tempMinC, 																													PlantTemperatureMin_K = :tempMinK, 																													PlantTemperatureMin_F = :tempMinF, 																													PlantTemperatureProm_C = :tempProC, 																												PlantTemperatureProm_K = :tempProK, 																												PlantTemperatureProm_F = :tempProF, 																												PlantTemperatureMax_C = :tempMaxC, 																													PlantTemperatureMax_K = :tempMaxK, 																													PlantTemperatureMax_F = :tempMaxF WHERE PlantID  = :idPlanta");

		$stmt->bindParam(":idPlanta", $datos["idPlanta"], PDO::PARAM_INT);
		$stmt->bindParam(":codCemexPlant", $datos["codCemexPlant"], PDO::PARAM_STR);
		$stmt->bindParam(":NomPlant", $datos["NomPlant"], PDO::PARAM_STR);
		$stmt->bindParam(":countryPlant", $datos["countryPlant"], PDO::PARAM_INT);
		$stmt->bindParam(":elevacion", $datos["elevacion"], PDO::PARAM_INT);
		$stmt->bindParam(":humedad", $datos["humedad"], PDO::PARAM_INT);
		$stmt->bindParam(":PresionMMHG", $datos["PresionMMHG"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionPSI", $datos["PresionPSI"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionMMH2O", $datos["PresionMMH2O"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionPANM2", $datos["PresionPANM2"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionBAR", $datos["PresionBAR"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionMBAR", $datos["PresionMBAR"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionKNM2", $datos["PresionKNM2"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionInH2O", $datos["PresionInH2O"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionInHG", $datos["PresionInHG"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMinC", $datos["tempMinC"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMinK", $datos["tempMinK"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMinF", $datos["tempMinF"], PDO::PARAM_STR);
		$stmt->bindParam(":tempProC", $datos["tempProC"], PDO::PARAM_STR);
		$stmt->bindParam(":tempProK", $datos["tempProK"], PDO::PARAM_STR);		
		$stmt->bindParam(":tempProF", $datos["tempProF"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMaxC", $datos["tempMaxC"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMaxK", $datos["tempMaxK"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMaxF", $datos["tempMaxF"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	
		}else{
			return "error";
		}

		$stmt->close();		
		$stmt = null;

	}
}


 ?>