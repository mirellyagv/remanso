<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\prospectoController;
use App\Http\Controllers\CreaPDFController;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'index')->name('login');
Route::view('home', 'home')->name('home');
Route::view('visorServicios', 'visorServicios')->name('visorServicios');
Route::view('visorUbicaciones', 'visorUbicaciones')->name('visorUbicaciones');
Route::get('/adios', function (Request $request): RedirectResponse {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    
})->name('logout');


Route::name('prospectos.')->prefix('/prospectos')->group(function(){
    Route::view('registro', 'prospectos.registro')->name('registro');
    Route::get('actualizar' ,[prospectoController::class,'editaProspecto'] , 'prospectos.actualizar')->name('actualizar');
    Route::view('listado', 'prospectos.listado')->name('listado');
    Route::view('actualizar', 'prospectos.actualizar')->name('actualizar');
});

Route::name('ventas.')->prefix('/ventas')->group(function(){
    Route::view('registro', 'ventas.registro')->name('registro');
    Route::view('autorizacion', 'ventas.autorizacion')->name('autorizacion');
});


Route::name('telereporte.')->prefix('/telereporte')->group(function(){
    Route::view('registro', 'telereporte.registro')->name('registro');
    Route::view('listado', 'telereporte.listado')->name('listado');
    Route::view('actualizar', 'telereporte.actualizar')->name('actualizar');
});
//----------------APIs--------------------------------------

Route::get('api/logueo', [APIController::class, 'logueo'])->name('api.logueo');
Route::put('api/guardaProspecto', [APIController::class, 'guardaProspecto'])->name('api.guardaProspecto');
Route::put('api/editarProspecto', [APIController::class, 'editarProspecto'])->name('api.editarProspecto');
Route::put('api/guardaBeneficiario', [APIController::class, 'guardaBeneficiario'])->name('api.guardaBeneficiario');
Route::delete('api/EliminarProspectoBeneficiario', [APIController::class, 'EliminarProspectoBeneficiario'])->name('api.EliminarProspectoBeneficiario');
Route::get('lista/ListaProspectos', [ListaController::class, 'ListaProspectos'])->name('api.ListaProspectos');
Route::get('lista/ListaProspectosCaducar', [ListaController::class, 'ListaProspectosCaducar'])->name('api.ListaProspectosCaducar');
Route::get('lista/ListarProspectoxAprobar', [ListaController::class, 'ListarProspectoxAprobar'])->name('api.ListarProspectoxAprobar');
Route::put('api/guardaObservacion', [APIController::class, 'guardaObservacion'])->name('api.guardaObservacion');
Route::put('api/ActualizarProspectoContacto', [APIController::class, 'ActualizarProspectoContacto'])->name('api.ActualizarProspectoContacto');
Route::put('api/editarProspecto', [APIController::class, 'editarProspecto'])->name('api.editarProspecto');
Route::put('api/editarEstadoProspecto', [APIController::class, 'editarEstadoProspecto'])->name('api.editarEstadoProspecto');
Route::put('api/InsertarProspectoServicio', [APIController::class, 'InsertarProspectoServicio'])->name('api.InsertarProspectoServicio');
Route::put('api/ActualizarContratoFirmado', [APIController::class, 'ActualizarContratoFirmado'])->name('api.ActualizarContratoFirmado');
Route::get('lista/ListaTelereporte', [ListaController::class, 'ListaTelereporte'])->name('api.ListaTelereporte');
Route::put('api/AnularTelereporte', [APIController::class, 'AnularTelereporte'])->name('api.AnularTelereporte');
Route::put('api/ActivarTelereporte', [APIController::class, 'ActivarTelereporte'])->name('api.ActivarTelereporte');
Route::put('api/InsertarTelereporte', [APIController::class, 'InsertarTelereporte'])->name('api.InsertarTelereporte');
Route::put('api/ActualizarTelereporte', [APIController::class, 'ActualizarTelereporte'])->name('api.ActualizarTelereporte');
Route::get('api/ValidarCoincidenciaDocumento', [APIController::class, 'ValidarCoincidenciaDocumento'])->name('api.ValidarCoincidenciaDocumento');
Route::delete('api/EliminarProspectoContacto', [APIController::class, 'EliminarProspectoContacto'])->name('api.EliminarProspectoContacto');
Route::post('api/guardaDocumentoAdjunto', [APIController::class, 'guardaDocumentoAdjunto'])->name('api.guardaDocumentoAdjunto');
Route::post('api/crearCarpetaProspecto', [APIController::class, 'crearCarpetaProspecto'])->name('api.crearCarpetaProspecto');
Route::get('api/ObtenerDocumentosProspecto', [APIController::class, 'ObtenerDocumentosProspecto'])->name('api.ObtenerDocumentosProspecto');
Route::get('api/ListarProspectoDocumentos', [APIController::class, 'ListarProspectoDocumentos'])->name('api.ListarProspectoDocumentos');
Route::get('lista/ListarUsoServicio', [ListaController::class, 'ListarUsoServicio'])->name('lista.ListarUsoServicio');
Route::get('lista/ListarUsoServicioExcel', [ListaController::class, 'ListarUsoServicioExcel'])->name('lista.ListarUsoServicioExcel');
Route::get('lista/ListarUsoServicioCartelera', [ListaController::class, 'ListarUsoServicioCartelera'])->name('lista.ListarUsoServicioCartelera');
Route::get('lista/ListarEspacioLaterales', [ListaController::class, 'ListarEspacioLaterales'])->name('lista.ListarEspacioLaterales');
Route::put('api/guardaActividad' ,[APIController::class,'guardaActividad'] , 'api.guardaActividad')->name('guardaActividad');

