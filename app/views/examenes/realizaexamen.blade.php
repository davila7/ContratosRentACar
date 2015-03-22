@extends('layouts.layout')
@section('head')

@stop
@section('titulo')
CMA/Realizar Examen
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Realizar Examen {{ $examen->nombre }}</h1>
<br/>
<br/>
{{ Form::open(array('url' => 'EditarPregunta', 'id'=>'form_pregunta')) }}
<input type="hidden" name="id" value="{{ $pregunta->id }}">
<table class="table table-hover">
	<tr>
		<th>
			Texto Pregunta 
		</th>
		<th>
			¿<input type="text" name="texto_pregunta" placeholder="Ingresar la pregunta" value="{{ $pregunta->texto }}" required>?
		</th>
	</tr>
	<tr>
		<th>
			Alternativas de respuesta
		</th>
		<td>
			<table>
				@foreach($respuestas as $key => $resp)
				<tr>
					<td>
						<input type="text" name="respuesta{{ $resp->orden }}" placeholder="Ingresar una respuesta" value="{{ $resp->texto }}" required>
					</td>
					<td>
						<input type="checkbox" name="correcta{{ $resp->orden }}" value="1" {{ $resp->correcta == 1 ? 'checked' : '' }} > correcta
					</td>
				<tr>
				@endforeach
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