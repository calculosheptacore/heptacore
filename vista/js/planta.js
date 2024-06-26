var perfilOculto = $("#perfilOculto").val();


    $('.tablaPlanta').DataTable({
      "ajax": "ajax/datatable-planta.ajax.php?perfilOculto="+perfilOculto,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "language": {

        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
        },
        "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }

      }
    });

    
/*=============================================
Validar temperatura 
=============================================*/

$(".tablas").on("click", ".btnValidarTemp", function(){

	var plantId = $(this).attr("plantId");
	var datos = new FormData();
    datos.append("plantId", plantId);

    //console.log("datos:" + datos.get('plantId'));

    $.ajax({

      url:"ajax/planta.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

          //Validar Temperaturas
          
           $("#TempMinC").text('Temperatura minima: '+ respuesta['PlantTemperatureMin_C']+' °C');
           $("#TempMinK").text('Temperatura minima: '+ respuesta['PlantTemperatureMin_K']+' K');
           $("#TempMinF").text('Temperatura minima: '+ respuesta['PlantTemperatureMin_F']+' °F');

           $("#TempProC").text('Temperatura promedio: '+ respuesta['PlantTemperatureProm_C']+' °C');
           $("#TempProK").text('Temperatura promedio: '+ respuesta['PlantTemperatureProm_K']+' K');
           $("#TempProF").text('Temperatura promedio: '+ respuesta['PlantTemperatureProm_F']+' °F');

           $("#TempMaxC").text('Temperatura máxima: '+ respuesta['PlantTemperatureMax_C']+' °C');
           $("#TempMaxK").text('Temperatura máxima: '+ respuesta['PlantTemperatureMax_K']+' K');
           $("#TempMaxF").text('Temperatura máxima: '+ respuesta['PlantTemperatureMax_F']+' °F');
	  }
  	});
});

/*=============================================
Validar presion 
=============================================*/

$(".tablas").on("click", ".btnValidarPresion", function(){

  var plantId = $(this).attr("plantId");

  var datos = new FormData();
    datos.append("plantId", plantId);

    //console.log("datos:" + datos.get('plantId'));

    $.ajax({

      url:"ajax/planta.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

      //  mm hg
      $("#PresionMMHG").val(respuesta['AtmosphericPressure_mm_HG'] + ' mm hg'); 
      //  psi
      $("#PresionPSI").val(respuesta['AtmosphericPressure_psi'] + ' psi'); 
      //  mm H2O
      $("#PresionMMH2O").val(respuesta['AtmosphericPressure_mm_H2O'] + ' mm H2O'); 
      //  Pa (N/m2)
      $("#PresionPANM2").val(respuesta['AtmosphericPressure_Pa_N_m2'] + ' Pa (N/m2)');

      //bar
      bar = Number(respuesta['AtmosphericPressure_bar']);
      Val_Bar = bar.toFixed(2);
      $("#PresionBAR").val(Val_Bar + ' bar'); 

      // mbar
      $("#PresionMBAR").val(respuesta['AtmosphericPressure_mbar'] + ' mbar'); 
      // KN/m2
      $("#PresionKNM2").val(respuesta['AtmosphericPressure_KN_m2'] + ' kN/m2'); 
      // inH20
      $("#PresionInH2O").val(respuesta['AtmosphericPressure_in_H20'] + ' inH20');
      // inHG
      $("#PresionInHG").val(respuesta['AtmosphericPressure_in_HG'] + ' inHG');           


    }

    });

});

/*=============================================
Limpiar modal de guardado
=============================================*/

  $(".clearModGuardarPlanta").click(function(){
    $("#nombrePlanta").val('');
    $("#codeCemexPlanta").val('');
    $("#paisPlanta").val('');
    $("#elevacionPlanta").val('');
    $("#humedadPlanta").val('');
    $("#PlantaPresionMMHG").val('');
    $("#PlantaPresionPSI").val('');
    $("#PlantaPresionMMH2O").val('');
    $("#PlantaPresionPANM2").val('');
    $("#PlantaPresionBAR").val('');
    $("#PlantaPresionMBAR").val('');
    $("#PlantaPresionKNM2").val('');
    $("#PlantaPresionInH2O").val('');
    $("#PlantaPresionInHG").val('');
    $("#GTempMinC").val('');
    $("#GTempMinK").val('');
    $("#GTempMinF").val('');
    $("#GTempProC").val('');
    $("#GTempProK").val('');
    $("#GTempProF").val('');
    $("#GTempMaxC").val('');
    $("#GTempMaxK").val('');
    $("#GTempMaxF").val('');
   
  });


