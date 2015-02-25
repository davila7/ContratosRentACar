<?php

class ExamenesController extends BaseController {
	protected $layout = 'layouts.layout';

	public function ListaExamenes(){
        $examenes = Examen::all();
        return View::make('examenes.listaexamenes', array('examenes'=>$examenes));
    }

    public function CrearExamenGet(){
    	$preguntas = Pregunta::all();
    	$preg = array();
    	foreach($preguntas as $p){
    		$preg[] = array(
    			$p->nombre => $p->nombre
    			);
    	}
        return View::make('examenes.crearexamen', array('preg'=>$preg));
    }

    public function CrearExamenPost(){
        $examen = new Examen;
        $examen->nombre = Input::get("nombre");
        $examen->save();
        $LastInsertId = $examen->id;

        return Redirect::to('ListaExamenes');
    }

    public function ListaPreguntas(){
        $preguntas = Pregunta::all();
        return View::make('examenes.listapreguntas', array('preguntas'=>$preguntas));
    }

    public function CrearPreguntaGet(){
        return View::make('examenes.crearpregunta');
    }

    public function CrearPreguntaPost(){
        $pregunta = new Pregunta;
        $pregunta->texto = Input::get("texto_pregunta");
        $pregunta->save();
        $LastInsertId = $pregunta->id;

        $resp1 = new Respuesta;
        $respuesta1 =  Input::get("respuesta1");
        $correcta1 = Input::get("correcta1");
        $resp1->texto = $respuesta1;
        $resp1->correcta = intval($correcta1);
        $resp1->orden = 1;
        $resp1->id_pregunta = $LastInsertId;
        $resp1->save();

        $resp2 = new Respuesta;
        $respuesta2 =  Input::get("respuesta2");
        $correcta2 = Input::get("correcta2");
        $resp2->texto = $respuesta2;
        $resp2->correcta = intval($correcta2);
        $resp2->orden = 2;
        $resp2->id_pregunta = $LastInsertId;
        $resp2->save();

        $resp3 = new Respuesta;
        $respuesta3 =  Input::get("respuesta3");
        $correcta3 = Input::get("correcta3");
        $resp3->texto = $respuesta3;
        $resp3->correcta = intval($correcta3);
        $resp3->orden = 3;
        $resp3->id_pregunta = $LastInsertId;
        $resp3->save();

        $resp4 = new Respuesta;
        $respuesta4 =  Input::get("respuesta4");
        $correcta4 = Input::get("correcta4");
        $resp4->texto = $respuesta4;
        $resp4->correcta = intval($correcta4);
        $resp4->orden = 4;
        $resp4->id_pregunta = $LastInsertId;
        $resp4->save();

        return Redirect::to('ListaPreguntas');


    }

     public function EditarPreguntaGet($id_pregunta){
        $pregunta = Pregunta::find($id_pregunta);
        $respuestas = DB::table('respuestas')
    		->where('id_pregunta', '=', $id_pregunta )
    		->get();
        if(is_null($pregunta))
        {
            return Redirect::to('ListaPreguntas');
        }
        return View::make('examenes.editarpregunta')->with('pregunta', $pregunta)
        											->with('respuestas', $respuestas);
    }

    public function EditarPreguntaPost(){
    	$id_pregunta = Input::get("id");
        $pregunta = Pregunta::find($id_pregunta);
        $pregunta->texto = Input::get("texto_pregunta");
        $pregunta->save();
        $LastInsertId = $pregunta->id;

        $respuesta1 =  Input::get("respuesta1");
        $correcta1 = Input::get("correcta1");
        $r1 = array(
        	'texto' => $respuesta1,
        	'correcta' => $correcta1
        	);
        DB::table('respuestas')
    		->where('id_pregunta', '=', $id_pregunta )
    		->where('orden', '=', 1)
    		->update($r1);

        $respuesta2 =  Input::get("respuesta2");
        $correcta2 = Input::get("correcta2");
        $r2 = array(
        	'texto' => $respuesta2,
        	'correcta' => $correcta2
        	);
        DB::table('respuestas')
    		->where('id_pregunta', '=', $id_pregunta )
    		->where('orden', '=', 2)
    		->update($r2);

        $respuesta3 =  Input::get("respuesta3");
        $correcta3 = Input::get("correcta3");
        $r3 = array(
        	'texto' => $respuesta3,
        	'correcta' => $correcta3
        	);
        DB::table('respuestas')
    		->where('id_pregunta', '=', $id_pregunta )
    		->where('orden', '=', 3)
    		->update($r3);

        $respuesta4 =  Input::get("respuesta4");
        $correcta4 = Input::get("correcta4");
        $r4 = array(
        	'texto' => $respuesta4,
        	'correcta' => $correcta4
        	);
        $resp4 = DB::table('respuestas')
    		->where('id_pregunta', '=', $id_pregunta )
    		->where('orden', '=', 4)
    		->update($r4);

        return Redirect::to('ListaPreguntas');
    }

    public function BorrarPreguntaGet(){
        $id = Input::get('id');
        $pregunta = Pregunta::find($id);
        $examen_respuesta = DB::table('examenpreguntas')
    		->where('id_pregunta', '=', $id )
    		->first();

        if(!is_null($examen_respuesta)){
        	return Response::json(array('msg'=>'0'));
        }else{
        	$respuestas = DB::table('respuestas')
    		->where('id_pregunta', '=', $id )
    		->delete();
        	//borra preguntas
        	$pregunta->delete();
        	return Response::json(array('msg'=>'1'));
        }
    }



}
