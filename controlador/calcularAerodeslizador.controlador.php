
<?php 


class calcularAerodeslizador{


	/*=============================================  "codigo" => $_POST["codigo"],
	REGISTRO DE PLANTA
	=============================================*/

	static public function ctrCrearcalCularAerodeslizador(){

		

		if(isset($_POST["diagramaFlujoAerodeslizadorCalcular"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["diagramaFlujoAerodeslizadorCalcular"])){


				$tabla = "resultado_calculo_aerodeslizador";

				$datos = array("paisAerodeslizadorCalcular" => $_POST["paisAerodeslizadorCalcular"],
					           "PlantaAerodeslizadorCalcular" => $_POST["PlantaAerodeslizadorCalcular"],
					           "proyectoAerodeslizadorCalcular" => $_POST["proyectoAerodeslizadorCalcular"],
					           "diagramaFlujoAerodeslizadorCalcular" => $_POST["diagramaFlujoAerodeslizadorCalcular"],
					           "codigoAerodeslizadorCalcular" => $_POST["codigoAerodeslizadorCalcular"],
					           "codigoVentiladorCalcular" => $_POST["codigoVentiladorCalcular"],
					       	   "elevacionPlantaCalculo" => $_POST["elevacionPlantaCalculo"],
					       	   "temperaturaMinC_Calculo" => $_POST["temperaturaMinC_Calculo"],
					           "temperaturaMinF_Calculo" => $_POST["temperaturaMinF_Calculo"],
					           "temperaturaProC_Calculo" => $_POST["temperaturaProC_Calculo"],
					           "temperaturaProF_Calculo" => $_POST["temperaturaProF_Calculo"],
					           "temperaturaMaxC_Calculo" => $_POST["temperaturaMaxC_Calculo"],
					           "temperaturaMaxF_Calculo" => $_POST["temperaturaMaxF_Calculo"],
					           "MaterialCalcular" => $_POST["MaterialCalcular"],
					           "density_Transport_kg_m3_Calcular" => $_POST["density_Transport_kg_m3_Calcular"],
					           "densidad_Transport_lb_ft3_Calcular" => $_POST["densidad_Transport_lb_ft3_Calcular"],
					           "density_MaterialAreado_kg_m3_Calcular" => $_POST["density_MaterialAreado_kg_m3_Calcular"],
					           "density_MaterialAreado_lb_ft3_Calcular" => $_POST["density_MaterialAreado_lb_ft3_Calcular"],
					           "anguloReposoCalcular" => $_POST["anguloReposoCalcular"],
					           "Humedad_P_P_Calcular" => $_POST["Humedad_P_P_Calcular"],
					           "Humedad_W_W_Calcular" => $_POST["Humedad_W_W_Calcular"],
					           "temperaturaMaterial_C_Calcular" => $_POST["temperaturaMaterial_C_Calcular"],
					           "temperaturaMaterial_F_Calcular" => $_POST["temperaturaMaterial_F_Calcular"],
					           "capacidadOperacion_tph_Calcular" => $_POST["capacidadOperacion_tph_Calcular"],
					           "capacidadOperacion_stph_Calcular" => $_POST["capacidadOperacion_stph_Calcular"],
					           "InclinacionCalcular" => $_POST["InclinacionCalcular"],
					           "longitud_mm_Calcular" => $_POST["longitud_mm_Calcular"],
					           "longitud_ft_Calcular" => $_POST["longitud_ft_Calcular"],
					           "eficiencia_Ventilador_Calcular" => $_POST["eficiencia_Ventilador_Calcular"],
					           "capacidadDiseno_tph" => $_POST["capacidadDiseno_tph"],
					           "capacidadDiseno_stph" => $_POST["capacidadDiseno_stph"],
					           "factorCemex" => $_POST["factorCemex"],
					           "capacidadOperacion_tph" => $_POST["capacidadOperacion_tph"],
					           "capacidadOperacion_stph" => $_POST["capacidadOperacion_stph"],
					           "flujo_Aire_Area_Tela_Scfm_ft2" => $_POST["flujo_Aire_Area_Tela_Scfm_ft2"],
					           "flujo_Aire_Area_Tela_Nm3_h_m2" => $_POST["flujo_Aire_Area_Tela_Nm3_h_m2"],
					           "flujo_Aire_Normal" => $_POST["flujo_Aire_Normal"],
					           "presion_g_mm_H2O" => $_POST["presion_g_mm_H2O"],
					           "presion_g_mbar" => $_POST["presion_g_mbar"],
					           "flujoAireActual_am3_h" => $_POST["flujoAireActual_am3_h"],
					           "flujoAireActual_acfm" => $_POST["flujoAireActual_acfm"],
					           "flujoMaterial_m3_h" => $_POST["flujoMaterial_m3_h"],
					           "tamanoA" => $_POST["tamanoA"],
					           "tamanoB" => $_POST["tamanoB"],
					           "tamanoC" => $_POST["tamanoC"],
					           "tamanoD" => $_POST["tamanoD"],
					           "AreaTela_aerodeslizador" => $_POST["AreaTela_aerodeslizador"],					           
					           "perdidaPresion_mbar" => $_POST["perdidaPresion_mbar"],
					           "perdidaPresion_pa" => $_POST["perdidaPresion_pa"],
					           "perdidaPresion_In_H2O" => $_POST["perdidaPresion_In_H2O"],
					           "flujoAireActual_am3_s" => $_POST["flujoAireActual_am3_s"],
					           "flujoAireActual_PotenciaVentilador_acfm" => $_POST["flujoAireActual_PotenciaVentilador_acfm"],
					           "potencia_kw" => $_POST["potencia_kw"],
					           "potencia_hp" => $_POST["potencia_hp"],					   
					           "capacidadOperacion_aerodeslizador_tph" => $_POST["capacidadOperacion_aerodeslizador_tph"],
					           "capacidadOperacion_aerodeslizador_stph" => $_POST["capacidadOperacion_aerodeslizador_stph"],
					           "capacidadDiseno_aerodeslizador_tph" => $_POST["capacidadDiseno_aerodeslizador_tph"],
					           "capacidadDiseno_aerodeslizador_stph" => $_POST["capacidadDiseno_aerodeslizador_stph"],
					           "dencidadMaterial_Aerodeslizador_kg_m3" => $_POST["dencidadMaterial_Aerodeslizador_kg_m3"],
					           "dencidadMaterial_Aerodeslizador_lb_ft3" => $_POST["dencidadMaterial_Aerodeslizador_lb_ft3"],
					           "ancho_aerodeslizador_mm" => $_POST["ancho_aerodeslizador_mm"],
					           "ancho_aerodeslizador_inches" => $_POST["ancho_aerodeslizador_inches"],
					           "longitud_aerodeslizador_m" => $_POST["longitud_aerodeslizador_m"],
					           "longitud_aerodeslizador_ft" => $_POST["longitud_aerodeslizador_ft"],
					           "inclinacion_0" => $_POST["inclinacion_0"],

					           "capacidadOperacion_Ventilador_am3_h" => $_POST["capacidadOperacion_Ventilador_am3_h"],
					           "capacidadOperacion_Ventilador_acfm" => $_POST["capacidadOperacion_Ventilador_acfm"],
					           "potencia_ventilador_kw" => $_POST["potencia_ventilador_kw"],
					           "potencia_ventilador_hp" => $_POST["potencia_ventilador_hp"],
					           "temperatura_Ventilador_C" => $_POST["temperatura_Ventilador_C"],
					           "temperatura_Ventilador_F" => $_POST["temperatura_Ventilador_F"],
					           "presionManometrica_Ventilador_mm_h2o" => $_POST["presionManometrica_Ventilador_mm_h2o"],
					           "presionManometrica_Ventilador_in_h2o" => $_POST["presionManometrica_Ventilador_in_h2o"]
					       );




				


				$respuesta = ModeloCularAerodeslizador::mdlIngresarCularAerodeslizador($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({
							  icon: "success",
							  text: "Se registró el calculo del aerodeslizador exitosamente",
							}).then((result) => {
									if (result.value) {

									window.location = "calcularAerodeslizador";

									}
							});

					</script>';


				}	


			}else{

					echo '<script>

							Swal.fire({
							  icon: "warning",
							  text: "No se registró el calculo del aerodeslizador",
							}).then((result) => {
									if (result.value) {

									window.location = "calcularAerodeslizador";

									}
							});

					</script>';

			}


		}


	}





	/*=============================================
	MOSTRAR HISTORIAL AERODESLIZADOR
	=============================================*/

	static public function ctrMostrarHistorialAerodeslizador($item1, $valor1){

		$tabla = "resultado_calculo_aerodeslizador";
		$respuesta = ModeloCularAerodeslizador::mdlMostrarHistorialAerodeslizador($tabla, $item1, $valor1);
		return $respuesta;
	}



	/*=============================================
	CONSULTAR DATOS DE EXCEL
	=============================================*/

	static public function ctrConsultarDatosExcelAerodeslizador($item1, $valor1){

		$tabla = "resultado_calculo_aerodeslizador";
		$respuesta = ModeloCularAerodeslizador::mdlConsultarDatosExcelAerodeslizador($tabla, $item1, $valor1);
		return $respuesta;
	}


















}






 ?>


