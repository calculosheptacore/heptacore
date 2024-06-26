<?php 

require_once "../controlador/trabajador.controlador.php";
require_once "../modelo/trabajador.modelo.php";

class AjaxTrabajador{

	/*=============================================
	TRAER TRABAJDOR
	=============================================*/	

	public $codeTrabajador;

	public function ajaxTraerTrabajador(){

		$item = "IdTrabajador";
		$valor = $this->codeTrabajador;

		$respuesta = ControladorTrabajador::ctrTraerTrabajador($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
TRAER TRABAJDOR
=============================================*/
if(isset($_POST["codeTrabajador"])){

	$traer = new AjaxTrabajador();
	$traer -> codeTrabajador = $_POST["codeTrabajador"];
	$traer -> ajaxTraerTrabajador();

}

 ?>