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
Route::get('/indexcma','UsuarioController@IndexCMA');


//USUARIOS
Route::post('/LoginUsuario','UsuarioController@LoginUsuarioPost');
Route::get('/ListaUsuarios','UsuarioController@ListaUsuarios');
Route::get('/CrearUsuario','UsuarioController@CrearUsuarioGet');
Route::post('/CrearUsuario','UsuarioController@CrearUsuarioPost');
Route::get('/BorrarUsuario/{usuario_id}','UsuarioController@BorrarUsuarioGet');
Route::get('/EditarUsuario/{usuario_id}','UsuarioController@EditarUsuarioGet');
Route::post('/EditarUsuario','UsuarioController@EditarUsuarioPost');
Route::get('/HorarioUsuario/{usuario_id}','UsuarioController@HorarioUsuarioGet');
Route::get('/GuardaHorario','UsuarioController@GuardaHorarioUsuarioGet');
Route::get('/BorrarHorario','UsuarioController@BorrarHorarioGet');


//EXAMENES
Route::get('/ListaExamenes','ExamenesController@ListaExamenes');
Route::get('/CrearExamen','ExamenesController@CrearExamenGet');
Route::post('/CrearExamen','ExamenesController@CrearExamenPost');

//PREGUNTAS
Route::get('/ListaPreguntas','ExamenesController@ListaPreguntas');
Route::get('/CrearPregunta','ExamenesController@CrearPreguntaGet');
Route::post('/CrearPregunta','ExamenesController@CrearPreguntaPost');
Route::get('/BorrarPregunta','ExamenesController@BorrarPreguntaGet');
Route::get('/EditarPregunta/{pregunta_id}','ExamenesController@EditarPreguntaGet');
Route::post('/EditarPregunta','ExamenesController@EditarPreguntaPost');

















/************ FIN RUTA CMA ***************/












/************ RUTA DE CACHEI ***************/


//USUARIOS








/***** FIN RUTA CEACHEI *******/






