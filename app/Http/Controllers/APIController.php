<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\Request as HttpClientRequest;
use GuzzleHttp\Psr7\Request as GuzzleRequest;


class APIController extends Controller
{
    public function logueo(Request $request)
    {
        $client = new Client();
        $cod_usuario = $request['usuario'];
        $dsc_clave = $request['password'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Logueo/LogueoUsuario/20396900719/' . $cod_usuario . '/' . $dsc_clave);
            // return $request;
            $promise = $client->sendAsync($request)->then(function ($response) {
                // echo  $response->getBody();
                $code = $response->getStatusCode();
                // $reason = $response->getReasonPhrase(); 

                // Obtener los datos de la respuesta de la API

                $responseData = json_decode($response->getBody(), true);

                if ($code == 200 && $responseData['mensaje'] == 'OK') {
                    // Guardar los datos en variables de sesión
                    session(['cod_usuario' => $responseData['response']['cod_usuario']]);
                    session(['dsc_usuario' => $responseData['response']['dsc_usuario']]);
                    session(['cod_trabajador' => $responseData['response']['cod_trabajador']]);
                    session(['flg_vendedor' => $responseData['response']['flg_vendedor']]);
                    session(['flg_jefe' => $responseData['response']['flg_jefe']]);
                    session(['flg_supervisor' => $responseData['response']['flg_supervisor']]);
                    if($responseData['response']['flg_vendedor'] =='NO' && $responseData['response']['flg_jefe']=='NO' && $responseData['response']['flg_supervisor'] == 'NO'){
                        session(['flg_administrador' => 'SI']);
                    }

                }

                return response()->json(['status' => $code, 'data' => $responseData]);
            });

            $response = $promise->wait(); // Esperar a que se resuelva el Promise


            // Agrega el retorno de la respuesta
            return $response;
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function datosGrupoVenta(Request $request)
    {
        $client = new Client();
        
        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Trabajador/ObtenerTrabajador/20396900719/' . session('cod_usuario'));
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode();
                // $reason = $response->getReasonPhrase(); 

                // Obtener los datos de la respuesta de la API

                $responseData = json_decode($response->getBody(), true);

                if ($code == 200 && $responseData['mensaje'] == 'OK') {
                    // Guardar los datos en variables de sesión
                    // session(['cod_usuario' => $responseData['response']['cod_usuario']]);
                    // session(['dsc_usuario' => $responseData['response']['dsc_usuario']]);
                }

                return response()->json(['status' => $code, 'data' => $responseData]);
            });

            $response = $promise->wait(); // Esperar a que se resuelva el Promise

            // Agrega el retorno de la respuesta
            return $response;
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function obtenerUltimoProspecto()
    {
        $client = new Client();
        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ObtenerUltimoProspecto/20555348887/00001');
            $promise = $client->sendAsync($request)->then(function ($response) {
                $code = $response->getStatusCode();
                $responseData = json_decode($response->getBody(), true);
                if ($code == 200 && $responseData['mensaje'] == 'OK') {
                    $codigo = $responseData['response']['cod_prospecto'];
                }
                echo $codigo;
            });

            $promise->wait();
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function guardaBeneficiario(Request $request)
    {
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        try {
            foreach ($request->all() as $persona) {
                foreach ($persona as $key) {
                    try {
                        $url = 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspectoBeneficiario/20396900719/';
                        $body = json_encode($key);
    
                        $httpRequest = new GuzzleRequest('PUT', $url, $headers, $body);
                        $response = $client->send($httpRequest);
    
                        $code = $response->getStatusCode();
                        $responseData = json_decode($response->getBody(), true);
    
                        if ($code == 200 && $responseData['mensaje'] == 'Guardado') {
                            $message = 'guardado con exito!';
                        }
                    } catch (\Exception $e) {
                        return response()->json(['error' => $e->getMessage()], 500);
                    }
                }
            }
            echo response()->json(['status' => $code, 'data' => $responseData, 'message' => $message ?? null]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function guardaProspecto(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['prospecto']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspecto/20396900719', $header, $data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode();
                $reason = $response->getReasonPhrase();

                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            
            $promise->wait();
            //$codProspecto = APIController::obtenerUltimoProspecto();
            //return $codProspecto;
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function InsertarProspectoServicio(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['datosServicios']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspectoServicio/20396900719', $header, $data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode();
                $reason = $response->getReasonPhrase();

                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            
            $promise->wait();
            $codProspecto = APIController::obtenerUltimoProspecto();
            return $codProspecto;
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function guardaObservacion(Request $request)
    {
        $client = new Client();
        $cod_prospecto = $request['cod_prospecto'];
        $cod_calificacion = $request['cod_calificacion'];
        $dsc_observacion = $request['dsc_observacion'];
        $fecha = $request['fch_contacto'];
        $data1 = [
            "cod_prospecto"=> $cod_prospecto,
            "num_linea"=> 0,
            "fch_contacto"=> $fecha,
            "cod_calificacion"=>  $cod_calificacion,
            "flg_presentacion"=> "NO",
            "cod_consejero"=> session('cod_trabajador'),
            "dsc_observaciones"=> $dsc_observacion,
            "cod_usuario_registro"=> session('cod_trabajador'),
            "cod_localidad_p"=> "LC001"
        ];
        $data = json_encode($data1);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspectoContacto/20396900719', $header, $data);
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

    public function ObtenerProspecto(Request $request)
    {
        $client = new Client();
        $cod_prospecto = $request['cod_prospecto'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ObtenerProspecto/20396900719/LC001/'.$cod_prospecto);
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

    public function ListarProspectoBeneficiario(Request $request)
    {
        $client = new Client();
        $cod_prospecto = $request['cod_prospecto'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspectoBeneficiario/20396900719/LC001/'.$cod_prospecto);
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

    public function EliminarProspectoBeneficiario(Request $request)
    {
        $client = new Client();
        $cod_prospecto = $request['cod_prospecto'];
        $num_linea = $request['num_linea'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('DELETE', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/EliminarProspectoBeneficiario/20396900719/LC001/'.$cod_prospecto.'/'.$num_linea);
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

    public function ListarProspectoContacto(Request $request)
    {
        $client = new Client();
        $cod_prospecto = $request['cod_prospecto'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspectoContacto/20396900719/LC001/'.$cod_prospecto);
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

    public function editarProspecto(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['prospecto']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {
            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ActualizarProspecto/20396900719', $header, $data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode();
                $reason = $response->getReasonPhrase();

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });

            $promise->wait();
            $mensaje= 'Actualizado';
            return $mensaje;

        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function editarEstadoProspecto(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['prospecto']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {
            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ActualizarProspectoEstado/20396900719', $header, $data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode();
                $reason = $response->getReasonPhrase();

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });

            $promise->wait();
            $mensaje= 'Actualizado';
            return $mensaje;

        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    

}