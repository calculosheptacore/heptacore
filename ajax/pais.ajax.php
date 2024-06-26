<?php 
session_start();

require_once "../controlador/pais.controlador.php";
require_once "../modelo/pais.modelo.php";

class AjaxPais{

	/*=============================================
	Validar codigo del pais
	=============================================*/	

	public $codepais;

	public function ajaxValCodePais(){

		$item = "pais_codigo";
		$valor = $this->codepais;

		$respuesta = ControladorPais::ctrMostrarPais($item, $valor);

		echo json_encode($respuesta);

	}


	/*=============================================
	Editar pais
	=============================================*/	

	public $paisid;

	public function ajaxEditarPais(){

		$item = "codigo_pais";
		$valor = $this->paisid;

		$respuesta = ControladorPais::ctrMostrarPais($item, $valor);

		echo json_encode($respuesta);

	}


	/*=============================================
	CAMBIAR ESTADO
	=============================================*/	

	public $CamPaisId;
	public $estado;

	public function ajaxCambiarEstadoPais(){

		
		$item = "codigo_pais";
		$valor = $this->CamPaisId;
		$ValorEstado = $this->estado;	

		$respuesta = ControladorPais::ctrEstadoPais($item, $valor, $ValorEstado);



		echo json_encode($respuesta);

	}





}


/*=============================================
Validar codigo del pais
=============================================*/
if(isset($_POST["CodePais"])){

	$valCodePais = new AjaxPais();
	$valCodePais -> codepais = $_POST["CodePais"];
	$valCodePais -> ajaxValCodePais();

}

/*=============================================
Editar pais
=============================================*/
if(isset($_POST["paisId"])){

	$editarPais = new AjaxPais();
	$editarPais -> paisid = $_POST["paisId"];
	$editarPais -> ajaxEditarPais();

}


/*=============================================
CAMBIAR ESTADO
=============================================*/
if(isset($_POST["CamPaisId"])){

	$CambiarEstadoPais = new AjaxPais();
	$CambiarEstadoPais -> CamPaisId = $_POST["CamPaisId"];
	$CambiarEstadoPais -> estado = $_POST["estado"];
	$CambiarEstadoPais -> ajaxCambiarEstadoPais();

}


 ?>