//-------------------select---------------------------------
Route::get('lista/MuestraPais', [ListaController::class, 'MuestraPais'])->name('lista.MuestraPais');
Route::get('lista/MuestraDpto', [ListaController::class, 'MuestraDpto'])->name('lista.MuestraDpto');
Route::get('lista/MuestraProvincia', [ListaController::class, 'MuestraProvincia'])->name('lista.MuestraProvincia');
Route::get('lista/MuestraDtto', [ListaController::class, 'MuestraDtto'])->name('lista.MuestraDtto');
Route::get('lista/MuestraTipoDoc', [ListaController::class, 'MuestraTipoDoc'])->name('lista.MuestraTipoDoc');
Route::get('lista/MuestraCanal', [ListaController::class, 'MuestraCanal'])->name('lista.MuestraCanal');
Route::get('lista/MuestraCalificacion', [ListaController::class, 'MuestraCalificacion'])->name('lista.MuestraCalificacion');
Route::get('lista/MuestraParentesco', [ListaController::class, 'MuestraParentesco'])->name('lista.MuestraParentesco');
Route::get('lista/MuestraSexo', [ListaController::class, 'MuestraSexo'])->name('lista.MuestraSexo');
Route::get('lista/MuestraEdoCivil', [ListaController::class, 'MuestraEdoCivil'])->name('lista.MuestraEdoCivil');
Route::get('lista/MuestraTipoRecaudacion', [ListaController::class, 'MuestraTipoRecaudacion'])->name('lista.MuestraTipoRecaudacion');
Route::get('lista/MuestraTipoServicio', [ListaController::class, 'MuestraTipoServicio'])->name('lista.MuestraTipoServicio');
Route::get('lista/MuestraSubtipoServicio', [ListaController::class, 'MuestraSubtipoServicio'])->name('lista.MuestraSubtipoServicio');
Route::get('lista/MuestraCamposanto', [ListaController::class, 'MuestraCamposanto'])->name('lista.MuestraCamposanto');
Route::get('lista/MuestraTipoPlataforma', [ListaController::class, 'MuestraTipoPlataforma'])->name('lista.MuestraTipoPlataforma');
Route::get('lista/MuestraPlataforma', [ListaController::class, 'MuestraPlataforma'])->name('lista.MuestraPlataforma');
Route::get('lista/MuestraArea', [ListaController::class, 'MuestraArea'])->name('lista.MuestraArea');
Route::get('lista/MuestraEjeX', [ListaController::class, 'MuestraEjeX'])->name('lista.MuestraEjeX');
Route::get('lista/MuestraEjeY', [ListaController::class, 'MuestraEjeY'])->name('lista.MuestraEjeY');
Route::get('lista/MuestraEspacio', [ListaController::class, 'MuestraEspacio'])->name('lista.MuestraEspacio');
Route::get('lista/MuestraEspacio02', [ListaController::class, 'MuestraEspacio02'])->name('lista.MuestraEspacio02');
Route::get('lista/MuestraTipoEspacio', [ListaController::class, 'MuestraTipoEspacio'])->name('lista.MuestraTipoEspacio');
Route::get('lista/MuestraNivel', [ListaController::class, 'MuestraNivel'])->name('lista.MuestraNivel');
Route::get('lista/MuestraServicio', [ListaController::class, 'MuestraServicio'])->name('lista.MuestraServicio');
Route::get('lista/MuestraListaCuota', [ListaController::class, 'MuestraListaCuota'])->name('lista.MuestraListaCuota');
Route::get('lista/MuestraListaInteres', [ListaController::class, 'MuestraListaInteres'])->name('lista.MuestraListaInteres');
Route::get('lista/MuestraListaContratoFirmante', [ListaController::class, 'MuestraListaContratoFirmante'])->name('lista.MuestraListaContratoFirmante');
Route::get('lista/ObtenerDocumentoPuente', [ListaController::class, 'ObtenerDocumentoPuente'])->name('lista.ObtenerDocumentoPuente');
Route::get('lista/EliminarDocumentoPuente', [ListaController::class, 'EliminarDocumentoPuente'])->name('lista.EliminarDocumentoPuente');
Route::get('lista/MuestraAgencia', [ListaController::class, 'MuestraAgencia'])->name('lista.MuestraAgencia');
Route::get('lista/MuestraLugarDeceso', [ListaController::class, 'MuestraLugarDeceso'])->name('lista.MuestraLugarDeceso');
Route::get('lista/MuestraOrigen', [ListaController::class, 'MuestraOrigen'])->name('lista.MuestraOrigen');
Route::get('lista/MuestraResultado', [ListaController::class, 'MuestraResultado'])->name('lista.MuestraResultado');
Route::get('lista/MuestraAgenciaFiltro', [ListaController::class, 'MuestraAgenciaFiltro'])->name('lista.MuestraAgenciaFiltro');
Route::get('lista/ObtenerTelereporte', [ListaController::class, 'ObtenerTelereporte'])->name('lista.ObtenerTelereporte');
Route::get('lista/ListarProspectoServicio', [ListaController::class, 'ListarProspectoServicio'])->name('lista.ListarProspectoServicio');
Route::get('lista/ValidaEspacio', [ListaController::class, 'ValidaEspacio'])->name('lista.ValidaEspacio');


//-------------------------MOSTRAR DATOS--------------------------------------------

Route::get('api/ObtenerProspecto', [APIController::class, 'ObtenerProspecto'])->name('api.ObtenerProspecto');
Route::get('api/ListarProspectoBeneficiario', [APIController::class, 'ListarProspectoBeneficiario'])->name('api.ListarProspectoBeneficiario');
Route::get('api/ListarProspectoContacto', [APIController::class, 'ListarProspectoContacto'])->name('api.ListarProspectoContacto');
Route::get('api/ObtenerContratoServicioPrincipal', [APIController::class, 'ObtenerContratoServicioPrincipal'])->name('api.ObtenerContratoServicioPrincipal');
Route::get('api/ObtenerProspectoxDocumento', [APIController::class, 'ObtenerProspectoxDocumento'])->name('api.ObtenerProspectoxDocumento');
Route::delete('api/EliminarServicio', [APIController::class, 'EliminarServicio'])->name('api.EliminarServicio');

//-----------------------Vistas PDF-----------------------------//
Route::get('pdf/generarPDF', [CreaPDFController::class, 'generarPDF'])->name('api.generarPDF');
Route::view('/cartelera','cartelera')->name('cartelera');
