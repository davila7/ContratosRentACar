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

    public function VerContratoPDF($id){
        header("Content-Type: application/pdf");
        $pathfile = public_path().'/pdfs/'.$id.'.pdf';

            $contrato = Contrato::find($id);
            $html = (string) View::make('contratos.contratopdf')->with("contrato",$contrato);
            File::put($pathfile, PDF::load(utf8_decode($html), 'A5', 'landscape')->output());
            return Response::make(file_get_contents($pathfile), 200, array('content-type'=>'application/pdf'));
    }
            /* Mail::send('emails.pdf', $data, function($message) use ($pathfile){
                $message->from('us@example.com', 'Laravel');
                $message->to('you@example.com');
                $message->attach($pathfile);
            });*/
}