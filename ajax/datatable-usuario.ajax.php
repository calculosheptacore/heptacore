<?php

require_once "../controlador/usuarios.controlador.php";
require_once "../modelo/usuario.modelo.php";


class TablaUsuarios{

 	/*=============================================
 	 MOSTRAR LA TABLA DE PRODUCTOS
  	=============================================*/ 

	public function mostrarTablaUsuarios(){

      $item = null;
      $valor = null;

      $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

  		if(count($usuarios) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($usuarios); $i++){



		  	/*=============================================
 	 		ESTADO
  			============================================= */
  			if($usuarios[$i]["UserState"] != 0){

  				$estado = "<button class='btn btn-success btn-xs btnActivarPais' CamPaisId='".$usuarios[$i]["UserID"]."' estadoPais='0'>Activado</button></td>";

  			}else{
				$estado = "<button class='btn btn-danger btn-xs btnActivarPais' CamPaisId='".$usuarios[$i]["UserID"]."' estadoPais='1'>Desactivado</button></td>";
  			} 	

		  	/*=============================================
 	 		ROL
  			============================================= */
			switch ($usuarios[$i]["UserRol"]) {
			    case 1:
			        $rol = "Administrador";
			        break;
			    case 2:
			        $rol = "Invitado";
			        break;
			    case 3:
			        $rol = "Administrator web tag";
			        break;
			    case 4:
			        $rol = "Operario web tag";
			        break;

			    default:
			        echo "Opción no reconocida";
			}



		  	/*=============================================
 	 		ACCIONES
  			============================================= */
			$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarPais' usuarioId='".$usuarios[$i]["UserID"]."'  data-toggle='modal' data-target='#editarPais'><i class='fa fa-edit' style='color: #ffffff;'></i></i></button><button class='btn btn-danger btnEliminarUsuario' usuarioId='".$usuarios[$i]["UserID"]."' ><i class='fa fa-times'></i></button></div>";

		 
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$usuarios[$i]["UserName"].'",
			      "'.$usuarios[$i]["FirstName"].'",
			      "'.$usuarios[$i]["LastName"].'",
			      "'.$usuarios[$i]["UserEmail"].'",
			      "'.$rol.'",
			      "'.$estado.'",
			      "'.$acciones.'"
			    ],';
		  }

		  $datosJson = substr($datosJson, 0, -1);
		 $datosJson .=   '] 
		 }';
		
		echo $datosJson;
	}
}

/*=============================================
ACTIVAR TABLA DE PLANTA
=============================================*/ 
$activarUsuarios = new TablaUsuarios();
$activarUsuarios -> mostrarTablaUsuarios();