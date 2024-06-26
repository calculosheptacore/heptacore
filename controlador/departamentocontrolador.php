<?php 


class ControladorDepartamento {

	static public function ctrMostrarDepartamento($item, $valor){
		$tabla = "tabla_departamento";
		$respuesta = ModeloDepartamento::mdlMostrarDepartamento($tabla, $item, $valor);
		return $respuesta;
	}
 }
?>