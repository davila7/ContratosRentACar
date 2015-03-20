@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/listaexamen.js') }}
@stop
@section('titulo')
CMA/Lista de Alumnos de este Examen
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Examen {{ $examen->nombre }}</h1>
<br/>
{{ HTML::link('ListaExamenes','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
<table class="table table-hover">
	<tr>
		<th>
			Nombre
		</th>
		<th>
			Quitar Examen
		</th>
		</tr>
@if($usuarios != null)
	<lu>
    @foreach($usuarios as $usuario)
    <tr>
		<td>
			{{ $usuario->nombre }}
		</td>
		<td>
			<input type="button" class="btn btn-default quitar_examen" value="Quitar Examen" data-id-usuario="{{ $usuari->id }}" data-id-examen="{{ $examen->id }}">
		</td>
	</tr>
        
    @endforeach
	</lu>
@else
No existen Alumnos
@endif
</table>
@stop