<?php

class UsuarioController extends BaseController
{
	//siempre action_
	//$restful get y post
	protected $layout = 'layouts.layout';
    
    /**
     * Show the profile for the given user.
     */

    public function get_login()
    {
        return View::make('auth.login');
    }
    
    public function post_login()
    {
        $credentials = array(
        'email' => Input::json('email'),
        'password' => Input::json('password'));
        if(Auth::attempt($credentials)){
            return Response::json(array(
                        'msg'=>Auth::user()->usuario,
                        'usuario_id'=>Auth::user()->id
                        ));
        }else{
        	return Response::json(array('msg'=>'Credenciales no validas'),500);
        }   
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

    public function GetUser(){
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

    public function showProfile($id){
        $user = Usuario::find($id);

        return View::make('usuarios.profile', array('user' => $user));
    }
    
    public function ListaUsuarios(){
        $usuarios = Usuario::all();
        return View::make('usuarios.listausuarios', array('usuarios'=>$usuarios));
    }
    
	public function get_index(){
		$users = Usuario::all();
		return View::make('users.index')->with('users', $users);
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
	
    //Crea el User desde login Facebook
	public function CreateUserEsCreado(){
		$user = Usuario::find(Auth::user()->id);
        $user->usuario = Input::json("usuario");
        $user->email = Input::json("email");
		$user->password = Hash::make(Input::json("password"));
        $user->realpassword = Input::json("password");
        $user->esCreado = 1;
		$user->save();
		
         return Response::json(array('msg'=>Auth::user()->usuario));
	}

    //Crea el User desde 0
    public function CreateUser(){
        $user = new Usuario;
        $user->usuario = Input::json("nombre");
        $user->email = Input::json("email");
        $user->password = Hash::make(Input::json("password"));
        $user->realpassword = Input::json("password");
        $user->esCreado = 1;
        $user->save();

        $LastInsertId = $user->id;

        $perfil = new Perfiles;
        $perfil->usuario_id = $LastInsertId;
        $perfil->username = $user->usuario;
        $perfil->save();
        Auth::loginUsingId($LastInsertId);
        return Response::json(array('isloggin'=>Auth::user()->usuario,
        'esCreado'=>Auth::user()->esCreado,'email'=>Auth::user()->email,'avatar'=>$perfil->avatar_path));
    }

    //Crea el User desde 0
    public function EditarUsuario(){
        $user = Usuario::find(Auth::user()->id);
        $user->usuario = Input::json("usuario");
        $user->email = Input::json("email");
        $user->save();
        return Response::json(array('msg'=>'ok'));
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
	
	public function get_delete($user_id)
	{
		$user = Usuario::find($user_id);
		
		if(is_null($user))
		{
			return Redirect::to('users/listausuarios');
		}
		
		$user->delete();
		return Redirect::to('users/listausuarios');
	}
    
    public function get_listausuarios()
	{
        $users = Usuario::all();
		return View::make('users.listausuarios')->with('users', $users);
	}
    
    
    
    public function get_update($user_id)
    {
		$user = Usuario::find($user_id);
		
		if(is_null($user))
		{
			return Redirect::to('users/listausuarios');
		}
		
        //return $user->nombre;
		return View::make('users.update')->with('user', $user);
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