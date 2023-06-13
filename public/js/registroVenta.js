//-----------------muestra select pais-----------

$( document ).ready(function() {
    //var pais1 = $(paisProspecto).val();
    $.ajax({
          url: '../lista/MuestraPais', 
          method: "GET",
          crossDomain: true,
          dataType: 'json',
          success: function(respuesta){ 
                  respuesta['response'].forEach(function(word){
                  //console.log(word);
                  seleccion = '';
                  if(word['codvar'] == '00001'){
                  seleccion = 'selected';
                  }else{
                  seleccion = '';
                  }
                  $("#paisRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                  $("#pais2doRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>');
                  $("#paisAval").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
              });
          },//success
          error(e){
              console.log(e.message);
          }//error
      });
  
  });
  
  //-----------------muestra select Departamento-----------
  $( document ).ready(function() {
    // codPais1 = document.getElementById("paisProspecto").value;
    $.ajax({
          url: '../lista/MuestraDpto', 
          method: "GET",
          crossDomain: true,
          dataType: 'json',
        data:{'cod_pais':'00001'},
          success: function(respuesta){
              $("#dptoRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');
              $("#dpto2doRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');
              $("#dptoAval").append('<option value="" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
              seleccion = '';
              $("#dptoRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
              $("#dpto2doRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>');
              $("#dptoAval").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
          },//success
          error(e){
              console.log(e.message);
          }//error
      });
  
  });
  
  //-----------------muestra select Provincia-----------
  var coddptto = document.getElementById("dptoRegVta");
  coddptto.addEventListener("change",function (){
      codPais2 = document.getElementById("paisRegVta").value;
      var valor = document.getElementById("dptoRegVta").value;
      var options = document.querySelectorAll('#provRegVta option');
          options.forEach(o => o.remove());
  
      $.ajax({
          url: '../lista/MuestraProvincia', 
          method: "GET",
          crossDomain: true,
          dataType: 'json',
          data:{'cod_pais':codPais2,'cod_departamento':valor},
          success: function(respuesta){     
              $("#provRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');  
              respuesta['response'].forEach(function(word){
              $("#provRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
          },//success
          error(e){
              console.log(e.message);
          }//error
      });
  });
  
  var coddptto2 = document.getElementById("dpto2doRegVta");
  coddptto2.addEventListener("change",function (){
      codPais2 = document.getElementById("pais2doRegVta").value;
      var valor = document.getElementById("dpto2doRegVta").value;
      var options = document.querySelectorAll('#prov2doRegVta option');
          options.forEach(o => o.remove());
  
      $.ajax({
          url: '../lista/MuestraProvincia', 
          method: "GET",
          crossDomain: true,
          dataType: 'json',
          data:{'cod_pais':codPais2,'cod_departamento':valor},
          success: function(respuesta){     
              $("#prov2doRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');  
              respuesta['response'].forEach(function(word){
              $("#prov2doRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
          },//success
          error(e){
              console.log(e.message);
          }//error
      });
  });

  var coddptto2 = document.getElementById("dptoAval");
  coddptto2.addEventListener("change",function (){
      codPais2 = document.getElementById("paisAval").value;
      var valor = document.getElementById("dptoAval").value;
      var options = document.querySelectorAll('#provAval option');
          options.forEach(o => o.remove());
  
      $.ajax({
          url: '../lista/MuestraProvincia', 
          method: "GET",
          crossDomain: true,
          dataType: 'json',
          data:{'cod_pais':codPais2,'cod_departamento':valor},
          success: function(respuesta){     
              $("#provAval").append('<option value="" selected disabled>SELECCIONE...</option>');  
              respuesta['response'].forEach(function(word){
              $("#provAval").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
          },//success
          error(e){
              console.log(e.message);
          }//error
      });
  });
  
  //-----------------muestra select Distrito-----------
  var coddptto = document.getElementById("provRegVta");
  coddptto.addEventListener("change",function(){
    codPais1 = document.getElementById("paisRegVta").value;
    coddptto1 = document.getElementById("dptoRegVta").value;
    codprov1 = document.getElementById("provRegVta").value;
  
    var options = document.querySelectorAll('#dttoRegVta option');
      options.forEach(o => o.remove());
  
    $.ajax({
          url: '../lista/MuestraDtto', 
          method: "GET",
          crossDomain: true,
          dataType: 'json',
          data:{'cod_pais':codPais1,'cod_departamento':coddptto1,'cod_provincia':codprov1},
          success: function(respuesta){
              $("#dttoRegVta").append('<option value="" selected disabled>SELECCIONE...</option>'); 
            respuesta['response'].forEach(function(word){
              //console.log(word);
              seleccion = '';
              $("#dttoRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>');  
            });
          },//success
          error(e){
              console.log(e.message);
          }//error
      });
  
  });
  
  var coddptto = document.getElementById("prov2doRegVta");
  coddptto.addEventListener("change",function(){
    codPais1 = document.getElementById("pais2doRegVta").value;
    coddptto1 = document.getElementById("dpto2doRegVta").value;
    codprov1 = document.getElementById("prov2doRegVta").value;
  
    var options = document.querySelectorAll('#dtto2doRegVta option');
      options.forEach(o => o.remove());
  
    $.ajax({
          url: '../lista/MuestraDtto', 
          method: "GET",
          crossDomain: true,
          dataType: 'json',
          data:{'cod_pais':codPais1,'cod_departamento':coddptto1,'cod_provincia':codprov1},
          success: function(respuesta){
              $("#dtto2doRegVta").append('<option value="" selected disabled>SELECCIONE...</option>'); 
            respuesta['response'].forEach(function(word){
              //console.log(word);
              seleccion = '';
              $("#dtto2doRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
          },//success
          error(e){
              console.log(e.message);
          }//error
      });
  
  });

  var coddptto = document.getElementById("provAval");
  coddptto.addEventListener("change",function(){
    codPais1 = document.getElementById("paisAval").value;
    coddptto1 = document.getElementById("dptoAval").value;
    codprov1 = document.getElementById("provAval").value;
  
    var options = document.querySelectorAll('#dttoAval option');
      options.forEach(o => o.remove());
  
    $.ajax({
          url: '../lista/MuestraDtto', 
          method: "GET",
          crossDomain: true,
          dataType: 'json',
          data:{'cod_pais':codPais1,'cod_departamento':coddptto1,'cod_provincia':codprov1},
          success: function(respuesta){
              $("#dttoAval").append('<option value="" selected disabled>SELECCIONE...</option>'); 
            respuesta['response'].forEach(function(word){
              //console.log(word);
              seleccion = '';
              $("#dttoAval").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
          },//success
          error(e){
              console.log(e.message);
          }//error
      });
  
  });
  
  //-----------------muestra select tipo documento-----------
  $( document ).ready(function() {
      $.ajax({
            url: '../lista/MuestraTipoDoc', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            success: function(respuesta){
                $("#tipoDocRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');
                $("#tipoDoc2doRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');
                $("#tipoDocAval").append('<option value="" selected disabled>SELECCIONE...</option>');
                $("#tipoDocBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
              respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#tipoDocRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                $("#tipoDoc2doRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                $("#tipoDocAval").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>');
                $("#tipoDocBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>');
              });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    
    });
  
    //-----------------muestra select parentesco-----------
  $( document ).ready(function() {
      $.ajax({
            url: '../lista/MuestraParentesco', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            success: function(respuesta){
                $("#parentBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
              respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#parentBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
              });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    
    });
  
    //-----------------muestra select sexo-----------
    $( document ).ready(function() {
      $.ajax({
            url: '../lista/MuestraSexo', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            success: function(respuesta){
                $("#sexoBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
              respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#sexoBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
              });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    
    });
    
    //-----------------muestra select Edo Civil-----------
    $( document ).ready(function() {
      $.ajax({
            url: '../lista/MuestraEdoCivil', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            success: function(respuesta){
                $("#edoCivilBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
              respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#edoCivilBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
              });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    
    });

    //-----------------muestra select Camposanto-----------
    $( document ).ready(function() {
        $.ajax({
            url: '../lista/MuestraCamposanto', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            success: function(respuesta){
                $("#camposanto").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#camposanto").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select tipo plataforma-----------
    var codcampo = document.getElementById("camposanto");
    codcampo.addEventListener("change",function(){
        codCamposanto = document.getElementById("camposanto").value;
        $.ajax({
            url: '../lista/MuestraTipoPlataforma', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto},
            success: function(respuesta){
                $("#tipoPlat").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#tipoPlat").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });
    
  