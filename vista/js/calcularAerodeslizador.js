

  /*$("#DatosSalida").draggable({
      handle: ".modal-header"
  });

  $("#DetalleDatosSalida").draggable({
      handle: ".modal-header"
  });*/


/*=============================================
Validar Datos de planta
=============================================*/

$("#PlantaAerodeslizadorCalcular").change(function(){

  //Detalle de planta Solo nombre
  var plantaNombre = $('select[name="PlantaAerodeslizadorCalcular"] option:selected').text();
  $("#PlantaAerodeslizador").empty();
  $("#PlantaAerodeslizador").append('<option>'+plantaNombre+'</option>');

  var plantId = $("#PlantaAerodeslizadorCalcular").val();

  var datos = new FormData();
    datos.append("plantId", plantId);

    //console.log(plantId);

    $.ajax({

      url:"ajax/planta.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

      // Elevacion
      $("#elevacionPlantaCalculo").val(respuesta['PlantElevación']); 

      // temperatura minima
      $("#temperaturaMinC_Calculo").val(respuesta['PlantTemperatureMin_C']);
      $("#temperaturaMinF_Calculo").val(respuesta['PlantTemperatureMin_F']);

      // temperatura promedio
      $("#temperaturaProC_Calculo").val(respuesta['PlantTemperatureProm_C']);
      $("#temperaturaProF_Calculo").val(respuesta['PlantTemperatureProm_F']);

      // temperatura maxima
      $("#temperaturaMaxC_Calculo").val(respuesta['PlantTemperatureMax_C']);
      $("#temperaturaMaxF_Calculo").val(respuesta['PlantTemperatureMax_F']);


    }
    });

});


$("#paisAerodeslizadorCalcular").change(function(){

  //Detalle de pais Solo nombre
  var paisNombre = $('select[name="paisAerodeslizadorCalcular"] option:selected').text();
  $("#PaisDetalle").empty();
  $("#PaisDetalle").append('<option value='+paisNombre+'>'+paisNombre+'</option>');
  
  var plantIdContry = $("#paisAerodeslizadorCalcular").val();

  var datos = new FormData();
    datos.append("plantIdContry", plantIdContry);

    

    $.ajax({

      url:"ajax/planta.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

        if (respuesta != false) {
          $.each(respuesta,function(key, registro) {
            $("#PlantaAerodeslizadorCalcular").append('<option value='+registro.PlantID+'>'+registro.PlantName+'</option>');
          });           
        }else{
          Swal.fire({
                icon: "warning",
                text: "No existen plantas para el país seleccionado!",
              }).then((result) => {
                  if (result.value) {

                  //Limpiar select de planta 
                  $("#PlantaAerodeslizadorCalcular").empty().append('<option value="">Selecionar planta</option>');

                  //Limpiar Elevacion
                  $("#elevacionPlantaCalculo").val(""); 

                  //Limpiar temperatura minima
                  $("#temperaturaMinC_Calculo").val("");
                  $("#temperaturaMinF_Calculo").val("");

                  //Limpiar temperatura promedio
                  $("#temperaturaProC_Calculo").val("");
                  $("#temperaturaProF_Calculo").val("");

                  //Limpiar temperatura maxima
                  $("#temperaturaMaxC_Calculo").val("");
                  $("#temperaturaMaxF_Calculo").val("");


                  }
              })

        }
   
      }

    });

});


/*=============================================
Validar Datos de Material
=============================================*/

