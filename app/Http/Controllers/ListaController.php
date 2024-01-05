<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class ListaController extends Controller
{
    public function ListaProspectos(Request $request)

    {  

        $client = new Client();
        //$cod_trabajador = 'TRA00245';
        $cod_trabajador = session('cod_trabajador');
        $fchInicio = $request['fch_inicio'];
        $fchFin = $request['fch_fin'];
        $cod_estado= $request['cod_estado'];
        $dsc_documento = $request['dsc_documento'];
        $dsc_prospecto = $request['dsc_prospecto'];
        $cod_tipo_necesidad = $request['cod_tipo_necesidad'];
        $dscVendedor = ($request['dscVendedor'] != '') ? $request['dscVendedor'] : '%';

        if($dsc_documento==null || $dsc_documento==''){$dsc_documento='%';}
        if($dsc_prospecto==null || $dsc_prospecto==''){$dsc_prospecto='%';}


        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspecto/20396900719/'.$cod_trabajador.'/'.$fchInicio.'/'.$fchFin.'/'.$cod_estado.'/'.$dsc_documento.'/'.$dsc_prospecto.'/'.$cod_tipo_necesidad.'/'.$dscVendedor);
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

    public function ListaProspectosCaducar(Request $request)
    {   
        $client = new Client();
        $cod_trabajador = session('cod_trabajador');
        $cod_tipo_necesidad = $request['cod_tipo_necesidad'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspectoxCaducar/20396900719/'.$cod_trabajador.'/'.$cod_tipo_necesidad);
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

    
    public function ListarProspectoxAprobar(Request $request)
    {   
        $client = new Client();

        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspectoxAprobar/20396900719');
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

    public function MuestraTipoRecaudacion(Request $request)
    {   
        $client = new Client();
        $flg_ni = session('flg_ni');
        $flg_nf = session('flg_nf');
        $codTrabajador = session('cod_trabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarTipoRecaudacion/20396900719/'.$flg_ni.'/'.$flg_nf.'/'.$codTrabajador);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraTipoServicio(Request $request)
    {   
        $client = new Client();
        $cod_tipo_recaudacion = $request['cod_tipo_recaudacion'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarTipoServicio/20396900719/'.$cod_tipo_recaudacion);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function MuestraSubtipoServicio(Request $request)
    {   
        $client = new Client();
        $tipo_servicio = $request['tipo_servicio'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarSubTipoServicio/20396900719/'.$tipo_servicio);
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
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarTipoPlataforma/20396900719/');
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

    public function MuestraPlataforma(Request $request)
    {   
        $client = new Client();
        $cod_camposanto = $request['cod_camposanto'];
        $cod_tipo_plataforma = $request['cod_tipo_plataforma'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarPlataforma/20396900719/'.$cod_camposanto.'/'.$cod_tipo_plataforma);
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

    public function MuestraArea(Request $request)
    {   
        $client = new Client();
        $cod_camposanto = $request['cod_camposanto'];
        $cod_plataforma = $request['cod_plataforma'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarAreaPlataforma/20396900719/'.$cod_camposanto.'/'.$cod_plataforma);
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

    public function MuestraEjeX(Request $request)
    {   
        $client = new Client();
        $cod_camposanto = $request['cod_camposanto'];
        $cod_plataforma = $request['cod_plataforma'];
        $cod_area = $request['cod_area'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarEjeHorizontal/20396900719/'.$cod_camposanto.'/'.$cod_plataforma.'/'.$cod_area);
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

    public function MuestraEjeY(Request $request)
    {   
        $client = new Client();
        $cod_camposanto = $request['cod_camposanto'];
        $cod_plataforma = $request['cod_plataforma'];
        $cod_area = $request['cod_area'];
        $ejeX = $request['ejeX'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarEjeVertical/20396900719/'.$cod_camposanto.'/'.$cod_plataforma.'/'.$cod_area.'/'.$ejeX);
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

    public function MuestraEspacio(Request $request)
    {   
        $client = new Client();
        $cod_camposanto = $request['cod_camposanto'];
        $cod_plataforma = $request['cod_plataforma'];
        $cod_area = $request['cod_area'];
        $ejeX = $request['ejeX'];
        $ejeY = $request['ejeY'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarEspacio/20396900719/'.$cod_camposanto.'/'.$cod_plataforma.'/'.$cod_area.'/'.$ejeY.'/'.$ejeX);
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

    public function MuestraNivel(Request $request)
    {   
        $client = new Client();
        $cod_camposanto = $request['cod_camposanto'];
        $cod_plataforma = $request['cod_plataforma'];
        $cod_area = $request['cod_area'];
        $ejeX = $request['ejeX'];
        $ejeY = $request['ejeY'];
        $espacio = $request['espacio'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarNivel/20396900719/'.$cod_camposanto.'/'.$cod_plataforma.'/'.$cod_area.'/'.$ejeY.'/'.$ejeX.'/'.$espacio);
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

    public function MuestraTipoEspacio(Request $request)
    {   
        $client = new Client();
        $cod_camposanto = $request['cod_camposanto'];
        $cod_plataforma = $request['cod_plataforma'];
        $cod_area = $request['cod_area'];
        $ejeX = $request['ejeX'];
        $ejeY = $request['ejeY'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarEspacioxFiltro/20396900719/'.$cod_camposanto.'/'.$cod_plataforma.'/'.$cod_area.'/'.$ejeY.'/'.$ejeX);
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

    public function MuestraServicio(Request $request)
    {   
        $client = new Client();
        $cod_camposanto = ($request['cod_camposanto'] == '') ? '%' : $request['cod_camposanto'];
        $cod_plataforma = ($request['cod_plataforma'] == '') ? '%' : $request['cod_plataforma'];
        $cod_tipo_recaudacion = ($request['cod_tipo_recaudacion'] == '') ? '%' : $request['cod_tipo_recaudacion'];
        $cod_subtipo_servicio = ($request['cod_subtipo_servicio'] == '') ? '%' : $request['cod_subtipo_servicio'];
        $tipo_nec = $request['tipo_nec'];
        $flgIntegral = $request['sintegral'];
       
        $fecha = getDate();

        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspectoServicioxFiltros/20396900719/LC001/'.$tipo_nec.'/2023-08-07/2023-08-07/'.$cod_tipo_recaudacion.'/'.$cod_subtipo_servicio.'/'.$cod_camposanto.'/'.$cod_plataforma.'/'.$flgIntegral.'/NO');

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

    public function MuestraListaCuota(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarCuota/20396900719');
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

    public function MuestraListaInteres(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarInteres/20396900719');
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

    public function MuestraListaContratoFirmante(Request $request)
    {   
        $client = new Client();
        $codFirmante = $request['codFirmante']; 
        $firmado = $request['firmado'];
        $fchInicio = $request['fchInicio'];
        $fchFin = $request['fchFin'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Contrato/ListarContratoNoFirmado/20396900719/LC001/'.$codFirmante.'/'.$firmado.'/'.$fchInicio.'/'.$fchFin);
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

    public function ListarTipoDocumento(Request $request)
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarTipoDocumento/20396900719');
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

    public function ObtenerDocumentoPuente(Request $request)
    {   
        $client = new Client();
        $codCtto = $request['codCtto'];
        $numServicio = $request['numServicio'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Documento/ObtenerDocumentoPuente/20396900719/LC001/'.$codCtto.'/'.$numServicio);
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

    public function EliminarDocumentoPuente(Request $request)
    {   
        $client = new Client();
        $codCtto = $request['codCtto'];
        $numServicio = $request['numServicio'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('DELETE','https://webapiportalcontratoremanso.azurewebsites.net/api/Documento/EliminarDocumentoPuente/LC001/'.$codCtto.'/'.$numServicio);
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

    public function MuestraAgencia()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarAgencia/20396900719');
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

    public function MuestraLugarDeceso()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarLugarDeceso/20396900719');
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

    public function MuestraOrigen()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarOrigenReporte/20396900719');
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

    public function MuestraResultado()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarResultadoReporte/20396900719');
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

    public function MuestraAgenciaFiltro()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Combos/ListarAgenciaFiltro/20396900719');
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


    public function ListaTelereporte(Request $request)
    {  

        $client = new Client();
        //$cod_trabajador = 'TRA00245';
        $cod_trabajador = session('cod_trabajador');
        $fchInicio = $request['fch_inicio'];
        $fchFin = $request['fch_fin'];
        $cod_agencia= $request['cod_agencia'];
        $dsc_beneficiario = $request['dsc_beneficiario'];
        $flg_anulado = $request['flg_anulado'];
        $cod_resultado = $request['cod_resultado'];

        if($dsc_beneficiario==null || $dsc_beneficiario==''){$dsc_beneficiario='%';}
        if($cod_agencia==null || $cod_agencia==''){$cod_agencia='%';}

        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Telereporte/ListarTelereporte/20396900719/'.$cod_trabajador.'/'.$fchInicio.'/'.$fchFin.'/'.$cod_agencia.'/'.$dsc_beneficiario.'/'.$flg_anulado.'/'.$cod_resultado);
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


    public function ObtenerTelereporte(Request $request)
    {   
        $client = new Client();
        $num_reporte = $request['num_reporte'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Telereporte/ObtenerTelereporte/20396900719/'.$num_reporte);
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

    public function ListarProspectoServicio(Request $request)
    {   
        $client = new Client();
        $codLocalidad = $request['cod_localidad'];
        $codProspecto = $request['cod_prospecto'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/Prospecto/ListarProspectoServicio/20396900719/'.$codLocalidad.'/'.$codProspecto);
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

    public function ListarUsoServicio(Request $request)
    {   
        $client = new Client();
        Carbon::setLocale('en');
        $fchInicio = Carbon::now()->subMonths(2);
        $fchFin = Carbon::now()->addMonths(2);

        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/UsoServicio/ListarUsoServicio/20396900719/'.$fchInicio.'/'.$fchFin);
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

    public function ListarUsoServicioExcel(Request $request)
    {   
        $client = new Client();
        $fecha = $request['fecha'];

        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/UsoServicio/ListarUsoServicioExcel/20396900719/'.$fecha);
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

    public function ListarUsoServicioCartelera(Request $request)
    {   
        $client = new Client();
        $fecha = $request['fecha'];

        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalcontratoremanso.azurewebsites.net/api/UsoServicio/ListarUsoServicioPDF/20396900719/'.$fecha);
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
