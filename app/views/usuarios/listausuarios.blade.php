@extends('layouts.layout')
@section('head')
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
@if($user->esadmin == 1)
Administrador
@else
Alumno
@endif
</td>
<td>
{{ HTML::link('users/delete/'.$user->id,'Examenes',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
</td>
<td>
{{ HTML::link('users/delete/'.$user->id,'Horario',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
</td>
<td>
{{ HTML::link('users/update/'.$user->id,'Editar Usuario',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
</td>
<td>
{{ HTML::link('users/delete/'.$user->id,'Borrar Usuario',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
</td>
</td>
</tr>
        
    @endforeach
	</lu>
@else
No existen usuarios conectados
@endif
</table>
@stop