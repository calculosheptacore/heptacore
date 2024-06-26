<?php 
session_start();

require_once "../controlador/calcularAerodeslizador.controlador.php";
require_once "../modelo/calcularAerodeslizador.modelo.php";

class AjaxCalcularAerodeslizador{

	/*=============================================
	Validar datos del calculo aerodeslizados
	=============================================*/	

	public $aerodeslizadorId;

	public function ajaxDatosAerodeslizadorExcel(){

		$item = "idresultado_calculo_aerodeslizador";
		$valor = $this->aerodeslizadorId;

		$respuesta = calcularAerodeslizador::ctrConsultarDatosExcelAerodeslizador($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	Validar detalle del aerodeslizador
	=============================================*/	

	public $aerodeslizadorIdValidarDetalle;

	public function ajaxDatosAerodeslizador(){

		$item = "idresultado_calculo_aerodeslizador";
		$valor = $this->aerodeslizadorIdValidarDetalle;

		$respuesta = calcularAerodeslizador::ctrMostrarHistorialAerodeslizador($item, $valor);

		echo json_encode($respuesta);

	}






}


/*=============================================
Validar datos del calculo aerodeslizados
=============================================*/
if(isset($_POST["aerodeslizadorId"])){

	$dataAero = new AjaxCalcularAerodeslizador();
	$dataAero -> aerodeslizadorId = $_POST["aerodeslizadorId"];
	$dataAero -> ajaxDatosAerodeslizadorExcel();

}

/*=============================================
Validar detalle del aerodeslizador
=============================================*/
if(isset($_POST["aerodeslizadorIdValidarDetalle"])){

	$dataAero = new AjaxCalcularAerodeslizador();
	$dataAero -> aerodeslizadorIdValidarDetalle = $_POST["aerodeslizadorIdValidarDetalle"];
	$dataAero -> ajaxDatosAerodeslizador();

}



 ?>