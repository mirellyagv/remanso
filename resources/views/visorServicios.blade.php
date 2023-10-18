<link rel="stylesheet" href="css/fullCalendarCustom.css">
<x-layouts.app title="Visor de servicios" meta-description="Visor de servicios meta description">
    <div class="loader" style="display: none;">
        <img src="{{asset('images/7.gif')}}" alt="Cargando...">
    </div>

    <main class="main" id="main">
      <div class="pagetitle">
        <h1 class="etiqueta">Visor de servicios <a href="#" data-bs-toggle="modal" data-bs-target="#infoModal"><span class="bi bi-question-circle"></span></a></h1>
      </div>
      <div class="section dashboard">
        <div class=" table-responsive" style="width:100%">
            <div id='calendar' class="calendarioVisor"></div>
        </div>
      </div>
  
    </main>

    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Leyenda</label>
                    </div>
                    <div >
                        <span class="bi bi-circle-fill" style="color: #dc3545;"></span>&nbsp;<label for="recipient-name" class="col-form-label">Inhumaciones</label>
                    </div>
                    <div >
                        <span class="bi bi-circle-fill" style="color: #fd7e14;"></span>&nbsp;<label for="recipient-name" class="col-form-label">Cremaciones</label>
                    </div>
                    <div >
                        <span class="bi bi-circle-fill" style="color: #052c65;"></span>&nbsp;<label for="recipient-name" class="col-form-label">Traslados</label>
                    </div>
                    <div >
                        <span class="bi bi-circle-fill" style="color: #198754;"></span>&nbsp;<label for="recipient-name" class="col-form-label">Misas</label>
                    </div>
                    <div >
                        <span class="bi bi-circle-fill" style="color: #d63384;"></span>&nbsp;<label for="recipient-name" class="col-form-label">Florería</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  </x-layouts.app>
  
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js"></script>
<script type="text/javascript">
var loader = document.querySelector('.loader');
loader.style.display = 'block';
$(document).ready(function () {
    muestraCalendario();    
});//end ready

// add the responsive classes when navigating with calendar buttons
$(document).on('click', '.fc-button', function(e) {
    $('.fc-toolbar.fc-header-toolbar').addClass('row');
    $('.fc-toolbar-chunk').addClass('centro');
    $('.fc-toolbar-chunk').addClass('col-12');
    $('.fc-toolbar-chunk').addClass('col-md-4');
}); 
  
