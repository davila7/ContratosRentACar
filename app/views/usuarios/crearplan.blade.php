@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/crearplan.js') }}
{{ HTML::script('js/lib/jquery.ui.js') }}
@stop
@section('titulo')
CMA/Crear Plan
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Crear Plan</h1>
<br/>
{{ HTML::link('ListaPlanes','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
{{ Form::open(array('url' => 'CrearPlan', 'id'=>'form_usuario')) }}
<table class="table table-hover">
	<tr>
		<th>
			Nombre Plan
		</th>
		<th>
			<input type="text" name="nombre" placeholder="Ingresar un nombre" required>
		</th>
	</tr>
	<tr>
		<th>
			Valor
		</th>
		<th>
			<input type="text" name="valor" placeholder="Ingresar un valor" required>
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