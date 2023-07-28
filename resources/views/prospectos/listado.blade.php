<x-layouts.app title="Listado" meta-description="Listado de prospectos meta description">
  <style>
    .align-right {
      text-align: right;
    }

  </style>
  <main class="main" id="main">
    <div class="pagetitle">
      <h1>Listado de <span id="tituloPag"></span></h1>
    </div>
    <div class="section dashboard">
      <div class="card">
        <div class="accordion accordion-flush modified-accordion" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header d-md-none d-block">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Filtros
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-2 mb-3">
                    <label for="inputText" class="col-form-label">Fecha Inicio: </label>
                  </div>
                  <div class="col-md-2 mb-3">
                    <input type="text" class="form-control form-remanso align-right" name="fchIni" id="fchIni"
                      placeholder="seleccione..">
                  </div>
                  <div class="col-md-1 mb-3">
                    <label for="inputText" class="col-form-label">Fecha Fin: </label>
                  </div>
                  <div class="col-md-2 mb-3">
                    <input type="date" class="form-control form-remanso align-right" name="fchFin" id="fchFin"
                      placeholder="seleccione..">
                  </div>
                  <div class="col-md-1 mb-3">
                    <label for="inputText" class="col-form-label">Estado: </label>
                  </div>
                  <div class="col-md-2 mb-3">
                    <select name="EstDoc" id="EstDoc" class="form-select form-remanso">
                      <option value="0">Todos</option>
                      <option value="ACT">ACTIVO</option>
                      <option value="PRE">PREVENTA</option>
                      <option value="VEN">VENTA</option>
                      <option value="VTA">CIERRE</option>
                      <option value="CAD">CADUCO</option>
                      <option value="TRU">TRUNCO</option>
                      <option value="REC">OBSERVADO</option>
                      <option value="ANU">ANULADO</option>
                    </select>
                  </div>
                  <div class="col-2 mb-3 d-none d-md-block" style="text-align: end">
                    <button class="btn btn-secondary form-remanso" id="excelBtn1" onclick="BuscarProspecto()">Buscar
                      &nbsp;<span class="bi bi-search"></span></button>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2 mb-3">
                    <label for="inputText" class="col-form-label">Documento identidad: </label>
                  </div>
                  <div class="
                    @if (session('flg_jefe')==='SI' || session('flg_supervisor')==='SI' || session('flg_administrador')==='SI' || session('flg_sac')==='SI')
                      col-md-2 mb-3
                    @else
                      col-md-3 mb-3
                    @endif 
                    ">
                    <input type="text" class="form-control form-remanso align-right" name="numDoc" id="numDoc">
                  </div>
                  <div class="
                    @if (session('flg_jefe')==='SI' || session('flg_supervisor')==='SI' || session('flg_administrador')==='SI' || session('flg_sac')==='SI')
                      col-md-1 mb-3
                    @else
                      col-md-2 mb-3
                    @endif 
                    ">
                    <label for="inputText" class="col-form-label">Prospecto: </label>
                  </div>
                  <div class="
                    @if (session('flg_jefe')==='SI' || session('flg_supervisor')==='SI' || session('flg_administrador')==='SI' || session('flg_sac')==='SI')
                      col-md-2 mb-3
                    @else
                      col-md-3 mb-3
                    @endif 
                    ">
                    <input type="text" class="form-control form-remanso" name="nombreProspecto" id="nombreProspecto">
                  </div>
                  @if (session('flg_jefe')==='SI' || session('flg_supervisor')==='SI' || session('flg_administrador')==='SI' || session('flg_sac')==='SI')
                  <div class="col-md-1 mb-3">
                    <label for="inputText" class="col-form-label">Vendedor: </label>
                  </div>
                  <div class="col-md-2 mb-3">
                    <input type="text" class="form-control form-remanso" name="buscaVendedor" id="buscaVendedor">
                  </div>
                  @endif
                  <div class="col-1 mb-3 d-md-none d-block">
                    <button class="btn btn-secondary form-remanso" id="excelBtn1">Buscar &nbsp;<span
                        class="bi bi-search"></span></button>
                  </div>
                  <div class="col-md-2 mb-3 d-none d-md-block" style="text-align: end">
                    <button class="btn btn-success BtnverdeRemanso form-remanso" onclick="descargarTablaExcel()" id="btnExportar"><img
                        src="{{asset('images/icon-excel.svg')}}" alt="Bootstrap" width="20" height="20"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="table-responsive">
          <table class="table table-striped" id="listaProsp" style="width:100%">
            <thead style="background-color: #35B44A; color: white;">
              <tr>
                <th style="text-align: center;" width="12%">Acciones</th>
                <th style="text-align: center;" width="10%">Código</th>
                <th style="text-align: center;" width="10%">Documento</th>
                <th style="text-align: center;" width="15%">Prospecto</th>
                <th style="text-align: center;" width="5%">Tipo Nec.</th>
                <th style="text-align: center;" width="12%">Fch. de Registro</th>
                <th style="text-align: center;" width="5%">Días</th>
                <th style="text-align: center;" width="15%">Canal</th>
                <th style="text-align: center;" width="15%">Vendedor</th>
                <th style="text-align: center;" width="10%">Estado</th>

              </tr>
            </thead>
            <tbody style="text-align: center;font-size:0.7em;" id="bodyListado">

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </main>