function muestraCalendario() {
    var eventos = [];

    $.ajax({
        url: 'lista/ListarUsoServicio',
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta) {
            respuesta['response'].forEach(muestra => {
                var start = muestra['fch_servicio'];
                var startDate = new Date(start);
                var auxFecha = start.split('T');
                var dscNombres = muestra['dsc_apellido_paterno'] + ' ' + muestra['dsc_apellido_materno'] + ', ' + muestra['dsc_nombres'];

                if(muestra['cod_tipo_documento'] == 'DI001'){
                    tipoDoc = 'DNI';
                }
                else if (muestra['cod_tipo_documento'] == 'DI002') {
                    tipoDoc = 'CARNET EXTRANJERIA';
                }
                else if (muestra['cod_tipo_documento'] == 'DI003') {
                    tipoDoc = 'PASAPORTE';
                }
                else if (muestra['cod_tipo_documento'] == 'DI004') {
                    tipoDoc = 'RUC';
                }
                else if (muestra['cod_tipo_documento'] == 'DI005') {
                    tipoDoc = 'OTROS';
                }
                else{
                    tipoDoc = 'LIBERTA ELECTORAL';
                }


                if(!muestra['cod_plataforma_esp'] || muestra['cod_plataforma_esp'] == null){
                    plat = 'N/A';
                    area = 'N/A';
                    ejex = 'N/A';
                    ejey = 'N/A';
                    espc = 'N/A';
                    nivel = 'N/A';
                }else{
                    plat = muestra['dsc_plataforma'];
                    area = muestra['dsc_area'];
                    ejex = muestra['cod_eje_horizontal_esp'];
                    ejey = muestra['cod_eje_vertical_esp'];
                    espc = muestra['cod_espacio'];
                    nivel = muestra['num_nivel'];
                }

                var evento;
                if(muestra['dsc_prefijo'] == 'MIS'){

                    descripcion = '<table class="table tableVisor">'+
                    '<tr>'+
                        '<td style="text-align: center;" colspan = "4"><b>'+muestra['dsc_tipo_autorizacion']+' - '+muestra['num_uso_servicio']+'</b></td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Fecha:</b></td>'+
                        '<td style="text-align: left;">'+fecha4vista(auxFecha[0])+'</td>'+
                        '<td><b>Hora:</b></td>'+
                        '<td style="text-align: left;">'+auxFecha[1]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Contrato:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['cod_contrato']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Nombre:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+dscNombres+'</td>'+
                    '</tr>'+
                    // '<tr>'+
                    //     '<td style="text-align: left;"><b>DNI:</b></td>'+
                    //     '<td style="text-align: left;" colspan = "3">'+tipoDoc+"-"+muestra['dsc_documento']+'</td>'+
                    // '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Sacerdote:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_sacerdote']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Motivo:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_motivo_conmemoracion']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Observación:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_observacion']+'</td>'+
                    '</tr>'+
                    '</table>';
                }else if (muestra['dsc_prefijo'] == 'CRE'){
                    descripcion = '<table class="table tableVisor">'+
                    '<tr>'+
                        '<td style="text-align: center;" colspan = "4"><b>'+muestra['dsc_tipo_autorizacion']+' - '+muestra['num_uso_servicio']+'</b></td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Fecha:</b></td>'+
                      '<td style="text-align: left;">'+fecha4vista(auxFecha[0])+'</td>'+
                      '<td><b>Hora:</b></td>'+
                      '<td style="text-align: left;">'+auxFecha[1]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Contrato:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['cod_contrato']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Nombre:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+dscNombres+'</td>'+
                    '</tr>'+
                    // '<tr>'+
                    //   '<td style="text-align: left;"><b>DNI:</b></td>'+
                    //   '<td style="text-align: left;" colspan = "3">'+tipoDoc+"-"+muestra['dsc_documento']+'</td>'+
                    // '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Observación:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_observacion']+'</td>'+
                    '</tr>'+
                    '</table>';
                }else if(muestra['dsc_prefijo'] == 'INH' || muestra['dsc_prefijo'] == 'DEP'){
                    descripcion = '<table class="table tableVisor">'+
                    '<tr>'+
                        '<td style="text-align: center;" colspan = "4"><b>'+muestra['dsc_tipo_autorizacion']+' - '+muestra['num_uso_servicio']+'</b></td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Fecha:</b></td>'+
                      '<td style="text-align: left;">'+fecha4vista(auxFecha[0])+'</td>'+
                      '<td><b>Hora:</b></td>'+
                      '<td style="text-align: left;">'+auxFecha[1]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Contrato:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['cod_contrato']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Nombre:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+dscNombres+'</td>'+
                    '</tr>'+
                    // '<tr>'+
                    //   '<td style="text-align: left;"><b>DNI:</b></td>'+
                    //   '<td style="text-align: left;" colspan = "3">'+tipoDoc+"-"+muestra['dsc_documento']+'</td>'+
                    // '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Plataforma:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+plat+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Area de plataforma:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+area+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Espacio:</b></td>'+
                      '<td style="text-align: left;">'+ejex+' - '+ejey+' - '+espc+'</td>'+
                      '<td style="text-align: left;"><b>Nivel:</b></td>'+
                      '<td style="text-align: left;">'+nivel+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Misa cuerpo presente:</b></td>'+
                        '<td style="text-align: left;" >'+muestra['flg_misa_cuerpo_presente']+'</td>'+
                        '<td style="text-align: left;"><b>Num. Ingr.:</b></td>'+
                        '<td style="text-align: left;" >'+muestra['dsc_nro_ingreso']+'</td>'+
                    '</tr>'+
                    '<tr>'+  
                        '<td style="text-align: left;"><b>Funeraria:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_funeraria']+'</td>'+                        
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Observación:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_observacion']+'</td>'+
                    '</tr>'+
                    '</table>';
                }else{
                    descripcion = '<table class="table tableVisor">'+
                    '<tr>'+
                        '<td style="text-align: center;" colspan = "4"><b>'+muestra['dsc_tipo_autorizacion']+' - '+muestra['cod_contrato']+'</b></td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Fecha:</b></td>'+
                      '<td style="text-align: left;">'+fecha4vista(auxFecha[0])+'</td>'+
                      '<td><b>Hora:</b></td>'+
                      '<td style="text-align: left;">'+auxFecha[1]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Contrato:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['cod_contrato']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Nombre:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+dscNombres+'</td>'+
                    '</tr>'+
                    // '<tr>'+
                    //   '<td style="text-align: left;"><b>DNI:</b></td>'+
                    //   '<td style="text-align: left;" colspan = "3">'+tipoDoc+"-"+muestra['dsc_documento']+'</td>'+
                    // '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Plataforma:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+plat+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Area de plataforma:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+area+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Espacio:</b></td>'+
                      '<td style="text-align: left;">'+ejex+' - '+ejey+' - '+espc+'</td>'+
                      '<td style="text-align: left;"><b>Nivel:</b></td>'+
                      '<td style="text-align: left;">'+nivel+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Observación:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_observacion']+'</td>'+
                    '</tr>'+
                    '</table>';
                }

                if (muestra['dsc_prefijo'] == 'INH' || muestra['dsc_prefijo'] == 'DEP') {
                    evento = {
                        display:'list-item',
                        title: muestra['dsc_beneficiario_lapida'],
                        description: descripcion,
                        start: start,
                        color: '#dc3545'
                    };
                } else if (muestra['dsc_prefijo'] == 'MIS') {
                    evento = {
                        display:'list-item',
                        title: dscNombres,
                        description: descripcion,
                        start: start,
                        color: '#198754'
                    };
                }else if (muestra['dsc_prefijo'] == 'FLO') {
                    evento = {
                        display:'list-item',
                        title: muestra['dsc_beneficiario_lapida'],
                        description: descripcion,
                        start: start,
                        color: '#d63384'
                    };
                }else if (muestra['dsc_prefijo'] == 'TRI' || muestra['dsc_prefijo'] == 'TRE'){
                    evento = {
                        display:'list-item',
                        title: muestra['dsc_apellido_paterno'] + ' ' + muestra['dsc_apellido_materno'] + ', ' + muestra['dsc_nombres'],
                        description: descripcion,
                        start: start,
                        color: '#052c65'
                    };
                }else if (muestra['dsc_prefijo'] == 'CRE'){
                    evento = {
                        display:'list-item',
                        title: dscNombres,
                        description: descripcion,
                        start: start,
                        color: '#fd7e14'
                    };
                }
                eventos.push(evento);
            });

            // Luego de llenar el arreglo eventos, inicializa y renderiza el calendario
            var eventosJSON = JSON.stringify(eventos);
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'es-PE',
                initialView: 'timeGridWeek',
                firstDay: 1,
                allDaySlot: false,
                slotMinTime: "06:00:00",
                slotMaxTime: "22:00:00",
                //scrollTime: false,
                //dayMaxEvents: true,
                customButtons: {
                    myCustomButton: {
                    text: 'Programacion',
                    click: function() {
                        descargaReporte('programacion');
                        }
                    },
                    myCustomButton2: {
                    text: 'Cartelera',
                    click: function() {
                        descargaReporte('cartelera');
                        }
                    }
                },
                headerToolbar: {
                    start: 'myCustomButton',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek,timeGridDay prev,next'
                },
                buttonText: {
                    today: 'Hoy',
                    month: 'Mes',
                    week: 'Semana',
                    day: 'Día',
                    list: 'Lista'
                },
                eventDidMount: function(info) {
                    var tooltip = new Tooltip(info.el, {
                        title: info.event.extendedProps.description,
                        placement: 'right',
                        trigger: 'hover',
                        container: 'body',
                        html: true
                    });
                },
            });

            calendar.addEventSource(JSON.parse(eventosJSON));
            calendarEl.style.height = '100%';
            calendar.render();
            $('.fc-toolbar.fc-header-toolbar').addClass('row');
            $('.fc-toolbar-chunk').addClass('centro');
            $('.fc-toolbar-chunk').addClass('col-12');
            $('.fc-toolbar-chunk').addClass('col-md-4');
            loader.style.display = 'none';

        },
        error: function(e) {
            console.log(e.message);
        }
    });
}