/*=============================================
Editar Planta 
=============================================*/

$(".tablas").on("click", ".btnEditarPlanta", function(){

  var plantId = $(this).attr("plantId");
  var datos = new FormData();
    datos.append("plantId", plantId);

    //console.log("datos:" + datos.get('plantId'));

    $.ajax({

      url:"ajax/planta.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){


      $("#idPlanta").val(respuesta['PlantID']); 

      $("#EditarMombrePlanta").val(respuesta['PlantName']); 
      //
      $("#EditarCodeCemexPlanta").val(respuesta['PlantCodeCemex']); 
      $("#EditarPaisPlanta").val(respuesta['PlantCountry']);
      //
      $("#EditarElevacionPlanta").val(respuesta['PlantElevación']);
      $("#editarElevacion").val(respuesta['PlantElevación']); 
      //
      $("#EditarHumedadPlanta").val(respuesta['Humedad_porcent']);
      $("#editarHumedad").val(respuesta['Humedad_porcent']); 


      $("#EditarPlantaPresionMMHG").val(respuesta['AtmosphericPressure_mm_HG'] + ' mm Hg');
      $("#editarPresionMMHG").val(respuesta['AtmosphericPressure_mm_HG']);

      $("#EditarPlantaPresionPSI").val(respuesta['AtmosphericPressure_psi'] + ' psi');
      $("#editarPresionPSI").val(respuesta['AtmosphericPressure_psi']);

      $("#EditarPlantaPresionMMH2O").val(respuesta['AtmosphericPressure_mm_H2O'] + ' mm H2O');
      $("#editarPresionMMH2O").val(respuesta['AtmosphericPressure_mm_H2O']);

      $("#EditarPlantaPresionPANM2").val(respuesta['AtmosphericPressure_Pa_N_m2'] + ' Pa (N/m2)');
      $("#editarPresionPANM2").val(respuesta['AtmosphericPressure_Pa_N_m2']);
      // bar
      $("#editarPresionBAR").val(respuesta['AtmosphericPressure_bar']); 
      Cal_bar = respuesta['AtmosphericPressure_bar'];
      Flo_Cal_bar = Number(Cal_bar).toFixed(2)
      Valor_bar = (Flo_Cal_bar + ' bar');
      $("#EditarPlantaPresionBAR").val(Valor_bar);

      $("#EditarPlantaPresionMBAR").val(respuesta['AtmosphericPressure_mbar'] + ' mbar');
      $("#editarPresionMBAR").val(respuesta['AtmosphericPressure_mbar']);

      $("#EditarPlantaPresionKNM2").val(respuesta['AtmosphericPressure_KN_m2'] + ' kN/m2');
      $("#editarPresionKNM2").val(respuesta['AtmosphericPressure_KN_m2']);
      // inH20
      $("#EditarPlantaPresionInH2O").val(respuesta['AtmosphericPressure_in_H20'] + ' inH20');
      $("#editarPresionInH2O").val(respuesta['AtmosphericPressure_in_H20']);
      // inHG
      $("#EditarPlantaPresionInHG").val(respuesta['AtmosphericPressure_in_HG'] + ' inHG');
      $("#editarPresionInHG").val(respuesta['AtmosphericPressure_in_HG']);


      $("#EditarGTempMinC").val(respuesta['PlantTemperatureMin_C']);
      $("#editarTempMinC").val(respuesta['PlantTemperatureMin_C']);
      $("#EditarGTempMinK").val(respuesta['PlantTemperatureMin_K']);
      $("#editarTempMinK").val(respuesta['PlantTemperatureMin_K']);
      $("#EditarGTempMinF").val(respuesta['PlantTemperatureMin_F']);
      $("#editarTempMinF").val(respuesta['PlantTemperatureMin_F']);

      $("#EditarGTempProC").val(respuesta['PlantTemperatureProm_C']);
      $("#editarTempProC").val(respuesta['PlantTemperatureProm_C']);
      $("#EditarGTempProK").val(respuesta['PlantTemperatureProm_K']);
      $("#editarTempProk").val(respuesta['PlantTemperatureProm_K']);
      $("#EditarGTempProF").val(respuesta['PlantTemperatureProm_F']);
      $("#editarTempProF").val(respuesta['PlantTemperatureProm_F']);

      $("#EditarGTempMaxC").val(respuesta['PlantTemperatureMax_C']);
      $("#editarTempMaxC").val(respuesta['PlantTemperatureMax_C']);
      $("#EditarGTempMaxK").val(respuesta['PlantTemperatureMax_K']);
      $("#editarTempMaxK").val(respuesta['PlantTemperatureMax_K']);
      $("#EditarGTempMaxF").val(respuesta['PlantTemperatureMax_F']);
      $("#editarTempMaxF").val(respuesta['PlantTemperatureMax_F']);

    }

    });

});