</x-layouts.app>


{{-- @push('script')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  const flatpickr = require("flatpickr");
        flatpickr("",{});
</script>
@endpush --}}

<script type="text/javascript">

// --------------------valida documento de identidad-------------
var numDocInput = document.getElementById("numDoc");

numDocInput.addEventListener("input", function(event) {
  var inputValue = numDocInput.value;
  
  // Eliminar caracteres no numéricos
  inputValue = inputValue.replace(/\D/g, '');
  
  // Limitar la longitud del valor a 9 caracteres
  if (inputValue.length > 9) {
    inputValue = inputValue.slice(0, 9);
  }
  
  // Actualizar el valor del campo
  numDocInput.value = inputValue;
  
  // Verificar si se ingresaron 9 dígitos
  if (inputValue.length !== 8) {
    numDocInput.setCustomValidity("Debe ingresar 8 dígitos"); // Mostrar mensaje de error
    numDocInput.reportValidity(); // Mostrar el mensaje de error
  } else {
    numDocInput.setCustomValidity(""); // Campo válido
  }
});

var flg_ni= '';
var flg_nf= '';
var cod_tipo_necesidad= '';

$(document).ready(function () {
  flg_ni= '@php echo(session('flg_ni')) @endphp';
  flg_nf= '@php echo(session('flg_nf')) @endphp';
  flg_sac= '@php echo(session('flg_sac')) @endphp';
  flg_admin = '@php echo(session('flg_administrador')) @endphp';
  
  if(flg_ni=='SI' && flg_nf=='SI'){
    cod_tipo_necesidad='%';
  } else if(flg_ni=='NO' && flg_nf=='NO' && (flg_sac=='SI' || flg_admin == 'SI')){
    cod_tipo_necesidad='%';
    document.getElementById("tituloPag").innerText = "prospectos/ventas";
  } else if(flg_ni=='NO' && flg_nf=='NO' && flg_sac=='NO'){
    cod_tipo_necesidad='%';
    document.getElementById("tituloPag").innerText = "ventas";
  } else if(flg_ni=='SI' && flg_nf=='NO'){
    cod_tipo_necesidad='NI';
    document.getElementById("tituloPag").innerText = "ventas";
  } else if(flg_ni=='NO' && flg_nf=='SI'){
    cod_tipo_necesidad='NF';
    document.getElementById("tituloPag").innerText = "prospectos";
  }

  var currentDate = new Date();

  var firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1); // Crear las fechas de inicio y fin del mes actual
  var lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);

  var firstDayOfMonthStr = firstDayOfMonth.toISOString().split('T')[0]; // Formatear las fechas como cadenas en formato "YYYY-MM-DD"
  var lastDayOfMonthStr = lastDayOfMonth.toISOString().split('T')[0];

  // Configurar Flatpickr para fchIni
  flatpickr("#fchIni", {
    locale: "es",
    defaultDate: firstDayOfMonthStr,
    onChange: function(selectedDates, dateStr) {
      // Habilitar fchFin cuando se seleccione una fecha en fchIni
      document.getElementById("fchFin").disabled = false;
      
      // Actualizar la opción de deshabilitar en fchFin
      flatpickr("#fchFin", {
        locale: "es",
        defaultDate: lastDayOfMonthStr,
        disable: [
          {
            from: "2005-01-01",
            to: dateStr
          }
        ]
      });
    }
  });

  // Configurar Flatpickr para fchFin
  flatpickr("#fchFin", {
    locale: "es",
    defaultDate: lastDayOfMonthStr
  });

  $.ajax({
    url: '../lista/ListaProspectos', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'fch_inicio': $('#fchIni').val() , 'fch_fin':$('#fchFin').val(), 'cod_estado':$('#EstDoc').val(), 'dsc_documento':$('#numDoc').val(), 'dsc_prospecto':$('#nombreProspecto').val(),'cod_tipo_necesidad':cod_tipo_necesidad,'dscVendedor':'%'},
    success: function(respuesta){
       console.log('parado',respuesta)
        fila='';
        respuesta['response'].forEach(function(word){
          
        // dias =  '{{ \Carbon\Carbon::now ()  }}' ;
        // var fchRegistro = '{{ \Carbon\Carbon::now ()  }}' ;
        var codProsp = "'"+word['cod_prospecto']+"'";
        var dscProsp = "'"+word['dsc_prospecto']+"'";
        var today = new Date(word['fch_registro']);

        var fch1 = new Date(word['fch_registro']);
        var fch_registro1 = fch1.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric'}).replace(/ /g, '-');

        // obtener la fecha de hoy en formato `MM/DD/YYYY`
        var dia = today.toLocaleDateString('es-ES');
        var estado = word['dsc_estado'];
        estado1 = "'"+estado+"'";
        color = '';
        var dscObservado = '';
        if(estado == 'ACTIVO'){
          ref = 'href="{{route('prospectos.actualizar')}}?CodProspecto='+word['cod_prospecto']+'"'; 
          info='Gestión';
          ref2= 'href="{{route('ventas.registro')}}?CodProspecto='+word['cod_prospecto']+'"';
        }else if(estado == 'VENTA' || estado == 'CIERRE' || estado == 'PRE-VENTA' ){
          if(estado == 'VENTA'){
            color = 'style="color:mediumseagreen;"';
          }else if(estado == 'PRE-VENTA'){
            color = 'style="color:goldenrod;"';
          }
          ref = ''; 
          info = 'Este prospecto esta en un estado avanzado, solo se puede modificar registros con estado ACTIVOS.'
          ref2= 'href="{{route('ventas.registro')}}?CodProspecto='+word['cod_prospecto']+'"';
        }else if(estado == 'OBSERVADO' ){
          ref = 'href="{{route('prospectos.actualizar')}}?CodProspecto='+word['cod_prospecto']+'"'; 
          ref2= 'href="{{route('ventas.registro')}}?CodProspecto='+word['cod_prospecto']+'"';
          info = '';
          color = 'style="color:indianred;"';
          observacion = "'"+word['dsc_observaciones']+"'";
          dscObservado = '<br><span class="bi bi-exclamation-triangle" style="font-size:1.5em;" onclick="alertaObservacion('+observacion+')"></span>';
        }else{
          ref='';
          info = '';
          ref2 = '';
        }
          fila += '<tr><td>'+
            '@if (session('flg_nf')==='SI' ||  session('flg_administrador')==='SI' || session('flg_sac')==='SI')'+
              '<a class="btn btn-secondary form-remanso" '+ref+' title="'+info+'"><span class="bi bi-clipboard-check" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></a>'+
              '@endif'+
              '<a class="btn btn-success BtnverdeRemanso form-remanso" '+ref2+' title="Gestionar venta"><span class="bi bi-cash-stack"></span></a>'+
                  '@if (session('flg_jefe')==='SI' ||  session('flg_administrador')==='SI')'+
                  '<button @if('+estado+' != 'TRUNCO' || '+estado+' != 'CADUCO') disabled @endif class="btn btn-warning form-remanso" onclick="cambiarEdoP('+codProsp+','+dscProsp+','+estado1+');" id="cambiaEdo" title="Activar Prospecto"><span class="bi bi-bookmark-star"></span></button>@endif</td>'+
              '<td>'+word['cod_prospecto']+'</td>'+
              '<td style="text-align: left;" >'+word['dsc_tipo_documento']+'-'+word['dsc_documento']+'</td>'+
              '<td>'+word['dsc_prospecto']+'</td>'+
              '<td>'+word['cod_tipo_necesidad']+'</td>'+
              '<td>'+fch_registro1+'</td>'+
              '<td>'+word['num_dias']+'</td>'+
              '<td>'+word['dsc_origen']+'</td>'+
              '<td style="text-align: left;">'+word['dsc_consejero']+'</td>'+
              '<td '+color+'><b>'+word['dsc_estado']+dscObservado+'</b></td>'+
            '</tr>';

        });
        //console.log(fila);
        $('#bodyListado').html(fila);
        var totalRegistros = respuesta['response'].length;
        $('#totalRegistros').text(totalRegistros); // Actualiza el contador de totales en la tabla

        if ($.fn.dataTable.isDataTable('#listaProsp')) {
            $('#listaProsp').DataTable().clear();
            $('#listaProsp').DataTable().destroy();        
        }
      $('#listaProsp').DataTable({
            paging: true,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
            },
            dom: 'trip',
            processing: true,
          });

    },//success
    error(e){
        console.log(e.message);
    }//error
  }); //ajax     
});//ready

