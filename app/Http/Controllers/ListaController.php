<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Session;

class ListaController extends Controller
{
    public function ListaProspectos(Request $request)

    {  

        $client = new Client();
        $cod_trabajador = 'TRA00245';
        //$cod_trabajador = session('cod_trabajador');
        $fchInicio = $request['fch_inicio'];
        $fchFin = $request['fch_fin'];
        $cod_estado= $request['cod_estado'];
        $dsc_documento = $request['dsc_documento'];
        $dsc_prospecto = $request['dsc_prospecto'];

        if($dsc_documento==null || $dsc_documento==''){$dsc_documento='0';}
        if($dsc_prospecto==null || $dsc_prospecto==''){$dsc_prospecto='0';}

        try {
                         
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspecto/20396900719/'.$cod_trabajador.'/'.$fchInicio.'/'.$fchFin.'/'.$cod_estado.'/'.$dsc_documento.'/'.$dsc_prospecto);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode();
                $reason = $response->getReasonPhrase();

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });

            $promise->wait();

        } catch (\Exception $e) {

            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraPais(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarPais/20396900719');
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraDpto(Request $request)
    {   
        $client = new Client();
        $data = $request['cod_pais'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarDepartamento/20396900719/'.$data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraProvincia(Request $request)
    {   
        $client = new Client();
        $cod_pais = $request['cod_pais'];
        $cod_departamento = $request['cod_departamento'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarProvincia/20396900719/'.$cod_pais.'/'.$cod_departamento);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraDtto(Request $request)
    {   
        $client = new Client();
        $cod_pais = $request['cod_pais'];
        $cod_departamento = $request['cod_departamento'];
        $cod_provincia = $request['cod_provincia'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarDistrito/20396900719/'.$cod_pais.'/'.$cod_departamento.'/'.$cod_provincia);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraTipoDoc(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarTipoDocumento/20396900719');
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraCanal(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarCanalVenta/20396900719');
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    public function MuestraCalificacion(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarCalificacion/20396900719');
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraParentesco(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarParentesco/20396900719');
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraSexo(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarSexo/20396900719');
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraEdoCivil(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarEstadoCivil/20396900719');
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraCamposanto(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarCamposanto/20396900719');
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraTipoPlataforma(Request $request)
    {   
        $client = new Client();
        $cod_camposanto = $request['cod_camposanto'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarPlataforma/20396900719/'.$cod_camposanto);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
