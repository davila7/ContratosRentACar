@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/editarexamen.js') }}
@stop
@section('titulo')
CMA/Editar Examen
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Editar Examen</h1>
<br/>
{{ HTML::link('ListaExamenes','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
{{ Form::open(array('url' => 'EditarExamen', 'id'=>'submit_examen')) }}
<input type="hidden" name="id" value="{{ $examen->id }}">
<table class="table table-hover">
	<tr>
		<th>
			Nombre Examen
		</th>
		<th>
			<input type="text" name="nombre" placeholder="Ingresar un nombre" value="{{ $examen->nombre }}" required>
		</th>
	</tr>
	<tr>
		@if($preg != null)
		<th colspan="2">
			<table class="table">
				<tr>
					<th>
						Pregunta
					</th>
					<th>
						Agregar/Quitar
					</th>
					</tr>
			@if($preg != null)
			<lu>
    		@foreach($preg as $p)
    		<tr>
				<td>
					{{ $p['texto'] }} 
				</td>
				<td>
					<input type="button" class="btn btn-default @if(!$p['existe']) agregar_pregunta @else quitar_pregunta @endif" 
					value="@if(!$p['existe']) Agregar @else Quitar @endif" 
					data-id-examen="{{ $examen->id }}" data-id-pregunta="{{ $p['id'] }}">
				</td>
			</tr>
    		@endforeach
			</lu>
			@else
			No existen Preguntas
			@endif
			</table>
		</th>
		@else
			No existen preguntas
		@endif
	</tr>
	<tr>
		<th>
			<input type="submit" value="Guardar">
		</th>
	</tr>
</table>
{{ Form::close() }}
@stop