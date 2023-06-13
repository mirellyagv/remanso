<x-layouts.app title="Listado" meta-description="Listado de prospectos meta description">
  @push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  @endpush
  
    <main class="main" id="main">
      <div class="pagetitle">
        <h1>Listado de prospectos</h1>
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
                      <input type="date" class="form-control form-remanso" name="fchIni" id="fchIni" value="2021-06-01">
                    </div>
                    <div class="col-md-1 mb-3">
                      <label for="inputText" class="col-form-label">Fecha Fin: </label>
                    </div>
                    <div class="col-md-2 mb-3">
                      <input type="date" class="form-control form-remanso" name="fchFin" id="fchFin" value="2021-06-30">
                    </div>
                    <div class="col-md-1 mb-3">
                      <label for="inputText" class="col-form-label">Estado: </label>
                    </div>
                    <div class="col-md-2 mb-3">
                      <select name="EstDoc" id="EstDoc" class="form-control form-remanso">
                        <option value="0">Todos</option>
                        <option value="ACT">ACTIVO</option>
                        <option value="VTA">CIERRE</option>
                        <option value="CAD">CADUCO</option>
                        <option value="TRU">TRUNCO</option>
                        <option value="REC">RECHAZADO</option>
                        <option value="ANU">ANULADO</option>
                      </select>
                    </div>
                    <div class="col-2 mb-3 d-none d-md-block" style="text-align: end">
                      <button class="btn btn-secondary form-remanso" id="excelBtn1" onclick="BuscarProspecto()">Buscar &nbsp;<span
                          class="bi bi-search"></span></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 mb-3">
                      <label for="inputText" class="col-form-label">Documento identidad: </label>
                    </div>
                    <div class="col-md-2 mb-3">
                      <input type="text" class="form-control form-remanso" name="numDoc" id="numDoc">
                    </div>
                    <div class="col-md-1 mb-3">
                      <label for="inputText" class="col-form-label">Prospecto: </label>
                    </div>
                    <div class="col-md-2 mb-3">
                      <input type="text" class="form-control form-remanso" name="nombreProspecto" id="nombreProspecto">
                    </div>
                    <div class="col-md-1 mb-3">
                      <label for="inputText" class="col-form-label">Vendedor: </label>
                    </div>
                    <div class="col-md-2 mb-3">
                      <select name="tipoDoc" id="tipoDoc" class="form-control form-remanso">
                        <option value="0">Todos</option>
                        <option value="0">Ana Martinez</option>
                        <option value="1">Juan Hernandez</option>
                        <option value="2">Lilian Huaman</option>
                        <option value="3">Mario Gonzalez</option>
                      </select>
                    </div>
                    <div class="col-1 mb-3 d-md-none d-block">
                      <button class="btn btn-secondary form-remanso" id="excelBtn1">Buscar &nbsp;<span
                          class="bi bi-search"></span></button>
                    </div>
                    <div class="col-md-2 mb-3 d-none d-md-block" style="text-align: end">
                      <button class="btn btn-success BtnverdeRemanso form-remanso" id="excelBtn1"><img
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
                  <th style="text-align: center;">Acciones</th>
                  <th style="text-align: center;" width="15%">Código</th>
                  <th style="text-align: center;" width="15%">Documento</th>
                  <th style="text-align: center;">Prospecto</th>
                  <th style="text-align: center;" width="15%">Fch. de Registro</th>
                  <th style="text-align: center;" width="5%">Días</th>
                  <th style="text-align: center;">Canal</th>
                  <th style="text-align: center;" width="15%">Estado</th>
  
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
  
  @push('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("input[type=datetime-local]");
    </script>
  @endpush
  
  <script type="text/javascript">


     




//
$(document).ready(function () {
    $.ajax({
      url: '../lista/ListaProspectos', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{'fch_inicio': $('#fchIni').val() , 'fch_fin':$('#fchFin').val(), 'cod_estado':$('#EstDoc').val(), 'dsc_documento':$('#numDoc').val(), 'dsc_prospecto':$('#nombreProspecto').val()},
      success: function(respuesta){
          fila='';
          respuesta['response'].forEach(function(word){
            
          dias =  '{{ \Carbon\Carbon::now ()  }}' ;
          var fchRegistro = '{{ \Carbon\Carbon::now ()  }}' ;
         
          var today = new Date(word['fch_registro']);
          // obtener la fecha de hoy en formato `MM/DD/YYYY`
          var dia = today.toLocaleDateString('en-GB');
            fila += '<tr><td>'+
                  '<button class="btn btn-secondary form-remanso" id="buscarDoc"onclick="window.location.href=">'+
                      '<span class="bi bi-clipboard-check" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></button>'+
                    '<button class="btn btn-success BtnverdeRemanso form-remanso" onclick="window.location.href=" id="buscarDoc" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Registrar venta"><span class="bi bi-cash-stack"></span></button>'+
                    '<button class="btn btn-warning form-remanso" onclick="window.location.href=" id="buscarDoc" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Registrar venta"><span class="bi bi-bookmark-star"></span></button></td>'+
                '<td>'+word['cod_prospecto']+'</td>'+
                '<td>'+word['dsc_tipo_documento']+'-'+word['dsc_documento']+'</td>'+
                '<td>'+word['dsc_prospecto']+'</td>'+
                '<td>'+dia+'</td>'+
                '<td>'+word['num_dias']+'</td>'+
                '<td>'+word['dsc_origen']+'</td>'+
                '<td>'+word['dsc_estado']+'</td>'+
              '</tr>';
  
          });
          console.log(fila);
          $('#bodyListado').html(fila);
  
      },//success
      error(e){
          console.log(e.message);
      }//error
    });
  
        if ($.fn.dataTable.isDataTable('#listaProsp')) {
            $('#listaProsp').DataTable().clear();
            $('#listaProsp').DataTable().destroy();        
        }
  
      $('#listaProsp').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
            },
            dom: 'Btrip',
            buttons: [
              {
                extend: "excel",                    // Extend the excel button
                text: 'Excel',
                className: 'btn btn-success',
                excelStyles: {                      // Add an excelStyles definition
                  cells: "2",                     // to row 2
                  style: {                        // The style block
                      font: {                     // Style the font
                          name: "Arial",          // Font name
                          size: "14",             // Font size
                          color: "FFFFFF",        // Font Color
                          b: false,               // Remove bolding from header row
                      },
                      fill: {                     // Style the cell fill (background)
                          pattern: {              // Type of fill (pattern or gradient)
                              color: "457B9D",    // Fill color
                          }
                      }
                  }
                },
              },
            ],
            processing: true,
          });
      });


    function BuscarProspecto() {
    $.ajax({
      url: '../lista/ListaProspectos', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{'fch_inicio': $('#fchIni').val() , 'fch_fin':$('#fchFin').val(), 'cod_estado':$('#EstDoc').val(), 'dsc_documento':$('#numDoc').val(), 'dsc_prospecto':$('#nombreProspecto').val()},
      success: function(respuesta){
          fila='';
          respuesta['response'].forEach(function(word){
            
          dias =  '{{ \Carbon\Carbon::now ()  }}' ;
          var fchRegistro = '{{ \Carbon\Carbon::now ()  }}' ;
          

          var today = new Date(word['fch_registro']);
          // obtener la fecha de hoy en formato `MM/DD/YYYY`
          var dia = today.toLocaleDateString('en-GB');
            fila += '<tr><td>'+
                  '<button class="btn btn-secondary form-remanso" id="buscarDoc"onclick="window.location.href=">'+
                      '<span class="bi bi-clipboard-check" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></button>'+
                    '<button class="btn btn-success BtnverdeRemanso form-remanso" onclick="window.location.href=" id="buscarDoc" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Registrar venta"><span class="bi bi-cash-stack"></span></button>'+
                    '<button class="btn btn-warning form-remanso" onclick="window.location.href=" id="buscarDoc" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Registrar venta"><span class="bi bi-bookmark-star"></span></button></td>'+
                '<td>'+word['cod_prospecto']+'</td>'+
                '<td>'+word['dsc_tipo_documento']+'-'+word['dsc_documento']+'</td>'+
                '<td>'+word['dsc_prospecto']+'</td>'+
                '<td>'+dia+'</td>'+
                '<td>'+word['num_dias']+'</td>'+
                '<td>'+word['dsc_origen']+'</td>'+
                '<td>'+word['dsc_estado']+'</td>'+
              '</tr>';
  
          });
          console.log(fila);
          $('#bodyListado').html(fila);
  
      },//success
      error(e){
          console.log(e.message);
      }//error
    });
  
        if ($.fn.dataTable.isDataTable('#listaProsp')) {
            $('#listaProsp').DataTable().clear();
            $('#listaProsp').DataTable().destroy();        
        }
  
      $('#listaProsp').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
            },
            dom: 'Btrip',
            buttons: [
              {
                extend: "excel",                    // Extend the excel button
                text: 'Excel',
                className: 'btn btn-success',
                excelStyles: {                      // Add an excelStyles definition
                  cells: "2",                     // to row 2
                  style: {                        // The style block
                      font: {                     // Style the font
                          name: "Arial",          // Font name
                          size: "14",             // Font size
                          color: "FFFFFF",        // Font Color
                          b: false,               // Remove bolding from header row
                      },
                      fill: {                     // Style the cell fill (background)
                          pattern: {              // Type of fill (pattern or gradient)
                              color: "457B9D",    // Fill color
                          }
                      }
                  }
                },
              },
            ],
            processing: true,
          });
      };
  </script>