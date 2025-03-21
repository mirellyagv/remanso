window.onload=function() {
    //-----------------muestra select pais-----------
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

    //-----------------muestra select Departamento-----------
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

    //-----------------muestra select tipo documento-----------

    $.ajax({
        url: '../lista/MuestraTipoDoc', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#tipoDocRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');
            $("#tipoDoc2doRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');
            $("#tipoDocAval").append('<option value="" selected disabled>SELECCIONE...</option>');
            $("#tipoDocAddBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#tipoDocRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>'); 
                $("#tipoDoc2doRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>'); 
                $("#tipoDocAval").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>');
                $("#tipoDocAddBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    //-----------------muestra select parentesco-----------
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

    //-----------------muestra select sexo-----------
    $.ajax({
        url: '../lista/MuestraSexo', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#sexoAddBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
            $("#sexoRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#sexoAddBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                $("#sexoRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    //-----------------muestra select Edo Civil-----------
    $.ajax({
        url: '../lista/MuestraEdoCivil', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#edoCivilAddBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
            $("#edoCivilRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');
            $("#edoCivil2doRegVta").append('<option value="" selected disabled>SELECCIONE...</option>');
            $("#edoCivilAval").append('<option value="" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#edoCivilAddBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                $("#edoCivilRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                $("#edoCivil2doRegVta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                $("#edoCivilAval").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    //-----------------muestra select Tipo Recaudacion-----------
    $.ajax({
        url: '../lista/MuestraTipoRecaudacion', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#tipoPrograma").append('<option value="" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#tipoPrograma").append('<option value="'+ word['codvar'] +'" '+seleccion+' compar="'+word['desvar3']+'" integral="'+word['desvar4']+'" validaEsp="'+word['desvar2']+'"  >'+ word['desvar1'] +'</option>'); 
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
    
   
     //-----------------muestra select Camposanto-----------
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

    //-----------------muestra select Cuota-----------
    $.ajax({
        url: '../lista/MuestraListaCuota', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#codCuotaServ").append('<option value="000" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#codCuotaServ").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>'); 
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    //-----------------muestra select Interes-----------
    $.ajax({
        url: '../lista/MuestraListaInteres', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#codTasa").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>'); 
               
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

}//onload

//---------------------bloquea distrito cuando pais!='PERU'---------------------------

var verifPais = document.getElementById("paisRegVta");
verifPais.addEventListener("change",function (){
  if (verifPais.value != '00001') {
    document.getElementById("dptoRegVta").value = '';
    document.getElementById("dptoRegVta").setAttribute('disabled', 'disabled');
    document.getElementById("provRegVta").value = '';
    document.getElementById("provRegVta").setAttribute('disabled', 'disabled');
    document.getElementById("dttoRegVta").value = '';
    document.getElementById("dttoRegVta").setAttribute('disabled', 'disabled');
  }else{
    document.getElementById("dptoRegVta").removeAttribute('disabled');
    document.getElementById("provRegVta").removeAttribute('disabled');
    document.getElementById("dttoRegVta").removeAttribute('disabled');
  }

});

var verifPais2 = document.getElementById("pais2doRegVta");
verifPais2.addEventListener("change",function (){
  if (verifPais2.value != '00001') {
    document.getElementById("dpto2doRegVta").value = '';
    document.getElementById("dpto2doRegVta").setAttribute('disabled', 'disabled');
    document.getElementById("prov2doRegVta").value = '';
    document.getElementById("prov2doRegVta").setAttribute('disabled', 'disabled');
    document.getElementById("dtto2doRegVta").value = '';
    document.getElementById("dtto2doRegVta").setAttribute('disabled', 'disabled');
  }else{
    document.getElementById("dpto2doRegVta").removeAttribute('disabled');
    document.getElementById("prov2doRegVta").removeAttribute('disabled');
    document.getElementById("dtto2doRegVta").removeAttribute('disabled');
  }

});

var verifPaisA = document.getElementById("paisAval");
verifPaisA.addEventListener("change",function (){
  if (verifPaisA.value != '00001') {
    document.getElementById("dptoAval").value = '';
    document.getElementById("dptoAval").setAttribute('disabled', 'disabled');
    document.getElementById("provAval").value = '';
    document.getElementById("provAval").setAttribute('disabled', 'disabled');
    document.getElementById("dttoAval").value = '';
    document.getElementById("dttoAval").setAttribute('disabled', 'disabled');
  }else{
    document.getElementById("dptoAval").removeAttribute('disabled');
    document.getElementById("provAval").removeAttribute('disabled');
    document.getElementById("dttoAval").removeAttribute('disabled');
  }

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
    var valor2 = document.getElementById("dpto2doRegVta").value;
    var options = document.querySelectorAll('#prov2doRegVta option');
    options.forEach(o => o.remove());
  
    $.ajax({
        url: '../lista/MuestraProvincia', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_pais':codPais2,'cod_departamento':valor2},
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
    var valor3 = document.getElementById("dptoAval").value;
    var options = document.querySelectorAll('#provAval option');
    options.forEach(o => o.remove());
  
    $.ajax({
        url: '../lista/MuestraProvincia', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_pais':codPais2,'cod_departamento':valor3},
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
                var nicho = word['desvar2'] ? word['desvar2'] : 'NO';
                $("#subtipoServ").append('<option value="'+ word['codvar'] +'" '+seleccion+' esNichoFam = "'+nicho+'">'+ word['desvar1'] +'</option>'); 
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
});

var subtiposrvinput = document.getElementById("subtipoServ");
subtiposrvinput.addEventListener("change",function(){
    var seleccion = $('option:selected', subtiposrvinput).attr('esNichoFam');
    document.getElementById("esNichoEsp").value = seleccion;
});

//-----------------bloquea espacios VALIDA ESPACIO Y TIPO DE SERVICIO -----------
var codTipoProg = document.getElementById("tipoPrograma");
codTipoProg.addEventListener("change",function(){
    var valor = codTipoProg.value;
    var validaEsp = $('option:selected', codTipoProg).attr('validaesp');
    var flgIntg = $('option:selected', codTipoProg).attr('integral');

    if (validaEsp == 'NO') {
        
        document.getElementById("camposanto").value = '';
        document.getElementById("camposanto").setAttribute('disabled', 'disabled');
        document.getElementById("tipoPlat").value = '';
        document.getElementById("tipoPlat").setAttribute('disabled', 'disabled');
        document.getElementById("nombrePlat").value = '';
        document.getElementById("nombrePlat").setAttribute('disabled', 'disabled');
        document.getElementById("nombreArea").value = '';
        document.getElementById("nombreArea").setAttribute('disabled', 'disabled');
        document.getElementById("ejeX").value = '';
        document.getElementById("ejeX").setAttribute('disabled', 'disabled');
        document.getElementById("ejeY").value = '';
        document.getElementById("ejeY").setAttribute('disabled', 'disabled');
        document.getElementById('espacio').value = '';
        document.getElementById("espacio").setAttribute('disabled', 'disabled');
        document.getElementById('tipoEspacio').value = '';
        document.getElementById("tipoEspacio").setAttribute('disabled', 'disabled');
        document.getElementById('impFoma').value = 0;
        document.getElementById("impFoma").setAttribute('disabled', 'disabled');
        document.getElementById("codCuotaFoma").setAttribute('disabled', 'disabled');
        
    }else{

        document.getElementById("camposanto").removeAttribute('disabled');
        document.getElementById("tipoPlat").removeAttribute('disabled');
        document.getElementById("nombrePlat").removeAttribute('disabled');
        document.getElementById("nombreArea").removeAttribute('disabled');
        document.getElementById("ejeX").removeAttribute('disabled');
        document.getElementById("ejeY").removeAttribute('disabled');
        document.getElementById("espacio").removeAttribute('disabled');

        //------------------muestra Nivel----------------------------------------------

        var esCompart = $('option:selected', codTipoProg).attr('compar');
        //console.log('esCompart',esCompart)
        if(esCompart == 'SI'){
            document.getElementById("nivelRegVnta").removeAttribute('disabled');
        }else{
            document.getElementById("nivelRegVnta").setAttribute('disabled', 'disabled');
            var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
            optionsNivel.forEach(o => o.remove());
        }

    }

    if(flgIntg == 'SI'){ 

        document.getElementById("tipoServicio").value = '';
        document.getElementById("tipoServicio").setAttribute('disabled', 'disabled');
        document.getElementById("subtipoServ").value = '';
        document.getElementById("subtipoServ").setAttribute('disabled', 'disabled');

    }else{

        document.getElementById("tipoServicio").removeAttribute('disabled');
        document.getElementById("subtipoServ").removeAttribute('disabled');

    }

    //-----------------muestra select Tipo Servicio-----------
    var options = document.querySelectorAll('#tipoServicio option');
    options.forEach(o => o.remove());
    $.ajax({

        url: '../lista/MuestraTipoServicio', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data: {'cod_tipo_recaudacion': valor},
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
    var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
    optionsNivel.forEach(o => o.remove());

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
    var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
    optionsNivel.forEach(o => o.remove());

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
    var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
    optionsNivel.forEach(o => o.remove());

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
    var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
    optionsNivel.forEach(o => o.remove());

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
            if(respuesta['response'] == ''){
                $("#espacio").append('<option value="" selected disabled>NO HAY ESPACIOS DIPONIBLES</option>');
            }else{
                $("#espacio").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                    $("#espacio").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            }
            
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
});

//-----------------muestra select tipo Espacio-----------
var codcampo = document.getElementById("ejeY");
codcampo.addEventListener("change",function(){
    var options = document.querySelectorAll('#tipoEspacio option');
    options.forEach(o => o.remove());
    var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
    optionsNivel.forEach(o => o.remove());
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
            console.log(respuesta);
            respuesta['response'].forEach(function(word){
                $("#tipoEspacio").append('<option value="'+ word['codvar'] +'" selected>'+ word['desvar1'] +'</option>'); 
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
});

//--------------------------llena select Nivel------------------------

var codEspacio = document.getElementById("espacio");
codEspacio.addEventListener("change",function(){
    var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
    optionsNivel.forEach(o => o.remove());
    codCamposanto = document.getElementById("camposanto").value;
    codPlataforma = document.getElementById("nombrePlat").value;
    codArea = document.getElementById("nombreArea").value;
    ejeX = document.getElementById("ejeX").value;
    ejeY = document.getElementById("ejeY").value;
    espacio = document.getElementById("espacio").value;
    tipoEspacio = document.getElementById("tipoEspacio").value;
    var codConsejero = document.getElementById("codConsejeroVend").value;

     //----------valida si esta separado por otro vendedor----------
    // if (cod_prospecto == ''){
        $.ajax({
            url: '../lista/ValidaEspacio', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX,'ejeY':ejeY,'espacio':espacio,'tipo':tipoEspacio,'cod_trabajador': codConsejero},
            success: function(respuesta){ 
     
                if(respuesta['response']['flg_acceso'] == 'SI' || (respuesta['response']['flg_acceso'] == 'NO' && (flg_supervisor == 'SI' || flg_jefe == 'SI' || flg_firmante == 'SI' || flg_administrador == 'SI'))){
                    validaSepa = 'SI';
                    document.getElementById("registrarVenta").removeAttribute('disabled');
                    document.getElementById("imp_separacion").value = Number(respuesta['response']['imp_valor']).toFixed(2);

                    $.ajax({
                        url: '../lista/MuestraNivel', 
                        method: "GET",
                        crossDomain: true,
                        dataType: 'json',
                        data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX,'ejeY':ejeY,'espacio':espacio},
                        success: function(respuesta){
                            $("#nivelRegVnta").append('<option value="" selected disabled>SELECCIONE...</option>');
                            respuesta['response'].forEach(function(word){
                                seleccion = '';
                                $("#nivelRegVnta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                            });
                        },//success
                        error(e){
                            console.log(e.message);
                        }//error
                    });
                    
                }else if(respuesta['response']['flg_acceso'] == 'NO' && (flg_supervisor == 'NO' || flg_jefe == 'NO' || flg_firmante == 'NO' || flg_administrador == 'NO')){
                    validaSepa = 'NO';
                    document.getElementById("espacio").value = '';
                    document.getElementById("registrarVenta").setAttribute('disabled','disabled')
                    document.getElementById("imp_separacion").value = Number(respuesta['response']['imp_valor']).toFixed(2);
                    Swal.fire({
                        title:'Error!',
                        text:'El espacio está bloqueado por otro consejero. Por favor elija otro espacio',
                        icon:'warning',
                        confirmButtonColor: '#6ea63b',
                    })
                }else{
                    validaSepa = 'NO';
                    document.getElementById("registrarVenta").setAttribute('disabled','disabled')
                    document.getElementById("espacio").value = '';
                    Swal.fire({
                        title:'Error!',
                        text:'Ha ocurrido un error: '+respuesta['mensaje'],
                        icon:'error',
                        confirmButtonColor: '#6ea63b',
                    })
                }
                
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    
    //----------valida si es nicho familiar----------

        // var subtipoServ = document.getElementById('subtipoServ');
        // var esNichoFam = $('option:selected', subtipoServ).attr('esnichofam');
        var esNichoFam = document.getElementById('esNichoEsp').value;
        var subtipo = document.getElementById('subtipoServ').value;
        // alert(esNichoFam);

        if (esNichoFam == 'SI') {
            document.getElementById('tablaNichos').style.display = "block";
            cargarTablaNicho(codCamposanto,codPlataforma,codArea,ejeX,ejeY,espacio,tipoEspacio,subtipo);
        }else{
            document.getElementById('tablaNichos').style.display = "none";
            document.getElementById('nichoOcupado').value = 'NO';
        }
    // }else{
    //     $.ajax({
    //         url: '../lista/MuestraNivel', 
    //         method: "GET",
    //         crossDomain: true,
    //         dataType: 'json',
    //         data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX,'ejeY':ejeY,'espacio':espacio},
    //         success: function(respuesta){
    //             $("#nivelRegVnta").append('<option value="" selected disabled>SELECCIONE...</option>');
    //             respuesta['response'].forEach(function(word){
    //                 seleccion = '';
    //                 $("#nivelRegVnta").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
    //             });
    //         },//success
    //         error(e){
    //             console.log(e.message);
    //         }//error
    //     });
    // }
});

var filasNichos = [];

function cargarTablaNicho(codCamposanto,codPlataforma,codArea,ejeX,ejeY,espacio,tipoEspacio,subtipo) {
    
    $.ajax({
        url: '../lista/ConsultarNicho', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX,'ejeY':ejeY,'espacio':espacio,'tipo':tipoEspacio,'subtipo':subtipo},
        success: function(respuesta){
            filasNichos = respuesta['response'];
            $("#tablaNichosFam tbody").empty();
            var hayOcupado = 0;
            if (Array.isArray(respuesta['response'])) {
                // Itera si es un array
                respuesta['response'].forEach(function(word) {
                    var estadoClass = word['dsc_estado'] === 'LIBRE' ? 'text-success' : 'text-danger';
                    if (word['flg_estado'] !== 'LI') {
                        hayOcupado++;
                    }
                    var nuevaFila = '<tr>'+
                            '<td>'+word['dsc_area']+'</td>'+
                            '<td>'+word['cod_eje_h']+'</td>'+
                            '<td>'+word['cod_eje_v']+'</td>'+
                            '<td>'+word['cod_espacio']+'</td>'+
                            '<td class="'+estadoClass+'">'+word['dsc_estado']+'</td>'+
                        '</tr>';
                    $("#tablaNichosFam tbody").append(nuevaFila);
                });
            } else {
                // Procesa como un único objeto
                var estadoClass = respuesta['response']['dsc_estado'] === 'LIBRE' ? 'text-success' : 'text-danger';
                if (respuesta['response']['flg_estado'] !== 'LI') {
                    hayOcupado++;
                }
                var nuevaFila = '<tr>'+
                            '<td>'+respuesta['response']['dsc_area']+'</td>'+
                            '<td>'+respuesta['response']['cod_eje_h']+'</td>'+
                            '<td>'+respuesta['response']['cod_eje_v']+'</td>'+
                            '<td>'+respuesta['response']['cod_espacio']+'</td>'+
                            '<td class="'+estadoClass+'">'+respuesta['response']['dsc_estado']+'</td>'+
                        '</tr>';
                $("#tablaNichosFam tbody").append(nuevaFila);
            }
            
            if (hayOcupado > 0) {
                document.getElementById('nichoOcupado').value = 'SI';
            }else{
                document.getElementById('nichoOcupado').value = 'NO';
            }
        },
        error: function (xhr, status, error) {
            console.error('Error al cargar datos:', error);
        }
    });
}

//-----------------muestra select Subtipo servicio-----------
var codcampo = document.getElementById("btnAddServicio");
codcampo.addEventListener("click",function(){
    if ($.fn.dataTable.isDataTable('#tablaServicios')) {
        $('#tablaServicios').DataTable().clear();
        $('#tablaServicios').DataTable().destroy();        
    }
    codCamposanto = document.getElementById("camposanto").value;
    codPlataforma = document.getElementById("nombrePlat").value;
    cod_tipo_recaudacion = document.getElementById("tipoPrograma").value;
    var tipoProgramaSelect = document.getElementById('tipoPrograma');
    var selectedOptionTrec = tipoProgramaSelect.options[tipoProgramaSelect.selectedIndex];
    var integralValue = selectedOptionTrec.getAttribute('integral');
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
        data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_tipo_recaudacion': cod_tipo_recaudacion,'cod_subtipo_servicio':cod_subtipo_servicio,'sintegral':integralValue,'tipo_nec':tipo_nec},
        success: function(respuesta){
            //console.log(respuesta['response']);
            respuesta['response'].forEach(element => {
                //console.log(element);
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
                addBoton.classList.add('form-remanso');
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
                
            });//forEach

            $('#tablaServicios').DataTable({
                paging: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                },
                dom: 'ftrp',
                processing: true,
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

});

//---------------------llena tabla servicios--------------------------

// Variable global para almacenar los servicios agregados
var serviciosAgregados = [];
var fomaTotal = 0;

function muestraserviciosFormulario(datos) {
   // console.log(datos);

    if (document.getElementById("tieneDS").value == 'SI' && datos['flg_dsepultura'] == 'SI') {
        Swal.fire({
            title:'Error!',
            text:'Ya ha seleccionado un derecho de sepultura.',
            icon:'warning',
            confirmButtonColor: '#35B44A',
        })
        return;
    }

    var flgAdicional = datos['flg_sadicional'];
    
    var tabla = document.getElementById('tablaServiciosAdded');
    var tbody = tabla.getElementsByTagName('tbody')[0];
    // while (tbody.firstChild) {
    //     tbody.removeChild(tbody.firstChild);
    // }
    
    var nuevaFilaServ = tbody.insertRow();

    var codigoCelda = nuevaFilaServ.insertCell();
    codigoCelda.textContent = datos['cod_servicio']+' '+datos['dsc_servicio'];
    codigoCelda.classList.add('justificado');

    var cantidadCelda = nuevaFilaServ.insertCell();
    var cantInput = document.createElement('input');
    cantInput.setAttribute('style', 'width: 3em;');
    cantInput.type = 'number';
    cantInput.setAttribute('min', '1');
    if(flgAdicional != 'SI'){
        cantInput.setAttribute('disabled','disabled');
    }
    var valorCant = (datos['num_ctd']) ? datos['num_ctd'] : 1;
    cantInput.value = valorCant;

    cantidadCelda.appendChild(cantInput);

    var impListaCelda = nuevaFilaServ.insertCell();
    impListaCelda.textContent = datos['imp_precio_lista'];

    var precioCelda = nuevaFilaServ.insertCell();
    precioCelda.textContent = datos['imp_precio'];

    var descuentoPorcCelda = nuevaFilaServ.insertCell();
    var dsctoPorcInput = document.createElement('input');
    dsctoPorcInput.type = 'number';
    dsctoPorcInput.setAttribute('style', 'width: 3em;');
    dsctoPorcInput.setAttribute('max', '99');
    dsctoPorcInput.setAttribute('min', '0');
    var valorPorc = (datos['por_descuento']) ? datos['por_descuento'] : 0;
    //console.log(datos['por_descuento']);
    dsctoPorcInput.value =  valorPorc;  
    
    descuentoPorcCelda.appendChild(dsctoPorcInput);
    descuentoPorcCelda.setAttribute('style', 'border-left: 1px solid;');


    var descuentoCelda = nuevaFilaServ.insertCell();
    var desCalculado = (valorPorc*parseFloat(datos['imp_precio']))/100;
    descuentoCelda.textContent = desCalculado.toFixed(2);
    descuentoCelda.setAttribute('style', 'border-right: 1px solid;');

    var dsctoLibreCelda = nuevaFilaServ.insertCell();
    var dsctoLibreInput = document.createElement('input');
    dsctoLibreInput.type = 'number';
    dsctoLibreInput.setAttribute('style', 'width: 5em;');
    dsctoLibreInput.setAttribute('min', '0');
    var valorLibre = (datos['imp_descuento_adicional']) ? datos['imp_descuento_adicional'] : 0;
    dsctoLibreInput.value = valorLibre;

    dsctoLibreCelda.appendChild(dsctoLibreInput);

    
    //------caja descuento
    // var nombreInput = document.createElement('input');
    // nombreInput.type = 'number';
    // nombreInput.value = 0;

    var saldo = datos['imp_precio']-valorLibre-desCalculado;
    cuoi = datos['imp_precio_cuoi'];
        
    //descuentoCelda.appendChild(nombreInput);

    var precioFinalCelda = nuevaFilaServ.insertCell();
    precioFinalCelda.textContent = saldo.toFixed(2);

    var cuoIniCelda = nuevaFilaServ.insertCell();
    var cuoIniInput = document.createElement('input');
    cuoIniInput.type = 'number';
    cuoIniInput.setAttribute('min', '0');
    cuoIniInput.setAttribute('style', 'width: 5em;');
    cuoIniInput.classList.add('inputCUOI');
    var valorCUOI = '';
    if(flgAdicional == 'SI'){
        valorCUOI = datos['imp_precio'];
    }else{
        valorCUOI = (datos['imp_precio_cuoi']) ? datos['imp_precio_cuoi'] : 0;
    } 
    cuoIniInput.value = valorCUOI;

    cuoIniCelda.appendChild(cuoIniInput);

    
    var precioFinal1Celda = nuevaFilaServ.insertCell();
    precioFinal1Celda.textContent = (saldo-valorCUOI).toFixed(2);

    var btnEliminarCelda = nuevaFilaServ.insertCell();
    var btnEliminarInput = document.createElement('button');
    btnEliminarInput.type = 'button';
    btnEliminarInput.classList.add('btn');
    btnEliminarInput.classList.add('btn-danger');
    btnEliminarInput.classList.add('form-remanso');
    btnEliminarInput.setAttribute('onclick','eliminarFilaServicios('+nuevaFilaServ.rowIndex+')');
    btnEliminarInput.innerHTML = '<span class="bi bi-x-lg"></span>';
    btnEliminarInput.setAttribute('title', 'Eliminar servicio');

    btnEliminarCelda.appendChild(btnEliminarInput);

    var changeEvent = new Event('input');
    var changeEvent2 = new Event('change'); 
    inputCOUI = document.getElementById('impCuoi');

    // nombreInput.addEventListener('input', function() {
    //     calculaSaldo(cantInput.value,nombreInput.value,datos['imp_precio']);
    //     document.getElementById("impCuoi").value=datos['imp_precio_cuoi'];
    //     inputCOUI.dispatchEvent(changeEvent);

    //  });

    cantInput.addEventListener('input', function() {
        precio = parseFloat(datos['imp_precio']);
        calculaSaldo(cantInput.value,dsctoLibreInput.value,dsctoPorcInput.value,datos['imp_precio']);
        // document.getElementById("impCuoi").value = Number(datos['imp_precio_cuoi']).toFixed(2);
        cuoIniInput.dispatchEvent(changeEvent);
        serviciosAgregados[(nuevaFilaServ.rowIndex)-1]['num_ctd'] = cantInput.value;
        recalcularSuma();
    });

    var inputNumCuotas=document.getElementById("codCuotaServ") ;
    var inputInteres=document.getElementById("codTasa") ;

    dsctoPorcInput.addEventListener('input', function() {
        if(dsctoPorcInput.value > 100){
            dsctoPorcInput.value = 100;
        }
        precio = parseFloat(datos['imp_precio']);
        calculaSaldo(cantInput.value,dsctoLibreInput.value,dsctoPorcInput.value,precio);
        // document.getElementById("impCuoi").value=Number(datos['imp_precio_cuoi']).toFixed(2);
        cuoIniInput.dispatchEvent(changeEvent);

        serviciosAgregados[(nuevaFilaServ.rowIndex)-1]['por_descuento'] = dsctoPorcInput.value;
        recalcularSuma();
        inputNumCuotas.dispatchEvent(changeEvent2);
        inputInteres.dispatchEvent(changeEvent2);
    });

    dsctoLibreInput.addEventListener('input', function() {
        calculaSaldo(cantInput.value,dsctoLibreInput.value,dsctoPorcInput.value,datos['imp_precio']);
        // document.getElementById("impCuoi").value=Number(datos['imp_precio_cuoi']).toFixed(2);
        cuoIniInput.dispatchEvent(changeEvent);
        serviciosAgregados[(nuevaFilaServ.rowIndex)-1]['imp_descuento_adicional'] = dsctoLibreInput.value;
        recalcularSuma();

        inputNumCuotas.dispatchEvent(changeEvent2);
        inputInteres.dispatchEvent(changeEvent2);
    });
    
    document.getElementById("tieneDS").value=datos['flg_dsepultura'];
    //document.getElementById("impCuoi").value=Number(datos['imp_precio_cuoi']).toFixed(2);
    //console.log('fomaTotal',fomaTotal);
    fomaTotal = parseInt(fomaTotal)+parseFloat(datos['imp_precio_foma'])
    document.getElementById("impFoma").value=fomaTotal.toFixed(2);  
    //console.log('fomaTcalculootal',parseInt(fomaTotal)+parseFloat(datos['imp_precio_foma']));  
    document.getElementById("codServicio").value=datos['cod_servicio'];
    document.getElementById("esCompartido").value=datos['flg_ds_compartido'];
    document.getElementById("impPrecioLista").value=Number(datos['imp_precio_lista']).toFixed(2);
    //document.getElementById("impMinCuoi").value=Number(datos['imp_min_cuoi']).toFixed(2);
    
    cuoIniInput.addEventListener('input', function() {
        var nvoSaldo = saldo-cuoIniInput.value;
        precioFinal1Celda.textContent = nvoSaldo.toFixed(2);
        serviciosAgregados[(nuevaFilaServ.rowIndex)-1]['imp_cui'] = cuoIniInput.value;
        serviciosAgregados[(nuevaFilaServ.rowIndex)-1]['imp_saldo'] = nvoSaldo;
        recalcularSuma();
        
        inputNumCuotas.dispatchEvent(changeEvent2);
        inputInteres.dispatchEvent(changeEvent2);
    });

    function calculaSaldo(ctd,dsctoLibre,dsctoPorc,precio) {
        precio = parseFloat(precio);
        ctd = parseInt(ctd);
        dsctoPorc = parseFloat(dsctoPorc);
        dsctoLibre = parseFloat(dsctoLibre);
        if(ctd < 1){
            ctd = 1;
        }
        if(dsctoLibre =='' || dsctoLibre == null){
            dsctoLibre=0;
        }
        if(dsctoPorc =='' || dsctoPorc == null){
            dsctoPorc=0;
        }
        var porc = (precio*dsctoPorc)/100;
        dscto = dsctoLibre+porc;
        saldo = (ctd*precio)-dscto;
        if(saldo < 0){
            dscto = 0;
            dsctoLibreInput.value = 0;
            saldo = (ctd*precio)-porc;
        }

        precioFinalCelda.textContent = saldo.toFixed(2);
        descuentoCelda.textContent = porc.toFixed(2);
       // document.getElementById("impDscto").value=Number(dscto-dsctoLibre).toFixed(2);
        serviciosAgregados[(nuevaFilaServ.rowIndex)-1]['imp_dscto'] = dscto-dsctoLibre;
        serviciosAgregados[(nuevaFilaServ.rowIndex)-1]['imp_cui'] = cuoIniInput.value;
        serviciosAgregados[(nuevaFilaServ.rowIndex)-1]['imp_saldo'] = precioFinal1Celda.textContent;
        document.getElementById("impDsctoAdicional").value=Number(dsctoLibre).toFixed(2);
        document.getElementById("pordescuento").value=dsctoPorc;
        //document.getElementById("impSaldo").value=Number(saldo).toFixed(2);
        document.getElementById("ctdServ").value=ctd;
        //document.getElementById("impTotal").value=Number(saldo).toFixed(2);  
    }
    
    //document.getElementById("impSaldo").value=Number(saldo-cuoi).toFixed(2);
    if(Number(saldo-cuoi) == 0){
        document.getElementById("codCuotaServ").setAttribute('disabled','disabled');
        document.getElementById("codTasa").setAttribute('disabled','disabled');
        document.getElementById("fch1erVcto").setAttribute('disabled','disabled');
        // document.getElementById("fch1erVcto").value = today;
        var today = new Date();
        flatpickr("#fch1erVcto",{
            locale:"es",
            altInput: true,
            altFormat: "d/m/Y",
            dateFormat: "Y-m-d",
            defaultDate:today
        });
    }else{
        document.getElementById("codCuotaServ").removeAttribute('disabled');
        document.getElementById("codTasa").removeAttribute('disabled');
        document.getElementById("fch1erVcto").removeAttribute('disabled');
        flatpickr("#fch1erVcto",{
            locale:"es",
            altInput: true,
            altFormat: "d/m/Y",
            dateFormat: "Y-m-d",
            // defaultDate:fechaMasUnMes
        });
        document.getElementById("fch1erVcto").removeAttribute('readonly');
    }

    recalcularSuma();
    datosXserv = {
        'cod_localidad_p': 'LC001',
        'cod_prospecto': (datos['cod_prospecto']) ? datos['cod_prospecto'] : '',
        'num_linea': (datos['num_linea']) ? datos['num_linea'] : 0,
        'cod_servicio': datos['cod_servicio'],
        'num_ctd': (datos['num_ctd']) ? datos['num_ctd'] : 1,
        'imp_precio_lista': datos['imp_precio_lista'],
        'imp_precio_venta': datos['imp_precio'],
        'imp_dscto': (datos['imp_dscto']) ? datos['imp_dscto'] : 0,
        'imp_total': (datos['imp_total']) ? datos['imp_total'] : 0,
        'imp_foma': (datos['imp_precio_foma']) ? datos['imp_precio_foma'] : 0,
        'imp_cui': cuoIniInput.value,
        'imp_saldo': precioFinal1Celda.textContent,
        'cod_localidad_base':  '',
        'cod_contrato_base':  '',
        'num_servicio_base': '',
        'cod_cuota_foma': '',
        'cod_cuota_servicio': '',
        'cod_tasa': '',
        'fch_1er_vencimiento': '',
        'por_descuento': (datos['por_descuento']) ? datos['por_descuento'] : 0,
        'imp_descuento_adicional': (datos['imp_descuento_adicional']) ? datos['imp_descuento_adicional'] : 0, //validar como string
        'imp_cui_minimo':datos['imp_min_cuoi']
    };
    inputInteres.dispatchEvent(changeEvent2);
    serviciosAgregados.push(datosXserv);

}

function recalcularSuma() {
    let sumaTotal = 0;
    let sumaCuoi = 0;
    let sumaSaldo = 0;
    const tabla = document.getElementById('tablaServiciosAdded');
    const tbody = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    const inputsCuoi = tabla.getElementsByClassName('inputCUOI');

    for (let i = 0; i < tbody.length; i++) {
      const precioFinalCelda = tbody[i].getElementsByTagName('td')[7].textContent;
      sumaTotal += parseFloat(precioFinalCelda);

      const valorInput = parseFloat(inputsCuoi[i].value);
        if (!isNaN(valorInput)) {
            sumaCuoi += valorInput;
        }
      
      const precioFinalSaldo = tbody[i].getElementsByTagName('td')[9].textContent;
      sumaSaldo += parseFloat(precioFinalSaldo);
    }
    document.getElementById('sumTotal').textContent = sumaTotal.toFixed(2);
    document.getElementById("impTotal").value=Number(sumaTotal).toFixed(2); 
    document.getElementById('sumCuoi').textContent = sumaCuoi.toFixed(2);
    var CuotaInicialInput = document.getElementById("impCuoi");
    CuotaInicialInput.value=Number(sumaCuoi).toFixed(2);
    var changeEvent = new Event('input');
    CuotaInicialInput.dispatchEvent(changeEvent);
    document.getElementById('sumSaldo').textContent = sumaSaldo.toFixed(2);
    document.getElementById("impSaldo").value=Number(sumaSaldo).toFixed(2);
}

function eliminarFilaServicios(index) {

    Swal.fire({
    title: 'Esta seguro que quiere Eliminar el servicio?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#35B44A',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
           
            if (serviciosAgregados[index-1]['num_linea'] != 0) {
                codProsp = serviciosAgregados[index-1]['cod_prospecto'];
                numlinea = serviciosAgregados[index-1]['num_linea'];
                fomaLinea = serviciosAgregados[index-1]['imp_foma'];

                fomaTotal = fomaTotal-parseFloat(fomaLinea);
                document.getElementById("impFoma").value = fomaTotal.toFixed(2);
                
                $.ajax({
                    url: '../api/EliminarServicio', 
                    method: "DELETE",
                    crossDomain: true,
                    dataType: 'json',
                    data:{'cod_prospecto': codProsp,'num_linea':numlinea},
                    success: function(respuesta){
                        console.log(respuesta);   
                    },//success
                    error(e){
                        console.log(e.message);
                    }//error
                });
            }

            const table = document.getElementById('tablaServiciosAdded');
            const tbody = table.getElementsByTagName('tbody')[0];
            var fila = tbody.rows[index-1];
            tbody.removeChild(fila);

            fomaLinea = serviciosAgregados[index-1]['imp_foma'];
            fomaTotal = fomaTotal-parseFloat(fomaLinea);
            document.getElementById("impFoma").value = fomaTotal.toFixed(2);

            serviciosAgregados.splice(index-1, 1); // Eliminar el valor del array en la posición index

            var inputIntegral = document.getElementById("tieneDS");
            if(inputIntegral.value == "SI"){
                inputIntegral.value = "NO";
            }
            recalcularSuma();
            var CuotaInicialInput = document.getElementById("impCuoi");
            var changeEvent = new Event('input');
            CuotaInicialInput.dispatchEvent(changeEvent);
        }
    })//then

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
        document.getElementById("impCuoi").value = Number(total).toFixed(2);
    }else{
        saldo = total - cuoi;
    }
    //document.getElementById("impSaldo").value=Number(saldo).toFixed(2);
    if(saldo == 0){
        document.getElementById("codCuotaServ").setAttribute('disabled','disabled');
        document.getElementById("codTasa").setAttribute('disabled','disabled');
        document.getElementById("fch1erVcto").setAttribute('disabled','disabled');
        // document.getElementById("fch1erVcto").value = today;
        var today = new Date();
        flatpickr("#fch1erVcto",{
            locale:"es",
            altInput: true,
            altFormat: "d/m/Y",
            dateFormat: "Y-m-d",
            defaultDate:today
        });
    }else{
        document.getElementById("codCuotaServ").removeAttribute('disabled');
        document.getElementById("codTasa").removeAttribute('disabled');
        document.getElementById("fch1erVcto").removeAttribute('disabled');
        flatpickr("#fch1erVcto",{
            locale:"es",
            altInput: true,
            altFormat: "d/m/Y",
            dateFormat: "Y-m-d",
            // defaultDate:fechaMasUnMes
        });
        document.getElementById("fch1erVcto").setAttribute('enabled','enabled');
    }
});

campoCuoi.addEventListener("change",function(){
    var minCuoiInput = document.getElementById("impMinCuoi").value;
    var cuoi = parseFloat(this.value);
    var minCuoi = parseFloat(minCuoiInput);
    if(cuoi < minCuoi || cuoi == null || cuoi == ''){
        document.getElementById("impCuoi").value = Number(minCuoi).toFixed(2);
        var changeEvent = new Event('input');
        campoCuoi.dispatchEvent(changeEvent);
    }
});
  
  

var btnAbreModalBenef = document.getElementById("abreModalBenef");
btnAbreModalBenef.addEventListener("click",function (){

    document.getElementById("btnUpdBeneficiario").setAttribute("hidden", "true");
    document.getElementById("agregaBeneficiario").removeAttribute("hidden");
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


var selectComprobante = document.getElementById("compVtaRegVta");
selectComprobante.addEventListener("change",function (){
    if (selectComprobante.value == 'TC001') {
        document.getElementById("rucCompVtaRegVta").setAttribute('disabled', 'disabled');
        document.getElementById("rucCompVtaRegVta").value = '';
        document.getElementById("razSocCompVtaRegVta").setAttribute('disabled', 'disabled');
        document.getElementById("razSocCompVtaRegVta").value = '';
    }else{
        document.getElementById("rucCompVtaRegVta").removeAttribute('disabled');
        document.getElementById("razSocCompVtaRegVta").removeAttribute('disabled');
    }
});

function limpiaTablaServicio() {
    //----------------borra tabla servicios-------------------
    var tabla = document.getElementById('tablaServiciosAdded');
    var tbody = tabla.getElementsByTagName('tbody')[0];
    while (tbody.firstChild) {
        tbody.removeChild(tbody.firstChild);
    }

    //-----------------borra array para guardar servicios------
    serviciosAgregados = [];
    recalcularSuma();

}


