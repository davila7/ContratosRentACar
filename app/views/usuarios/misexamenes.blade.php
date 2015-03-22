@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/misexamenes.js') }}
@stop
@section('titulo')
CMA/Lista de mis examenes
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1>Bienvenido {{ $user->nombre }}</h1><br/>
<h3>Examenes por realizar</h3>
<br/>
<br/>
<table class="table">
		<tr>
		@if($examenes != null)
		<th colspan="2">
			<table class="table table-hover">
				<tr>
					<th>
						Examenes
					</th>
					<th>
					</th>
					</tr>
			@if($examenes != null)
			<lu>
    		@foreach($examenes as $e)
    		<tr>
				<td>
					{{ $e->nombre }} 
				</td>
				<td>
					{{ HTML::link('RealizarExamen/'.$user->id.'/'.$e->id,'Realizar',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
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

<br/>
<h3>Examenes Realizados</h3>
<br/>
@stop