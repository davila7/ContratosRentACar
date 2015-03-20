@extends('layouts.layout')
@section('head')

{{ HTML::script('js/functions/listaplanes.js') }}
@stop
@section('titulo')
CMA/Lista de Planes
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Planes</h1>
<br/>
{{ HTML::link('ListaUsuarios','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
{{ HTML::link('CrearPlan','Crear Plan',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
<table class="table table-hover">
	<tr>
		<th>
			Nombre Plan
		</th>
		<th>
			Valor
		</th>
		<th>
			Editar
		</th>
		<th>
			Eliminar
		</th>
		</tr>
@if($planes != null)
	<lu>
    @foreach($planes as $plan)
    <tr>
		<td>
			{{ $plan->nombre }}
		</td>
		<td>
			{{ $plan->valor }} 
		</td>
		<td>
			{{ HTML::link('EditarPlan/'.$plan->id,'Editar Plan',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
		</td>
		<td>
			<input type="button" class="btn btn-default borrar_plan" value="Borrar Plan" data-id="{{ $plan->id }}">
		</td>
	</tr>
        
    @endforeach
	</lu>
@else
No existen planes
@endif
</table>
@stop