$("#MaterialCalcular").change(function(){

  //Detalle de material Solo nombre
  var materialNombre = $('select[name="MaterialCalcular"] option:selected').text();
  $("#nombreMaterial").empty();
  $("#nombreMaterial").append('<option value='+materialNombre+'>'+materialNombre+'</option>');

   var materialesId = $("#MaterialCalcular").val();

  var datos = new FormData();
    datos.append("materialesId", materialesId);

    $.ajax({

      url:"ajax/materiales.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){


      //Datos de entrada 
      // DEN TRANSPORTE KG/m3
      $("#density_Transport_kg_m3_Calcular").val((respuesta['Density_Transport_kg_m3']));
      // DEN TRANSPORTE lb/ft3
      $("#densidad_Transport_lb_ft3_Calcular").val(respuesta['Density_Transport_lb_ft3']);

      // DEN TRANSPORTE KG/m3
      $("#density_MaterialAreado_kg_m3_Calcular").val((respuesta['Density_aerated_kg_m3']));
      // DEN TRANSPORTE lb/ft3
      $("#density_MaterialAreado_lb_ft3_Calcular").val(respuesta['Density_aerated_lb_ft3']);

      // ANFULO DE REPOSO
      $("#anguloReposoCalcular").val(respuesta['Respose_Angle']);


      //Detalle
      // DEN aereado KG/m3
      $("#densidad_Transport_kg_m3").val((respuesta['Density_aerated_kg_m3']/1000));
      // DEN TRANSPORTE lb/ft3
      $("#densidad_Transport_lb_ft3").val(respuesta['Density_aerated_lb_ft3']);
    }
    });
});


/*=============================================
Validar datos de humedad
=============================================*/

$("#Humedad_P_P_Calcular").change(function(){

  //Humedad % p/p
   var humedad_p_p = $("#Humedad_P_P_Calcular").val();


   if (humedad_p_p > 100) {

      Swal.fire({
        icon: "warning",
        text: "¡Alerta! El valor ingresado excede el rango permitido. Por favor, introduce un valor entre 1  a 100.",
      }).then((result) => {
        if (result.value) {

          $("#Humedad_P_P_Calcular").val('');

        }
      });

   }else{
    //Humedad % w/w
    $("#Humedad_W_W_Calcular").val(humedad_p_p);
   }


  

});


/*=============================================
Validar datos de temperatura de material
=============================================*/

$("#temperaturaMaterial_C_Calcular").change(function(){

  //Humedad % p/p
   var material_C = $("#temperaturaMaterial_C_Calcular").val();

   var material_F = (Number(material_C) * (9/5) + 32);

  //Humedad % w/w
  $("#temperaturaMaterial_F_Calcular").val(material_F);

  //detalle de temperatura C
  $("#temperaturaMaterial").val(material_C);

});



/*=============================================
Validar la capcidad del aerodeslizador
=============================================*/

