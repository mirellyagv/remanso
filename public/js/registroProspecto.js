$("#tipoDocProsp").change(function(){
    if(this.value == 'DI004'){
        $("#nombre").css("display", "none");
        $("#razonSoc").css("display", "block");
    }else{
        $("#nombre").css("display", "block");
        $("#razonSoc").css("display", "none");
    }
    
});

var tipoDoc2 = document.getElementById("tipoDoc2tit");
tipoDoc2.addEventListener("change",function (){
    if(this.value == 'DI004'){
        $("#cajaNombre2Tit").css("display", "none");
        $("#cajaRazonSoc2Tit").css("display", "block");
    }else{
        $("#cajaNombre2Tit").css("display", "block");
        $("#cajaRazonSoc2Tit").css("display", "none");
    }
    
});

//-----------------muestra select pais-----------

$( document ).ready(function() {
  var pais1 = $(paisProspecto).val();
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
                $("#paisProspecto").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                $("#pais2Tit").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

});

//-----------------muestra select Departamento-----------
$( document ).ready(function() {
  codPais1 = document.getElementById("paisProspecto").value;
  $.ajax({
        url: '../lista/MuestraDpto', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
      data:{'cod_pais':'00001'},
        success: function(respuesta){
            $("#dptoProsp").append('<option value="" selected disabled>SELECCIONE...</option>');
            $("#dpto2Tit").append('<option value="" selected disabled>SELECCIONE...</option>');
          respuesta['response'].forEach(function(word){
            seleccion = '';
            $("#dptoProsp").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            $("#dpto2Tit").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
          });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

});

//-----------------muestra select Provincia-----------
var coddptto = document.getElementById("dptoProsp");
coddptto.addEventListener("change",function (){
    codPais2 = document.getElementById("paisProspecto").value;
    var valor = document.getElementById("dptoProsp").value;
    var options = document.querySelectorAll('#provinProsp option');
        options.forEach(o => o.remove());

    $.ajax({
        url: '../lista/MuestraProvincia', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_pais':codPais2,'cod_departamento':valor},
        success: function(respuesta){     
            $("#provinProsp").append('<option value="" selected disabled>SELECCIONE...</option>');  
            respuesta['response'].forEach(function(word){
            $("#provinProsp").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
          });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
});

var coddptto2 = document.getElementById("dpto2Tit");
coddptto2.addEventListener("change",function (){
    codPais2 = document.getElementById("pais2Tit").value;
    var valor = document.getElementById("dpto2Tit").value;
    var options = document.querySelectorAll('#prov2Tit option');
        options.forEach(o => o.remove());

    $.ajax({
        url: '../lista/MuestraProvincia', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_pais':codPais2,'cod_departamento':valor},
        success: function(respuesta){     
            $("#prov2Tit").append('<option value="" selected disabled>SELECCIONE...</option>');  
            respuesta['response'].forEach(function(word){
            $("#prov2Tit").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
          });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
});

//-----------------muestra select Distrito-----------
var coddptto = document.getElementById("provinProsp");

coddptto.addEventListener("change",function(){
  codPais1 = document.getElementById("paisProspecto").value;
  coddptto1 = document.getElementById("dptoProsp").value;
  codprov1 = document.getElementById("provinProsp").value;

  var options = document.querySelectorAll('#dttoProsp option');
    options.forEach(o => o.remove());

  $.ajax({
        url: '../lista/MuestraDtto', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_pais':codPais1,'cod_departamento':coddptto1,'cod_provincia':codprov1},
        success: function(respuesta){
            $("#dttoProsp").append('<option value="" selected disabled>SELECCIONE...</option>'); 
          respuesta['response'].forEach(function(word){
            //console.log(word);
            seleccion = '';
            $("#dttoProsp").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>');  
          });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

});

var coddptto = document.getElementById("prov2Tit");

coddptto.addEventListener("change",function(){
  codPais1 = document.getElementById("pais2Tit").value;
  coddptto1 = document.getElementById("dpto2Tit").value;
  codprov1 = document.getElementById("prov2Tit").value;

  var options = document.querySelectorAll('#dtto2Tit option');
    options.forEach(o => o.remove());

  $.ajax({
        url: '../lista/MuestraDtto', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_pais':codPais1,'cod_departamento':coddptto1,'cod_provincia':codprov1},
        success: function(respuesta){
            $("#dtto2Tit").append('<option value="" selected disabled>SELECCIONE...</option>'); 
          respuesta['response'].forEach(function(word){
            //console.log(word);
            seleccion = '';
            $("#dtto2Tit").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
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
              $("#tipoDocProsp").append('<option value="" selected disabled>SELECCIONE...</option>');
              $("#tipoDoc2tit").append('<option value="" selected disabled>SELECCIONE...</option>');
            //   $("#tipoDocAddBenef").append('<option value="" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
              seleccion = '';
              $("#tipoDocProsp").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
              $("#tipoDoc2tit").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            //   $("#tipoDocAddBenef").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>');
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
  
  //-----------------muestra select canal-----------
$( document ).ready(function() {
    $.ajax({
          url: '../lista/MuestraCanal', 
          method: "GET",
          crossDomain: true,
          dataType: 'json',
          success: function(respuesta){
              $("#canalProsp").append('<option value="" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
              seleccion = '';
              $("#canalProsp").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
          },//success
          error(e){
              console.log(e.message);
          }//error
      });
  
  });

    //-----------------muestra select calificacion-----------
$( document ).ready(function() {
    $.ajax({
          url: '../lista/MuestraCalificacion', 
          method: "GET",
          crossDomain: true,
          dataType: 'json',
          success: function(respuesta){
              $("#califProsp").append('<option value="" selected disabled>SELECCIONE...</option>');
              $("#califAddContacto").append('<option value="" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
              seleccion = '';
              $("#califProsp").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>');
              $("#califAddContacto").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
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
    
    var editarBoton = document.createElement('button');
    editarBoton.classList.add('btn');
    editarBoton.classList.add('btn-success');
    editarBoton.classList.add('BtnverdeRemanso');
    editarBoton.innerHTML  = '<span class="bi bi-pencil"></span>';
    editarBoton.id = 'botonEditar' + nuevaFila.rowIndex;
    
    var eliminarBoton = document.createElement('button');
    eliminarBoton.classList.add('btn');
    eliminarBoton.classList.add('btn-danger');
    eliminarBoton.innerHTML  = '<span class="bi bi-x-lg"></span>';
    eliminarBoton.id = 'botonEliminar' + nuevaFila.rowIndex;
    
    accionesDiv.appendChild(editarBoton);
    accionesDiv.appendChild(eliminarBoton);
    
    accionesCelda.appendChild(accionesDiv);

    editarBoton.addEventListener('click', function() {
      var filaIndex = this.id.replace('botonEditar', ''); // Obtiene el índice de la fila desde el ID del botón
      editarFila(filaIndex);
    });
    
    eliminarBoton.addEventListener('click', function() {
      var filaIndex = this.id.replace('botonEliminar', ''); // Obtiene el índice de la fila desde el ID del botón
      eliminarFila(filaIndex);
    });

    var today = new Date();
    // obtener la fecha de hoy en formato `MM/DD/YYYY`
    var dia = today.toLocaleDateString('en-US');

    var filaData = {
      cod_localidad_p: 'LC001',
      cod_prospecto: 'PVT0034978',
      num_linea: '0',
      cod_tipo_documento: codtipoDoc,
      dsc_documento: dscDoc,
      dsc_apellido_paterno: apellP,
      dsc_apellido_materno: apellM,
      dsc_nombres: nombre,
      fch_nacimiento: '2023-02-01',
      cod_estado_civil: codEdoCivil,
      cod_sexo: sexo,
      cod_parentesco: codParentesco
    };
    
    filasArray.push(filaData); // Agregar la fila al array
    console.log(filasArray);

});

function editarFila(index) {
  // Lógica para editar la fila específica
  console.log('Editar fila:', index);
}

function eliminarFila(index) {
  var tabla = document.getElementById('tablaBeneficiarios');
  var tbody = tabla.getElementsByTagName('tbody')[0];
  var fila = tbody.rows[index-1];
  tbody.removeChild(fila);
  filasArray.splice(index-1, 1); // Eliminar el valor del array en la posición index
  console.log(filasArray);

}

