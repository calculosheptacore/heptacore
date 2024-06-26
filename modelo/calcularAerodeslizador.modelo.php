
<?php 


require_once "conexion.php";

class ModeloCularAerodeslizador{



	/*============================================= PARAM_INT  PARAM_STR   $stmt->bindParam(":Calcular", $datos["Calcular"], PDO::PARAM_STR);	
	REGISTRO DE PLANTA
	=============================================*/

	static public function mdlIngresarCularAerodeslizador($tabla, $datos){

		var_dump($datos);

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(`codigo_calculo_aerodeslizador`, `codigo_pais`, `codigo_planta`, `codigo_proyecto`, `diagrama_flujo`, `codigo_aerodeslizador`, `codigo_ventilador`, `elevacion_planta`, `temperaturaMinC_planta`, `temperaturaMinF_planta`, `temperaturaProC_planta`, `temperaturaProF_planta`, `temperaturaMaxC_planta`, `temperaturaMaxF_planta`, `codigo_material`, `densidad_transporte_kg_m3`, `densidad_transporte_lb_ft3`, `densidad_aireado_kg_m3`, `densidad_aireado_lb_ft3`, `material_angulo_reposo`, `material_humedad_p_p`, `material_humedad_w_w`, `material_temperaturaC`, `material_temperaturaF`, `capacidad_operacion_tph`, `capacidad_operacion_stph`, `inclinacion`, `longitud_mm`, `longitud_ft`, `eficiencia`, `capacidadAerodeslizador_capacidad_diseño_tph`, `capacidadAerodeslizador_capacidad_diseño_stph`, `capacidadAerodeslizador_factor_cemex`, `capacidadAerodeslizador_capacidad_operacion_tph`, `capacidadAerodeslizador_capacidad_operacion_stph`, `capacidadVentilador_flujoAire_areaTela_Scfm_ft2`, `capacidadVentilador_flujoAire_areaTela_Nm3_h_m2`, `capacidadVentilador_flujoAire_normal_Nm3_h`, `capacidadVentilador_presion_mm_H2O`, `capacidadVentilador_presion_mbar`, `capacidadVentilador_flujoAire_actual_Am3_h`, `capacidadVentilador_flujoAire_actual_Acfm`, `tamanoAerodeslizador_flujoMaterial_3_h`, `tamanoAerodeslizador_tamano_A`, `tamanoAerodeslizador_tamano_B`, `tamanoAerodeslizador_tamano_C`, `tamanoAerodeslizador_tamano_D`, `tamanoAerodeslizador_areaTela_m2`, `potenciaVentilador_perdiaPresion_mbar`, `potenciaVentilador_perdiaPresion_pa`, `potenciaVentilador_perdiaPresion_in_H2O`, `potenciaVentilador_flujoAire_Actual_Am3_s`, `potenciaVentilador_flujoAire_Actual_Acfm`, `potenciaVentilador_potencia_kw`, `potenciaVentilador_potencia_hp`, `aerodeslizador_capacidadOperacion_tph`, `aerodeslizador_capacidadOperacion_stph`, `aerodeslizador_capacidadDiseno_tph`, `aerodeslizador_capacidadDiseno_stph`, `aerodeslizador_densidadMaterial_aireado_kg_m3`, `aerodeslizador_densidadMaterial_aireado_lb_ft3`, `aerodeslizador_ancho_mm`, `aerodeslizador_ancho_inches`, `aerodeslizador_longitud_m`, `aerodeslizador_longitud_ft`, `aerodeslizador_inclinacion`, `ventilador_capacidadOperacion_Am3_h`, `ventilador_capacidadOperacion_Acfm`, `ventilador_potencia_kw`, `ventilador_potencia_hp`, `ventilador_temperatura_C`, `ventilador_temperatura_F`, `ventilador_presionNanometrica_mm_H2O`, `ventilador_presionNanometrica_in_H2O`)
														VALUES ('codigo',																																					:paisAerodeslizadorCalcular, 																																:PlantaAerodeslizadorCalcular, 																																:proyectoAerodeslizadorCalcular, 																															:diagramaFlujoAerodeslizadorCalcular, 																														:codigoAerodeslizadorCalcular, 																																:codigoVentiladorCalcular, 																																	:elevacionPlantaCalculo,																																	:temperaturaMinC_Calculo,																																	:temperaturaMinF_Calculo,																																	:temperaturaProC_Calculo,																																	:temperaturaProF_Calculo,																																	:temperaturaMaxC_Calculo,																																	:temperaturaMaxF_Calculo,																																				:MaterialCalcular,																								:density_Transport_kg_m3_Calcular,																			:densidad_Transport_lb_ft3_Calcular,																		:density_MaterialAreado_kg_m3_Calcular,																		:density_MaterialAreado_lb_ft3_Calcular,																	:anguloReposoCalcular,																						:Humedad_P_P_Calcular,																						:Humedad_W_W_Calcular,																						:temperaturaMaterial_C_Calcular,																			:temperaturaMaterial_F_Calcular,																			:capacidadOperacion_tph_Calcular, 																			:capacidadOperacion_stph_Calcular, 																			:InclinacionCalcular, 																						:longitud_mm_Calcular, 																						:longitud_ft_Calcular, 																						:eficiencia_Ventilador_Calcular, 																			:capacidadDiseno_tph, 																						:capacidadDiseno_stph, 																						:factorCemex, 																								:capacidadOperacion_tph, 																					:capacidadOperacion_stph, 																					:flujo_Aire_Area_Tela_Scfm_ft2, 																			:flujo_Aire_Area_Tela_Nm3_h_m2, 																			:flujo_Aire_Normal, 																						:presion_g_mm_H2O, 																							:presion_g_mbar, 																							:flujoAireActual_am3_h, 																					:flujoAireActual_acfm, 																						:flujoMaterial_m3_h, 																						:tamanoA, 																									:tamanoB, 																									:tamanoC, 																									:tamanoD, 																									:AreaTela_aerodeslizador, 																					:perdidaPresion_mbar, 																						:perdidaPresion_pa, 																						:perdidaPresion_In_H2O, 																					:flujoAireActual_am3_s, 																					:flujoAireActual_PotenciaVentilador_acfm, 																	:potencia_kw, 																								:potencia_hp, 																								:capacidadOperacion_aerodeslizador_tph, 																	:capacidadOperacion_aerodeslizador_stph, 																	:capacidadDiseno_aerodeslizador_tph, 																		:capacidadDiseno_aerodeslizador_stph, 																		:dencidadMaterial_Aerodeslizador_kg_m3, 																	:dencidadMaterial_Aerodeslizador_lb_ft3, 																	:ancho_aerodeslizador_mm, 																					:ancho_aerodeslizador_inches, 																				:longitud_aerodeslizador_m, 																				:longitud_aerodeslizador_ft, 																				:inclinacion_0, :capacidadOperacion_Ventilador_am3_h, :capacidadOperacion_Ventilador_acfm, :potencia_ventilador_kw, :potencia_ventilador_hp, :temperatura_Ventilador_C, :temperatura_Ventilador_F, :presionManometrica_Ventilador_mm_h2o, :presionManometrica_Ventilador_in_h2o)");

		//Datos de entrada
		$stmt->bindParam(":paisAerodeslizadorCalcular", $datos["paisAerodeslizadorCalcular"], PDO::PARAM_STR);		
		$stmt->bindParam(":PlantaAerodeslizadorCalcular", $datos["PlantaAerodeslizadorCalcular"], PDO::PARAM_STR);
		$stmt->bindParam(":proyectoAerodeslizadorCalcular", $datos["proyectoAerodeslizadorCalcular"], PDO::PARAM_STR);
		$stmt->bindParam(":diagramaFlujoAerodeslizadorCalcular", $datos["diagramaFlujoAerodeslizadorCalcular"], PDO::PARAM_STR);
		$stmt->bindParam(":codigoAerodeslizadorCalcular", $datos["codigoAerodeslizadorCalcular"], PDO::PARAM_STR);
		$stmt->bindParam(":codigoVentiladorCalcular", $datos["codigoVentiladorCalcular"], PDO::PARAM_STR);
		//Condiciones de planta
		$stmt->bindParam(":elevacionPlantaCalculo", $datos["elevacionPlantaCalculo"], PDO::PARAM_STR);	
		$stmt->bindParam(":temperaturaMinC_Calculo", $datos["temperaturaMinC_Calculo"], PDO::PARAM_STR);
		$stmt->bindParam(":temperaturaMinF_Calculo", $datos["temperaturaMinF_Calculo"], PDO::PARAM_STR);
		$stmt->bindParam(":temperaturaProC_Calculo", $datos["temperaturaProC_Calculo"], PDO::PARAM_STR);
		$stmt->bindParam(":temperaturaProF_Calculo", $datos["temperaturaProF_Calculo"], PDO::PARAM_STR);
		$stmt->bindParam(":temperaturaMaxC_Calculo", $datos["temperaturaMaxC_Calculo"], PDO::PARAM_STR);
		$stmt->bindParam(":temperaturaMaxF_Calculo", $datos["temperaturaMaxF_Calculo"], PDO::PARAM_STR);
		//Caracterización de material
		$stmt->bindParam(":MaterialCalcular", $datos["MaterialCalcular"], PDO::PARAM_STR);
		$stmt->bindParam(":density_Transport_kg_m3_Calcular", $datos["density_Transport_kg_m3_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":densidad_Transport_lb_ft3_Calcular", $datos["densidad_Transport_lb_ft3_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":density_MaterialAreado_kg_m3_Calcular", $datos["density_MaterialAreado_kg_m3_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":density_MaterialAreado_lb_ft3_Calcular", $datos["density_MaterialAreado_lb_ft3_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":anguloReposoCalcular", $datos["anguloReposoCalcular"], PDO::PARAM_STR);
		$stmt->bindParam(":Humedad_P_P_Calcular", $datos["Humedad_P_P_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":Humedad_W_W_Calcular", $datos["Humedad_W_W_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":temperaturaMaterial_C_Calcular", $datos["temperaturaMaterial_C_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":temperaturaMaterial_F_Calcular", $datos["temperaturaMaterial_F_Calcular"], PDO::PARAM_STR);
		//Aerodeslizador
		$stmt->bindParam(":capacidadOperacion_tph_Calcular", $datos["capacidadOperacion_tph_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":capacidadOperacion_stph_Calcular", $datos["capacidadOperacion_stph_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":InclinacionCalcular", $datos["InclinacionCalcular"], PDO::PARAM_STR);
		$stmt->bindParam(":longitud_mm_Calcular", $datos["longitud_mm_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":longitud_ft_Calcular", $datos["longitud_ft_Calcular"], PDO::PARAM_STR);
		$stmt->bindParam(":eficiencia_Ventilador_Calcular", $datos["eficiencia_Ventilador_Calcular"], PDO::PARAM_STR);
		//Capacidad del aerodeslizador
		$stmt->bindParam(":capacidadDiseno_tph", $datos["capacidadDiseno_tph"], PDO::PARAM_STR);
		$stmt->bindParam(":capacidadDiseno_stph", $datos["capacidadDiseno_stph"], PDO::PARAM_STR);
		$stmt->bindParam(":factorCemex", $datos["factorCemex"], PDO::PARAM_STR);
		$stmt->bindParam(":capacidadOperacion_tph", $datos["capacidadOperacion_tph"], PDO::PARAM_STR);
		$stmt->bindParam(":capacidadOperacion_stph", $datos["capacidadOperacion_stph"], PDO::PARAM_STR);
		//Capacidad del ventilador
		$stmt->bindParam(":flujo_Aire_Area_Tela_Scfm_ft2", $datos["flujo_Aire_Area_Tela_Scfm_ft2"], PDO::PARAM_STR);
		$stmt->bindParam(":flujo_Aire_Area_Tela_Nm3_h_m2", $datos["flujo_Aire_Area_Tela_Nm3_h_m2"], PDO::PARAM_STR);
		$stmt->bindParam(":flujo_Aire_Normal", $datos["flujo_Aire_Normal"], PDO::PARAM_STR);
		$stmt->bindParam(":presion_g_mm_H2O", $datos["presion_g_mm_H2O"], PDO::PARAM_STR);
		$stmt->bindParam(":presion_g_mbar", $datos["presion_g_mbar"], PDO::PARAM_STR);
		$stmt->bindParam(":flujoAireActual_am3_h", $datos["flujoAireActual_am3_h"], PDO::PARAM_STR);
		$stmt->bindParam(":flujoAireActual_acfm", $datos["flujoAireActual_acfm"], PDO::PARAM_STR);
		//Tamaño de aerodeslizador
		$stmt->bindParam(":flujoMaterial_m3_h", $datos["flujoMaterial_m3_h"], PDO::PARAM_STR);
		$stmt->bindParam(":tamanoA", $datos["tamanoA"], PDO::PARAM_STR);
		$stmt->bindParam(":tamanoB", $datos["tamanoB"], PDO::PARAM_STR);
		$stmt->bindParam(":tamanoC", $datos["tamanoC"], PDO::PARAM_STR);
		$stmt->bindParam(":tamanoD", $datos["tamanoD"], PDO::PARAM_STR);
		$stmt->bindParam(":AreaTela_aerodeslizador", $datos["AreaTela_aerodeslizador"], PDO::PARAM_STR);
		//Potencia del ventilador
		$stmt->bindParam(":perdidaPresion_mbar", $datos["perdidaPresion_mbar"], PDO::PARAM_STR);
		$stmt->bindParam(":perdidaPresion_pa", $datos["perdidaPresion_pa"], PDO::PARAM_STR);
		$stmt->bindParam(":perdidaPresion_In_H2O", $datos["perdidaPresion_In_H2O"], PDO::PARAM_STR);
		$stmt->bindParam(":flujoAireActual_am3_s", $datos["flujoAireActual_am3_s"], PDO::PARAM_STR);
		$stmt->bindParam(":flujoAireActual_PotenciaVentilador_acfm", $datos["flujoAireActual_PotenciaVentilador_acfm"], PDO::PARAM_STR);
		$stmt->bindParam(":potencia_kw", $datos["potencia_kw"], PDO::PARAM_STR);
		$stmt->bindParam(":potencia_hp", $datos["potencia_hp"], PDO::PARAM_STR);
		//Aerodeslizador Salida de datos
		$stmt->bindParam(":capacidadOperacion_aerodeslizador_tph", $datos["capacidadOperacion_aerodeslizador_tph"], PDO::PARAM_STR);
		$stmt->bindParam(":capacidadOperacion_aerodeslizador_stph", $datos["capacidadOperacion_aerodeslizador_stph"], PDO::PARAM_STR);
		$stmt->bindParam(":capacidadDiseno_aerodeslizador_tph", $datos["capacidadDiseno_aerodeslizador_tph"], PDO::PARAM_STR);
		$stmt->bindParam(":capacidadDiseno_aerodeslizador_stph", $datos["capacidadDiseno_aerodeslizador_stph"], PDO::PARAM_STR);
		$stmt->bindParam(":dencidadMaterial_Aerodeslizador_kg_m3", $datos["dencidadMaterial_Aerodeslizador_kg_m3"], PDO::PARAM_STR);
		$stmt->bindParam(":dencidadMaterial_Aerodeslizador_lb_ft3", $datos["dencidadMaterial_Aerodeslizador_lb_ft3"], PDO::PARAM_STR);
		$stmt->bindParam(":ancho_aerodeslizador_mm", $datos["ancho_aerodeslizador_mm"], PDO::PARAM_STR);
		$stmt->bindParam(":ancho_aerodeslizador_inches", $datos["ancho_aerodeslizador_inches"], PDO::PARAM_STR);
		$stmt->bindParam(":longitud_aerodeslizador_m", $datos["longitud_aerodeslizador_m"], PDO::PARAM_STR);
		$stmt->bindParam(":longitud_aerodeslizador_ft", $datos["longitud_aerodeslizador_ft"], PDO::PARAM_STR);
		$stmt->bindParam(":inclinacion_0", $datos["inclinacion_0"], PDO::PARAM_STR);
		//Aerodeslizador Salida de datos
		$stmt->bindParam(":capacidadOperacion_Ventilador_am3_h", $datos["capacidadOperacion_Ventilador_am3_h"], PDO::PARAM_STR);
		$stmt->bindParam(":capacidadOperacion_Ventilador_acfm", $datos["capacidadOperacion_Ventilador_acfm"], PDO::PARAM_STR);
		$stmt->bindParam(":potencia_ventilador_kw", $datos["potencia_ventilador_kw"], PDO::PARAM_STR);
		$stmt->bindParam(":potencia_ventilador_hp", $datos["potencia_ventilador_hp"], PDO::PARAM_STR);
		$stmt->bindParam(":temperatura_Ventilador_C", $datos["temperatura_Ventilador_C"], PDO::PARAM_STR);
		$stmt->bindParam(":temperatura_Ventilador_F", $datos["temperatura_Ventilador_F"], PDO::PARAM_STR);
		$stmt->bindParam(":presionManometrica_Ventilador_mm_h2o", $datos["presionManometrica_Ventilador_mm_h2o"], PDO::PARAM_STR);
		$stmt->bindParam(":presionManometrica_Ventilador_in_h2o", $datos["presionManometrica_Ventilador_in_h2o"], PDO::PARAM_STR);




		if($stmt->execute()){

			return "ok";	
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;
	}




	/*=============================================
	MOSTRAR HISTORIAL AERODESLIZADOR
	=============================================*/

	static public function mdlMostrarHistorialAerodeslizador($tabla, $item1, $valor1){

		if($item1 != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item1 = :valor");
			$stmt -> bindParam(":valor", $valor1, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	CONSULTAR DATOS DE EXCEL
	=============================================*/

	static public function mdlConsultarDatosExcelAerodeslizador($tabla, $item1, $valor1){


			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item1 = :valor");
			$stmt = Conexion::conectar()->prepare("SELECT * FROM resultado_calculo_aerodeslizador INNER JOIN plant ON resultado_calculo_aerodeslizador.codigo_planta = plant.PlantID INNER JOIN country ON resultado_calculo_aerodeslizador.codigo_pais = country.codigo_pais WHERE resultado_calculo_aerodeslizador.$item1 = :valor ;");
			$stmt -> bindParam(":valor", $valor1, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt -> fetch();
			$stmt -> close();
			$stmt = null;

	}

















}





 ?>

