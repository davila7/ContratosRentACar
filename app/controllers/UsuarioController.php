<?php

class UsuarioController extends BaseController
{
	//siempre action_
	//$restful get y post
	protected $layout = 'layouts.layout';
    
    /**
     * Show the profile for the given user.
     */

    public function IndexCMA(){
        if (Auth::check()){
            return View::make('indexcma');
        }else{
            return View::make('home'); 
        }
    }

    public function IndexAlumno(){
        if (Auth::check()){
            $id_user = Auth::id();
            $user = Usuario::find($id_user);
            $examenusuarios = DB::table('examenusuarios')
                ->where('id_usuario', '=', $id_user )
                ->lists('id_examen');

            $examenes = DB::table('examenes')
                ->whereIn('id',  $examenusuarios )
                ->get();
            
            return View::make('usuarios.misexamenes')
                                                        ->with('user', $user)
                                                        ->with('examenes', $examenes);
        }else{
            return View::make('home'); 
        }
    }

    public function LoginUsuarioGet(){
        $credentials = array(
        'email' => Input::get('email'),
        'password' => Input::get('password'));
        if(Auth::attempt($credentials)){
            $user = Usuario::where('email', '=', Input::get('email'))->firstOrFail();
            Auth::login($user);
            return Response::json(array('msg'=>Auth::check(),'tipo'=>$user->id_permiso));
        }else{
            return Response::json(array('msg'=>'0'));
        }   
    }

     public function CerrarSesionGet(){
        Auth::logout();
        return View::make('home'); 
    }

    public function ListaUsuarios(){
        $usuarios = Usuario::all();

        $usuario = array();

        foreach($usuarios as $us){

            $p = "Sin Plan";

            $plan = DB::table('planes')
                    ->where('id', $us->id_plan)
                    ->first();

            if($plan){
                $p = $plan->nombre;
            }

            $permiso = $us->getPermiso($us->id_permiso);

            $usuario[] = array(
                "id" => $us->id,
                "rut" => $us->rut,
                "nombre" => $us->nombre,
                "apellido_paterno" => $us->apellido_paterno,
                "apellido_materno" => $us->apellido_materno,
                "email" => $us->email,
                "permiso" => $permiso,
                "plan" => $p
                );
        }
        return View::make('usuarios.listausuarios', array('usuarios'=>$usuario));
    }

    public function CrearUsuarioGet(){
        $planes = Planes::all();
        return View::make('usuarios.crearusuario', array('planes'=>$planes));
    }

    public function CrearUsuarioPost(){
        $user = new Usuario;
        $user->nombre = Input::get("nombre");
        $user->apellido_paterno = Input::get("apellido_paterno");
        $user->apellido_materno = Input::get("apellido_materno");
        $user->password = Hash::make(Input::get("password"));
        $user->realpassword = Input::get("password");
        $user->fecha_nacimiento = Input::get("fecha_nacimiento");
        $user->rut = Input::get("rut");
        $user->direccion = Input::get("direccion");
        $user->id_permiso = Input::get("permiso");
        $user->id_plan = Input::get("plan");
        $user->email = Input::get("correo");
        $user->save();
        $LastInsertId = $user->id;

        return Redirect::to('ListaUsuarios');
    }

    public function BorrarUsuarioGet($usuario_id){
        $user = Usuario::find($usuario_id);
        if(is_null($user))
        {
            return Redirect::to('ListaUsuarios');
        }
        $user->delete();
        return Redirect::to('ListaUsuarios');
    }

    public function EditarUsuarioGet($usuario_id){
        $user = Usuario::find($usuario_id);
        if(is_null($user))
        {
            return Redirect::to('ListaUsuarios');
        }
        return View::make('usuarios.editarusuario')->with('user', $user);
    }

    public function EditarUsuarioPost(){
        $user = Usuario::find(Input::get("id"));
        $user->nombre = Input::get("nombre");
        $user->apellido_paterno = Input::get("apellido_paterno");
        $user->apellido_materno = Input::get("apellido_materno");
        $user->password = Hash::make(Input::get("password"));
        $user->realpassword = Input::get("password");
        $user->fecha_nacimiento = Input::get("fecha_nacimiento");
        $user->rut = Input::get("rut");
        $user->direccion = Input::get("direccion");
        $user->id_permiso = Input::get("permiso");
        $user->email = Input::get("email");
        $user->save();
        $LastInsertId = $user->id;

        return Redirect::to('ListaUsuarios');
    }

    public function HorarioUsuarioGet($usuario_id){
        $user = Usuario::find($usuario_id);
        $horario = DB::table('horarios')
                    ->where('id_usuario', $usuario_id)
                    ->get();
        if(is_null($user))
        {
            return Redirect::to('ListaUsuarios');
        }
        return View::make('usuarios.horariousuario')->with('user', $user)->with('horario', $horario);
    }

