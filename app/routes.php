<?php
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphLocation;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphSessionInfo;
session_start();
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get("/", function()
{
	if(Auth::user())
	{
		return Redirect::to('/index');
	}
	return Redirect::to('/index');
});

/************ RUTA CMA ***************/

//INDEX
Route::get('/index','UsuarioController@Index');


//USUARIOS
Route::get('/LoginUsuario','UsuarioController@LoginUsuarioGet');
Route::get('/CerrarSesion','UsuarioController@CerrarSesionGet');
Route::get('/ListaUsuarios','UsuarioController@ListaUsuarios');
Route::get('/CrearUsuario','UsuarioController@CrearUsuarioGet');
Route::post('/CrearUsuario','UsuarioController@CrearUsuarioPost');
Route::get('/BorrarUsuario/{usuario_id}','UsuarioController@BorrarUsuarioGet');
Route::get('/EditarUsuario/{usuario_id}','UsuarioController@EditarUsuarioGet');
Route::post('/EditarUsuario','UsuarioController@EditarUsuarioPost');


//GASTOS
Route::get('/ListaGastos','ErpController@ListaGastos');
Route::any('/gastos/edit','ErpController@CrudGastos');


//CONTRATOS
Route::get('/ListaContratos/{busqueda?}','ContratoController@ListaContratos');
Route::get('/CrearContrato','ContratoController@CrearContratoGet');
Route::post('/CrearContrato','ContratoController@CrearContratoPost');
Route::get('/DetalleContrato/{id}','ContratoController@DetalleContratoGet');
Route::get('/BorrarContrato/{id}','ContratoController@BorrarContratoGet');
Route::get('/EditarContrato/{id}','ContratoController@EditarContratoGet');
Route::post('/EditarContrato','ContratoController@EditarContratoPost');

Route::get('/VerContratoPDF/{id}','ContratoController@VerContratoPDF');
Route::get('/EnviarContrato/{id}','ContratoController@EnviarContrato');






