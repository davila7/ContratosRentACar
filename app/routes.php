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
Route::get('/IndexAlumno','UsuarioController@IndexAlumno');


//USUARIOS
Route::get('/LoginUsuario','UsuarioController@LoginUsuarioGet');
Route::get('/CerrarSesion','UsuarioController@CerrarSesionGet');
Route::get('/ListaUsuarios','UsuarioController@ListaUsuarios');
Route::get('/CrearUsuario','UsuarioController@CrearUsuarioGet');
Route::post('/CrearUsuario','UsuarioController@CrearUsuarioPost');
Route::get('/BorrarUsuario/{usuario_id}','UsuarioController@BorrarUsuarioGet');
Route::get('/EditarUsuario/{usuario_id}','UsuarioController@EditarUsuarioGet');
Route::post('/EditarUsuario','UsuarioController@EditarUsuarioPost');
Route::get('/HorarioUsuario/{usuario_id}','UsuarioController@HorarioUsuarioGet');
Route::get('/GuardaHorario','UsuarioController@GuardaHorarioUsuarioGet');
Route::get('/BorrarHorario','UsuarioController@BorrarHorarioGet');
Route::get('/ListaAlumnoExamenes/{user_id}','UsuarioController@ListaAlumnoExamenesGet');
Route::get('/AgregarExamenAlumno/{id_examen}/{id_usuario}','UsuarioController@AgregarExamenAlumnoGet');
Route::get('/QuitarExamenAlumno/{id_examen}/{id_usuario}','UsuarioController@QuitarExamenAlumnoGet');



//PLANES
Route::get('/ListaPlanes','UsuarioController@ListaPlanes');
Route::get('/CrearPlan','UsuarioController@CrearPlanGet');
Route::post('/CrearPlan','UsuarioController@CrearPlanPost');
Route::get('/BorrarPlan/{plan_id}','UsuarioController@BorrarPlanGet');
Route::get('/EditarPlan/{plan_id}','UsuarioController@EditarPlanGet');
Route::post('/EditarPlan','UsuarioController@EditarPlanPost');


//EXAMENES
Route::get('/ListaExamenes','ExamenesController@ListaExamenes');
Route::get('/CrearExamen','ExamenesController@CrearExamenGet');
Route::post('/CrearExamen','ExamenesController@CrearExamenPost');
Route::get('/BorrarExamen','ExamenesController@BorrarExamenGet');
Route::get('/EditarExamen/{examen_id}','ExamenesController@EditarExamenGet');
Route::post('/EditarExamen','ExamenesController@EditarExamenPost');
Route::get('/ExamenUsuarios','ExamenesController@ExamenUsuariosGet');
Route::get('/AgregarPreguntaExamen/{id_examen}/{id_pregunta}','ExamenesController@AgregarPreguntaExamenGet');
Route::get('/QuitarPreguntaExamen/{id_examen}/{id_pregunta}','ExamenesController@QuitarPreguntaExamenGet');
Route::get('/ListaExamenAlumnos/{id_examen}','ExamenesController@ListaExamenAlumnosGet');
Route::get('/RealizarExamen/{id_user}/{id_examen}','ExamenesController@RealizarExamenGet');



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