function descargaReporte(accion) {

    $.ajax({
        url: 'lista/ListarUsoServicioExcel',
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'accion':'reporteVisor'},
        success: function(respuesta){
           //console.log(respuesta['response']);
            if (respuesta['response'].length > 0) {
                if (accion == 'programacion') {
                    
                    var header = ['FECHA','HORA','FUNERARIA','EJECUTIVO','PLATAFORMA','LET','N°','USO','FALLECIDO','FECHA DEF.','CREDO','MEDIDAS ATAUD','MISA'];
                    var filasArray = [];
                    
                    respuesta['response'].forEach(element => {
                        var auxFecha = element['fch_servicio'].split('T');
                        var fecha = auxFecha[0].split('-');
                        var year = fecha[0];
                        var month = fecha[1];
                        var day = fecha[2];
                        var fecha2 = day + "/" + month + "/" + year;
                        
                        filaData = [
                            fecha2,
                            auxFecha[1],
                        element['dsc_agencia'],
                        element['dsc_ejecutivo'],
                        element['dsc_plataforma'],
                        element['cod_eje_horizontal_esp'],
                        element['dsc_espacio'],
                        element['num_ctd'],
                        element['dsc_beneficiario'],
                        element['dsc_fecha'],
                        element['dsc_religion'],
                        element['dsc_observacion'],
                        ''
                    ]
                        filasArray.push(filaData);
                    });
                    // Crear un libro de trabajo (workbook)
                    var workbook = XLSX.utils.book_new();
                    var worksheet = XLSX.utils.json_to_sheet(filasArray);

                    // Crear una hoja de cálculo (worksheet)
                    XLSX.utils.sheet_add_aoa(worksheet, [header], { origin: 'A1' });
                    
                    // Agregar la hoja de cálculo al libro de trabajo
                    XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');

                    // Cambia los tamaños de las columnas
                    console.log(workbook);
                    workbook["Sheets"]["Sheet1"]["!cols"] = [{wpx : 80},{wpx : 60},{wpx : 300},{wpx : 200},{wpx : 220},{wpx : 40},{wpx : 40},{wpx : 40},{wpx : 350},{wpx : 80},{wpx : 160},{wpx : 100},{wpx : 55}];
                    
                    // Convertir el libro de trabajo a un archivo binario
                    var excelBuffer = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });

                    // Crear un blob a partir del archivo binario
                    var blob = new Blob([excelBuffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
                    
                    // Crear una URL para el blob
                    var url = URL.createObjectURL(blob);

                    // Crear un enlace de descarga
                    var link = document.createElement('a');
                    link.href = url;
                    link.download = 'programacion.xlsx';

                    // Simular un clic en el enlace para iniciar la descarga
                    link.click();
                }else if(accion == 'cartelera'){

                    var doc = new jsPDF({
                        orientation: 'landscape'
                    });

                    respuesta['response'].forEach(element => {
                        var auxFecha = element['fch_servicio'].split('T');
                        var fecha = auxFecha[0].split('-');
                        var year = fecha[0];
                        var month = fecha[1];
                        var day = fecha[2];
                        
                        var fecha2 = day + "/" + month + "/" + year;

                        hoja = '<div id="tumbas" class="container">'+
                                    '<div class="row"><h1>'+element['dsc_beneficiario']+'</h1></div>'
                                    '<br><br>'+
                                    '<div class="row">'+
                                        '<div class="col-md-2 offset-md-3">PLATAFORMA:</div>'+
                                        '<div class="col-md-4">'+element['dsc_plataforma']+'</div>'+
                                    '</div>'+
                                    '<div class="row">'+
                                        '<div class="col-md-2 offset-md-3">UBICACIÓN:</div>'+
                                       ' <div class="col-md-4">'+element['cod_eje_horizontal_esp']+' '+element['dsc_espacio']+'</div>'+
                                    '</div>'+
                                    '<div class="row">'+
                                        '<div class="col-md-2 offset-md-3">DÍA:</div>'+
                                        '<div class="col-md-4">'+fechaFormateada+'</div>'+
                                    '</div>'+
                                    '<div class="row">'+
                                        '<div class="col-md-2 offset-md-3">HORA:</div>'+
                                        '<div class="col-md-4">'+auxFecha[1]+'</div>'+
                                    '</div>'+
                                    '<div>'+
                                        '<div class="col-md-2 offset-md-8">'+
                                            '<img src="{{asset('images/logo.png')}}" style="width: 30%" alt="Cargando...">'+
                                        '</div>'+
                                    '</div><hr>'+                                    
                                    '<div class="row">'+
                                        '<div class="col-md-4 offset-md-4">'+element['dsc_observacion']+'</div>'+
                                    '</div></div>';

                    });

                    doc.fromHTML(hoja, 15, 15, {
                        'width': 170
                    });

                    // Save the PDF
                    doc.save('cartelera.pdf');
                }
            }else{
                Swal.fire({
                    icon: 'warning',
                    text: 'No existen registros a retornar para el día de hoy.',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#6ea63b',
                });
            }

        },//success
        error(e){
            console.log(e.message);
        }//error    
    });
}  
</script>
  