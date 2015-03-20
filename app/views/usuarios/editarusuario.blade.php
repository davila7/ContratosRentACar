@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/crearusuario.js') }}
@stop
@section('titulo')
Missing/Lista de Usuarios
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Editar Usuario</h1>
<br/>
{{ HTML::link('ListaUsuarios','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
{{ Form::open(array('url' => 'EditarUsuario', 'id'=>'form_usuario')) }}
<input type="hidden" name="id" value="{{ $user->id }}">
<table class="table table-hover">
	<tr>
		<th>
			Nombre Usuario 
		</th>
		<th>
			<input type="text" name="nombre" placeholder="Ingresar un nombre" value="{{ $user->nombre }}" required>
		</th>
	</tr>
	<tr>
		<th>
			Apellido Paterno
		</th>
		<th>
			<input type="text" name="apellido_paterno" placeholder="Ingresar un apellido paterno" value="{{ $user->apellido_paterno }}" required>
		</th>
	</tr>
	<tr>
		<th>
			Apellido Materno 
		</th>
		<th>
			<input type="text" name="apellido_materno" placeholder="Ingresar un apellido materno" value="{{ $user->apellido_materno }}" required>
		</th>
	</tr>
	<tr>
		<th>
			Rut 
		</th>
		<th>
			<input type="text" name="rut" placeholder="Ingresar rut" value="{{ $user->rut }}" required>
		</th>
	</tr>
	<tr>
		<th>
			Fecha Nacimiento 
		</th>
		<th>
			<input type="text" name="fecha_nacimiento" class="datepicker" placeholder="Ingresar un fecha nacimiento" value="{{ $user->fecha_nacimiento }}">
		</th>
	</tr>
	<tr>
		<th>
			Dirección 
		</th>
		<th>
			<input type="text" name="direccion" placeholder="Ingresar una direccion" value="{{ $user->direccion }}" >
		</th>
	</tr>
	<tr>
		<th>
			Correo 
		</th>
		<th>
			<input type="text" name="email" placeholder="Ingresar un correo" value="{{ $user->correo }}" id="correo">
		</th>
	</tr>
	<tr>
		<th>
			Permiso 
		</th>
		<th>
			<select name="permiso">
				<option value="3" {{ $user->id_permiso == 3 ? 'selected' : '' }}>Alumno</option>
				<option value="2" {{ $user->id_permiso == 2 ? 'selected' : '' }}>Profesor</option>
				<option value="1" {{ $user->id_permiso == 1 ? 'selected' : '' }}>Administrador</option>
			</select>
		</th>
	</tr>
	<tr>
		<th>
			Passowrd
		</th>
		<th>
			<input type="text" name="password" placeholder="Ingresar un password" value="{{ $user->realpassword }}" required>
		</th>
	</tr>
	<tr>
		<th>
			<input type="submit" value="Guardar">
		</th>
	</tr>
</table>
{{ Form::close() }}
@stop