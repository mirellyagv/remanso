<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\prospectoController;

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

Route::name('prospectos.')->prefix('/prospectos')->group(function(){
    Route::view('registro', 'prospectos.registro')->name('registro');
    Route::get('actualizar' ,[prospectoController::class,'editaProspecto'] , 'prospectos.actualizar')->name('actualizar');
    Route::view('listado', 'prospectos.listado')->name('listado');
});

Route::name('ventas.')->prefix('/ventas')->group(function(){
    Route::view('registro', 'ventas.registro')->name('registro');
});

//----------------APIs--------------------------------------

Route::get('api/logueo', [APIController::class, 'logueo'])->name('api.logueo');
Route::put('api/guardaProspecto', [APIController::class, 'guardaProspecto'])->name('api.guardaProspecto');
Route::put('api/guardaBeneficiario', [APIController::class, 'guardaBeneficiario'])->name('api.guardaBeneficiario');
Route::get('lista/ListaProspectos', [ListaController::class, 'ListaProspectos'])->name('api.ListaProspectos');

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
Route::get('lista/MuestraCamposanto', [ListaController::class, 'MuestraCamposanto'])->name('lista.MuestraCamposanto');
Route::get('lista/MuestraTipoPlataforma', [ListaController::class, 'MuestraTipoPlataforma'])->name('lista.MuestraTipoPlataforma');