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

var verifPais = document.getElementById("paisProspecto");
verifPais.addEventListener("change",function (){
  if (verifPais.value != '00001') {
    document.getElementById("dptoProsp").value = '';
    document.getElementById("dptoProsp").setAttribute('disabled', 'disabled');
    document.getElementById("provinProsp").value = '';
    document.getElementById("provinProsp").setAttribute('disabled', 'disabled');
    document.getElementById("dttoProsp").value = '';
    document.getElementById("dttoProsp").setAttribute('disabled', 'disabled');
  }else{
    document.getElementById("dptoProsp").removeAttribute('disabled');
    document.getElementById("provinProsp").removeAttribute('disabled');
    document.getElementById("dttoProsp").removeAttribute('disabled');
  }

});

var verifPais2 = document.getElementById("pais2Tit");
verifPais2.addEventListener("change",function (){
  if (verifPais2.value != '00001') {
    document.getElementById("dpto2Tit").value = '';
    document.getElementById("dpto2Tit").setAttribute('disabled', 'disabled');
    document.getElementById("prov2Tit").value = '';
    document.getElementById("prov2Tit").setAttribute('disabled', 'disabled');
    document.getElementById("dtto2Tit").value = '';
    document.getElementById("dtto2Tit").setAttribute('disabled', 'disabled');
  }else{
    document.getElementById("dpto2Tit").removeAttribute('disabled');
    document.getElementById("prov2Tit").removeAttribute('disabled');
    document.getElementById("dtto2Tit").removeAttribute('disabled');
  }

});

//-----------------muestra select Departamento-----------
$( document ).ready(function() {

  //---------------------------departamento-------------------------

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
              $("#tipoDocProsp").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>');
              $("#tipoDoc2tit").append('<option value="'+ word['codvar'] +'" '+seleccion+' data ="'+ word['desvar2'] +'">'+ word['desvar1'] +'</option>');
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

var filasArrayBenef = []; // Array para almacenar las filas

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
        document.getElementById('btnUpdContacto').removeAttribute('hidden');
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

    filasArrayBenef.push(filaData); // Agregar la fila al array

});

function editarFila(filaIndex) {
  // Obtener la fila correspondiente al índice
  var tabla = document.getElementById('tablaObsv');
  var fila = tabla.rows[filaIndex];

  // Obtener los elementos HTML dentro de la fila
  var fechaCelda = fila.cells[0];
  var califCelda = fila.cells[1];
  var obsvCelda = fila.cells[2];

  // Obtener los valores actuales de la fila
  var fechaActual = fechaCelda.textContent;
  var califActual = califCelda.textContent;
  var obsvActual = obsvCelda.textContent;

  // Mostrar los valores actuales en el modal de edición
  document.getElementById('fchContacto').value = fechaActual;
    var selectElement = document.getElementById('califAddContacto'); // Establecer la opción seleccionada en el select
    for (var i = 0; i < selectElement.options.length; i++) {
        if (selectElement.options[i].text === califActual) {
            selectElement.selectedIndex = i;
            break;
        }
    }
  document.getElementById('obsvAddContacto').value = obsvActual;

  // Abrir el modal de edición
  var modal = new bootstrap.Modal(document.getElementById('ModalRegistro'));
  modal.show();

  // Guardar los cambios al hacer clic en el botón de Aceptar del modal
  var aceptarBtn = document.querySelector('#ModalRegistro .btn-primary');
  aceptarBtn.addEventListener('click', function() {
    // Obtener los nuevos valores del modal
    var nuevaFecha = document.getElementById('fchContacto').value;
    var nuevaCalif = document.getElementById('califAddContacto').value;
    var nuevaObsv = document.getElementById('obsvAddContacto').value;

    // Actualizar los valores en la fila
    fechaCelda.textContent = nuevaFecha;
    califCelda.textContent = nuevaCalif;
    obsvCelda.textContent = nuevaObsv;

    // Cerrar el modal
    modal.hide();
  });
}

function eliminarFila(index) {
  var tabla = document.getElementById('tablaBeneficiarios');
  var tbody = tabla.getElementsByTagName('tbody')[0];
  var fila = tbody.rows[index-1];
  tbody.removeChild(fila);
  filasArrayBenef.splice(index-1, 1); // Eliminar el valor del array en la posición index
  console.log(filasArrayBenef);

}