$("#capacidadOperacion_tph_Calcular").change(function(){

  //Capacidad de operacion tph
  var capacidadOperacion_TPH = $("#capacidadOperacion_tph_Calcular").val();
  //Detalle - Capacidad de operacion tph
  $("#capacidadOperacion_tph").val(capacidadOperacion_TPH); 



  //Capacidad de operacion stph
  var calcular_cap_ope_STPH = (((capacidadOperacion_TPH * 1000)/0.45359)/2000);
  $("#capacidadOperacion_stph").val(calcular_cap_ope_STPH.toFixed(2)); 
  //Detalle - Capacidad de operacion stph
  $("#capacidadOperacion_stph_Calcular").val(calcular_cap_ope_STPH.toFixed(2));

  //Capacidad de diseño tph
  var factorCemex = $("#factorCemex").val();
  var calcular_cap_dis_TPH = (capacidadOperacion_TPH * factorCemex)
  $("#capacidadDiseno_tph").val(calcular_cap_dis_TPH.toFixed(2)); 

  //Capacidad de diseño stph
  var calcular_cap_dis_STPH = (((calcular_cap_dis_TPH * 1000)/0.45359)/2000);
  $("#capacidadDiseno_stph").val(calcular_cap_dis_STPH.toFixed(2));   

  /*=============================================
  Validar la tamaño de aerodeslizador
  ============================================= */ 
  var densidad_Transport_kg_m3 = $("#densidad_Transport_kg_m3").val();
  var flujoMaterial_M3_H = (calcular_cap_dis_TPH / densidad_Transport_kg_m3);
  $("#flujoMaterial_m3_h").val(flujoMaterial_M3_H.toFixed(2));

  //Tamañano A
  if (flujoMaterial_M3_H <= 20) {
    $("#tamanoA").val(100);
  }else if (flujoMaterial_M3_H > 20 & flujoMaterial_M3_H <= 34) {
    $("#tamanoA").val(150);
    }else if (flujoMaterial_M3_H>34,flujoMaterial_M3_H<=87) {
      $("#tamanoA").val(200);
      }else if (flujoMaterial_M3_H>87,flujoMaterial_M3_H<=165) {
        $("#tamanoA").val(250);
        }else if (flujoMaterial_M3_H>165,flujoMaterial_M3_H<=315) {
          $("#tamanoA").val(300);
          }else if (flujoMaterial_M3_H>315,flujoMaterial_M3_H<=450) {
            $("#tamanoA").val(350);
            }else if (flujoMaterial_M3_H>450,flujoMaterial_M3_H<=630) {
              $("#tamanoA").val(400);
              }else if (flujoMaterial_M3_H>630,flujoMaterial_M3_H<=1080) {
                $("#tamanoA").val(480);
                }else if (flujoMaterial_M3_H>1080,flujoMaterial_M3_H<=1585) {
                  $("#tamanoA").val(600);
                  }else if (flujoMaterial_M3_H>1585,flujoMaterial_M3_H<=2460) {
                    $("#tamanoA").val(850);
                  }

//Tamañano B
  if (flujoMaterial_M3_H<=20) {
    $("#tamanoB").val(32);
  }else if (flujoMaterial_M3_H>20,flujoMaterial_M3_H<=34) {
    $("#tamanoB").val(32);
    }else if (flujoMaterial_M3_H>34,flujoMaterial_M3_H<=87) {
      $("#tamanoB").val(32);
      }else if (flujoMaterial_M3_H>87,flujoMaterial_M3_H<=165) {
        $("#tamanoB").val(32);
        }else if (flujoMaterial_M3_H>165,flujoMaterial_M3_H<=315) {
          $("#tamanoB").val(32);
          }else if (flujoMaterial_M3_H>315,flujoMaterial_M3_H<=450) {
            $("#tamanoB").val(32);
            }else if (flujoMaterial_M3_H>450,flujoMaterial_M3_H<=630) {
              $("#tamanoB").val(32);
              }else if (flujoMaterial_M3_H>630,flujoMaterial_M3_H<=1080) {
                $("#tamanoB").val(38);
                }else if (flujoMaterial_M3_H>1080,flujoMaterial_M3_H<=1585) {
                  $("#tamanoB").val(57);
                  }else if (flujoMaterial_M3_H>1585,flujoMaterial_M3_H<=2460) {
                    $("#tamanoB").val(76);
                  }

//Tamañano C
  if (flujoMaterial_M3_H<=20) {
    $("#tamanoC").val(200);
  }else if (flujoMaterial_M3_H>20,flujoMaterial_M3_H<=34) {
    $("#tamanoC").val(200);
    }else if (flujoMaterial_M3_H>34,flujoMaterial_M3_H<=87) {
      $("#tamanoC").val(300);
      }else if (flujoMaterial_M3_H>87,flujoMaterial_M3_H<=165) {
        $("#tamanoC").val(300);
        }else if (flujoMaterial_M3_H>165,flujoMaterial_M3_H<=315) {
          $("#tamanoC").val(400);
          }else if (flujoMaterial_M3_H>315,flujoMaterial_M3_H<=450) {
            $("#tamanoC").val(500);
            }else if (flujoMaterial_M3_H>450,flujoMaterial_M3_H<=630) {
              $("#tamanoC").val(500);
              }else if (flujoMaterial_M3_H>630,flujoMaterial_M3_H<=1080) {
                $("#tamanoC").val(560);
                }else if (flujoMaterial_M3_H>1080,flujoMaterial_M3_H<=1585) {
                  $("#tamanoC").val(600);
                  }else if (flujoMaterial_M3_H>1585,flujoMaterial_M3_H<=2460) {
                    $("#tamanoC").val(910);
                  }

//Tamañano D
  if (flujoMaterial_M3_H<=20) {
    $("#tamanoD").val(75);
  }else if (flujoMaterial_M3_H>20,flujoMaterial_M3_H<=34) {
    $("#tamanoD").val(75);
    }else if (flujoMaterial_M3_H>34,flujoMaterial_M3_H<=87) {
      $("#tamanoD").val(75);
      }else if (flujoMaterial_M3_H>87,flujoMaterial_M3_H<=165) {
        $("#tamanoD").val(75);
        }else if (flujoMaterial_M3_H>165,flujoMaterial_M3_H<=315) {
          $("#tamanoD").val(75);
          }else if (flujoMaterial_M3_H>315,flujoMaterial_M3_H<=450) {
            $("#tamanoD").val(75);
            }else if (flujoMaterial_M3_H>450,flujoMaterial_M3_H<=630) {
              $("#tamanoD").val(75);
              }else if (flujoMaterial_M3_H>630,flujoMaterial_M3_H<=1080) {
                $("#tamanoD").val(75);
                }else if (flujoMaterial_M3_H>1080,flujoMaterial_M3_H<=1585) {
                  $("#tamanoD").val(100);
                  }else if (flujoMaterial_M3_H>1585,flujoMaterial_M3_H<=2460) {
                    $("#tamanoD").val(100);
                  }

//Ancho aerodeslizador
var tamanoA = $("#tamanoA").val();
$("#anchoAerodeslizador").val(tamanoA);
});


