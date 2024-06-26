<?php 

class ControladorCondicionesEstandar{

	/*=============================================
	MOSTRAR CONDICIONES ESTANDAR
	=============================================*/

	static public function ctrMostrarCondicionesEstandar($item1, $valor1){
		$tabla = "biblioteca_condiciones_estandar";
		$respuesta = ModeloCondicionesEstandar::mdlMostrarCondicionesEstandar($tabla, $item1, $valor1);
		return $respuesta;
	}
}

?>