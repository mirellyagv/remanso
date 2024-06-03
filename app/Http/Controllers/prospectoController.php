<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Carbon\Carbon; 


class prospectoController extends Controller
{
    
    public function editaProspecto(Request $request){
        return view ('prospectos.actualizar',['codProspecto' => $request]);
    }

}