//-----------------Añade Contacto--------------------
var codCalif = '';
var obsvContacto = '';
var addContacto = document.getElementById("btnAddContacto");
addContacto.addEventListener("click",function (){
  document.getElementById('btnUpdContacto').setAttribute('hidden','true');
  codCalif = document.getElementById("califAddContacto").value;
  var calificacion = document.getElementById("califAddContacto");
  var dscCalif = calificacion.options[calificacion.selectedIndex].text;
  obsvContacto = document.getElementById("obsvAddContacto").value;
  var today = new Date();
  // obtener la fecha de hoy en formato `MM/DD/YYYY`
  var dia = today.toLocaleDateString('es-PE');

    var tabla = document.getElementById('tablaObsv');
    var tbody = tabla.getElementsByTagName('tbody')[0];

    var nuevaFilaO = tbody.insertRow();

    var fechaCelda = nuevaFilaO.insertCell();
    fechaCelda.textContent = dia;

    var califCelda = nuevaFilaO.insertCell();
    califCelda.textContent = dscCalif;

    var califCelda = nuevaFilaO.insertCell();
    califCelda.textContent = obsvContacto;

    var accionesCelda = nuevaFilaO.insertCell();

    var accionesDiv = document.createElement('div'); // Contenedor para los botones
    accionesDiv.classList.add('acciones'); // Clase CSS opcional para estilizar el contenedor

    var editarBoton = document.createElement('button');
    editarBoton.classList.add('btn');
    editarBoton.classList.add('btn-success');
    editarBoton.classList.add('BtnverdeRemanso');
    editarBoton.classList.add('bi-pencil');
    editarBoton.id = 'botonEditarO' + nuevaFilaO.rowIndex;

    // editarBoton.setAttribute('data-bs-toggle', 'modal');
    // editarBoton.setAttribute('data-bs-target', '#ModalRegistro');

    accionesDiv.appendChild(editarBoton);

    accionesCelda.appendChild(accionesDiv);

    // editarBoton.addEventListener('click', function() {
    //   var filaIndex = this.id.replace('botonEditar', ''); // Obtiene el índice de la fila desde el ID del botón
    //   editarFila(nuevaFilaO.rowIndex);
    // });

});


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

var btnAbreModalContacto = document.getElementById("abreModalContacto");
btnAbreModalContacto.addEventListener("click",function (){
    document.getElementById('btnAddContacto').removeAttribute('hidden');
    document.getElementById('btnUpdContacto').setAttribute('hidden', 'true');
});

// Obtener el contenedor principal de la tabla
var tablaObsv = document.getElementById("tablaObsv");

// Agregar un controlador de eventos al contenedor principal
tablaObsv.addEventListener("click", function(event) {
    // Verificar si el objetivo del evento fue un botón de editar
    if (event.target.classList.contains("btn-success")) {
        // Obtener la fila correspondiente al botón de editar
        var fila = event.target.closest("tr");

        // Obtener los datos de la fila
        var fechaContacto = fila.cells[0].innerText;
        var calificacion = fila.cells[1].innerText;
        var observaciones = fila.cells[2].innerText;

        var boton = event.target;

        // Llamar a la función con los datos de la fila
        tuFuncion(fechaContacto, calificacion, observaciones, boton);
    }
});

// Función a la que se llama con los datos de la fila
function tuFuncion(fechaContacto, calificacion, observaciones, boton) {

    document.getElementById('btnUpdContacto').removeAttribute('hidden');
    document.getElementById('btnAddContacto').setAttribute('hidden', 'true');

    // Obtener el modal y los campos de entrada
    var modal = document.getElementById("ModalRegistro");
    var inputFecha = document.getElementById("fchContacto");
    var inputCalificacion = document.getElementById("califAddContacto");// Establecer la opción seleccionada en el select
    var inputObservaciones = document.getElementById("obsvAddContacto");


    // Llenar los campos de entrada con los datos de la fila
    inputFecha.value = fechaContacto;
    for (var i = 0; i < inputCalificacion.options.length; i++) {
        if (inputCalificacion.options[i].text === calificacion) {
            inputCalificacion.selectedIndex = i;
            break;
        }
    }
    inputObservaciones.value = observaciones;

    // Abrir el modal
    var modalBootstrap = bootstrap.Modal.getInstance(modal);
    modalBootstrap.show();


    // Hacer algo con los datos de la fila
    // console.log("Fecha de contacto:", fechaContacto);
    // console.log("Calificación:", calificacion);
    // console.log("Observaciones:", observaciones);
}
document.getElementById('btnUpdContacto').addEventListener('click', function () {
    alert('entro en funcion de modificacion ');
})
