<?php

require_once "../controlador/planta.controlador.php";
require_once "../modelo/planta.modelo.php";

require_once "../controlador/proyectos.controlador.php";
require_once "../modelo/proyectos.modelo.php";


class TablaProyecto{

 	/*=============================================
 	 MOSTRAR LA TABLA DE PROYECTO
  	=============================================*/ 

	public function mostrarTablaProyecto(){

      $item = null;
      $valor = null;

      $proyectos = ControladorProyectos::ctrMostrarProyectos($item, $valor);

  		if(count($proyectos) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($proyectos); $i++){



		  	/*=============================================
 	 		TRAEMOS EL PROVEDOR
  			============================================= */

		  	$item1 = "PlantID";
		  	$valor1 = $proyectos[$i]["proyecto_planta"];

		  	$planta = ControladorPlanta::ctrMostrarPlanta($item1, $valor1);


		  	/*=============================================
 	 		PERSONAL A CARGO
  			============================================= */

  			$botonPersonal = " <button type='button' class='btn btn-azulHepta btn-sm btnValidarPersonalACargo' proyectoId='".$proyectos[$i]["proyecto_codigo"]."'  data-toggle='modal' data-target='#validarPersonal' > Personal </button> ";


	
		  	/*=============================================
 	 		ESTADO
  			============================================= */
  			if($proyectos[$i]["proyecto_estado"] != 0){

  				$estado = "<button class='btn btn-success btn-xs btnActivarProyecto' CamProyectoId='".$proyectos[$i]["proyecto_codigo"]."' estadoProyecto='0'>Activado</button></td>";

  			}else{
				$estado = "<button class='btn btn-danger btn-xs btnActivarProyecto' CamProyectoId='".$proyectos[$i]["proyecto_codigo"]."' estadoProyecto='1'>Desactivado</button></td>";
  			} 	

		  	/*=============================================
 	 		ACCIONES
  			============================================= */
			$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarProyecto' proyectoId='".$proyectos[$i]["proyecto_codigo"]."'  data-toggle='modal' data-target='#EditarProyecto' ><i class='fa fa-edit' style='color: #ffffff;'></i></i></button><button class='btn btn-danger btnEliminarProyecto' proyectoId='".$proyectos[$i]["proyecto_codigo"]."' ><i class='fa fa-times'></i></button></div>";

		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$planta["PlantName"].'",
			      "'.$proyectos[$i]["codigo_hepta"].'",
			      "'.$proyectos[$i]["proyecto_nombre_es"].'",
			      "'.$proyectos[$i]["orden_compra"].'",
			      "'.$botonPersonal.'",
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
$activarTablaProyecto = new TablaProyecto();
$activarTablaProyecto -> mostrarTablaProyecto();