<?php 



class ControladorSubarea{


	/*=============================================
	MOSTRAR PLANTAS
	=============================================*/

	static public function ctrMostrarSubarea($item1, $valor1){
		$tabla = "tabla_subarea";
		$respuesta = SubArea::mdlMostrarSubarea($tabla, $item1, $valor1);
		return $respuesta;
	}
}
?>