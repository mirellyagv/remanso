<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon; 


class prospectoController extends Controller
{
    
    public function editaProspecto(Request $request){
        return view ('prospectos.actualizar',['codProspecto' => $request]);
    }


    public function guardaActividad(Request $request)
    {
        Carbon::setLocale('en');
        $fechActual = Carbon::now();
        $fecha = $fechActual->format('Y-m-d');
        $fechaLimite = ($request->input('fch_limite') != '') ? $request->input('fch_limite')->format('Y-m-d') : $fecha;

        // Obtén los datos del formulario utilizando el objeto Request
        $data = [
            'cod_usuario' => session('cod_usuario'),
            'cod_trabajador' => session('cod_trabajador'),
            'cod_prospecto' => $request->input('cod_prospecto'),
            'cod_actividad' => '00001',
            'flg_actividad' => 'NO',
            'flg_reprogramar' => 'NO',
            'fecha_limite' =>  $fechaLimite,
            'dsc_detalle' => $request->input('dsc_detalle'),
            'ai_cantidad' => 0,
            'usuario' => session('cod_usuario'),
            'fecha' => $fecha,
            'ai_horario' => 0
        ];

        // return $data;
        // Realiza la solicitud PUT al servicio web
        $response = Http::put("https://webapiportalcrm.azurewebsites.net/api/Prospecto/InsertarActividadProspecto/20396900719", $data);

        echo $response;

    }

}