/*=============================================
Validar Datos de inclinacion
=============================================*/

$("#InclinacionCalcular").change(function(){

  //
  var inclinacion = $("#InclinacionCalcular").val();

   if (inclinacion < 8 || inclinacion > 15) {

      Swal.fire({
        icon: "warning",
        text: "¡Alerta! El valor ingresado excede el rango permitido. Por favor, introduce un valor entre 8 y 15.",
      }).then((result) => {
        if (result.value) {

          $("#InclinacionCalcular").val('');

        }
      });

   }else{
    //detalle
    $("#InclinacionCalcular2").val(inclinacion);

    //detalle de inclincion
    $("#calculoInclinacion").val(inclinacion);
   }





});


/*=============================================
Validar la capcidad del aerodeslizador
=============================================*/

$("#longitud_mm_Calcular").change(function(){

  //detalle longitud mm
  var longitud_mm = $("#longitud_mm_Calcular").val();
  $("#longitudAerodeslizador").val(longitud_mm);
  //longitud en ft
  var longitud_ft = ((longitud_mm/1000)*3.28084);
    $("#longitud_ft_Calcular").val(longitud_ft.toFixed(2));

  //Area de tela
  var anchoAerodeslizador = $("#tamanoA").val();
  var longitudAerodeslizador = $("#longitud_mm_Calcular").val();
  var AreaTela_calcular = ((anchoAerodeslizador / 1000)*(longitudAerodeslizador / 1000));
  $("#AreaTela_aerodeslizador").val(AreaTela_calcular.toFixed(3));

  //Flujo de aire requerido por area de tela 
  var flujo_Aire_Area_Tela_Scfm_ft2 = $("#flujo_Aire_Area_Tela_Scfm_ft2").val();
  var calcular_flujoAireAreaTela = ((flujo_Aire_Area_Tela_Scfm_ft2 * (1013/(1.01325 * 1000))*((15+273.15)/273.15))*0.0283168*60/0.092903);
  $("#flujo_Aire_Area_Tela_Nm3_h_m2").val(calcular_flujoAireAreaTela.toFixed(2));

  //Flujo de aire normal
  var calcular_flujoAireNormal = (calcular_flujoAireAreaTela * AreaTela_calcular);
  $("#flujo_Aire_Normal").val(calcular_flujoAireNormal.toFixed(2));

  //presion mbar
  var presion_g_mm_H2O = $("#presion_g_mm_H2O").val();
  var calcular_presion_mbar = (presion_g_mm_H2O * 0.0980665);
  $("#presion_g_mbar").val(calcular_presion_mbar.toFixed(2));

  //Flujo de aire actual Am3/h
  var plantId = $("#PlantaAerodeslizadorCalcular").val();

  var datos = new FormData();
    datos.append("plantId", plantId);

    $.ajax({

      url:"ajax/planta.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

        var presion_mbar = Number(respuesta['AtmosphericPressure_mbar']);

        var temperaturaMinC = Number(respuesta['PlantTemperatureMin_C']);
        $("#temperaturamin_C_Palnta").val(temperaturaMinC);
        var temperaturaMinF = Number(respuesta['PlantTemperatureMin_F']);
        $("#temperaturamin_F_Palnta").val(temperaturaMinF);
        
        var flujoAireActual_AM3_H_Calculo = (calcular_flujoAireNormal * (1013/(calcular_presion_mbar + presion_mbar))*((temperaturaMinC + 273.15)/273.15));
        $("#flujoAireActual_am3_h").val(flujoAireActual_AM3_H_Calculo.toFixed(2));
        //Flujo de aire actual Acfm
        var flujoAireActual_ACFM = (flujoAireActual_AM3_H_Calculo * 0.58857777021102);
        $("#flujoAireActual_acfm").val(flujoAireActual_ACFM.toFixed(2));


        //Perdida de presion mbar
        var perdidaPresion_mbar_Calcular = (calcular_presion_mbar);
        $("#perdidaPresion_mbar").val(perdidaPresion_mbar_Calcular.toFixed(2));

        //perdida de presion In H2O
        var perdidaPresion_In_H2O = (presion_g_mm_H2O / 25.4);
        $("#perdidaPresion_In_H2O").val(perdidaPresion_In_H2O);
      
        //perdida de presion pa
        var perdidaPresion_PA = (perdidaPresion_In_H2O * 248.84);
        $("#perdidaPresion_pa").val(perdidaPresion_PA);
        $("#perdidaPresion_pa_Guardar").val(perdidaPresion_PA);
        
        //Flujo de aire Am3/s
        var flujoAireActual_AM3_S = (flujoAireActual_AM3_H_Calculo / 3600);
        $("#flujoAireActual_am3_s").val(flujoAireActual_AM3_S.toFixed(6));

        //Flujo de aire Acfm
        var flujoAireActual_ACFM = (flujoAireActual_AM3_S * 2118.88);
        $("#flujoAireActual_PotenciaVentilador_acfm").val(flujoAireActual_ACFM.toFixed(2));


    }
    });

});


