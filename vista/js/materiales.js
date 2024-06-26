



/*=============================================
Validar presion 
=============================================*/

$(".tablas").on("click", ".btnValidarDensidad", function(){

  var materialesId = $(this).attr("MaterialId");

  var datos = new FormData();
    datos.append("materialesId", materialesId);

    //console.log("datos:" + datos.get('materialesId'));

    $.ajax({

      url:"ajax/materiales.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

      // DEN TRANSPORTE KG/m3
      $("#DEN_TRANSPORTE_KG_m3").val('DENSIDAD TRANSPORTE : ' + respuesta['Density_Transport_kg_m3'] + ' kg/m³'); 
        
      // DEN TRANSPORTE KG/m3
      $("#DEN_TRANSPORTE_lb_ft3").val('DENSIDAD TRANSPORTE : ' + respuesta['Density_Transport_lb_ft3'] + ' lb/ft³'); 

      // DEN TRANSPORTE KG/m3
      $("#DEN_ALMANECANIENTO_kg_m3").val('DENSIDAD ALMACENAMIENTO : ' + respuesta['Density_Alm_kg_m3'] + ' kg/m³'); 

      // DEN TRANSPORTE KG/m3
      $("#DEN_ALMACENAMIENTO_lb_ft3").val('DENSIDAD ALMACENAMIENTO : ' + respuesta['Density_Alm_lb_ft3'] + ' lb/ft³');


      // DEN AIREADA KG/m3
      $("#DEN_AIREADA_KG_M3").val('DENSIDAD AIREADA : ' + respuesta['Density_aerated_kg_m3'] + ' kg/m³');   

      // DEN AIREADA KG/m3
      $("#DEN_AIREADA_LB_FT3").val('DENSIDAD AIREADA : ' + respuesta['Density_aerated_lb_ft3'] + ' lb/ft³');

    }

    });

});










