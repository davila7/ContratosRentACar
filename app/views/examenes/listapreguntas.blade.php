@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/listapreguntas.js') }}
@stop
@section('titulo')
CMA/Lista de Preguntas
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Preguntas</h1>
<br/>
{{ HTML::link('ListaExamenes','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
{{ HTML::link('CrearPregunta','Crear Pregunta',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
<table class="table table-hover">
	<tr>
		<th>
			Nombre
		</th>
		<th>
			Creado
		</th>
		<th>
			Editar
		</th>
		<th>
			Eliminar
		</th>
		</tr>
@if($preguntas != null)
	<lu>
    @foreach($preguntas as $pregunta)
    <tr>
		<td>
			{{ $pregunta->texto }}
		</td>
		<td>
			{{ $pregunta->created_at }} 
		</td>
		<td>
			{{ HTML::link('EditarPregunta/'.$pregunta->id,'Editar Pregunta',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
		</td>
		<td>
			<input type="button" class="btn btn-default borrar_pregunta" value="Borrar Pregunta" data-id="{{ $pregunta->id }}">
		</td>
	</tr>
        
    @endforeach
	</lu>
@else
No existen usuarios
@endif
</table>
@stop