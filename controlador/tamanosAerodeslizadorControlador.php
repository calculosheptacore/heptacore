<?php 


class ControladorAerodeslizador {


	static public function ctrMostrarAerodeslizador($item, $valor){
		$tabla = "biblioteca_tamanos_aerodeslizador";
		$respuesta = ModeloAerodeslizador::mdlMostrarAerodeslizador($tabla, $item, $valor);
		return $respuesta;
	}
 }
 
?>