<?php

class UsuarioController extends BaseController
{
	//siempre action_
	//$restful get y post
	protected $layout = 'layouts.layout';
    
    /**
     * Show the profile for the given user.
     */

    public function Index(){
        if (Auth::check()){
            return View::make('index');
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
            return Response::json(array('msg'=>Auth::check()));
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

            $permiso = $us->getPermiso($us->id_permiso);

            $usuario[] = array(
                "id" => $us->id,
                "rut" => $us->rut,
                "nombre" => $us->nombre,
                "apellido_paterno" => $us->apellido_paterno,
                "apellido_materno" => $us->apellido_materno,
                "email" => $us->email,
                "permiso" => $permiso
                );
        }
        return View::make('usuarios.listausuarios', array('usuarios'=>$usuario));
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

}