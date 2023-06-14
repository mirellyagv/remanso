<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\prospectoController;

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
});

//----------------APIs--------------------------------------

Route::get('api/logueo', [APIController::class, 'logueo'])->name('api.logueo');
Route::put('api/guardaProspecto', [APIController::class, 'guardaProspecto'])->name('api.guardaProspecto');
Route::put('api/guardaBeneficiario', [APIController::class, 'guardaBeneficiario'])->name('api.guardaBeneficiario');
Route::get('lista/ListaProspectos', [ListaController::class, 'ListaProspectos'])->name('api.ListaProspectos');
Route::put('api/guardaObservacion', [APIController::class, 'guardaObservacion'])->name('api.guardaObservacion');
Route::put('api/editarProspecto', [APIController::class, 'editarProspecto'])->name('api.editarProspecto');
Route::put('api/InsertarProspectoServicio', [APIController::class, 'InsertarProspectoServicio'])->name('api.InsertarProspectoServicio');

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
Route::get('lista/MuestraTipoEspacio', [ListaController::class, 'MuestraTipoEspacio'])->name('lista.MuestraTipoEspacio');
Route::get('lista/MuestraServicio', [ListaController::class, 'MuestraServicio'])->name('lista.MuestraServicio');
Route::get('lista/MuestraListaCuota', [ListaController::class, 'MuestraListaCuota'])->name('lista.MuestraListaCuota');
Route::get('lista/MuestraListaInteres', [ListaController::class, 'MuestraListaInteres'])->name('lista.MuestraListaInteres');



//-------------------------MOSTRAR DATOS--------------------------------------------

Route::get('api/ObtenerProspecto', [APIController::class, 'ObtenerProspecto'])->name('api.ObtenerProspecto');
Route::get('api/ListarProspectoBeneficiario', [APIController::class, 'ListarProspectoBeneficiario'])->name('api.ListarProspectoBeneficiario');
Route::get('api/ListarProspectoContacto', [APIController::class, 'ListarProspectoContacto'])->name('api.ListarProspectoContacto');