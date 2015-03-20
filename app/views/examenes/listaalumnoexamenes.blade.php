@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/listaalumnoexamenes.js') }}
@stop
@section('titulo')
CMA/Lista de Examenes de este Alumno
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Alumno {{ $user->nombre }}</h1>
<br/>
{{ HTML::link('ListaUsuarios','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
<table class="table">
		<tr>
		@if($examenes != null)
		<th colspan="2">
			<table class="table table-hover">
				<tr>
					<th>
						Examen
					</th>
					<th>
						Agregar/Quitar
					</th>
					</tr>
			@if($examenes != null)
			<lu>
    		@foreach($examenes as $e)
    		<tr>
				<td>
					{{ $e['nombre'] }} 
				</td>
				<td>
					<input type="button" class="btn btn-default @if(!$e['existe']) agregar_examen @else quitar_examen @endif" 
					value="@if(!$e['existe']) Agregar @else Quitar @endif" 
					data-id-usuario="{{ $user->id }}" data-id-examen="{{ $e['id'] }}">
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
</table>
@stop