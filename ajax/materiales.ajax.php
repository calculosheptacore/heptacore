<?php 

require_once "../controlador/materiales.controlador.php";
require_once "../modelo/materiales.modelo.php";

class AjaxMateriales{

	/*=============================================
	TRAER DENSIDAD
	=============================================*/	

	public $idMateriales;
	public function ajaxTraerDensidadMaterial(){

		$item = "MaterialID";
		$valor = $this->idMateriales;
		$respuesta = ControladorMateriales::ctrMostrarMateriales($item, $valor);
		echo json_encode($respuesta);

	}

}

/*=============================================
TRAER DENSIDAD
=============================================*/
if(isset($_POST["materialesId"])){

	$traerDensidad = new AjaxMateriales();
	$traerDensidad -> idMateriales = $_POST["materialesId"];
	$traerDensidad -> ajaxTraerDensidadMaterial();

}
?>