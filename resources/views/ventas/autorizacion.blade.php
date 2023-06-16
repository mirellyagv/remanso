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
                <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalDetalleCttoLabel">Contrato Nro <span id="cabCtto">00000023453</span></h1>
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
                                    <td><b>Documento de identidad:</b><span id="tipoDoc">DNI</span>-<span id="dscDoc">10239487</span></td>
                                </tr>
                                <tr>
                                    <td><b>Nombre o razón social:</b> <span id="dscCliente">MARIA CONCEPCION MARTINEZ HUAMAN</span></td>
                                </tr>
                                <tr>
                                    <td><b>Dirección:</b> <span id="direccCliente">DIRECCIÓN PRUEBA TITULAR CONTRATO</span></td>
                                </tr>
                                <tr>
                                    <td><b>Telefono 1:</b> <span id="telfCliente">123456798</span></td>
                                </tr>
                                <tr>    
                                    <td><b>Corrreo:</b> <span id="correoCliente">CORREODEPRUEBA@MAIL.COM</span></td>
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
                                    <td colspan="3"><b>Tipo de necesidad:</b> <span id="tipoNec">NF</span></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Servicio:</b> <span id="servicio">Sepultura Quintuple Preferencial</span></td>
                                </tr>
                                <tr>
                                    <td><b>Precio de Lista:</b> <span id="precioLista">9,000.00</span></td>
                                    <td><b>Precio Venta:</b> <span id="precioVenta">7,500</span></td>
                                    <td><b>Descuento:</b> <span id="descuento">500</span></td>
                                </tr>
                                <tr>
                                    <td><b>Precio Total:</b> <span id="precioTotal">7,000</span></td>
                                    <td><b>Cuota inicial:</b> <span id="cuoi">2,000</span></td>
                                    <td><b>Saldo a financiar:</b> <span id="saldo">5,000</span></td>
                                </tr>
                                <tr>
                                    <td><b>Cuotas:</b> <span id="numCuotas">40</span></td>
                                    <td><b>Interes:</b> <span id="interes">8,0%</span></td>
                                    <td><b>Foma:</b> <span id="foma">300</span></td>
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
                                    <td colspan="3"><b>Camposanto:</b> <span id="camposanto">El Remanso</span></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Plataforma:</b> <span id="plataforma">San Pedro</span></td>
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
                <button type="button" id="autorizarCtto" class="btn btn-primary BtnAzulORemanso form-remanso" data-bs-dismiss="modal">Firmar</button>
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
                    element['cod_tipo_ctt']+'-'+element['cod_localidad'],
                    element['dsc_cliente'],
                    element['num_servicio']
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

function detallesContrato(codCtto){
    document.getElementById("cabCtto").innerHTML='';
    document.getElementById("cabCtto").innerHTML=codCtto;
    document.getElementById("tipoDoc").innerHTML='';
    document.getElementById("dscDoc").innerHTML='';
    document.getElementById("dscCliente").innerHTML='';
    document.getElementById("direccCliente").innerHTML='';
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
    document.getElementById("camposanto").innerHTML='';
    document.getElementById("plataforma").innerHTML='';
    document.getElementById("ejeX").innerHTML='';
    document.getElementById("ejeY").innerHTML='';
    document.getElementById("espacio").innerHTML='';

    $.ajax({
        url: '../lista/MuestraListaCuota', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
           console.log(respuesta);
        },//success
        error(e){
            console.log(e.message);
        }//error
    });


}

</script>