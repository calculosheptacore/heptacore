<?php

require_once "../controlador/planta.controlador.php";
require_once "../modelo/planta.modelo.php";

require_once "../controlador/pais.controlador.php";
require_once "../modelo/pais.modelo.php";


class TablaProductosPlanta{

 	/*=============================================
 	 MOSTRAR LA TABLA DE PRODUCTOS
  	=============================================*/ 

	public function mostrarTablaProductosPlanta(){

      $item = null;
      $valor = null;

      $planta = ControladorPlanta::ctrMostrarPlanta($item, $valor);

  		if(count($planta) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($planta); $i++){



		  	/*=============================================
 	 		TRAEMOS EL PROVEDOR
  			============================================= */

		  	$item1 = "codigo_pais";
		  	$valor1 = $planta[$i]["PlantCountry"];

		  	$pais = ControladorPais::ctrMostrarPais($item1, $valor1);


		  	/*=============================================
 	 		Presion
  			============================================= */

  			$botonPresion = " <button type='button' class='btn btn-azulHepta btn-sm btnValidarPresion' plantId='".$planta[$i]["PlantID"]."'  data-toggle='modal' data-target='#validarPresion' > Presión </button> ";

		  	/*=============================================
 	 		TEMPERATURA
  			============================================= */

  			$botonTemperaturas = " <button type='button' class='btn btn-azulHepta btn-sm btnValidarTemp' plantId='".$planta[$i]["PlantID"]."'  data-toggle='modal' data-target='#validarTemperatura' > Temperaturas </button> ";
		  	/*=============================================
 	 		ESTADO
  			============================================= */
  			if($planta[$i]["PlantState"] != 0){

  				$estado = "<button class='btn btn-success btn-xs btnActivar' CamAPlantaId='".$planta[$i]["PlantID"]."' estadoPlanta='0'>Activado</button></td>";

  			}else{
				$estado = "<button class='btn btn-danger btn-xs btnActivar' CamAPlantaId='".$planta[$i]["PlantID"]."' estadoPlanta='1'>Desactivado</button></td>";
  			} 	

		  	/*=============================================
 	 		ACCIONES
  			============================================= */
			$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarPlanta' plantId='".$planta[$i]["PlantID"]."'  data-toggle='modal' data-target='#EditarPlanta'><i class='fa fa-edit' style='color: #ffffff;'></i></i></button><button class='btn btn-danger btnEliminarPlanta' PlantaId='".$planta[$i]["PlantID"]."' ><i class='fa fa-times'></i></button></div>";

		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$planta[$i]["PlantName"].'",
			      "'.$pais["pais_nombre_es"].'",
			      "'.$planta[$i]["PlantCodeCemex"].'",
			      "'.$planta[$i]["PlantElevación"].' m",
			      "'.$botonPresion.'",
			      "'.$planta[$i]["Humedad_porcent"].' %",
			      "'.$botonTemperaturas.'",
			      "'.$estado.'",
			      "'.$acciones.'"
			    ],';
		  }

		  $datosJson = substr($datosJson, 0, -1);
		 $datosJson .=   '] 
		 }';
		
		echo $datosJson;
	}
}

/*=============================================
ACTIVAR TABLA DE PLANTA
=============================================*/ 
$activarProductosBodega = new TablaProductosPlanta();
$activarProductosBodega -> mostrarTablaProductosPlanta();