/*=============================================
Validar Datos potencia de ventilador
=============================================*/

$("#eficiencia_Ventilador_Calcular").change(function(){

  //Potencia_KW
  var perdidaPresion_PA = $("#perdidaPresion_pa").val();
  var flujoAireActual_AM3_S = $("#flujoAireActual_am3_s").val();
  var eficiencia = $("#eficiencia_Ventilador_Calcular").val();
  //detalle 
  $("#eficiencia_Ventilador").val(eficiencia);

  var calcularPotencia_KW = (((flujoAireActual_AM3_S * perdidaPresion_PA / eficiencia) / 10) * 1.3);
  $("#potencia_kw").val(calcularPotencia_KW.toFixed(2));

  //potencia HP
  var calcularPotencia_HP = (calcularPotencia_KW * 1.34102);
  $("#potencia_hp").val(calcularPotencia_HP.toFixed(2));


});


/*=============================================   var DatoValidar =  $("#").val();
Mostar Datos de salida  
=============================================*/

$("#mostrarDatosSalida").click(function(){


  var DatoValidarPais =  $("#paisAerodeslizadorCalcular").val();
  var DatoValidarPlanta =  $("#PlantaAerodeslizadorCalcular").val();
  var DatoValidarProyecto =  $("#proyectoAerodeslizadorCalcular").val();
  var DatoValidarDiagramaFlujoAerodeslizador =  $("#diagramaFlujoAerodeslizadorCalcular").val();
  var DatoValidarCodigoAerodeslizador =  $("#codigoAerodeslizadorCalcular").val();
  var DatoValidarCodigoVentilador =  $("#codigoVentiladorCalcular").val();
  var DatoValidarMaterial =  $("#MaterialCalcular").val();
  var DatoValidarHumedad_P_P =  $("#Humedad_P_P_Calcular").val();
  var DatoValidarTemperaturaMaterial_C =  $("#temperaturaMaterial_C_Calcular").val();
  var DatoValidarCapacidadOperacion_tph =  $("#capacidadOperacion_tph_Calcular").val();
  var DatoValidarInclinacion =  $("#InclinacionCalcular").val();
  var DatoValidarLongitud_mm =  $("#longitud_mm_Calcular").val();
  var DatoValidarEficiencia_Ventilador =  $("#eficiencia_Ventilador_Calcular").val();

  if(DatoValidarPais.trim().length > 0  && DatoValidarPlanta.trim().length > 0  
      && DatoValidarProyecto.trim().length > 0  && DatoValidarDiagramaFlujoAerodeslizador.trim().length > 0  
      && DatoValidarCodigoAerodeslizador.trim().length > 0  && DatoValidarCodigoVentilador.trim().length > 0  
      && DatoValidarMaterial.trim().length > 0  && DatoValidarHumedad_P_P.trim().length > 0  
      && DatoValidarTemperaturaMaterial_C.trim().length > 0  && DatoValidarCapacidadOperacion_tph.trim().length > 0  
      && DatoValidarInclinacion.trim().length > 0  && DatoValidarLongitud_mm.trim().length > 0  
      && DatoValidarEficiencia_Ventilador.trim().length > 0
){

  
    //Codigo de ventilador
  $("#CodigoVentilador").text($("#codigoVentiladorCalcular").val());
  //Codigo de aerodeslizador
  $("#CodigoAerodeslizador").text($("#codigoAerodeslizadorCalcular").val());

  //AERODESLIZADOR

  //CAPACIDAD DE OPERACIÓN  C.O.
  //tph
  var capacidadOperacion_tph_Valor = $("#capacidadOperacion_tph_Calcular").val();
  $("#capacidadOperacion_aerodeslizador_tph").val(capacidadOperacion_tph_Valor);
  //stph
  var capacidadOperacion_stph_Valor = $("#capacidadOperacion_stph_Calcular").val();
  $("#capacidadOperacion_aerodeslizador_stph").val(capacidadOperacion_stph_Valor); 

  //CAPACIDAD DE DISEÑO C.D.  capacidadDiseno_aerodeslizador_tph
  //tph
  var capacidadDiseño_tph_Valor = $("#capacidadDiseno_tph").val();
  $("#capacidadDiseno_aerodeslizador_tph").val(capacidadDiseño_tph_Valor);
  //stph
  var capacidadDiseño_stph_Valor = $("#capacidadDiseno_stph").val();
  $("#capacidadDiseno_aerodeslizador_stph").val(capacidadDiseño_stph_Valor);

  //DENSIDAD DE MATERIAL  DENS. MAT.
  //kg/m3
  var densidad_MaterialAreado_kg_m3_valor = $("#density_MaterialAreado_kg_m3_Calcular").val();
  $("#dencidadMaterial_Aerodeslizador_kg_m3").val(densidad_MaterialAreado_kg_m3_valor);
  //lb/ft3
  var densidad_MaterialAreado_lb_ft3_Valor = $("#density_MaterialAreado_lb_ft3_Calcular").val();
  $("#dencidadMaterial_Aerodeslizador_lb_ft3").val(densidad_MaterialAreado_lb_ft3_Valor);

  //ANCHO ANCHO
  //mm
  var ancho_Valor = $("#tamanoA").val();
  $("#ancho_aerodeslizador_mm").val(ancho_Valor); 
  //inches
  var calcular_ancho_inches_valor = (ancho_Valor / 25.4);
  $("#ancho_aerodeslizador_inches").val(calcular_ancho_inches_valor.toFixed(2)); 

  //LONGITUD  LONG.
  //m
  var longitud_mm_valor = $("#longitud_mm_Calcular").val();
  var longitus_m_Valor = (longitud_mm_valor / 1000);
  $("#longitud_aerodeslizador_m").val(longitus_m_Valor.toFixed(2)); 
  //ft
  var calcular_longitud_ft_valor = (longitus_m_Valor *3.28084);
  $("#longitud_aerodeslizador_ft").val(calcular_longitud_ft_valor.toFixed(2));

  //INCLINACION INCLINACIÓN
  var inclinacion_Valor = $("#InclinacionCalcular").val();
  $("#inclinacion_0").val(inclinacion_Valor); 
  $("#inclinacion_1").val(inclinacion_Valor); 


  //VENTILADOR

  //CAPACIDAD DE OPERACIÓN  C.O.
  //Am3/h
  var capacidadOperacion_AM3_H_Valor = $("#flujoAireActual_am3_h").val();
  $("#capacidadOperacion_Ventilador_am3_h").val(capacidadOperacion_AM3_H_Valor); 
  //Acfm
  var capacidadOperacion_ACFM_Valor = $("#flujoAireActual_acfm").val();
  $("#capacidadOperacion_Ventilador_acfm").val(capacidadOperacion_ACFM_Valor); 

  //POTENCIA  PO.
  //KW
  var potencia_KW_Valor = $("#potencia_kw").val();
  $("#potencia_ventilador_kw").val(potencia_KW_Valor);   
  //HP
  var potencia_HP_Valor = $("#potencia_hp").val();
  $("#potencia_ventilador_hp").val(potencia_HP_Valor); 

  //TEMPERATURA TEMP.
  //C°
  var temperaturaMin_C_Planta_Valor = $("#temperaturaMinC_Calculo").val();  
  $("#temperatura_Ventilador_C").val(temperaturaMin_C_Planta_Valor);
  //°F
  var temperaturaMin_F_Planta_Valor = $("#temperaturaMinF_Calculo").val();
  $("#temperatura_Ventilador_F").val(temperaturaMin_F_Planta_Valor);
  
  //PRESION MANOMETRICA D.P.
  //In H2O
  var presionManometrica_IN_H2O_Valor = $("#perdidaPresion_In_H2O").val();
  $("#presionManometrica_Ventilador_in_h2o").val(presionManometrica_IN_H2O_Valor); 
  //mm H2O
  var presionManometrica_MM_H2O_Valor = (presionManometrica_IN_H2O_Valor * 25.4);
  $("#presionManometrica_Ventilador_mm_h2o").val(presionManometrica_MM_H2O_Valor); 


  Swal.fire({
  title: "Calculando!",
  
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading();
    const timer = Swal.getPopup();
    timerInterval = setInterval(() => {
    }, 100);
  },
  willClose: () => {
    clearInterval(timerInterval);
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    $("#DatosSalida").modal("show");
  }
});

    

  }else{

      Swal.fire({
        icon: "warning",
        text: "¡Alerta! Se debe de ingresar todos los valores de entrada para poder calcular",
      })

  }


});