function alertaObservacion(cod_prospecto) {

  $.ajax({
    type: "GET",
    url: '../api/ListarProspectoContacto',
    dataType: 'json',
    data:{'cod_prospecto':cod_prospecto},
    success: function(result){ 
      console.log(result)
      var mensajeObsv = '';
      result['response'].forEach(function(word){
        var auxFecha = new Date('190-01-01');
        if(new Date(word['fch_contacto']) > auxFecha){
          auxFecha = new Date(word['fch_contacto']);
          mensajeObsv = word['dsc_observaciones'];
        }
      });
      Swal.fire({
        title:'Observación',
        text: mensajeObsv,
        icon:'warning',
        confirmButtonColor: '#35B44A',
      }) 
    }
  });
}

function cambiarEdoP(codigo,nombre,estado) {
  if (estado == 'TRUNCO' || estado == 'CADUCO') {
    Swal.fire({
      title: 'Esta seguro que quiere ACTIVAR este prospecto?',
      text: codigo+' '+nombre,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#35B44A',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        var prospecto={
          'cod_localidad_p': 'LC001',
          'cod_prospecto': codigo,
          'cod_estado': 'ACT'
        }
        $.ajax({
          type : 'PUT',
          url:'../api/editarEstadoProspecto',
          dataType: 'json',
          data:{'prospecto':prospecto},
          success: function(respuesta){
            console.log(respuesta);  
            Swal.fire({
              title:'Exito!',
              text:'Se ha activado el prospecto.',
              icon:'success',
              confirmButtonColor: '#35B44A',
            }) 
          },//success
          error(e){
              console.log(e.message);
              // Swal.fire({
              //   title:'Error!',
              //   text:'Ha ocurrido un error, por favor intentelo mas tarde.',
              //   icon:'warning',
              //   confirmButtonColor: '#35B44A',
              // }) 
              Swal.fire({
              title:'Exito!',
              text:'Se ha activado el prospecto.',
              icon:'success',
              confirmButtonColor: '#35B44A',
            }) 
          }//error
        });
      }
    })//then
  }else{
    Swal.fire({
      text:'Solo se puede activar un prospecto en estado TRUNCO o CADUCO.',
      icon:'warning',
      confirmButtonColor: '#35B44A',
    }) 
  }
}//funcion

