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
        $codigoTrabajador = APIController::obtenerUltimoProspecto();
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
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}