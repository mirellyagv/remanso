<x-layouts.app title="Listado" meta-description="Listado de telereportes meta description">
  <style>
    .align-right {
      text-align: right;
    }

  </style>
  <main class="main" id="main">
    <div class="pagetitle">
      <h1>Listado de telereportes</h1>
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
                  <div class="col-md-1 mb-3">
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
                    <label for="inputText" class="col-form-label">Agencia: </label>
                  </div>
                  <div class="col-md-3 mb-3">
                    <select name="cod_agencia" id="cod_agencia" class="form-control form-remanso">
                    </select>
                  </div>
                 
                  <div class="col-2 mb-3 d-none d-md-block" style="text-align: end">
                    <button class="btn btn-secondary form-remanso" id="excelBtn1" onclick="BuscarTelereporte()">Buscar
                      &nbsp;<span class="bi bi-search"></span></button>
                  </div>

                </div>
                 
                
                <div class="row">
                  
                  <div class="col-md-1 mb-3">
                    <label for="inputText" class="col-form-label">Estado: </label>
                  </div>
                  <div class="col-md-2 mb-3">
                    <select name="flg_anulado" id="flg_anulado" class="form-control form-remanso">
                      <option value="%">[ TODOS ]</option>
                      <option value="NO" selected>ACTIVO</option>
                      <option value="SI">ANULADO</option>
                    </select>
                  </div>

                  <div class="col-md-1 mb-3">
                    <label for="inputText" class="col-form-label">Resultado: </label>
                  </div>
                  <div class="col-md-2 mb-3">
                    <select name="cod_resultado" id="cod_resultado" class="form-control form-remanso">
                    <option value="%" selected>[ TODOS ]</option>
                    </select>
                  </div>
                    

                  <div class="col-md-1 mb-3">
                    <label for="inputText" class="col-form-label">Beneficiario:</label>
                  </div>
                  <div class="col-md-3 mb-3">
                      <input type="text" class="form-control form-remanso align-left" name="dsc_benecifiario" id="dsc_benecifiario">
                  </div>
                  
                  <div class="col-1 mb-3 d-md-none d-block">
                    <button class="btn btn-secondary form-remanso" id="excelBtn1">Buscar &nbsp;<span
                        class="bi bi-search"></span></button>
                  </div>

                  <div class="col-md-2 mb-3 d-none d-md-block" style="text-align: end">
                    <button class="btn btn-success BtnverdeRemanso form-remanso" onclick="descargarTablaExcel()" id="btnExportar"><img
                        src="{{asset('images/icon-excel.svg')}}" alt="Bootstrap" width="20" height="20"></button>
                  </div>
                </div>

                <div class="row">
                 <div class="col-11 mb-2 d-none d-md-block" style="text-align: center">
                     <button class="btn btn-secondary form-remanso" id="excelBtn1" onclick="IrRegistro()">Registrar Nuevo Telereporte&nbsp; <span class="bi bi-save"></span></button>
                 </div>
                </div>
                 
              </div>
            </div>
          </div>
        </div>


        <div class="table-responsive">
          <table class="table table-striped" id="listaTelereporte" style="width:100%">
            <thead style="background-color: #35B44A; color: white;">
              <tr>
                <th style="text-align: center;">Acciones</th>
                <th style="text-align: center;" width="5%">Nro</th>
                <th style="text-align: center;" width="10%">Fecha</th>
                <th style="text-align: center;">Origen</th>
                <th style="text-align: center;" width="15%">Canal Venta</th>
                <th style="text-align: center;" width="25%">Beneficiario</th>
                <th style="text-align: center;">Agencia</th>
                <th style="text-align: center;" width="15%">Resultado</th>
               

              </tr>
            </thead>
            <tbody style="text-align: center;font-size:0.7em;" id="bodyListadoTelereporte">

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


