<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        '/api/logueo',
        '/api/guardaProspecto',
        'api/guardaBeneficiario',
        'api/EliminarProspectoBeneficiario',
        'api/guardaObservacion',
        'api/ActualizarProspectoContacto',
        'api/InsertarProspectoServicio',
        'api/ActualizarContratoFirmado',
        'api/editarProspecto',
        'api/editarEstadoProspecto',
        '/lista/ListaProspectos',
        'lista/ListaProspectosCaducar',
        'lista/MuestraPais',
        'lista/MuestraDpto',
        'lista/MuestraProvincia',
        'lista/MuestraTipoDoc',
        'lista/MuestraCanal',
        'lista/MuestraCalificacion',
        'lista/MuestraParentesco',
        'lista/MuestraSexo',
        'lista/MuestraEdoCivil',
        'lista/MuestraTipoRecaudacion',
        'lista/MuestraTipoServicio',
        'lista/MuestraSubtipoServicio',
        'lista/MuestraCamposanto',
        'lista/MuestraTipoPlataforma', 
        'lista/MuestraPlataforma', 
        'lista/MuestraArea',  
        'lista/MuestraEjeX',
        'lista/MuestraEjeY',
        'lista/MuestraEspacio',
        'lista/MuestraTipoEspacio',
        'lista/MuestraServicio',
        'lista/MuestraListaCuota',
        'lista/MuestraListaInteres',
        'api/ObtenerProspecto',
        'api/ListarProspectoBeneficiario',
        'api/ListarProspectoContacto',
        'lista/MuestraListaContratoFirmante',
        'api/ObtenerContratoServicioPrincipal',
        'lista/ObtenerDocumentoPuente',
        'lista/EliminarDocumentoPuente',
        'lista/MuestraAgencia',
        'lista/MuestraLugarDeceso',
        'lista/MuestraOrigen',
        'lista/MuestraResultado',
        'lista/MuestraAgenciaFiltro',
        'lista/ListaListaTelereporte',
        'api/AnularTelereporte',
        'api/ActivarTelereporte',
        'api/InsertarTelereporte',
        'api/ActualizarTelereporte',
        'lista/ObtenerTelereporte',
        'lista/ListarProspectoServicio',
        'api/ValidarCoincidenciaDocumento',
        'api/EliminarProspectoContacto',
        'lista/ListarProspectoxAprobar',
        'lista/MuestraNivel',
        'api/EliminarServicio',
        'api/guardaDocumentoAdjunto',
        'api/ObtenerDocumentosProspecto',
        'api/ListarProspectoDocumentos',
        'lista/ListarUsoServicio',
        'lista/ListarUsoServicioExcel',
        'pdf/generarPDF',
        
    ];
}
