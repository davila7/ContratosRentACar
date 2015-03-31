@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/editarplan.js') }}
@stop
@section('titulo')
CMA/Editar Plan
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Editar Plan</h1>
<br/>
{{ HTML::link('ListaPlanes','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
{{ Form::open(array('url' => 'EditarPlan', 'id'=>'form_usuario')) }}
<input type="hidden" name="id" value="{{ $plan->id }}">
<table class="table table-hover">
	<tr>
		<th>
			Nombre Plan 
		</th>
		<th>
			<input type="text" name="nombre" placeholder="Ingresar un nombre" value="{{ $plan->nombre }}" required>
		</th>
	</tr>
	<tr>
		<th>
			Valor
		</th>
		<th>
			<input type="text" name="valor" placeholder="Ingresar un valor" value="{{ $plan->valor }}" required>
		</th>
	</tr>
	<tr>
		<th>
			<input type="submit" class="btn btn-info" value="Guardar">
		</th>
	</tr>
</table>
{{ Form::close() }}
@stop