/*=============================================
Calcular temperaturas minimas  C K F 
=============================================*/
  
  // C
  $("#GTempMinC").change(function(){

    //temperatura °C
    tempMiniC = $("#GTempMinC").val();  
    $("#envioTempMinC").val(tempMiniC);

    //temperatura °K
    CalTempK = Number(tempMiniC) + 273.15;
    FloTempK = CalTempK.toFixed(2);

    $("#GTempMinK").val(FloTempK);
    $("#envioTempMinK").val(FloTempK);

    //temperatura °F
    CalTempF = (Number(tempMiniC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);

    $("#GTempMinF").val(FloTempF);
    $("#envioTempMinF").val(FloTempF);

  });


  // K
  $("#GTempMinK").change(function(){

    //temperatura °K
    tempMiniK = $("#GTempMinK").val();  
    $("#envioTempMinK").val(tempMiniK);

    //temperatura °C
    CalTempC = Number(tempMiniK) - 273.15;
    FloTempC = CalTempC.toFixed(2);

    $("#GTempMinC").val(FloTempC);
    $("#envioTempMinC").val(FloTempC);

    CalTempF = (Number(FloTempC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);

    //temperatura °F
    $("#GTempMinF").val(FloTempF);
    $("#envioTempMinF").val(FloTempF);

  });


  // F
  $("#GTempMinF").change(function(){

    //temperatura °F
    tempMiniF = $("#GTempMinF").val();  
    $("#envioTempMinF").val(tempMiniF);

    //temperatura °C
    CalTempC = (Number(tempMiniF) - 32 ) * (5/9) ;
    FloTempC = CalTempC.toFixed(2);

    $("#GTempMinC").val(FloTempC);
    $("#envioTempMinC").val(FloTempC);

    //temperatura °K
    CalTempK = ((Number(tempMiniF) - 32 ) * (5/9) + 273.15);
    FloTempK = CalTempK.toFixed(2);

    $("#GTempMinK").val(FloTempK);
    $("#envioTempMinK").val(FloTempK);
  });

/*=============================================
Calcular temperaturas promedio  C K F 
=============================================*/
  // C
  $("#GTempProC").change(function(){
    
    tempProC = $("#GTempProC").val();
    $("#envioTempProC").val(tempProC);

    //temperatura °K
    CalTempK = Number(tempProC) + 273.15;
    FloTempK = CalTempK.toFixed(2);
    
    $("#GTempProK").val(FloTempK);
    $("#envioTempProk").val(FloTempK);

    //temperatura °F
    CalTempF = (Number(tempProC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);
    

    $("#GTempProF").val(FloTempF);
    $("#envioTempProF").val(FloTempF);

  });

    // K
  $("#GTempProK").change(function(){

    //temperatura °K
    tempProK = $("#GTempProK").val();  
    $("#envioTempProk").val(tempProK);

    //temperatura °C
    CalTempC = Number(tempProK) - 273.15;
    FloTempC = CalTempC.toFixed(2);

    $("#GTempProC").val(FloTempC);
    $("#envioTempProC").val(FloTempC);

    CalTempF = (Number(FloTempC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);

    //temperatura °F
    $("#GTempProF").val(FloTempF);
    $("#envioTempProF").val(FloTempF);

  });


  // F
  $("#GTempProF").change(function(){

    //temperatura °F
    tempProF = $("#GTempProF").val();  
    $("#envioTempProF").val(tempProF);

    //temperatura °C
    CalTempC = (Number(tempProF) - 32 ) * (5/9) ;
    FloTempC = CalTempC.toFixed(2);

    $("#GTempProC").val(FloTempC);
    $("#envioTempProC").val(FloTempC);

    //temperatura °K
    CalTempK = ((Number(tempProF) - 32 ) * (5/9) + 273.15);
    FloTempK = CalTempK.toFixed(2);

    $("#GTempProK").val(FloTempK);
    $("#envioTempProk").val(FloTempK);
  });  

/*=============================================
Calcular temperaturas maximo  C K F 
=============================================*/
  // C
  $("#GTempMaxC").change(function(){

    //temperatura °C
    tempMaxC = $("#GTempMaxC").val();
    $("#envioTempMaxC").val(tempMaxC);

    //temperatura °K
    CalTempK = Number(tempMaxC) + 273.15;
    FloTempK = CalTempK.toFixed(2);

    $("#GTempMaxK").val(FloTempK);
    $("#envioTempMaxK").val(FloTempK);

    //temperatura °F
    CalTempF = (Number(tempMaxC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);

    $("#GTempMaxF").val(FloTempF);
    $("#envioTempMaxF").val(FloTempF);


  }); 

    // K
  $("#GTempMaxK").change(function(){

    //temperatura °K
    tempMaxK = $("#GTempMaxK").val();  
    $("#envioTempMaxK").val(tempMaxK);

    //temperatura °C
    CalTempC = Number(tempMaxK) - 273.15;
    FloTempC = CalTempC.toFixed(2);

    $("#GTempMaxC").val(FloTempC); 
    $("#envioTempMaxC").val(FloTempC);

    CalTempF = (Number(FloTempC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);

    //temperatura °F
    $("#GTempMaxF").val(FloTempF);
    $("#envioTempMaxF").val(FloTempF);

  });


  // F
  $("#GTempMaxF").change(function(){

    //temperatura °F
    tempMaxF = $("#GTempMaxF").val();  
    $("#envioTempMaxF").val(tempMaxF);

    //temperatura °C
    CalTempC = (Number(tempMaxF) - 32 ) * (5/9) ;
    FloTempC = CalTempC.toFixed(2);

    $("#GTempMaxC").val(FloTempC);
    $("#envioTempMaxC").val(FloTempC);

    //temperatura °K
    CalTempK = ((Number(tempMaxF) - 32 ) * (5/9) + 273.15);
    FloTempK = CalTempK.toFixed(2);

    $("#GTempMaxK").val(FloTempK);
    $("#envioTempMaxK").val(FloTempK);
  });  



/*=============================================
Validar elevacion
=============================================*/


  $("#elevacionPlanta").change(function(){


    valorElevacion = $("#elevacionPlanta").val();
    elevacion = (valorElevacion );

    $("#elevacionPlanta").val(elevacion);
    $("#envioElevacion").val(valorElevacion);


  });



/*=============================================
Validar humedad
=============================================*/

  $("#humedadPlanta").change(function(){

    //temperatura °C
    valorHumedad = $("#humedadPlanta").val();

    if (valorHumedad > 100) {

      Swal.fire({
        icon: "warning",
        text: "¡Alerta! El valor ingresado excede el rango permitido. Por favor, introduce un valor entre 1% y 100%.",
      }).then((result) => {
        if (result.value) {

          $("#humedadPlanta").val('');
          $("#envioHumedad").val('');

        }
      })

    }else{
      humedad = (valorHumedad);

      $("#humedadPlanta").val(humedad);
      $("#envioHumedad").val(valorHumedad);
    }



  });   


/*=============================================
Calcular presion 
=============================================*/
  
  $("#elevacionPlanta").change(function(){

    valorElevacionPlanta = $("#envioElevacion").val();

    //bar
    Cal_bar = (1013.25 * Math.pow((1 - valorElevacionPlanta / 44300 ), 5.25 ) / 1000);
    Flo_Cal_bar = Cal_bar.toFixed(2);
    Valor_bar = (Flo_Cal_bar + ' bar')

    $("#envioPresionBAR").val(Cal_bar);
    $("#PlantaPresionBAR").val(Valor_bar);

   //mm hg
    Cal_mm_hg = ((Cal_bar / 1.01325) * 760);
    Flo_Cal_mm_hgF = Cal_mm_hg.toFixed(2);
    Valor_mm_hg = (Flo_Cal_mm_hgF + ' mm hg')

    $("#envioPresionMMHG").val(Flo_Cal_mm_hgF);
    $("#PlantaPresionMMHG").val(Valor_mm_hg);

    //psi
    Cal_PSI = ((Cal_mm_hg * 14.7)/760);
    Flo_Cal_PSI = Cal_PSI.toFixed(2);
    Valor_PSI = (Flo_Cal_PSI + ' psi')

    $("#envioPresionPSI").val(Flo_Cal_PSI);
    $("#PlantaPresionPSI").val(Valor_PSI);    

    //mm H2O
    Cal_mm_H2O = (Cal_bar * 10000);
    Flo_mm_H2O = Cal_mm_H2O.toFixed(2); 
    Valor_mm_H2O = (Flo_mm_H2O + ' mm H2O')

    $("#envioPresionMMH2O").val(Flo_mm_H2O); 
    $("#PlantaPresionMMH2O").val(Valor_mm_H2O); 

    //Pa (N/m2)

    Cal_Pa_Nm2 = (100000 * Cal_bar);
    Flo_Pa_Nm2  = Cal_Pa_Nm2.toFixed(2); 
    Valor_Pa_Nm2  = (Flo_Pa_Nm2 + ' Pa (N/m2)')

    $("#envioPresionPANM2").val(Flo_Pa_Nm2); 
    $("#PlantaPresionPANM2").val(Valor_Pa_Nm2); 

    //mbar
    Cal_Mbar = (Cal_bar * 1000);
    Flo_Mbar = Cal_Mbar.toFixed(0); 
    Valor_Mbar = (Flo_Mbar + ' mbar')

    $("#envioPresionMBAR").val(Flo_Mbar); 
    $("#PlantaPresionMBAR").val(Valor_Mbar); 

    //KN/m2
    Cal_KNM2 = ( Cal_bar / (0.00001 * 1000));
    Flo_KNM2 = Cal_KNM2.toFixed(2); 
    Valor_KNM2 = (Flo_KNM2 + ' kN/m2')

    $("#envioPresionKNM2").val(Flo_KNM2);
    $("#PlantaPresionKNM2").val(Valor_KNM2);

    //in H2O
    Cal_INH20 = ( Cal_bar * 401.47);
    Flo_INH20 = Cal_INH20.toFixed(2); 
    Valor_INH20 = (Flo_INH20 + ' in H2O')

    $("#envioPresionInH2O").val(Flo_INH20);
    $("#PlantaPresionInH2O").val(Valor_INH20);

    //in HG
    Cal_INHG = ( Cal_bar * 29.5301);
    Flo_INHG = Cal_INHG.toFixed(2); 
    Valor_INHG = (Flo_INHG + ' in HG')

    $("#envioPresionInHG").val(Flo_INHG);
    $("#PlantaPresionInHG").val(Valor_INHG);       

  });


/*=============================================
Editar calculos de temperaturas minimas C K F 
=============================================*/
  
  // C
  $("#EditarGTempMinC").change(function(){

    //temperatura °C
    tempMiniC = $("#EditarGTempMinC").val();  
    $("#editarTempMinC").val(tempMiniC);
    //temperatura °K
    CalTempK = Number(tempMiniC) + 273.15;
    FloTempK = CalTempK.toFixed(2);

    $("#EditarGTempMinK").val(FloTempK);
    $("#editarTempMinK").val(FloTempK);
    //temperatura °F
    CalTempF = (Number(tempMiniC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);

    $("#EditarGTempMinF").val(FloTempF);
    $("#editarTempMinF").val(FloTempF);
  });

  // K
  $("#EditarGTempMinK").change(function(){

    //temperatura °K
    tempMiniK = $("#EditarGTempMinK").val();
    $("#editarTempMinK").val(tempMiniK);  

    //temperatura °C
    CalTempC = Number(tempMiniK) - 273.15;
    FloTempC = CalTempC.toFixed(2);

    $("#EditarGTempMinC").val(FloTempC);
    $("#editarTempMinC").val(FloTempC);

    //temperatura °F
    CalTempF = (Number(FloTempC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);
   
    $("#EditarGTempMinF").val(FloTempF);
    $("#editarTempMinF").val(FloTempF);

  });

  // F
  $("#EditarGTempMinF").change(function(){

    //temperatura °F
    tempMiniF = $("#EditarGTempMinF").val();
    $("#editarTempMinF").val(tempMiniF);  

    //temperatura °C
    CalTempC = (Number(tempMiniF) - 32 ) * (5/9) ;
    FloTempC = CalTempC.toFixed(2);

    $("#EditarGTempMinC").val(FloTempC);
    $("#editarTempMinC").val(FloTempC);

    //temperatura °K
    CalTempK = ((Number(tempMiniF) - 32 ) * (5/9) + 273.15);
    FloTempK = CalTempK.toFixed(2);

    $("#EditarGTempMinK").val(FloTempK);
    $("#editarTempMinK").val(FloTempK);

  });

/*=============================================
Editar calculos de temperaturas promedio C K F 
=============================================*/
  
  // C
  $("#EditarGTempProC").change(function(){

    //temperatura °C
    tempProC = $("#EditarGTempProC").val();  
    $("#editarTempProC").val(tempProC);
    //temperatura °K
    CalTempK = Number(tempProC) + 273.15;
    FloTempK = CalTempK.toFixed(2);

    $("#EditarGTempProK").val(FloTempK);
    $("#editarTempProk").val(FloTempK);
    //temperatura °F
    CalTempF = (Number(tempProC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);

    $("#EditarGTempProF").val(FloTempF);
    $("#editarTempProF").val(FloTempF);
  });

  // K
  $("#EditarGTempProK").change(function(){

    //temperatura °K
    tempProK = $("#EditarGTempProK").val();
    $("#editarTempProk").val(tempProK);  

    //temperatura °C
    CalTempC = Number(tempProK) - 273.15;
    FloTempC = CalTempC.toFixed(2);

    $("#EditarGTempProC").val(FloTempC);
    $("#editarTempProC").val(FloTempC);

    //temperatura °F
    CalTempF = (Number(FloTempC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);
   
    $("#EditarGTempProF").val(FloTempF);
    $("#editarTempProF").val(FloTempF);

  });

  // F
  $("#EditarGTempProF").change(function(){

    //temperatura °F
    tempProF = $("#EditarGTempProF").val();
    $("#editarTempProF").val(tempProF);  

    //temperatura °C
    CalTempC = (Number(tempProF) - 32 ) * (5/9) ;
    FloTempC = CalTempC.toFixed(2);

    $("#EditarGTempProC").val(FloTempC);
    $("#editarTempProC").val(FloTempC);

    //temperatura °K
    CalTempK = ((Number(tempProF) - 32 ) * (5/9) + 273.15);
    FloTempK = CalTempK.toFixed(2);

    $("#EditarGTempProK").val(FloTempK);
    $("#editarTempProk").val(FloTempK);

  });

/*=============================================
Editar calculos de temperaturas promedio C K F 
=============================================*/
  
  // C
  $("#EditarGTempMaxC").change(function(){

    //temperatura °C
    tempMaxC = $("#EditarGTempMaxC").val();  
    $("#editarTempMaxC").val(tempMaxC);
    //temperatura °K
    CalTempK = Number(tempMaxC) + 273.15;
    FloTempK = CalTempK.toFixed(2);

    $("#EditarGTempMaxK").val(FloTempK);
    $("#editarTempMaxK").val(FloTempK);
    //temperatura °F
    CalTempF = (Number(tempMaxC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);

    $("#EditarGTempMaxF").val(FloTempF);
    $("#editarTempMaxF").val(FloTempF);
  });

  // K
  $("#EditarGTempMaxK").change(function(){

    //temperatura °K
    tempMaxK = $("#EditarGTempMaxK").val();
    $("#editarTempMaxK").val(tempMaxK);  

    //temperatura °C
    CalTempC = Number(tempMaxK) - 273.15;
    FloTempC = CalTempC.toFixed(2);

    $("#EditarGTempMaxC").val(FloTempC);
    $("#editarTempMaxC").val(FloTempC);

    //temperatura °F
    CalTempF = (Number(FloTempC) * (9/5) + 32 );
    FloTempF = CalTempF.toFixed(2);
   
    $("#EditarGTempMaxF").val(FloTempF);
    $("#editarTempMaxF").val(FloTempF);

  });

  // F
  $("#EditarGTempMaxF").change(function(){

    //temperatura °F
    tempMaxF = $("#EditarGTempMaxF").val();
    $("#editarTempMaxF").val(tempMaxF);  

    //temperatura °C
    CalTempC = (Number(tempMaxF) - 32 ) * (5/9) ;
    FloTempC = CalTempC.toFixed(2);

    $("#EditarGTempMaxC").val(FloTempC);
    $("#editarTempMaxC").val(FloTempC);

    //temperatura °K
    CalTempK = ((Number(tempMaxF) - 32 ) * (5/9) + 273.15);
    FloTempK = CalTempK.toFixed(2);

    $("#EditarGTempMaxK").val(FloTempK);
    $("#editarTempMaxK").val(FloTempK);

  });

/*=============================================
Validar elevacion editar
=============================================*/

  $("#EditarElevacionPlanta").change(function(){

    //temperatura °C
    valorElevacion = $("#EditarElevacionPlanta").val();
    elevacion = (valorElevacion);

    $("#EditarElevacionPlanta").val(elevacion);
    $("#editarElevacion").val(valorElevacion);

  });

/*=============================================
Calcular presion editar
=============================================*/
  
  $("#EditarElevacionPlanta").change(function(){

    valorElevacionPlanta = $("#editarElevacion").val();

    //bar
    Cal_bar = (1013.25 * Math.pow((1 - valorElevacionPlanta / 44300 ), 5.25 ) / 1000);
    Flo_Cal_bar = Cal_bar.toFixed(2);
    Valor_bar = (Flo_Cal_bar + ' bar');

    $("#editarPresionBAR").val(Cal_bar);
    $("#EditarPlantaPresionBAR").val(Valor_bar);

   //mm hg
    Cal_mm_hg = ((Cal_bar / 1.01325) * 760);
    Flo_Cal_mm_hgF = Cal_mm_hg.toFixed(2);
    Valor_mm_hg = (Flo_Cal_mm_hgF + ' mm hg')

    $("#editarPresionMMHG").val(Flo_Cal_mm_hgF);
    $("#EditarPlantaPresionMMHG").val(Valor_mm_hg);

    //psi
    Cal_PSI = ((Cal_mm_hg * 14.7)/760);
    Flo_Cal_PSI = Cal_PSI.toFixed(2);
    Valor_PSI = (Flo_Cal_PSI + ' psi')

    $("#editarPresionPSI").val(Flo_Cal_PSI);
    $("#EditarPlantaPresionPSI").val(Valor_PSI);

    //mm H2O
    Cal_mm_H2O = (Cal_bar * 10000);
    Flo_mm_H2O = Cal_mm_H2O.toFixed(2); 
    Valor_mm_H2O = (Flo_mm_H2O + ' mm H2O')

    $("#editarPresionMMH2O").val(Flo_mm_H2O); 
    $("#EditarPlantaPresionMMH2O").val(Valor_mm_H2O); 

    //Pa (N/m2)

    Cal_Pa_Nm2 = (100000 * Cal_bar);
    Flo_Pa_Nm2  = Cal_Pa_Nm2.toFixed(2); 
    Valor_Pa_Nm2  = (Flo_Pa_Nm2 + ' Pa (N/m2)')

    $("#editarPresionPANM2").val(Flo_Pa_Nm2); 
    $("#EditarPlantaPresionPANM2").val(Valor_Pa_Nm2); 

    //mbar
    Cal_Mbar = (Cal_bar * 1000);
    Flo_Mbar = Cal_Mbar.toFixed(0); 
    Valor_Mbar = (Flo_Mbar + ' mbar')

    $("#editarPresionMBAR").val(Flo_Mbar); 
    $("#EditarPlantaPresionMBAR").val(Valor_Mbar); 

    //KN/m2
    Cal_KNM2 = ( Cal_bar / (0.00001 * 1000));
    Flo_KNM2 = Cal_KNM2.toFixed(2); 
    Valor_KNM2 = (Flo_KNM2 + ' kN/m2')

    $("#editarPresionKNM2").val(Flo_KNM2);
    $("#EditarPlantaPresionKNM2").val(Valor_KNM2);

    //in H2O
    Cal_INH20 = ( Cal_bar * 401.47);
    Flo_INH20 = Cal_INH20.toFixed(2); 
    Valor_INH20 = (Flo_INH20 + ' in H2O')

    $("#editarPresionInH2O").val(Flo_INH20);
    $("#EditarPlantaPresionInH2O").val(Valor_INH20);

    //in HG
    Cal_INHG = ( Cal_bar * 29.5301);
    Flo_INHG = Cal_INHG.toFixed(2); 
    Valor_INHG = (Flo_INHG + ' in HG')

    $("#editarPresionInHG").val(Flo_INHG);
    $("#EditarPlantaPresionInHG").val(Valor_INHG);             

  });


/*=============================================
Validar editar humedad
=============================================*/

  $("#EditarHumedadPlanta").change(function(){

    //temperatura °C  k
    valorHumedad = $("#EditarHumedadPlanta").val();

    if (valorHumedad > 100) {

      Swal.fire({
        icon: "warning",
        text: "¡Alerta! El valor ingresado excede el rango permitido. Por favor, introduce un valor entre 0% y 100%.",
      }).then((result) => {
        if (result.value) {

          $("#EditarHumedadPlanta").val('');
          $("#editarHumedad").val('');

        }
      })

    }else{
      humedad = (valorHumedad );

      $("#EditarHumedadPlanta").val(humedad);
      $("#editarHumedad").val(valorHumedad);
    }




  });   


/*=============================================
ELIMINAR PLANTA
=============================================*/
$(".tablas").on("click", ".btnEliminarPlanta", function(){

  var PlantaId = $(this).attr("PlantaId");

  Swal.fire({
    title: "¿Está seguro de borrar la planta?",
    text: "¡Si no lo está puede cancelar la accíón!",
    icon: "info",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, borrar Planta!"
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "¿Está seguro?",
        text: "¡Al eliminar esta planta se eliminará todos los datos conectados a la misma. Esta acción no puede deshacerse y no se podrá restablecer! ¿Está seguro de que desea eliminar planta?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, borrar Planta!"
      }).then((result) => {
        if (result.isConfirmed) {
            window.location = "index.php?ruta=planta&PlantaId="+PlantaId;       
        }
      });   
    }
  });

});



/*=============================================
Cambiar estado
=============================================*/

$(".tablas").on("click", ".btnActivar", function(){

  var CamAPlantaId = $(this).attr("CamAPlantaId");
  var estado = $(this).attr("estadoPlanta");

  var datos = new FormData();
    datos.append("CamAPlantaId", CamAPlantaId);
    datos.append("estado", estado);

    $.ajax({
      url:"ajax/planta.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      success:function(respuesta){
      
          Swal.fire({
                icon: "success",
                text: "Se actualizó correctamente",
              }).then((result) => {
                  if (result.value) {

                  window.location = "planta";

                  }
              })
    }

    });

});







































