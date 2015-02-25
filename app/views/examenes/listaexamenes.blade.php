@extends('layouts.layout')
@section('head')

@stop
@section('titulo')
CMA/Lista de Examenes
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Examenes</h1>
<br/>
{{ HTML::link('indexcma','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
{{ HTML::link('CrearExamen','Crear Examen',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
{{ HTML::link('ListaPreguntas','Preguntas',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
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
			Ver Alumnos
		</th>
		<th>
			Preguntas
		</th>
		<th>
			Editar
		</th>
		<th>
			Eliminar
		</th>
		</tr>
@if($examenes != null)
	<lu>
    @foreach($examenes as $examen)
    <tr>
		<td>
			{{ $examen->nombre }}
		</td>
		<td>
			{{ $examen->created_at }} 
		</td>
		<td>
			{{ HTML::link('ListaExamenAlumnos/'.$examen->id,'Alumnos',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
		</td>
		<td>
			{{ HTML::link('AgregarPreguntas/'.$examen->id,'Ver Preguntas',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
		</td>
		<td>
			{{ HTML::link('EditarUsuario/'.$examen->id,'Editar Usuario',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
		</td>
		<td>
			<input type="button" class="btn btn-default borrar_examen" value="Borrar Examen" data-id="{{ $examen->id }}">
		</td>
	</tr>
        
    @endforeach
	</lu>
@else
No existen usuarios
@endif
</table>
@stop