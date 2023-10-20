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
        $datos[] = '';
        foreach ($request['data'] as $key => $value) {
            $hora1 = explode('T',$value['fch_servicio']);
            $hora = explode(':',$hora1[1]);
            $datos[$key] = [
                'fecha' => $dia.' de '.$mes.' del '.$anio,
                'hora' => $hora[0].':'.$hora[1],
                'dsc_beneficiario' => $value['dsc_beneficiario'],
                'dsc_plataforma' => $value['dsc_plataforma'],
                'cod_eje_horizontal_esp' => $value['cod_eje_horizontal_esp'],
                'dsc_espacio' => $value['dsc_espacio'],
                'dsc_observacion' => $value['dsc_observacion']
            ];
        }

        $nombreArchivo = 'cartelera.pdf';

        $data = $datos; // Tu arreglo de datos

        $pdf = PDF::loadView('cartelera', compact('data'))->setPaper('a4', 'landscape');
        $pdf->save(public_path('cartelera.pdf'));

        // Devolver la URL al cliente
        $pdfUrl = asset('cartelera.pdf');
        return response()->json(['pdf_url' => $pdfUrl]);
        //return $pdf->download('cartelera.pdf');
    

    }

}
