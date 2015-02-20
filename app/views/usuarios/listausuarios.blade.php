@extends('layouts.layout')
@section('head')

{{ HTML::script('js/functions/listausuarios.js') }}
@stop
@section('titulo')
Missing/Lista de Usuarios
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Usuarios</h1>
<br/>
{{ HTML::link('indexcma','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
{{ HTML::link('CrearUsuario','Crear Usuario',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
<table class="table table-hover">
	<tr>
		<th>
			Nombre Usuario
		</th>
		<th>
			Rut
		</th>
		<th>
			Correo
		</th>
		<th>
			Permiso
		</th>
		<th>
			Examenes
		</th>
		<th>
			Ver Horario
		</th>
		<th>
			Editar
		</th>
		<th>
			Eliminar
		</th>
		</tr>
@if($usuarios != null)
	<lu>
    @foreach($usuarios as $user)
    <tr>
		<td>
			{{ $user->nombre }} {{ $user->apellido_paterno}} {{$user->apellido_materno}}
		</td>
		<td>
			{{ $user->rut }} 
		</td>
		<td>
			{{ $user->correo }} 
		</td>
		<td>
			{{ $user->getPermiso($user->id_permiso) }}
		</td>
		<td>
			{{ HTML::link('users/delete/'.$user->id,'Examenes',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
		</td>
		<td>
			{{ HTML::link('users/delete/'.$user->id,'Horario',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
		</td>
		<td>
			{{ HTML::link('EditarUsuario/'.$user->id,'Editar Usuario',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
		</td>
		<td>
			<input type="button" class="btn btn-default borrar_usuario" value="Borrar Usuario" data-id="{{ $user->id }}">
		</td>
	</tr>
        
    @endforeach
	</lu>
@else
No existen usuarios
@endif
</table>
@stop