function BuscarProspecto() {
    $('#listaProsp').DataTable().clear();
    $('#listaProsp').DataTable().destroy();
  $.ajax({
    url: '../lista/ListaProspectos', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'fch_inicio': $('#fchIni').val() , 'fch_fin':$('#fchFin').val(), 'cod_estado':$('#EstDoc').val(), 'dsc_documento':$('#numDoc').val(), 'dsc_prospecto':$('#nombreProspecto').val(),'cod_tipo_necesidad':cod_tipo_necesidad,'dscVendedor':$('#buscaVendedor').val()},
    success: function(respuesta){
      // console.log('de funcion',respuesta)
        fila='';
        respuesta['response'].forEach(function(word){          
        var codProsp = "'"+word['cod_prospecto']+"'";
        var dscProsp = "'"+word['dsc_prospecto']+"'";
        var today = new Date(word['fch_registro']);
        
        var fch1 = new Date(word['fch_registro']);
        var fch_registro1 = fch1.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric'}).replace(/ /g, '-');
        var dscObservado = '';
        var estado = word['dsc_estado'];
        estado1 = "'"+estado+"'";
        color = '';
        if(estado == 'ACTIVO'){
          ref = 'href="{{route('prospectos.actualizar')}}?CodProspecto='+word['cod_prospecto']+'"'; 
          ref2= 'href="{{route('ventas.registro')}}?CodProspecto='+word['cod_prospecto']+'"';
        }else if(estado == 'VENTA' || estado == 'CIERRE' || estado == 'PRE-VENTA'){
          if(estado == 'VENTA'){
            color = 'style="color:mediumseagreen;"';
          }else if(estado == 'PRE-VENTA'){
            color = 'style="color:goldenrod;"';
          }
          ref = ''; 
          info = 'Este prospecto esta en un estado avanzado, solo se puede modificar registros con estado ACTIVOS.'
          ref2= 'href="{{route('ventas.registro')}}?CodProspecto='+word['cod_prospecto']+'"';
        }else if(estado == 'OBSERVADO'){
          ref = 'href="{{route('prospectos.actualizar')}}?CodProspecto='+word['cod_prospecto']+'"'; 
          ref2= 'href="{{route('ventas.registro')}}?CodProspecto='+word['cod_prospecto']+'"';
          info = '';
          color = 'style="color:indianred;"';
          observacion = "'"+word['cod_prospecto']+"'";
          dscObservado = '<br><span class="bi bi-exclamation-triangle" style="font-size:1.5em;"  onclick="alertaObservacion('+observacion+')"></span>';
        }else{
          ref='';
          ref2 = '';
        }
        // obtener la fecha de hoy en formato `MM/DD/YYYY`
        var dia = today.toLocaleDateString('es-ES');
          fila += '<tr><td>'+
                '@if (session('flg_nf')==='SI' ||  session('flg_administrador')==='SI' || session('flg_sac')==='SI')'+
                '<a class="btn btn-secondary form-remanso" '+ref+' title="'+info+'"><span class="bi bi-clipboard-check" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></a>'+
                '@endif'+
                '<a class="btn btn-success BtnverdeRemanso form-remanso" '+ref2+'><span class="bi bi-cash-stack" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestionar venta"></span></a>'+
                '@if (session('flg_jefe')==='SI' ||  session('flg_administrador')==='SI')'+
                '<button class="btn btn-warning form-remanso" @if('+estado+' === 'VENTA' || '+estado+' === 'ACTIVO') disabled @endif  onclick="cambiarEdoP('+codProsp+','+dscProsp+','+estado1+');" id="cambiaEdo" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestionar venta"><span class="bi bi-bookmark-star"></span></button>@endif</td>'+
              '<td>'+word['cod_prospecto']+'</td>'+
              '<td>'+word['dsc_tipo_documento']+'-'+word['dsc_documento']+'</td>'+
              '<td style="text-align: left;">'+word['dsc_prospecto']+'</td>'+
              '<td>'+word['cod_tipo_necesidad']+'</td>'+
              '<td>'+fch_registro1+'</td>'+
              '<td>'+word['num_dias']+'</td>'+
              '<td>'+word['dsc_origen']+'</td>'+
              '<td style="text-align: left;">'+word['dsc_consejero']+'</td>'+
              '<td '+color+'><b>'+word['dsc_estado']+dscObservado+'</b></td>'+
            '</tr>';

        });
        // console.log(fila);
        $('#bodyListado').html(fila);
        var totalRegistros = respuesta['response'].length;
        $('#totalRegistros').text(totalRegistros); // Actualiza el contador de totales en la tabla
        // Inicializar DataTable dentro del bloque success
              $('#listaProsp').DataTable({
                paging: true,
                language: {
                  url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                },
                dom: 'Btrip',
                buttons: [{
                  extend: "excel",
                  text: 'Excel',
                  className: 'btn btn-success',
                  excelStyles: {
                    cells: "2",
                    style: {
                      font: {
                        name: "Arial",
                        size: "14",
                        color: "FFFFFF",
                        b: false,
                      },
                      fill: {
                        pattern: {
                          color: "457B9D",
                        }
                      }
                    }
                  },
                }],
                processing: true,
              });
            },//success
    error(e){
        console.log(e.message);
    }//error
  });
};

function descargarTablaExcel() {
  var tabla = document.getElementById('listaProsp');
  var libro = XLSX.utils.table_to_book(tabla);
  XLSX.writeFile(libro, 'tabla.xlsx');
}

</script>
