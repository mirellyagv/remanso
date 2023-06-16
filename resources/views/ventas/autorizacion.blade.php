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
                <table class="table table-striped" id="listaProsp" style="width:100%">
                    <thead style="background-color: #35B44A; color: white;">
                        <tr>
                            <th style="text-align: center;" width="10%">Acciones</th>
                            <th style="text-align: center;" width="15%">Contrato</th>
                            <th style="text-align: center;" width="15%">Documento</th>
                            <th style="text-align: center;" width="45%">Titular</th>
                            <th style="text-align: center;" width="10%">Precio Venta</th>    
                        </tr>
                    </thead>
                    <tbody id="bodyAutoriza">
                        <tr>
                            <td>
                                <a class="btn btn-primary BtnAzulORemanso form-remanso"  href="#" ><span class="bi bi-vector-pen"  data-bs-placement="top" data-bs-toggle="modal" data-bs-target="#ModalDetalleCtto" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></a>
                            </td>
                            <td>00000023453</td>
                            <td>DNI-123456789</td>
                            <td>MARIA CONCEPCION MARTINEZ HUAMAN</td>
                            <td>S/. 14,300.00</td>
                        </tr>
                        <tr>
                            <td>
                                <a class="btn btn-primary BtnAzulORemanso form-remanso"  href="#" ><span class="bi bi-vector-pen" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></a>
                            </td>
                            <td>00000023453</td>
                            <td>DNI-123456789</td>
                            <td>MARIA CONCEPCION MARTINEZ HUAMAN</td>
                            <td>S/. 14,300.00</td>
                        </tr>
                        <tr>
                            <td>
                                <a class="btn btn-primary BtnAzulORemanso form-remanso"  href="#" ><span class="bi bi-vector-pen" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></a>
                            </td>
                            <td>00000023453</td>
                            <td>DNI-123456789</td>
                            <td>MARIA CONCEPCION MARTINEZ HUAMAN</td>
                            <td>S/. 14,300.00</td>
                        </tr>
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
                <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalDetalleCttoLabel">Contrato Nro <span>00000023453</span></h1>
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
                                    <td> Documento de identidad: DNI-10239487 </td>
                                </tr>
                                <tr>
                                    <td>Nombre o razón social : MARIA CONCEPCION MARTINEZ HUAMAN</td>
                                </tr>
                                <tr>
                                    <td>Dirección : DIRECCIÓN PRUEBA TITULAR CONTRATO </td>
                                </tr>
                                <tr>
                                    <td>Telefono 1: 123456798 </td>
                                </tr>
                                <tr>    
                                    <td>Corrreo: CORREODEPRUEBA@MAIL.COM</td>
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
                                    <td colspan="3">Tipo de necesidad : NF</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Servicio : Sepultura Quintuple Preferencial</td>
                                </tr>
                                <tr>
                                    <td>Precio de Lista: 9,000.00</td>
                                    <td>Precio Venta: 7,500</td>
                                    <td>Descuento : 500</td>
                                </tr>
                                <tr>
                                    <td>Precio Total: 7,000</td>
                                    <td>Cuota inicial : 2,000</td>
                                    <td>Saldo a financiar: 5,000</td>
                                </tr>
                                <tr>
                                    <td>Cuotas : 40</td>
                                    <td>Interes : 8,0%</td>
                                    <td>Foma : 300</td>
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
                                    <td colspan="3">Camposanto : El Remanso</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Plataforma: San Pedro</td>
                                </tr>
                                <tr>
                                    <td>Eje Hor. : A</td>
                                    <td>Eje Ver. : 09</td>
                                    <td>Espacio : 01</td>
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
        type : "GET",
        url:"../lista/MuestraListaContratoFirmante",
        dataType: 'json',
        data:{'codFirmante':'{{session('cod_trabajador')}}'},
        success: function(result) {
            
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
}//onload
</script>