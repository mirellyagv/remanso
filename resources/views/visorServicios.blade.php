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
            <div id='calendar' style="height: 28rem;"></div>
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
                        '<td style="text-align: center;" colspan = "4"><b>'+muestra['dsc_tipo_autorizacion']+' - '+muestra['cod_contrato']+'</b></td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Fecha:</b></td>'+
                        '<td style="text-align: left;">'+fecha4vista(auxFecha[0])+'</td>'+
                        '<td><b>Hora:</b></td>'+
                        '<td style="text-align: left;">'+auxFecha[1]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Nombre:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+dscNombres+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>DNI:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+tipoDoc+"-"+muestra['dsc_documento']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Sacerdote:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_sacerdote']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Motivo:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_motivo_conmemoracion']+'</td>'+
                    '</tr>'+
                    '</table>';
                }else if (muestra['dsc_prefijo'] == 'CRE'){
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
                      '<td style="text-align: left;"><b>Nombre:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+dscNombres+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>DNI:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+tipoDoc+"-"+muestra['dsc_documento']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Observaciones:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+plat+'</td>'+
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
                      '<td style="text-align: left;"><b>Nombre:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+dscNombres+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>DNI:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+tipoDoc+"-"+muestra['dsc_documento']+'</td>'+
                    '</tr>'+
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
                    '</table>';
                }

                if (muestra['dsc_prefijo'] == 'INH' || muestra['dsc_prefijo'] == 'DEP') {
                    evento = {
                        title: muestra['dsc_beneficiario_lapida'],
                        description: descripcion,
                        start: start,
                        color: '#dc3545'
                    };
                } else if (muestra['dsc_prefijo'] == 'MIS') {
                    evento = {
                        title: dscNombres,
                        description: descripcion,
                        start: start,
                        color: '#198754'
                    };
                }else if (muestra['dsc_prefijo'] == 'FLO') {
                    evento = {
                        title: muestra['dsc_beneficiario_lapida'],
                        description: descripcion,
                        start: start,
                        color: '#d63384'
                    };
                }else if (muestra['dsc_prefijo'] == 'TRI' || muestra['dsc_prefijo'] == 'TRE'){
                    evento = {
                        title: muestra['dsc_apellido_paterno'] + ' ' + muestra['dsc_apellido_materno'] + ', ' + muestra['dsc_nombres'],
                        description: descripcion,
                        start: start,
                        color: '#052c65'
                    };
                }else if (muestra['dsc_prefijo'] == 'CRE'){
                    evento = {
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
                headerToolbar: {
                    start: '',
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
                        placement: 'top',
                        trigger: 'hover',
                        container: 'body',
                        html: true
                    });
                },
            });

            calendar.addEventSource(JSON.parse(eventosJSON));
            calendarEl.style.height = '100%';
            calendar.render();
            loader.style.display = 'none';
        },
        error: function(e) {
            console.log(e.message);
        }
    });
}

  
</script>
  