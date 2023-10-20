<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class CreaPDFController extends Controller
{

    public function generarPDF(Request $request)
    {   
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = Carbon::now();
        $mes = $meses[($fecha->format('n')) - 1];
        $mesNum = $fecha->format('m');
        $dia = $fecha->format('d');
        $anio = $fecha->format('Y');
        $hora = explode('T',$request['data']['fch_servicio']);

        foreach ($request['data'] as $key => $value) {
            $request['data']['fecha'] = $dia.' '.$mes.' '.$anio;
            $request['data']['hora'] = $hora[1];
        }

        $nombreArchivo = 'cartelera.pdf';

        $data = $request['data']; // Tu arreglo de datos

        $pdf = PDF::loadView('cartelera', compact('data'))->setPaper('a4', 'landscape');

        return $pdf->stream('cartelera.pdf');
    

    }

}
