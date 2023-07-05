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
                $("#tipoDocRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>'); 
                $("#tipoDoc2doRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>'); 
                $("#tipoDocAval").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>');
                $("#tipoDocBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>');
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
                $("#parentescoAddBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
              respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#parentescoAddBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
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
                $("#sexoAddBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
              respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#sexoAddBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
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
                $("#edoCivilAddBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
              respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#edoCivilAddBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
              });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    
    });

    //-----------------muestra select Tipo Recaudacion-----------
    $( document ).ready(function() {
        $.ajax({
            url: '../lista/MuestraTipoRecaudacion', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            success: function(respuesta){
                $("#tipoPrograma").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#tipoPrograma").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select Tipo Servicio-----------
    $( document ).ready(function() {
        $.ajax({
            url: '../lista/MuestraTipoServicio', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            success: function(respuesta){
                $("#tipoServicio").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#tipoServicio").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select Subtipo servicio-----------
    var codcampo = document.getElementById("tipoServicio");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#subtipoServ option');
            options.forEach(o => o.remove());
        tipoServicio = document.getElementById("tipoServicio").value;
        $.ajax({
            url: '../lista/MuestraSubtipoServicio', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'tipo_servicio': tipoServicio},
            success: function(respuesta){
                $("#subtipoServ").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#subtipoServ").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
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
        var options = document.querySelectorAll('#tipoPlat option');
            options.forEach(o => o.remove());
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

    //-----------------muestra select plataforma-----------
    var codcampo = document.getElementById("tipoPlat");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#nombrePlat option');
        options.forEach(o => o.remove());
        var options1 = document.querySelectorAll('#nombreArea option');
        options1.forEach(o => o.remove());
        var options2 = document.querySelectorAll('#ejeX option');
        options2.forEach(o => o.remove());
        var options3 = document.querySelectorAll('#ejeY option');
        options3.forEach(o => o.remove());
        var options4 = document.querySelectorAll('#espacio option');
        options4.forEach(o => o.remove());
        var options5 = document.querySelectorAll('#tipoEspacio option');
        options5.forEach(o => o.remove());

        codCamposanto = document.getElementById("camposanto").value;
        codTipoplat = document.getElementById("tipoPlat").value;
        $.ajax({
            url: '../lista/MuestraPlataforma', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_tipo_plataforma':codTipoplat},
            success: function(respuesta){
                $("#nombrePlat").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#nombrePlat").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select area-----------
    var codcampo = document.getElementById("nombrePlat");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#nombreArea option');
        options.forEach(o => o.remove());
        var options2 = document.querySelectorAll('#ejeX option');
        options2.forEach(o => o.remove());
        var options3 = document.querySelectorAll('#ejeY option');
        options3.forEach(o => o.remove());
        var options4 = document.querySelectorAll('#espacio option');
        options4.forEach(o => o.remove());
        var options5 = document.querySelectorAll('#tipoEspacio option');
        options5.forEach(o => o.remove());

        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        $.ajax({
            url: '../lista/MuestraArea', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma},
            success: function(respuesta){
                $("#nombreArea").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#nombreArea").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select Eje Horizontal-----------
    var codcampo = document.getElementById("nombreArea");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#ejeX option');
        options.forEach(o => o.remove());
        var options3 = document.querySelectorAll('#ejeY option');
        options3.forEach(o => o.remove());
        var options4 = document.querySelectorAll('#espacio option');
        options4.forEach(o => o.remove());
        var options5 = document.querySelectorAll('#tipoEspacio option');
        options5.forEach(o => o.remove());

        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        codArea = document.getElementById("nombreArea").value;
        $.ajax({
            url: '../lista/MuestraEjeX', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea},
            success: function(respuesta){
                $("#ejeX").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#ejeX").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select Eje Vertical-----------
    var codcampo = document.getElementById("ejeX");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#ejeY option');
        options.forEach(o => o.remove());
        var options4 = document.querySelectorAll('#espacio option');
        options4.forEach(o => o.remove());
        var options5 = document.querySelectorAll('#tipoEspacio option');
        options5.forEach(o => o.remove());

        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        codArea = document.getElementById("nombreArea").value;
        ejeX = document.getElementById("ejeX").value;
        $.ajax({
            url: '../lista/MuestraEjeY', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX},
            success: function(respuesta){
                $("#ejeY").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#ejeY").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select Espacio-----------
    var codcampo = document.getElementById("ejeY");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#espacio option');
        options.forEach(o => o.remove());
        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        codArea = document.getElementById("nombreArea").value;
        ejeX = document.getElementById("ejeX").value;
        ejeY = document.getElementById("ejeY").value;
        $.ajax({
            url: '../lista/MuestraEspacio', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX,'ejeY':ejeY},
            success: function(respuesta){
                $("#espacio").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#espacio").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select Espacio-----------
    var codcampo = document.getElementById("ejeY");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#tipoEspacio option');
        options.forEach(o => o.remove());
        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        codArea = document.getElementById("nombreArea").value;
        ejeX = document.getElementById("ejeX").value;
        ejeY = document.getElementById("ejeY").value;
        $.ajax({
            url: '../lista/MuestraTipoEspacio', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX,'ejeY':ejeY},
            success: function(respuesta){
                $("#tipoEspacio").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#tipoEspacio").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select Subtipo servicio-----------
    var codcampo = document.getElementById("btnAddServicio");
    codcampo.addEventListener("click",function(){
        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        cod_tipo_recaudacion = document.getElementById("tipoPrograma").value;
        var boton = document.getElementById("tipoNec");
        if(boton.checked == true){
            tipo_nec = 'NI';
        }else{
            tipo_nec = 'NF';
        }
        cod_subtipo_servicio = document.getElementById("subtipoServ").value;
        var table = document.getElementById('tablaServicios');
        var tbody = table.getElementsByTagName('tbody')[0];
        // Eliminar todas las filas dentro del tbody
        while (tbody.firstChild) {
            tbody.removeChild(tbody.firstChild);
        }
        $.ajax({
            url: '../lista/MuestraServicio', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_tipo_recaudacion': cod_tipo_recaudacion,'cod_subtipo_servicio':cod_subtipo_servicio,'tipo_nec':tipo_nec},
            success: function(respuesta){
                    console.log(respuesta['response']);
                respuesta['response'].forEach(element => {
                     console.log(element);
                    var tabla = document.getElementById('tablaServicios');
                    var tbody = tabla.getElementsByTagName('tbody')[0];
                    
                    var nuevaFila = tbody.insertRow();
                    nuevaFila.dataset.arrayOculto = JSON.stringify(element);

                    var codigoCelda = nuevaFila.insertCell();
                    codigoCelda.textContent = element['cod_servicio'];
                    
                    var dscServicioCelda = nuevaFila.insertCell();
                    dscServicioCelda.textContent = element['dsc_servicio'];
                    dscServicioCelda.classList.add('justificado');

                    var monedaCelda = nuevaFila.insertCell();
                    monedaCelda.textContent = element['cod_moneda'];

                    var precioCelda = nuevaFila.insertCell();
                    precioCelda.textContent = element['imp_precio'];

                    var accionesCelda = nuevaFila.insertCell();
    
                    var accionesDiv = document.createElement('div'); // Contenedor para los botones
                    accionesDiv.classList.add('acciones'); // Clase CSS opcional para estilizar el contenedor
                    
                    var addBoton = document.createElement('button');
                    addBoton.classList.add('btn');
                    addBoton.classList.add('btn-success');
                    addBoton.classList.add('BtnverdeRemanso');
                    addBoton.setAttribute('data-bs-dismiss', 'modal');
                    addBoton.innerHTML  = '<span class="bi bi-check"></span>';
                    addBoton.addEventListener('click', function() {
                        var fila = this.parentNode.parentNode.parentNode; // Obtener la fila actual
                        var arrayOculto = JSON.parse(fila.dataset.arrayOculto); // Obtener el array oculto
                        // Llamar a la función y pasar el array oculto
                        muestraserviciosFormulario(arrayOculto);
                    });
                    addBoton.id = 'botonAddd' + nuevaFila.rowIndex;
                    accionesDiv.appendChild(addBoton);

                    accionesCelda.appendChild(accionesDiv);
                    
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

//---------------------llena tabla servicios--------------------------
    function muestraserviciosFormulario(datos) {
        
        var tabla = document.getElementById('tablaServiciosAdded');
        var tbody = tabla.getElementsByTagName('tbody')[0];
        while (tbody.firstChild) {
            tbody.removeChild(tbody.firstChild);
        }
        
        var nuevaFila = tbody.insertRow();

        var codigoCelda = nuevaFila.insertCell();
        codigoCelda.textContent = datos['cod_servicio']+' '+datos['dsc_servicio'];
        codigoCelda.classList.add('justificado');

        var cantidadCelda = nuevaFila.insertCell();
        var cantInput = document.createElement('input');
        cantInput.setAttribute('style', 'width: 3em;');
        cantInput.type = 'number';
        cantInput.value = 1;

        cantidadCelda.appendChild(cantInput);

        var impListaCelda = nuevaFila.insertCell();
        impListaCelda.textContent = datos['imp_precio_lista'];

        var precioCelda = nuevaFila.insertCell();
        precioCelda.textContent = datos['imp_precio'];

        var descuentoPorcCelda = nuevaFila.insertCell();
        var dsctoPorcInput = document.createElement('input');
        dsctoPorcInput.type = 'number';
        dsctoPorcInput.setAttribute('style', 'width: 5em;');
        dsctoPorcInput.setAttribute('max', '100');
        dsctoPorcInput.value = 0;   
        
        descuentoPorcCelda.appendChild(dsctoPorcInput);

        var descuentoCelda = nuevaFila.insertCell();
        descuentoCelda.textContent = 0;


        var dsctoLibreCelda = nuevaFila.insertCell();
        var dsctoLibreInput = document.createElement('input');
        dsctoLibreInput.type = 'number';
        dsctoLibreInput.setAttribute('style', 'width: 5em;');
        dsctoLibreInput.value = 0;
 
        dsctoLibreCelda.appendChild(dsctoLibreInput);

        
        //------caja descuento
        // var nombreInput = document.createElement('input');
        // nombreInput.type = 'number';
        // nombreInput.value = 0;

        var saldo = datos['imp_precio'];
        cuoi = datos['imp_precio_cuoi'];
         
        //descuentoCelda.appendChild(nombreInput);

        var precioFinalCelda = nuevaFila.insertCell();
        precioFinalCelda.textContent = saldo;

        var changeEvent = new Event('input');   // Crea un evento "change"
        inputCOUI = document.getElementById('impCuoi');

        // nombreInput.addEventListener('input', function() {
        //     calculaSaldo(cantInput.value,nombreInput.value,datos['imp_precio']);
        //     document.getElementById("impCuoi").value=datos['imp_precio_cuoi'];
        //     inputCOUI.dispatchEvent(changeEvent);

        //  });

        cantInput.addEventListener('input', function() {
            calculaSaldo(cantInput.value,dsctoLibreInput.value,dsctoPorcInput.value,datos['imp_precio']);
            document.getElementById("impCuoi").value=datos['imp_precio_cuoi'];
            inputCOUI.dispatchEvent(changeEvent);
        });

        dsctoPorcInput.addEventListener('input', function() {
            if(dsctoPorcInput.value > 100){
                dsctoPorcInput.value = 100;
            }
            calculaSaldo(cantInput.value,dsctoLibreInput.value,dsctoPorcInput.value,datos['imp_precio']);
            document.getElementById("impCuoi").value=datos['imp_precio_cuoi'];
            inputCOUI.dispatchEvent(changeEvent);

        });

        dsctoLibreInput.addEventListener('input', function() {
            calculaSaldo(cantInput.value,dsctoLibreInput.value,dsctoPorcInput.value,datos['imp_precio']);
            document.getElementById("impCuoi").value=datos['imp_precio_cuoi'];
            inputCOUI.dispatchEvent(changeEvent);

        });

        document.getElementById("impTotal").value=datos['imp_precio'];
        document.getElementById("impCuoi").value=datos['imp_precio_cuoi'];
        document.getElementById("impFoma").value=datos['imp_precio_foma'];    
        document.getElementById("codServicio").value=datos['cod_servicio'];
        document.getElementById("impPrecioLista").value=datos['imp_precio_lista'];
        document.getElementById("impMinCuoi").value=datos['imp_min_cuoi'];

        function calculaSaldo(ctd,dsctoLibre,dsctoPorc,precio) {
            if(ctd < 1){
                ctd = 1;
            }
            if(dsctoLibre =='' || dsctoLibre == null){
                dsctoLibre=0;
            }
            if(dsctoPorc =='' || dsctoPorc == null){
                dsctoPorc=0;
            }
            var porc = (precio*parseFloat(dsctoPorc))/100;
            dscto = parseFloat(dsctoLibre)+porc;
            saldo = (ctd*precio)-dscto;
            if(saldo < 0){
                dscto = 0;
                dsctoLibreInput.value = 0;
                saldo = (ctd*precio)-porc;
            }

            precioFinalCelda.textContent = saldo;
            descuentoCelda.textContent = porc;
            document.getElementById("impDscto").value=dscto;
            document.getElementById("impSaldo").value=saldo;
            document.getElementById("ctdServ").value=ctd;
            document.getElementById("impTotal").value=saldo;  
        }
        
        document.getElementById("impSaldo").value=saldo-cuoi;
    }
//-----------------cambia saldo menos CUOI

var campoCuoi = document.getElementById("impCuoi");
campoCuoi.addEventListener("input",function(){
    var total = document.getElementById("impTotal").value;
    var cuoi = parseFloat(this.value);
    //console.log('cuoi ',cuoi,' total ',total)
    total = parseFloat(total);
    if(cuoi =='' || cuoi == null){
        cuoi=0;
    }
    if(cuoi > total){
        saldo = 0;
        document.getElementById("impCuoi").value = total;
    }else{
        saldo = total - cuoi;
    }
    document.getElementById("impSaldo").value=saldo;
});

campoCuoi.addEventListener("change",function(){
    var minCuoiInput = document.getElementById("impMinCuoi").value;
    var cuoi = parseFloat(this.value);
    var minCuoi = parseFloat(minCuoiInput);
    if(cuoi < minCuoi || cuoi == null || cuoi == ''){
        document.getElementById("impCuoi").value = minCuoi;
    }
});

//-----------------muestra select Cuota-----------
$( document ).ready(function() {
    $.ajax({
        url: '../lista/MuestraListaCuota', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#codCuotaServ").append('<option value="" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
            seleccion = '';
            $("#codCuotaServ").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
});

//-----------------muestra select Interes-----------
$( document ).ready(function() {
    $.ajax({
        url: '../lista/MuestraListaInteres', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#codTasa").append('<option value="" selected disabled>SELECCIONE...</option>');
            $("#codTasa").append('<option value="">0% INTERES</option>');
            respuesta['response'].forEach(function(word){
            seleccion = '';
            $("#codTasa").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
});
    
//-----------------Añade Beneficiarios--------------------

var filasArray = []; // Array para almacenar las filas

var addBeneficiario = document.getElementById("agregaBeneficiario");
addBeneficiario.addEventListener("click",function (){
  
  var codtipoDoc = document.getElementById("tipoDocAddBenef").value;
  var doc = document.getElementById("tipoDocAddBenef");
  var tipoDoc = doc.options[doc.selectedIndex].text;
  var dscDoc = document.getElementById("numDocAddBenef").value;
  var nombre = document.getElementById("nombresAddBenef").value;
  var apellP = document.getElementById("apellPAddBenef").value;
  var apellM = document.getElementById("apellMAddBenef").value;
  var fechNac = document.getElementById("fchNacAddBenef").value;
  var parent = document.getElementById("parentescoAddBenef");
  var parentesco = parent.options[parent.selectedIndex].text;
  var codParentesco = document.getElementById("parentescoAddBenef").value;
  var sexo = document.getElementById("sexoAddBenef").value;
  var civil = document.getElementById("edoCivilAddBenef");
  var edoCivil = civil.options[civil.selectedIndex].text;
  var codEdoCivil = document.getElementById("edoCivilAddBenef").value;

    var tabla = document.getElementById('tablaBeneficiarios');
    var tbody = tabla.getElementsByTagName('tbody')[0];
    
    var nuevaFila = tbody.insertRow();
    
    var dniCelda = nuevaFila.insertCell();
    dniCelda.textContent = tipoDoc+'-'+dscDoc;
    
    var nombreCelda = nuevaFila.insertCell();
    nombreCelda.textContent = nombre+' '+apellP+' '+apellM;

    var fchNacCelda = nuevaFila.insertCell();
    fchNacCelda.textContent = fechNac;

    var parentescoCelda = nuevaFila.insertCell();
    parentescoCelda.textContent = parentesco;

    var sexoCelda = nuevaFila.insertCell();
    sexoCelda.textContent = sexo;

    var edoCivilCelda = nuevaFila.insertCell();
    edoCivilCelda.textContent = edoCivil;

    var accionesCelda = nuevaFila.insertCell();
    
    var accionesDiv = document.createElement('div'); // Contenedor para los botones
    accionesDiv.classList.add('acciones'); // Clase CSS opcional para estilizar el contenedor
    
    var eliminarBoton = document.createElement('button');
    eliminarBoton.classList.add('btn');
    eliminarBoton.classList.add('btn-danger');
    eliminarBoton.innerHTML  = '<span class="bi bi-x-lg"></span>';
    eliminarBoton.id = 'botonEliminar' + nuevaFila.rowIndex;

    // var editarBoton = document.createElement('button');
    // editarBoton.classList.add('btn');
    // editarBoton.classList.add('btn-success');
    // editarBoton.classList.add('BtnverdeRemanso');
    // editarBoton.innerHTML  = '<span class="bi bi-pencil"></span>';
    // editarBoton.id = 'botonEditar' + nuevaFila.rowIndex;
    
    // accionesDiv.appendChild(editarBoton);
    accionesDiv.appendChild(eliminarBoton);
    
    accionesCelda.appendChild(accionesDiv);

    // editarBoton.addEventListener('click', function() {
    //   var filaIndex = this.id.replace('botonEditar', ''); // Obtiene el índice de la fila desde el ID del botón
    //   editarFila(filaIndex);
    // });
    
    eliminarBoton.addEventListener('click', function() {
      var filaIndex = this.id.replace('botonEliminar', ''); // Obtiene el índice de la fila desde el ID del botón
      eliminarFila(filaIndex,'NO','');
    });

    var today = new Date();
    // obtener la fecha de hoy en formato `MM/DD/YYYY`
    var dia = today.toLocaleDateString('en-US');

    var filaData = {
      cod_localidad_p: 'LC001',
      cod_prospecto: '',
      num_linea: '0', 
      cod_tipo_documento: codtipoDoc,
      dsc_documento: dscDoc,
      dsc_apellido_paterno: apellP,
      dsc_apellido_materno: apellM,
      dsc_nombres: nombre,
      fch_nacimiento: fechNac,
      cod_estado_civil: codEdoCivil,
      cod_sexo: sexo,
      cod_parentesco: codParentesco
    };
    
    filasArray.push(filaData); // Agregar la fila al array
    console.log(filasArray);

});

function eliminarFila(index,bd,num_linea) {
  var tabla = document.getElementById('tablaBeneficiarios');
  var tbody = tabla.getElementsByTagName('tbody')[0];
  var fila = tbody.rows[index-1];
  tbody.removeChild(fila);
  filasArray.splice(index-1, 1); // Eliminar el valor del array en la posición index
  console.log(filasArray);
  if(bd === 'SI'){
    $.ajax({         
        type: "DELETE",
        url: '../api/EliminarProspectoBeneficiario', 
        dataType: 'json',
        data:{'cod_prospecto':cod_prospecto,'num_linea':num_linea},
        success: function(resultBenef){
          console.log(resultBenef['response']);
        }
    });
  }

}  

var btnAbreModalBenef = document.getElementById("abreModalBenef");
btnAbreModalBenef.addEventListener("click",function (){
    document.getElementById("tipoDocAddBenef").value = '';
    document.getElementById("numDocAddBenef").value = '';
    document.getElementById("nombresAddBenef").value = '';
    document.getElementById("apellPAddBenef").value = '';
    document.getElementById("apellMAddBenef").value = '';
    document.getElementById("fchNacAddBenef").value = '';
    document.getElementById("parentescoAddBenef").value = '';
    document.getElementById("sexoAddBenef").value = '';
    document.getElementById("edoCivilAddBenef").value = '';
});

