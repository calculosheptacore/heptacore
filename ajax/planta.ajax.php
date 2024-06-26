<?php 




require_once "../controlador/planta.controlador.php";
require_once "../modelo/planta.modelo.php";

class AjaxPlanta{

	/*=============================================
	TRAER PLANTA
	=============================================*/	

	public $idPlanta;

	public function ajaxTraerTemperaturaPlanta(){

		$item = "PlantID";
		$valor = $this->idPlanta;

		$respuesta = ControladorPlanta::ctrMostrarPlanta($item, $valor);

		echo json_encode($respuesta);

	}


	/*=============================================
	TRAER PLANTA POR PAIS
	=============================================*/	

	public $idPlantContry;

	public function ajaxTraerPlantaPais(){

		$item = "PlantCountry";
		$valor = $this->idPlantContry;

		$respuesta = ControladorPlanta::ctrMostrarPlantaPorPais($item, $valor);

		echo json_encode($respuesta);

	}



	/*=============================================
	CAMBIAR ESTADO
	=============================================*/	

	public $CamAPlantaId;
	public $estado;

	public function ajaxCambiarEstadoPlanta(){

		$item = "PlantID";
		$valor = $this->CamAPlantaId;
		$ValorEstado = $this->estado;

		echo '<script> console.log("ajx"); </script>';

		$respuesta = ControladorPlanta::ctrEstadoPlanta($item, $valor, $ValorEstado);


		echo '<script> console.log('.$respuesta.'); </script>';
		echo json_encode($respuesta);

	}






}








/*=============================================
TRAER PLANTA
=============================================*/
if(isset($_POST["plantId"])){

	$traerTemp = new AjaxPlanta();
	$traerTemp -> idPlanta = $_POST["plantId"];
	$traerTemp -> ajaxTraerTemperaturaPlanta();

}

/*=============================================
TRAER PLANTA POR PAIS
=============================================*/
if(isset($_POST["plantIdContry"])){

	$traerPlantaPais = new AjaxPlanta();
	$traerPlantaPais -> idPlantContry = $_POST["plantIdContry"];
	$traerPlantaPais -> ajaxTraerPlantaPais();

}

/*=============================================
CAMBIAR ESTADO
=============================================*/
if(isset($_POST["CamAPlantaId"])){

	$CambiarEstadoPlanta = new AjaxPlanta();
	$CambiarEstadoPlanta -> CamAPlantaId = $_POST["CamAPlantaId"];
	$CambiarEstadoPlanta -> estado = $_POST["estado"];
	$CambiarEstadoPlanta -> ajaxCambiarEstadoPlanta();

}





 ?>