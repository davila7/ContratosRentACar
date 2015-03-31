<?php

class ContratoController extends BaseController
{
	//siempre action_
	//$restful get y post
	protected $layout = 'layouts.layout';
    
    public function ListaContratos($busca = ""){
        if(!is_null($busca) && $busca != ""){
            $contratos = DB::table('contratos')
            ->where('es_valido', '=', 1 )
            ->orWhere('cliente','LIKE', '%'.$busca.'%')
            ->orWhere('codigo_garantia','LIKE', '%'.$busca.'%')
            ->orWhere('marca','LIKE', '%'.$busca.'%')
            ->orWhere('patente','LIKE', '%'.$busca.'%')
            ->get();
        }else{
            $contratos = DB::table('contratos')
            ->where('es_valido', '=', 1)
            ->get();
        }
       
        return View::make('contratos.listacontratos', array('contratos'=>$contratos))
                                                    ->with("busca",$busca);
    }

    public function CrearContratoGet(){
        return View::make('contratos.crearcontrato');
    }

    public function CrearContratoPost(){
        $contra = new Contrato;
        $contra->monto_garantia = Input::get("monto_garantia");
        $contra->codigo_garantia = Input::get("codigo_garantia");
        $contra->fecha_vencimiento_tc = date("Y-m-d",strtotime(Input::get("fecha_vencimiento_tc")));
        $contra->marca = Input::get("marca");
        $contra->modelo = Input::get("modelo");
        $contra->patente = Input::get("patente");
        $contra->fecha_inicial = date("Y-m-d",strtotime(Input::get("fecha_inicial")));
        $contra->hora_inicial = Input::get("hora_inicial");
        $contra->fecha_final = date("Y-m-d",strtotime(Input::get("fecha_final")));
        $contra->hora_final = Input::get("hora_final");
        $contra->lugar_entrega = Input::get("lugar_entrega");
        $contra->lugar_devolucion = Input::get("lugar_devolucion");
        $contra->cliente = Input::get("cliente");
        $contra->carnet_conducir = Input::get("carnet_conducir");
        $contra->vencimiento = date("Y-m-d",strtotime(Input::get("vencimiento")));
        $contra->domicilio = Input::get("domicilio");
        $contra->fono = Input::get("fono");
        $contra->email = Input::get("email");
        $contra->hotel = Input::get("hotel");
        $contra->conserje = Input::get("conserje");
        $contra->valor = Input::get("valor");
        $contra->deducible = Input::get("deducible");
        $contra->silla = Input::get("silla");
        $contra->gps = Input::get("gps");
        $contra->km_inicial = Input::get("km_inicial");
        $contra->km_final = Input::get("km_final");
        $contra->firma = Input::get('firma');
        $contra->es_valido = 1;
        $contra->save();
        $LastInsertId = $contra->id;

        return Redirect::to('ListaContratos');
    }

    public function BorrarContratoGet($id_contrato){
        $contra = Contrato::find($id_contrato);
        if(is_null($contra))
        {
            return Redirect::to('ListaContratos');
        }
        $contra->es_valido = 0;
        $contra->save();
        return Redirect::to('ListaContratos');
    }

    public function EditarContratoGet($id){
        $contrato = Contrato::find($id);
        return View::make('contratos.editarcontrato')->with("contrato",$contrato);
    }

    public function EditarContratoPost(){
        $contra = Contrato::find(Input::get("id"));
        $contra->monto_garantia = Input::get("monto_garantia");
        $contra->codigo_garantia = Input::get("codigo_garantia");
        $contra->fecha_vencimiento_tc = date("Y-m-d",strtotime(Input::get("fecha_vencimiento_tc")));
        $contra->marca = Input::get("marca");
        $contra->modelo = Input::get("modelo");
        $contra->patente = Input::get("patente");
        $contra->fecha_inicial = date("Y-m-d",strtotime(Input::get("fecha_inicial")));
        $contra->hora_inicial = Input::get("hora_inicial");
        $contra->fecha_final = date("Y-m-d",strtotime(Input::get("fecha_final")));
        $contra->hora_final = Input::get("hora_final");
        $contra->lugar_entrega = Input::get("lugar_entrega");
        $contra->lugar_devolucion = Input::get("lugar_devolucion");
        $contra->cliente = Input::get("cliente");
        $contra->carnet_conducir = Input::get("carnet_conducir");
        $contra->vencimiento = date("Y-m-d",strtotime(Input::get("vencimiento")));
        $contra->domicilio = Input::get("domicilio");
        $contra->fono = Input::get("fono");
        $contra->email = Input::get("email");
        $contra->hotel = Input::get("hotel");
        $contra->conserje = Input::get("conserje");
        $contra->valor = Input::get("valor");
        $contra->deducible = Input::get("deducible");
        $contra->silla = Input::get("silla");
        $contra->gps = Input::get("gps");
        $contra->km_inicial = Input::get("km_inicial");
        $contra->km_final = Input::get("km_final");
        $contra->firma = Input::get('firma');
        $contra->es_valido = 1;
        $contra->save();
        $LastInsertId = $contra->id;

        return Redirect::to('ListaContratos');
    }

    public function DetalleContratoGet($id){
        $contrato = Contrato::find($id);
        return View::make('contratos.detallecontrato')->with("contrato",$contrato);
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