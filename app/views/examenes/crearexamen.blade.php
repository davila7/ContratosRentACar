@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/crearexamen.js') }}
@stop
@section('titulo')
CMA/Crear Examen
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Crear Examen</h1>
<br/>
{{ HTML::link('ListaExamenes','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
{{ Form::open(array('url' => 'CrearExamen', 'id'=>'form_examen')) }}
<table class="table table-hover">
	<tr>
		<th>
			Nombre Examen
		</th>
		<th>
			<input type="text" name="nombre" placeholder="Ingresar un nombre" required>
		</th>
	</tr>
	<tr>
		@if($preg != null)
		<th>
			Seleccione las Preguntas
		</th>
		<th>
			<table>
			<tr>
				<td>
					{{ Form::select('pregunta', $preg) }}
				</td>
			</tr>
			<tr>
				<td>
					{{ Form::select('pregunta', $preg) }}
				</td>
			</tr>
			<tr>
				<td>
					{{ Form::select('pregunta', $preg) }}
				</td>
			</tr>
			<tr>
				<td>
					{{ Form::select('pregunta', $preg) }}
				</td>
			</tr>
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