    public function GuardaHorarioUsuarioGet(){
        
        if(Request::ajax()){
        $horario = new Horario;
        $horario->ano_start =  Input::get('ano_start');
        $horario->mes_start =  Input::get('mes_start');
        $horario->dia_start =  Input::get('dia_start');
        $horario->hora_start =  Input::get('hora_start');
        $horario->minuto_start =  Input::get('minuto_start');
        $horario->ano_end =  Input::get('ano_end');
        $horario->mes_end =  Input::get('mes_end');
        $horario->dia_end =  Input::get('dia_end');
        $horario->hora_end =  Input::get('hora_end');
        $horario->minuto_end =  Input::get('minuto_end');
        $horario->titulo =  Input::get('title');
        $horario->todo_dia =  Input::get('todo_dia');
        $horario->id_usuario =  Input::get('id_usuario');
        $horario->save();
        
        }
    }

    public function BorrarHorarioGet(){
        $id = Input::get('id');
        $horario = Horario::find($id);
        $horario->delete();
    }



    public function ListaPlanes(){
        $planes = Planes::all();
        return View::make('usuarios.listaplanes', array('planes'=>$planes));
    }

    public function CrearPlanGet(){
        return View::make('usuarios.crearplan');
    }

    public function CrearPlanPost(){
        $plan = new Planes;
        $plan->nombre = Input::get("nombre");
        $plan->valor = Input::get("valor");
        $plan->save();
        $LastInsertId = $plan->id;

        return Redirect::to('ListaPlanes');
    }

    public function BorrarPlanGet($plan_id){
        $plan = Planes::find($plan_id);
        if(is_null($plan))
        {
            return Redirect::to('ListaPlanes');
        }

        $usuario = DB::table('usuarios')
            ->where('id_plan', '=', $plan_id )
            ->first();

        if(!is_null($usuario)){
            return Response::json(array('msg'=>'0'));
        }else{
            //borra plan si nadie lo tiene
            $plan->delete();
            return Response::json(array('msg'=>'1'));
        }
        return Redirect::to('ListaPlanes');
    }

    public function EditarPlanGet($plan_id){
        $plan = Planes::find($plan_id);
        if(is_null($plan))
        {
            return Redirect::to('ListaPlanes');
        }
        return View::make('usuarios.editarplan')->with('plan', $plan);
    }

    public function EditarPlanPost(){
        $plan = Planes::find(Input::get("id"));
        $plan->nombre = Input::get("nombre");
        $plan->valor = Input::get("valor");
        $plan->save();
        $LastInsertId = $plan->id;

        return Redirect::to('ListaPlanes');
    }

     public function ListaAlumnoExamenesGet($id_user){
        $user = Usuario::find($id_user);
        $examenusuarios = DB::table('examenusuarios')
            ->where('id_usuario', '=', $id_user )
            ->lists('id_examen');

        $exam = Examen::all();
        $examenes = array();
        foreach($exam as $e){
            $existe = false;
            if(in_array($e->id, $examenusuarios)){
                $existe = true;
            }
            $examenes[] = array(
                "id"=>$e->id,
                "nombre"=>$e->nombre,
                "existe"=>$existe
            );
        }
        return View::make('examenes.listaalumnoexamenes')
                                                    ->with('user', $user)
                                                    ->with('examenes', $examenes);
    }

    public function AgregarExamenAlumnoGet($id_examen, $id_usuario){
        $examenusuario = new ExamenUsuario;
        $examenusuario->id_examen = $id_examen;
        $examenusuario->id_usuario = $id_usuario;
        $examenusuario->save();
        return Response::json(array('msg'=>'ok'));
    }

    public function QuitarExamenAlumnoGet($id_examen, $id_usuario){
        $examen_preguntas = DB::table('examenusuarios')
            ->where('id_examen', '=', $id_examen )
            ->where('id_usuario','=',$id_usuario)
            ->delete();
        return Response::json(array('msg'=>'ok'));
    }

    public function ObtieneUserLogeado(){
        if(Auth::check()){
            $user = Usuario::find(Auth::user()->id);
            $nombre = $user->usuario;
            $email = $user->email;
            $esCreado = $user->esCreado;
            $id = $user->id;
            return Response::json(array('msg'=>'true','nombre'=>$nombre,'email'=>$email, 'esCreado'=>$esCreado));
        }else{
            return Response::json(array('msg'=>'false'));
        }  
    }
    
    //cambia la imagen del perfil
    public function CargaImagenPerfil(){
        if (Input::hasFile('file')){
            $perfil = DB::table('perfiles')
                    ->where('usuario_id', Auth::user()->id)
                    ->first();
            $file = Input::file('file');
            $destinationPath = '../public/perfil';
            $extension =$file->getClientOriginalExtension(); 
            $file_name = $file->getClientOriginalName();
            $filename = $file_name.'.'.$extension;
            $perfil->avatar_path = $filename;
            $perfil->save();
            $upload_success = $file->move($destinationPath, $filename);
        }
        return Response::json(array('msg'=>'ok'));
    }
}