/*=============================================
GENERAR EXCEL
=============================================*/


$(".tablas").on("click", "#enviarIdAerodeslizador", function(){

            var aerodeslizadorId = $(this).attr("idexcel");
            var datos = new FormData();
                datos.append("aerodeslizadorId", aerodeslizadorId);   

            $.ajax({

              url:"ajax/calcularAerodeslizador.ajax.php",
              method: "POST",
              data: datos,
              cache: false,
              contentType: false,
              processData: false,
              dataType:"json",
              success:function(respuesta){

                if(respuesta != false){
                  var xhr = new XMLHttpRequest();
                  xhr.open('POST', 'vista/modulos/reportExcel/generar_excel_calculoAerodeslizador.php', true);
                  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                  xhr.responseType = 'blob';

                  xhr.onload = function() {
                      if (xhr.status === 200) {
                          var blob = xhr.response;
                          var link = document.createElement('a');
                          link.href = window.URL.createObjectURL(blob);
                          link.download = 'CalculoAerodeslizador.xlsx';
                          document.body.appendChild(link);
                          link.click();
                          document.body.removeChild(link);
                      } else {
                          alert('Error al generar el archivo Excel.');
                      }
                  };

                  xhr.onerror = function() {
                      alert('Error de red al intentar generar el archivo Excel.');
                  };

                  /* Enviar los datos como parámetros en el cuerpo de la solicitud POST
                  var formData = 'generateExcel=true&id=' + encodeURIComponent(persona);
                  xhr.send(formData);*/

                  var formData = 'generateExcel=true&id=' + encodeURIComponent(JSON.stringify(respuesta));
                  //var formData = JSON.stringify(persona);
                  xhr.send(formData); // Send JSON data                    
                }else{
                  Swal.fire({
                    icon: "warning",
                    text: "¡Alerta! no se puede generar la descarga del documento",
                  })                  
                }
              



            }

            });



});



/*=============================================
VALIDAR DETALLE DE CALCULO
=============================================*/


$(".tablas").on("click", ".validarDetalleCalculoAerodeslizador", function(){

    var aerodeslizadorIdValidarDetalle = $(this).attr("idCalculoAerodeslizador");
    var datos = new FormData();
        datos.append("aerodeslizadorIdValidarDetalle", aerodeslizadorIdValidarDetalle);  

    $.ajax({

      url:"ajax/calcularAerodeslizador.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){


      console.log(respuesta);



    }

    });



});




















