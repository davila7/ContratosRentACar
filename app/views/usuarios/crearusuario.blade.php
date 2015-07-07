@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/crearusuario.js') }}
{{ HTML::script('js/lib/jquery.ui.js') }}
@stop
@section('titulo')
CMA/Crear Usuario
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Crear Usuario</h1>
<br/>
{{ HTML::link('ListaUsuarios','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
{{ Form::open(array('url' => 'CrearUsuario', 'id'=>'form_usuario')) }}
<table class="table table-hover">
	<tr>
		<th>
			Nombre Usuario 
		</th>
		<th>
			<input type="text" name="nombre" placeholder="Ingresar un nombre" required>
		</th>
	</tr>
	<tr>
		<th>
			Apellido Paterno
		</th>
		<th>
			<input type="text" name="apellido_paterno" placeholder="Ingresar un apellido paterno" required>
		</th>
	</tr>
	<tr>
		<th>
			Apellido Materno 
		</th>
		<th>
			<input type="text" name="apellido_materno" placeholder="Ingresar un apellido materno" required>
		</th>
	</tr>
	<tr>
		<th>
			Rut 
		</th>
		<th>
			<input type="text" name="rut" placeholder="Ingresar rut" required>
		</th>
	</tr>
	<tr>
		<th>
			Fecha Nacimiento 
		</th>
		<th>
			<input type="text" name="fecha_nacimiento" class="datepicker" placeholder="Ingresar un fecha nacimiento">
		</th>
	</tr>
	<tr>
		<th>
			Dirección 
		</th>
		<th>
			<input type="text" name="direccion" placeholder="Ingresar una direccion" >
		</th>
	</tr>
	<tr>
		<th>
			Correo 
		</th>
		<th>
			<input type="text" name="correo" placeholder="Ingresar un correo" id="correo">
		</th>
	</tr>
	<tr>
		<th>
			Permiso 
		</th>
		<th>
			<select name="permiso">
				<option value="0" selected>Seleccione una opción</option>
				<option value="3" >Alumno</option>
				<option value="2">Profesor</option>
				<option value="1">Administrador</option>
			</select>
		</th>
	</tr>
	<tr>
		<th>
			Passowrd
		</th>
		<th>
			<input type="text" name="password" placeholder="Ingresar un password" required>
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