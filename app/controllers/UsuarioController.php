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
            return View::make('indexcma');
    }

    public function LoginUsuarioPost(){
        $credentials = array(
        'email' => Input::get('email'),
        'password' => Input::get('password'));
        if(Auth::attempt($credentials)){
            return View::make('indexcma');
        }else{
            return View::make('indexcma');
            //return Response::json(array('msg'=>'Credenciales no validas'),500);
        }   
    }

    public function ListaUsuarios(){
        $usuarios = Usuario::all();
        return View::make('usuarios.listausuarios', array('usuarios'=>$usuarios));
    }

    public function CrearUsuarioGet(){
        return View::make('usuarios.crearusuario');
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
        $user->email = Input::get("correo");
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

    public function isLoggedIn()
    {
        if(Auth::check()){
            $perfil = DB::table('perfiles')
                    ->where('usuario_id', Auth::user()->id)
                    ->first();
            return Response::json(array('isloggin'=>Auth::user()->usuario,'usuario_id'=>Auth::user()->id,
                'esCreado'=>Auth::user()->esCreado,'email'=>Auth::user()->email, 'primerLogin'=>Auth::user()->primerLogin, 'avatar'=>$perfil->avatar_path));
        }else{
        	return Response::json(array('isloggin'=>'false'));
        }   
    }
    
    public function get_logout()
    {
        Auth::logout();
        return Response::json(array('msg'=>'Logout'));
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
    
    public function post_index(){
        $credentials = array(
        'username' => Input::get('email'),
        'password' => Input::get('password'));
        
        if(Auth::attempt($credentials))
        {
            return Redirect::to('objetos/index');
        }
        else
        {
            return Redirect::back()->with_input();
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
    
    public function post_update($user_id)
    {
		$user = Usuario::find($user_id);
		
		if(is_null($user))
		{
			return Redirect::to('users/listausuarios');
		}
		//echo Input::get('esadmin');
        $user->nombre = Input::get('nombre');
        $user->email = Input::get('email');
		$user->esadmin = Input::get('esadmin');
        
        if(Input::has('password'))
        {
			$user->password = Input::get('password');
		}
        
        $user->save();
        
        return Redirect::to('users/listausuarios');
	}
}