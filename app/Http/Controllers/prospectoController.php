<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\APIController; 

class prospectoController extends Controller
{
    
    public function editaProspecto(Request $request){
        return view ('prospectos.actualizar',['codProspecto' => $request]);
    }

}
