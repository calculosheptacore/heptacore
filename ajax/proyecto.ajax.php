<?php 

require_once "../controlador/proyectos.controlador.php";
require_once "../modelo/proyectos.modelo.php";

class AjaxProyecto{



	/*=============================================
	Editar pais
	=============================================*/	

	public $proyectoId;

	public function ajaxPersonalACargoProyecto(){

		$item = "proyecto_codigo";
		$valor = $this->proyectoId;

		$respuesta = ControladorProyectos::ctrMostrarProyectos($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	CAMBIAR ESTADO
	=============================================*/	

	public $CamProyectoId;
	public $estado;

	public function ajaxCambiarEstadoProyecto(){

		
		$item = "proyecto_codigo";
		$valor = $this->CamProyectoId;
		$ValorEstado = $this->estado;	

		$respuesta = ControladorProyectos::ctrEstadoProyecto($item, $valor, $ValorEstado);

		echo json_encode($respuesta);

	}




}


/*=============================================
Editar pais
=============================================*/
if(isset($_POST["proyectoId"])){

	$ValidarProyecto = new AjaxProyecto();
	$ValidarProyecto -> proyectoId = $_POST["proyectoId"];
	$ValidarProyecto -> ajaxPersonalACargoProyecto();

}


/*=============================================
CAMBIAR ESTADO
=============================================*/
if(isset($_POST["CamProyectoId"])){

	$CambiarEstadoProyecto = new AjaxProyecto();
	$CambiarEstadoProyecto -> CamProyectoId = $_POST["CamProyectoId"];
	$CambiarEstadoProyecto -> estado = $_POST["estado"];
	$CambiarEstadoProyecto -> ajaxCambiarEstadoProyecto();

}



 ?>