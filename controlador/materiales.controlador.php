<?php


class ControladorMateriales{


    /*=============================================
    MOSTRAR MATERIALES
    =============================================*/

    static public function ctrMostrarMateriales($item, $valor){
        $tabla = "materials";
        $respuesta = ModeloMateriales::mdlMostrarMateriales($tabla, $item, $valor);
        return $respuesta;
    }
}

 ?>