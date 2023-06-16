<x-layouts.app title="Registro" meta-description="Registro de ventas meta description">

<main class="main" id="main">
    <div class="pagetitle">
        <h1>Firma de contrato</h1>
    </div>
    <div class="section dashboard">
        <div class="card">  
            <br>
            <p><b>AUTORIZADOR:</b> {{session('dsc_usuario')}}</p>
            <div class="table-responsive">
                <table class="table table-striped" id="tablaAutoriza" style="width:100%">
                    <thead style="background-color: #35B44A; color: white;">
                        <tr>
                            <th style="text-align: center;" width="10%">Acciones</th>
                            <th style="text-align: center;" width="15%">Contrato</th>
                            <th style="text-align: center;" width="15%">Documento</th>
                            <th style="text-align: center;" width="45%">Titular</th>
                            <th style="text-align: center;" width="15%">Precio Venta</th>    
                        </tr>
                    </thead>
                    <tbody id="bodyAutoriza">
                        {{-- <tr>
                            <td>
                                <a class="btn btn-primary BtnAzulORemanso form-remanso"  href="#" ><span class="bi bi-vector-pen"  data-bs-toggle="modal" data-bs-target="#ModalDetalleCtto" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></a>
                            </td>
                            <td>00000023453</td>
                            <td>DNI-123456789</td>
                            <td>MARIA CONCEPCION MARTINEZ HUAMAN</td>
                            <td>S/. 14,300.00</td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- -------------------Modal Detalle contrato------------------------------- -->

<div class="modal fade" id="ModalDetalleCtto" tabindex="-1" aria-labelledby="ModalDetalleCttoLabel"
  aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content form-remanso">
            <div class="modal-header">
                <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalDetalleCttoLabel">Contrato Nro <span id="cabCtto"></span></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tablaDatos" style="width:100%">
                            <thead style="background-color: #35B44A; color: white;">
                                <tr>
                                    <th style="text-align: center;">Titular del contrato</th>   
                                </tr>
                            </thead>
                            <tbody id="bodyDatos">
                                <tr>
                                    <td><b>Documento de identidad:</b><span id="tipoDoc"></span>-<span id="dscDoc"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Nombre o razón social:</b> <span id="dscCliente"></span></td>
                                </tr>
                                {{-- <tr>
                                    <td><b>Dirección:</b> <span id="direccCliente">DIRECCIÓN PRUEBA TITULAR CONTRATO</span></td>
                                </tr> --}}
                                <tr>
                                    <td><b>Telefono 1:</b> <span id="telfCliente"></span></td>
                                </tr>
                                <tr>    
                                    <td><b>Corrreo:</b> <span id="correoCliente"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tablaServicio" style="width:100%">
                            <thead style="background-color: #35B44A; color: white;">
                                <tr>
                                    <th style="text-align: center;" colspan="3">Servicio adquirido:</th>   
                                </tr>
                            </thead>
                            <tbody id="bodyServicio">
                                <tr>
                                    <td colspan="3"><b>Tipo de necesidad:</b> <span id="tipoNec"></span></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Servicio:</b> <span id="servicio"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Precio de Lista:</b> <span id="precioLista"></span></td>
                                    <td><b>Precio Venta:</b> <span id="precioVenta"></span></td>
                                    <td><b>Descuento:</b> <span id="descuento"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Precio Total:</b> <span id="precioTotal"></span></td>
                                    <td><b>Cuota inicial:</b> <span id="cuoi"></span></td>
                                    <td><b>Saldo a financiar:</b> <span id="saldo"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Cuotas:</b> <span id="numCuotas"></span></td>
                                    <td><b>Interes:</b> <span id="interes"></span>%</td>
                                    <td><b>Foma:</b> <span id="foma"></span></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Valor cuota:</b> <span id="valorCuota"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tablaEspacio" style="width:100%">
                            <thead style="background-color: #35B44A; color: white;">
                                <tr>
                                    <th style="text-align: center;" colspan="3">Espacio</th>   
                                </tr>
                            </thead>
                            <tbody id="bodyEspacio">
                                <tr>
                                    <td colspan="3"><b>Camposanto:</b> <span id="camposanto"></span></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Plataforma:</b> <span id="plataforma"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Eje Hor.:</b> <span id="ejeX">A</span></td>
                                    <td><b>Eje Ver.:</b> <span id="ejeY">09</span></td>
                                    <td><b>Espacio:</b> <span id="espacio">01</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="autorizarCtto" onclick="frimaCtto(this.name)" class="btn btn-primary BtnAzulORemanso form-remanso" data-bs-dismiss="modal">Firmar</button>
            </div>
        </div>
    </div>
  </div>

</x-layouts.app>

<script type="text/javascript">

window.onload= function () {

    $.ajax({
        url: '../lista/MuestraListaContratoFirmante', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codFirmante':'{{session('cod_trabajador')}}'},
        success: function(respuesta){
          var filasArray = [];
            respuesta['response'].forEach(element => {
                var codCtto = "'"+element['cod_contrato']+"'";
                var filaData = [
                    '<button class="btn btn-primary btn-primary BtnAzulORemanso form-remanso" data-bs-toggle="modal" data-bs-target="#ModalDetalleCtto"   id="btnVer" onclick="detallesContrato('+codCtto+')" name="btnModal" type="button"><span class="bi bi-vector-pen"></span></button>',
                    element['cod_contrato']+'-'+element['num_servicio'],
                    element['dsc_tipo_documento_cliente']+'-'+element['dsc_documento_cliente'],
                    element['dsc_cliente'],
                    formatearNumero(element['imp_precio_venta'])
                ];
                filasArray.push(filaData);
            });
            //console.log(filasArray);
            if ($.fn.dataTable.isDataTable('#tablaAutoriza')) {
                    $('#tablaAutoriza').DataTable().clear();
                    $('#tablaAutoriza').DataTable().destroy();        
                }
            $('#tablaAutoriza').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                },
                data: filasArray,
                columns: [
                    { title: 'ACCION' },
                    { title: 'CONTRATO' },
                    { title: 'DOCUMENTO' },
                    { title: 'TITULAR' },
                    { title: 'PRECIO VENTA' },
                ],
                "columnDefs": [
                    { className: "derecha", "targets": [ 4 ] }
                ],
                dom: 'trip',
                processing: true,
            });
            
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//end ajax

//-----------------Muestra modal

}//onload

//-----------------------------llena informacion contrato-----------------------------

function detallesContrato(codCtto){
    document.getElementById("cabCtto").innerHTML='';
    document.getElementById("cabCtto").innerHTML=codCtto;
    document.getElementById("tipoDoc").innerHTML='';
    document.getElementById("dscDoc").innerHTML='';
    document.getElementById("dscCliente").innerHTML='';
    //document.getElementById("direccCliente").innerHTML='';
    document.getElementById("telfCliente").innerHTML='';
    document.getElementById("correoCliente").innerHTML='';
    document.getElementById("tipoNec").innerHTML='';
    document.getElementById("servicio").innerHTML='';
    document.getElementById("precioLista").innerHTML='';
    document.getElementById("precioVenta").innerHTML='';
    document.getElementById("descuento").innerHTML='';
    document.getElementById("precioTotal").innerHTML='';
    document.getElementById("cuoi").innerHTML='';
    document.getElementById("saldo").innerHTML='';
    document.getElementById("numCuotas").innerHTML='';
    document.getElementById("interes").innerHTML='';
    document.getElementById("foma").innerHTML='';
    document.getElementById("valorCuota").innerHTML='';
    document.getElementById("camposanto").innerHTML='';
    document.getElementById("plataforma").innerHTML='';
    document.getElementById("ejeX").innerHTML='';
    document.getElementById("ejeY").innerHTML='';
    document.getElementById("espacio").innerHTML='';
    

    $.ajax({
        url: '../api/ObtenerContratoServicioPrincipal', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_contrato':codCtto},
        success: function(respuesta){
            //console.log(respuesta['response']);
            document.getElementById("tipoDoc").innerHTML= respuesta['response']['dsc_tipo_documento_cliente'];
            document.getElementById("dscDoc").innerHTML=respuesta['response']['dsc_documento_cliente'];
            document.getElementById("dscCliente").innerHTML=respuesta['response']['dsc_cliente'];
            //document.getElementById("direccCliente").innerHTML=respuesta['response']['dsc_tipo_documento_cliente'];
            document.getElementById("telfCliente").innerHTML=respuesta['response']['dsc_telefono_cliente'];
            document.getElementById("correoCliente").innerHTML=respuesta['response']['dsc_email_cliente'];
            document.getElementById("tipoNec").innerHTML=respuesta['response']['dsc_tipo_necesidad'];
            document.getElementById("servicio").innerHTML=respuesta['response']['dsc_tipo_servicio'];
            document.getElementById("precioLista").innerHTML=respuesta['response']['imp_precio_lista'];
            document.getElementById("precioVenta").innerHTML=respuesta['response']['imp_precio_venta'];
            document.getElementById("descuento").innerHTML=formatearNumero(respuesta['response']['imp_dscto']);
            document.getElementById("precioTotal").innerHTML=formatearNumero(respuesta['response']['imp_total_a_pagar']);
            document.getElementById("cuoi").innerHTML=formatearNumero(respuesta['response']['imp_cuoi']);
            document.getElementById("saldo").innerHTML=formatearNumero(respuesta['response']['imp_saldofinanciar']);
            document.getElementById("numCuotas").innerHTML=respuesta['response']['num_cuota'];
            document.getElementById("interes").innerHTML=respuesta['response']['imp_tasa_interes'];
            document.getElementById("valorCuota").innerHTML=formatearNumero(respuesta['response']['imp_1ra_cuota']);
            document.getElementById("foma").innerHTML=respuesta['response']['imp_foma'];
            document.getElementById("camposanto").innerHTML=respuesta['response']['dsc_camposanto_actual'];
            document.getElementById("plataforma").innerHTML=respuesta['response']['dsc_areaplataforma_actual'];
            document.getElementById("ejeX").innerHTML=respuesta['response']['cod_ejehorizontal_actual'];
            document.getElementById("ejeY").innerHTML=respuesta['response']['cod_ejevertical_actual'];
            document.getElementById("espacio").innerHTML=respuesta['response']['cod_espacio_actual'];
            document.getElementById("autorizarCtto").setAttribute('name',codCtto+'-'+respuesta['response']['num_servicio']);
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
}//end function detallesContrato

//------------------------------Firma contrato-----------------------

function frimaCtto(codCtto){
    var aux = codCtto.split('-');
    var codCtto = aux[0];
    var numServ = aux[1];
    var data = {
        'cod_localidad': 'LC001',
        'cod_contrato':codCtto,
        'num_servicio': numServ
    }
    $.ajax({
        url: '../api/ActualizarContratoFirmado', 
        method: "PUT",
        crossDomain: true,
        dataType: 'json',
        data:{'data':data},
        success: function(respuesta){
            console.log(respuesta);
            Swal.fire({
                title: 'Firmado',
                icon: 'success',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#35B44A',
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    } 
                })
        },//success
        error(e){
            console.log(e.message);
            Swal.fire({
                text: 'Ha ocurrido un error, intentelo mas tarde',
                icon: 'error',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#35B44A',
                })
        }//error
    });
}

function formatearNumero(numero) {
  return numero.toLocaleString('es', {
    minimumFractionDigits: 2,
    maximumFractionDigits: 2
  });
}

</script>