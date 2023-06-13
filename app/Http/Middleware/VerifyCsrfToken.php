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
        'api/guardaObservacion',
        '/lista/ListaProspectos',
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
        'lista/MuestraServicio',
        'lista/MuestraListaCuota',
        'lista/MuestraListaInteres',

    ];
}
