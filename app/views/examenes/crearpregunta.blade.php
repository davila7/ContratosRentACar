@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/crearpregunta.js') }}
@stop
@section('titulo')
CMA/Crear Pregunta
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Crear Pregunta</h1>
<br/>
{{ HTML::link('ListaPreguntas','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
{{ Form::open(array('url' => 'CrearPregunta', 'id'=>'form_pregunta')) }}
<table class="table table-hover">
	<tr>
		<th>
			Pregunta
		</th>
		<th>
			¿<input type="text" name="texto_pregunta" placeholder="Ingresar una pregunta" required>?
		</th>
	</tr>
	<tr>
		<th>
			Alternativas de respuesta
		</th>
		<td>
			<table>
				<tr>
					<td>
						<input type="text" name="respuesta1" placeholder="Ingresar una respuesta" required>
					</td>
					<td>
						<input type="checkbox" name="correcta1" value="1" > correcta
					</td>
				<tr>
				<tr>
					<td>
						<input type="text" name="respuesta2" placeholder="Ingresar una respuesta" required>
					</td>
					<td>
						<input type="checkbox" name="correcta2" value="1" > correcta
					</td>
				<tr>
				<tr>
					<td>
						<input type="text" name="respuesta3" placeholder="Ingresar una respuesta" required>
					</td>
					<td>
						<input type="checkbox" name="correcta3" value="1" > correcta
					</td>
				<tr>
				<tr>
					<td>
						<input type="text" name="respuesta4" placeholder="Ingresar una respuesta" required>
					</td>
					<td>
						<input type="checkbox" name="correcta4" value="1" > correcta
					</td>
				<tr>
			</table>
		</td>
	</tr>
	<tr>
		<th>
			<input type="submit" value="Guardar">
		</th>
	</tr>
</table>
{{ Form::close() }}
@stop