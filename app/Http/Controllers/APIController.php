<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Carbon\Carbon; 
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\Request as HttpClientRequest;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Illuminate\Support\Facades\Storage;

use App\Services\GoogleDriveService;
use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;



class APIController extends Controller
{
    public function logueo(Request $request)
    {
        $client = new Client();
        $cod_usuario = $request['usuario'];
        $dsc_clave = $request['password'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Logueo/LogueoUsuario/20445366413/' . $cod_usuario . '/' . $dsc_clave);
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
                    session(['flg_ni' => $responseData['response']['flg_ni']]);
                    session(['flg_nf' => $responseData['response']['flg_nf']]);
                    session(['flg_sac' => $responseData['response']['flg_sac']]);
                    session(['flg_administrativo' => $responseData['response']['flg_administrativo']]);
                    session(['flg_administrador' => $responseData['response']['flg_administrador']]);
                    session(['flg_firmante' => $responseData['response']['flg_firmante']]);
                    

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

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Trabajador/ObtenerTrabajador/20445366413/' . session('cod_usuario'));
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

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ObtenerUltimoProspecto/20445366413/00001');
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
                        $url = 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspectoBeneficiario/20445366413/';
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
            return response()->json(['message' => $message ?? null]);
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

        // return $data;

        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspectoLomas/20445366413', $header, $data);
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

        // var_dump($data);
        
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspectoServicio/20445366413', $header, $data);
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

    public function editarProspecto(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['prospecto']);
		
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ActualizarProspectoLomas/20445366413', $header, $data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode();
                $reason = $response->getReasonPhrase();

                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            
            $promise->wait();
            $mensaje= 'Actualizado';
           // return $mensaje;
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

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspectoContacto/20445366413', $header, $data);
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

    public function ActualizarProspectoContacto(Request $request)
    {
        $client = new Client();
        $cod_prospecto = $request['cod_prospecto'];
        $cod_calificacion = $request['cod_calificacion'];
        $dsc_observacion = $request['dsc_observacion'];
        $fecha = $request['fch_contacto'];
        $numLinea = $request['numLinea'];
        $data1 = [
            "cod_prospecto"=> $cod_prospecto,
            "num_linea"=> $numLinea,
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

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ActualizarProspectoContacto/20445366413', $header, $data);
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

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ObtenerProspecto/20445366413/LC001/'.$cod_prospecto);
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

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspectoBeneficiario/20445366413/LC001/'.$cod_prospecto);
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
        $num_linea = $request['dsc_dpocumento'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('DELETE', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/EliminarProspectoBeneficiario/20445366413/LC001/'.$cod_prospecto.'/'.$num_linea);
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

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspectoContacto/20445366413/LC001/'.$cod_prospecto);
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

    // public function editarProspecto(Request $request)
    // {
    //     $client = new Client();
    //     $data = json_encode($request['prospecto']);
    //     $header = [
    //         'Content-Type' => 'application/json'
    //     ];

    //     try {
    //         $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ActualizarProspectoLomas/20445366413', $header, $data);
    //         $promise = $client->sendAsync($request)->then(function ($response) {
    //             echo  $response->getBody();
    //             $code = $response->getStatusCode();
    //             $reason = $response->getReasonPhrase();

    //             return response()->json(['status' => $code, 'mensaje' => $reason]);

    //         });

    //         $promise->wait();
    //         $mensaje= 'Actualizado';
    //         return $mensaje;

    //     } catch (\Exception $e) {
    //         // Manejo de errores en caso de que la petición falle
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }

    // }

    public function editarEstadoProspecto(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['prospecto']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {
            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ActualizarProspectoEstado/20445366413', $header, $data);
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

    public function ObtenerContratoServicioPrincipal(Request $request)
    {
        $client = new Client();
        $cod_contrato = $request['cod_contrato'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Contrato/ObtenerContratoServicioPrincipal/20445366413/LC001/'.$cod_contrato);
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
    
    public function ActualizarContratoFirmado(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['data']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {
            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Contrato/ActualizarContratoFirmado/20445366413/',$header,$data);
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


    public function AnularTelereporte(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['telereporte']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {
            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Telereporte/AnularTelereporte/20445366413', $header, $data);
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

    public function ActivarTelereporte(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['telereporte']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {
            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Telereporte/ActivarTelereporte/20445366413', $header, $data);
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


    public function InsertarTelereporte(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['telereporte']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Telereporte/InsertarTelereporte/20445366413', $header, $data);
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

    public function ActualizarTelereporte(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['telereporte']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Telereporte/ActualizarTelereporte/20445366413', $header, $data);
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

    public function ValidarCoincidenciaDocumento(Request $request)
    {
        $client = new Client();
        $documento= $request['dscDocumento'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ValidarCoincidenciaDocumento/20445366413/'.$documento);
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

    public function EliminarProspectoContacto(Request $request)
    {
        $client = new Client();
        $cod_prospecto = $request['cod_prospecto'];
        $num_linea = $request['num_linea'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('DELETE', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/EliminarProspectoContacto/20445366413/LC001/'.$cod_prospecto.'/'.$num_linea);
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

    public function EliminarServicio(Request $request)
    {
        $client = new Client();
        $cod_prospecto = $request['cod_prospecto'];
        $num_linea = $request['num_linea'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('DELETE', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/EliminarProspectoServicio/20445366413/LC001/'.$cod_prospecto.'/'.$num_linea);
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

    public function ObtenerProspectoxDocumento(Request $request)
    {
        $client = new Client();
        $documento= $request['dscDocumento'];
        $tipoDoc= $request['tipoDoc'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ObtenerProspectoxDocumento/20445366413/LC001/'.$tipoDoc.'/'.$documento);
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

    // public function guardaDocumentoAdjunto(Request $request)
    // {
    //     $client = new Client();
    //     $file = $request->file('file');

        
    //     $destinationPath = '//192.168.50.30/UmayuxSoftwareSrv/Prospectos_SG5/Documentos/'.$request['codProspecto'].'/'.$request['nombre'].'.'. $file->getClientOriginalExtension();
    //     $fileName = $request['nombre'];
    //     var_dump($destinationPath);
 
    //     $data = [ 
    //         "cod_localidad_p"=> "LC001",
    //         "cod_prospecto"=> $request['codProspecto'],
    //         "num_linea"=> $request['numLinea'],
    //         "dsc_documento"=> $fileName,
    //         "dsc_nombre_original"=> $file->getClientOriginalName(),
    //         "dsc_ruta"=> $destinationPath
    //     ];

    //     $data = json_encode($data);
    //     // Ruta donde se guardará el archivo
    //     $rutaArchivo = $request['codProspecto'] . '/' . $fileName . '.' . $file->getClientOriginalExtension();

    //     // Guardar el archivo en el nuevo disco, la ruta esta definida en config/filesystems.php
    //     Storage::disk('documentosProspectos')->put($rutaArchivo, file_get_contents($file));

    //     $header = [
    //         'Content-Type' => 'application/json'
    //     ];

    //     $url = 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspectoDocumento/20445366413';

    //     if($request['accionDocumentos'] == 'actualiza'){

    //         $url = 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ActualizarProspectoDocumento/20445366413';

    //     }

    //     try {
    //         $request = new \GuzzleHttp\Psr7\Request('PUT', $url, $header, $data);
    //         $promise = $client->sendAsync($request)->then(function ($response) {
    //             echo  $response->getBody();
    //             $code = $response->getStatusCode();
    //             $reason = $response->getReasonPhrase();

    //             return response()->json(['status' => $code, 'mensaje' => $reason]);

    //         });


    //         //cod_prospecto/documentos

    //         $promise->wait();
    //         return 'Guardado';

    //     } catch (\Exception $e) {
    //         // Manejo de errores en caso de que la petición falle
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }



    // public function crearCarpetaProspecto(Request $request)
    // {
    //     $codProspecto = $request['codProspecto'];

    //     try {
    //         $googleClient = new \Google_Client();
    //         $googleClient->setAuthConfig(storage_path('app/lomasdrive-d4c4f9d3583e.json'));
    //         $googleClient->addScope(\Google_Service_Drive::DRIVE);
    //         $googleClient->setAccessType('offline');

    //         $driveService = new \Google_Service_Drive($googleClient);
    //         $parentFolderId = "1ODd0WFQzPZtM90c9eBlYy9_Mi2dBa3Ms"; // carpeta raíz

    //         // Buscar si existe
    //         $query = sprintf(
    //             "name='%s' and mimeType='application/vnd.google-apps.folder' and '%s' in parents and trashed=false",
    //             addslashes($codProspecto),
    //             $parentFolderId
    //         );

    //         $response = $driveService->files->listFiles([
    //             'q' => $query,
    //             'fields' => 'files(id, name)',
    //             'supportsAllDrives' => true,
    //             'includeItemsFromAllDrives' => true,
    //         ]);

    //         if (count($response->files) > 0) {
    //             $folderId = $response->files[0]->id;
    //         } else {
    //             // No existe: crearla
    //             $folderMetadata = new \Google_Service_Drive_DriveFile([
    //                 'name' => $codProspecto,
    //                 'mimeType' => 'application/vnd.google-apps.folder',
    //                 'parents' => [$parentFolderId],
    //             ]);

    //             $folder = $driveService->files->create($folderMetadata, [
    //                 'fields' => 'id',
    //                 'supportsAllDrives' => true,
    //             ]);
    //             $folderId = $folder->id;
    //         }

    //         return response()->json(['folderId' => $folderId]);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }




    public function crearCarpetaProspecto(Request $request)
    {
        $codProspecto = $request['codProspecto'];

        try {
            $googleClient = new \Google_Client();
            $googleClient->setAuthConfig(storage_path('app/lomasdrive-d4c4f9d3583e.json'));
            $googleClient->addScope(\Google_Service_Drive::DRIVE);
            $googleClient->setAccessType('offline');

            $driveService = new \Google_Service_Drive($googleClient);
            $parentFolderId = "1ODd0WFQzPZtM90c9eBlYy9_Mi2dBa3Ms"; // carpeta raíz

            // Buscar si existe
            $query = sprintf(
                "name='%s' and mimeType='application/vnd.google-apps.folder' and '%s' in parents and trashed=false",
                addslashes($codProspecto),
                $parentFolderId
            );

            $response = $driveService->files->listFiles([
                'q' => $query,
                'fields' => 'files(id, name)',
                'supportsAllDrives' => true,
                'includeItemsFromAllDrives' => true,
            ]);

            if (count($response->files) > 0) {
                $folderId = $response->files[0]->id;
            } else {
                // Crear carpeta
                $folderMetadata = new \Google_Service_Drive_DriveFile([
                    'name' => $codProspecto,
                    'mimeType' => 'application/vnd.google-apps.folder',
                    'parents' => [$parentFolderId],
                ]);

                $folder = $driveService->files->create($folderMetadata, [
                    'fields' => 'id',
                    'supportsAllDrives' => true,
                ]);
                $folderId = $folder->id;
            }

            return response()->json(['folderId' => $folderId]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }




    // public function guardaDocumentoAdjunto(Request $request)
    // {
    //     $client = new \GuzzleHttp\Client();
    //     $file = $request->file('file');
    //     $fileName = $request['nombre'];
    //     $extension = $file->getClientOriginalExtension();
    //     $codProspecto = $request['codProspecto'];
    //     $numLinea = $request['numLinea'];
    //     $folderId = $request['folderId']; // nuevo

    //     try {
    //         $googleClient = new \Google_Client();
    //         $googleClient->setAuthConfig(storage_path('app/lomasdrive-d4c4f9d3583e.json'));
    //         $googleClient->addScope(\Google_Service_Drive::DRIVE);
    //         $googleClient->setAccessType('offline');

    //         $driveService = new \Google_Service_Drive($googleClient);

    //         // Subir archivo directo a folderId
    //         $fileMetadata = new \Google_Service_Drive_DriveFile([
    //             'name' => $fileName.'.'.$extension,
    //             'parents' => [$folderId],
    //         ]);

    //         $uploadedFile = $driveService->files->create($fileMetadata, [
    //             'data' => file_get_contents($file->getRealPath()),
    //             'mimeType' => $file->getMimeType(),
    //             'uploadType' => 'multipart',
    //             'supportsAllDrives' => true,
    //             'fields' => 'id',
    //         ]);

    //         $fileId = $uploadedFile->id;

    //         $rutaArchivo = "https://drive.google.com/file/d/{$fileId}/view";

    //         $data = [
    //             "cod_localidad_p" => "LC001",
    //             "cod_prospecto" => $codProspecto,
    //             "num_linea" => $numLinea,
    //             "dsc_documento" => $fileName,
    //             "dsc_nombre_original" => $file->getClientOriginalName(),
    //             "dsc_ruta" => $rutaArchivo
    //         ];

    //         $dataJson = json_encode($data);
    //         $header = ['Content-Type' => 'application/json'];

    //         $url = 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspectoDocumento/20445366413';
    //         if ($request['accionDocumentos'] == 'actualiza') {
    //             $url = 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ActualizarProspectoDocumento/20445366413';
    //         }

    //         $req = new \GuzzleHttp\Psr7\Request('PUT', $url, $header, $dataJson);
    //         $promise = $client->sendAsync($req)->then(function ($response) {
    //             $code = $response->getStatusCode();
    //             $reason = $response->getReasonPhrase();
    //             return response()->json(['status' => $code, 'mensaje' => $reason]);
    //         });

    //         $promise->wait();
    //         // return 'Guardado';

    //         return response()->json([
    //             'status' => 'ok',
    //             'ruta' => $rutaArchivo,
    //             'fileId' => $fileId
    //         ]);



    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }


    public function guardaDocumentoAdjunto(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $file = $request->file('file');
        $fileName = $request['nombre'];
        $extension = $file->getClientOriginalExtension();
        $codProspecto = $request['codProspecto'];
        $numLinea = $request['numLinea'];
        $folderId = $request['folderId'];

        $flg_titular = 'NO';

        try {
            $googleClient = new \Google_Client();
            $googleClient->setAuthConfig(storage_path('app/lomasdrive-d4c4f9d3583e.json'));
            $googleClient->addScope(\Google_Service_Drive::DRIVE);
            $googleClient->setAccessType('offline');

            $driveService = new \Google_Service_Drive($googleClient);

            $fileFullName = $fileName.'.'.$extension;
            $fileContent = file_get_contents($file->getRealPath());
            $fileContentHash = md5($fileContent);

        
            $queryFile = sprintf(
                "name='%s' and '%s' in parents and trashed=false",
                addslashes($fileFullName),
                $folderId
            );

            $response = $driveService->files->listFiles([
                'q' => $queryFile,
                'fields' => 'files(id, name, md5Checksum)',
                'supportsAllDrives' => true,
                'includeItemsFromAllDrives' => true,
            ]);

            if (count($response->files) > 0) {
                $existingFile = $response->files[0];
                $existingFileHash = $existingFile->md5Checksum ?? null;

                if ($existingFileHash === $fileContentHash) {
                    
                    $fileId = $existingFile->id;
                    $rutaArchivo = "https://drive.google.com/file/d/{$fileId}/view";
                    $rutaArchivoDescarga = "https://drive.google.com/uc?export=download&id={$fileId}";


                    
                    if ($fileName === 'Firma_Titular') {
                        $rutaArchivoLocal = $codProspecto.'/'.$fileFullName;
                        Storage::disk('documentosProspectos')->put($rutaArchivoLocal, $fileContent);
                    }

                    return response()->json([
                        'status' => 'exists',
                        'fileId' => $fileId,
                        'ruta' => $rutaArchivo
                    ]);
                } else {
                    
                    $updatedFile = $driveService->files->update($existingFile->id,
                        new \Google_Service_Drive_DriveFile([
                            'name' => $fileFullName
                        ]),
                        [
                            'data' => $fileContent,
                            'mimeType' => $file->getMimeType(),
                            'uploadType' => 'multipart',
                            'supportsAllDrives' => true,
                            'fields' => 'id',
                        ]
                    );
                    $fileId = $updatedFile->id;
                }
            } else {
                
                $fileMetadata = new \Google_Service_Drive_DriveFile([
                    'name' => $fileFullName,
                    'parents' => [$folderId],
                ]);

                $uploadedFile = $driveService->files->create($fileMetadata, [
                    'data' => $fileContent,
                    'mimeType' => $file->getMimeType(),
                    'uploadType' => 'multipart',
                    'supportsAllDrives' => true,
                    'fields' => 'id',
                ]);

                $fileId = $uploadedFile->id;
            }

            $rutaArchivo = "https://drive.google.com/file/d/{$fileId}/view";
            $rutaArchivoDescarga = "https://drive.google.com/uc?export=download&id={$fileId}";


            $rutaArchivoLocal ='';
            
            if ($fileName === 'Firma_Titular') {
                $rutaArchivoLocal = $codProspecto.'/'.$fileFullName;
                Storage::disk('documentosProspectos')->put($rutaArchivoLocal, $fileContent);
                $flg_titular = 'SI';
            }

            
            $data = [
                "cod_localidad_p" => "00001",
                "cod_prospecto" => $codProspecto,
                "num_linea" => $numLinea,
                "dsc_documento" => $fileName,
                "dsc_nombre_original" => $file->getClientOriginalName(),
                "dsc_ruta" => $rutaArchivo,
                "dsc_ruta_local" => 'D:/UmayuxSoftwareSrv/Prospectos_SG5/'.$rutaArchivoLocal,
                "dsc_id" => $fileId,
                "dsc_descarga" => $rutaArchivoDescarga,
                "flg_titular" => $flg_titular,
                "flg_2do_titular" => 'NO',

            ];

            $dataJson = json_encode($data);
            $header = ['Content-Type' => 'application/json'];

            $url = 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/InsertarProspectoDocumentoLomas/20445366413';
            if ($request['accionDocumentos'] == 'actualiza') {
                $url = 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ActualizarProspectoDocumentoLomas/20445366413';
            }

            $req = new \GuzzleHttp\Psr7\Request('PUT', $url, $header, $dataJson);
            $promise = $client->sendAsync($req)->then(function ($response) {
                $code = $response->getStatusCode();
                $reason = $response->getReasonPhrase();
                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            $promise->wait();

            return response()->json([
                'status' => 'ok',
                'fileId' => $fileId,
                'ruta' => $rutaArchivo
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }




    public function ObtenerDocumentosProspecto(Request $request)
    {
        $client = new Client();
        $codProspecto= $request['dscDocumento'];
        $numLinea= $request['tipoDoc'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ObtenerProspectoDocumento/20445366413/00001/'.$codProspecto.'/'.$numLinea);
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

    public function ListarProspectoDocumentos(Request $request)
    {
        $client = new Client();
        $codProspecto= $request['codProspecto'];

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspectoDocumentoLomas/20445366413/00001/'.$codProspecto);
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

    public function guardaActividad(Request $request)
    {
        $client = new Client();
        Carbon::setLocale('en');
        $fechActual = Carbon::now();
        // $fecha = $fechActual->format('Y-m-d');
        $detalle = ($request->input('dsc_detalle') != null) ? $request->input('dsc_detalle') : 'Ingresado desde AC';
        $fechaLimite = $request->input('fch_limite');
        // Obtén los datos del formulario utilizando el objeto Request
        $data = [
            'cod_usuario' => session('cod_usuario'),
            'cod_trabajador' => session('cod_trabajador'),
            'cod_prospecto' => $request->input('cod_prospecto'),
            'cod_actividad' => '00001',
            'flg_actividad' => 'NO',
            'flg_reprogramar' => 'NO',
            'fecha_limite' =>  $fechaLimite,
            'dsc_detalle' => $detalle,
            'ai_cantidad' => 0,
            'usuario' => session('cod_usuario'),
            'fecha' => $fechaLimite,
            'ai_horario' => 0
        ];
        $data = json_encode($data); 
        $header = [
            'Content-Type' => 'application/json'
        ];
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalcrm.azurewebsites.net/api/Prospecto/InsertarActividadProspecto/20445366413', $header, $data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode();
                $reason = $response->getReasonPhrase();

                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            
            $promise->wait();
            //$codProspecto = APIController::obtenerUltimoProspecto();
            //return $codProspecto;-
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
        // return $data;
        // Realiza la solicitud PUT al servicio web
        // $response = Http::put("https://webapiportalcrm.azurewebsites.net/api/Prospecto/InsertarActividadProspecto/20445366413", $data);

        // echo $response;

    }

}
