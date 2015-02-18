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
    return View::make("home");
});

/************ RUTA CMA ***************/

//INDEX
Route::get('/indexcma','HomeController@IndexCMA');


//USUARIOS
Route::get('/ListaUsuarios','UsuarioController@ListaUsuarios');
Route::get('/CrearUsuario','UsuarioController@CrearUsuarioGet');
Route::post('/CrearUsuario','UsuarioController@CrearUsuarioPost');



















/************ FIN RUTA CMA ***************/












/************ RUTA DE CACHEI ***************/


//USUARIOS








/***** FIN RUTA CEACHEI *******/