window.onload= function() {

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
        url: '../lista/MuestraAgenciaFiltro', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
                
            respuesta['response'].forEach(function(word){
                //console.log(word);
                $("#cod_agencia").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    $.ajax({
        url: '../lista/MuestraResultado', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
                
            respuesta['response'].forEach(function(word){
                //console.log(word);
                $("#cod_resultado").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    BuscarTelereporte();
};//ready


function BuscarTelereporte() {
    $('#listaTelereporte').DataTable().clear();
    $('#listaTelereporte').DataTable().destroy();
    
  $.ajax({
    url: '../lista/ListaTelereporte', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'fch_inicio': $('#fchIni').val() , 'fch_fin':$('#fchFin').val(), 'cod_agencia':$('#cod_agencia').val(), 'dsc_beneficiario':$('#dsc_beneficiario').val(), 'flg_anulado':$('#flg_anulado').val(), 'cod_resultado':$('#cod_resultado').val() },
    success: function(respuesta){
      // console.log('de funcion',respuesta)
        fila='';
        

        respuesta['response'].forEach(function(word){          
       
        // obtener la fecha de hoy en formato `MM/DD/YYYY`
        var fch1 = new Date(word['fch_registro']);
        var fch_registro1 = fch1.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric'}).replace(/ /g, '-');

        var num_reporte= word['num_reporte'];
        var ref = '';
        ref = 'href="{{route('telereporte.actualizar')}}?Cod_reporte='+word['num_reporte']+'"'; 
        
           var boton_estado='<a class="btn btn-success BtnredRemanso form-remanso" onclick="AnularTelereporte('+num_reporte+');" title="Anular"><span class="bi bi-trash"></span></a>';
           if(word['flg_anulado']=="SI"){var boton_estado='<a class="btn btn-success BtnrojoRemanso form-remanso" onclick="ActivarTelereporte('+num_reporte+');" title="Activar"><span class="bi bi-check"></span></a>';}

          fila += '<tr><td>'+
              '<a class="btn btn-secondary form-remanso" '+ref+' title="Modificar"><span class="bi bi-pencil" ></span></a>'+
              boton_estado+
              '<td>'+word['num_reporte']+'</td>'+
              '<td>'+fch_registro1+'</td>'+
              '<td>'+word['dsc_origen']+'</td>'+
              '<td>'+word['dsc_canal_venta']+'</td>'+
              '<td>'+word['dsc_nombres']+' '+word['dsc_apellido_paterno']+' '+word['dsc_nombres']+'</td>'+
              '<td>'+word['dsc_agencia']+'</td>'+
              '<td>'+word['dsc_resultado']+'</td>'+
              
            '</tr>';
        });
        //$('.status').css("color", "red");
        // console.log(fila);
        $('#bodyListadoTelereporte').html(fila);
        var totalRegistros = respuesta['response'].length;
        $('#totalRegistros').text(totalRegistros); // Actualiza el contador de totales en la tabla



       
        // Inicializar DataTable dentro del bloque success
              $('#listaTelereporte').DataTable({
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


function AnularTelereporte(num_reporte) {
    var cod_trabajador = "'"+'@php echo(session('cod_trabajador')) @endphp'+"'";

    Swal.fire({
      title: '¿Esta seguro que quiere Anular este telereporte?',
      text: 'Código : '+num_reporte,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#35B44A',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        var telereporte={
          'num_reporte': num_reporte,
          'cod_trabajador': cod_trabajador
        }
        $.ajax({
          type : 'PUT',
          url:'../api/AnularTelereporte',
          dataType: 'json',
          data:{'telereporte':telereporte},
          success: function(respuesta){
            console.log(respuesta);  
            Swal.fire({
              title:'Exito!',
              text:'Se ha anulado el telereporte.',
              icon:'success',
              confirmButtonColor: '#35B44A',
            }) ;

            BuscarTelereporte();
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
              text:'Se ha anulado el telereporte.',
              icon:'success',
              confirmButtonColor: '#35B44A',
              
            }) 
            BuscarTelereporte();
          },//error

        

        });

        
      }
    })//then
 
}





function ActivarTelereporte(num_reporte) {
    var cod_trabajador = "'"+'@php echo(session('cod_trabajador')) @endphp'+"'";

    Swal.fire({
      title: '¿Esta seguro que quiere Activar este telereporte?',
      text: 'Código : '+num_reporte,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#35B44A',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        var telereporte={
          'num_reporte': num_reporte,
          'cod_trabajador': cod_trabajador
        }
        $.ajax({
          type : 'PUT',
          url:'../api/ActivarTelereporte',
          dataType: 'json',
          data:{'telereporte':telereporte},
          success: function(respuesta){
            console.log(respuesta);  
            Swal.fire({
              title:'Exito!',
              text:'Se ha activado el telereporte.',
              icon:'success',
              confirmButtonColor: '#35B44A',
            }) ;

            BuscarTelereporte();
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
              text:'Se ha activado el telereporte.',
              icon:'success',
              confirmButtonColor: '#35B44A',
              
            }) 
            BuscarTelereporte();
          },//error

        

        });

        
      }
    })//then
 
}




function IrRegistro() 
{
    //window.open('http://remanso.test:8080/telereporte/registro');
    window.location.href = "registro";
}


function descargarTablaExcel() {
  var tabla = document.getElementById('listaTelereporte');
  var libro = XLSX.utils.table_to_book(tabla);
  XLSX.writeFile(libro, 'tabla.xlsx');
}


</script>