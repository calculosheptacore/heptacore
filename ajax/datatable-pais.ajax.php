<?php

require_once "../controlador/pais.controlador.php";
require_once "../modelo/pais.modelo.php";


class TablaPais{

 	/*=============================================
 	 MOSTRAR LA TABLA DE PRODUCTOS
  	=============================================*/ 

	public function mostrarTablaPais(){

      $item = null;
      $valor = null;

      $pais = ControladorPais::ctrMostrarPais($item, $valor);

  		if(count($pais) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($pais); $i++){



		  	/*=============================================
 	 		ESTADO
  			============================================= */
  			if($pais[$i]["state"] != 0){

  				$estado = "<button class='btn btn-success btn-xs btnActivarPais' CamPaisId='".$pais[$i]["codigo_pais"]."' estadoPais='0'>Activado</button></td>";

  			}else{
				$estado = "<button class='btn btn-danger btn-xs btnActivarPais' CamPaisId='".$pais[$i]["codigo_pais"]."' estadoPais='1'>Desactivado</button></td>";
  			} 	

		  	/*=============================================
 	 		ACCIONES
  			============================================= */
			$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarPais' paisId='".$pais[$i]["codigo_pais"]."'  data-toggle='modal' data-target='#editarPais'><i class='fa fa-edit' style='color: #ffffff;'></i></i></button><button class='btn btn-danger btnEliminarPais' paisId='".$pais[$i]["codigo_pais"]."' ><i class='fa fa-times'></i></button></div>";

		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$pais[$i]["pais_codigo"].'",
			      "'.$pais[$i]["pais_nombre_es"].'",
			      "'.$pais[$i]["pais_nombre_en"].'",
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
$activarPais = new TablaPais();
$activarPais -> mostrarTablaPais();