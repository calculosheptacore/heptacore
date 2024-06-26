<?php 


require_once "conexion.php";

class ModeloEquipos{

	/*=============================================
	MOSTRAR EQUIPOS
	=============================================*/

	static public function mdlMostrarEquipos($tabla, $item, $valor){

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
}




/*============================================= PARAM_INT  PARAM_STR
	REGISTRO DE EQUIPO
	=============================================*/

	/*static public function mdlIngresarEquipo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(PlantCodeCemex, 																																		PlantName, 																																			PlantCountry, 																																		PlantElevación,																																		Humedad_porcent,																																	AtmosphericPressure_mm_HG, 																															AtmosphericPressure_psi, 																															AtmosphericPressure_mm_H2O, 																														AtmosphericPressure_Pa_N_m2,																														AtmosphericPressure_bar, 																															AtmosphericPressure_mbar, 																															AtmosphericPressure_KN_m2, 																															AtmosphericPressure_in_H20, 																														AtmosphericPressure_in_HG,																															PlantTemperatureMin_C, 																																PlantTemperatureMin_K, 																																PlantTemperatureMin_F, 																																PlantTemperatureProm_C, 																															PlantTemperatureProm_K, 																															PlantTemperatureProm_F, 																															PlantTemperatureMax_C, 																																PlantTemperatureMax_K, 																																PlantTemperatureMax_F, 																																PlantState) VALUES 																																					(:codCemexPlant, :NomPlant, :countryPlant, :elevacion, :humedad, :PresionMMHG, :PresionPSI, :PresionMMH2O, :PresionPANM2, :PresionBAR, :PresionMBAR, :PresionKNM2, :PresionInH2O, :PresionInHG, :tempMinC, :tempMinK, :tempMinF, :tempProC, :tempProK, :tempProF, :tempMaxC, :tempMaxK, :tempMaxF, '1')");

		$stmt->bindParam(":codCemexPlant", $datos["codCemexPlant"], PDO::PARAM_STR);
		$stmt->bindParam(":humedad", $datos["humedad"], PDO::PARAM_INT);
		$stmt->bindParam(":PresionMMHG", $datos["PresionMMHG"], PDO::PARAM_STR);
		$stmt->bindParam(":PresionInHG", $datos["PresionInHG"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMinC", $datos["tempMinC"], PDO::PARAM_STR);
		$stmt->bindParam(":tempMaxF", $datos["tempMaxF"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";	
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;
	}*/


 ?>