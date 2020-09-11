<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// envia formulario
Route::get('/formulario', 'HomeController@enviaformulario')->middleware('auth');

// lee el formulario y crea la consulta
Route::post('/resultadosconsulta', 'ConsultasController@mostrarConsulta')->middleware('auth')->middleware('checkrange');

// lee el formulario e ingresa un employee
Route::get('/ingresarusuario', 'HomeController@ingresarUsuario')->middleware('auth');

// lee el formulario e ingresa un employee
Route::post('/ingresaemployee', 'IngresaEmployeeController@ingresar')->middleware('auth');

//para pruebas de broadcasting
Route::get('/broadcast/pusher', 'BroadcastController@pushTest')->middleware('auth');