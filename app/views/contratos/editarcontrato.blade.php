@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/editarcontrato.js') }}
@stop
@section('titulo')
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Editar Contrato</h1>
<br/>
{{ HTML::link('index','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
<div class="container">
{{ Form::open(array('url' => 'EditarContrato', 'id'=>'form_usuario')) }}
<input type="hidden" id="firma" value='{{ $contrato->firma }}' />
<input type="hidden" id="id" name="id" value='{{ $contrato->id }}' />
<table class="table table-hover">
	<tr>
		<td>
			Monto Garantía 
		</td>
		<td>
			<input type="text" name="monto_garantia" placeholder="Ingresar un monto" value="{{ $contrato->monto_garantia }}" required>
		</td>
	</tr>
	<tr>
		<td>
			Código Garantía
		</td>
		<td>
			<input type="text" name="codigo_garantia" placeholder="Ingresar un codigo" value="{{ $contrato->codigo_garantia }}" required>
		</td>
	</tr>
	<tr>
		<td>
			Fecha Vencimiento TC
		</td>
		<td>
			<input type="text" name="fecha_vencimiento_tc" value="{{ $contrato->fecha_vencimiento_tc }}" class="datepicker" placeholder="Ingresar una fecha" required>
		</td>
	</tr>
	<tr>
		<td>
			Marca 
		</td>
		<td>
			<input type="text" name="marca" value="{{ $contrato->marca }}" placeholder="Ingresar una marca" required>
		</td>
	</tr>
	<tr>
		<td>
			Modelo
		</td>
		<td>
			<input type="text" name="modelo" value="{{ $contrato->modelo }}"  placeholder="Ingresar un modelo" required>
		</td>
	</tr>
	<tr>
		<td>
			Patente 
		</td>
		<td>
			<input type="text" name="patente" value="{{ $contrato->patente }}"  placeholder="Ingresar una patente" required>
		</td>
	</tr>
	<tr>
		<td>
			Fecha Inicial 
		</td>
		<td>
			<input type="text" name="fecha_inicial" value="{{ $contrato->fecha_inicial }}" class="datepicker" placeholder="Ingresar una fecha" required>
		</td>
	</tr>
	<tr>
		<td>
			Hora Inicial 
		</td>
		<td>
			<select name="hora_inicial">
				<option value="0" selected>Seleccione una opción</option>
				<option value="00:00" >00:00</option>
				<option value="01:00" >01:00</option>
				<option value="02:00" >02:00</option>
				<option value="03:00" >03:00</option>
				<option value="04:00" >04:00</option>
				<option value="05:00" >05:00</option>
				<option value="06:00" >06:00</option>
				<option value="07:00" >07:00</option>
				<option value="08:00" >08:00</option>
				<option value="09:00" >09:00</option>
				<option value="10:00" >10:00</option>
				<option value="11:00" >11:00</option>
				<option value="12:00" >12:00</option>
				<option value="13:00" >13:00</option>
				<option value="14:00" >14:00</option>
				<option value="15:00" >15:00</option>
				<option value="16:00" >16:00</option>
				<option value="17:00" >17:00</option>
				<option value="18:00" >18:00</option>
				<option value="19:00" >19:00</option>
				<option value="20:00" >20:00</option>
				<option value="21:00" >21:00</option>
				<option value="22:00" >22:00</option>
				<option value="23:00" >23:00</option>
				<option value="24:00" >24:00</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Fecha Final 
		</td>
		<td>
			<input type="text" name="fecha_final" value="{{ $contrato->fecha_final }}" class="datepicker" placeholder="Ingresar una fecha" required>
		</td>
	</tr>
	<tr>
		<td>
			Hora Final 
		</td>
		<td>
			<select name="hora_final">
				<option value="0" selected>Seleccione una opción</option>
				<option value="00:00" >00:00</option>
				<option value="01:00" >01:00</option>
				<option value="02:00" >02:00</option>
				<option value="03:00" >03:00</option>
				<option value="04:00" >04:00</option>
				<option value="05:00" >05:00</option>
				<option value="06:00" >06:00</option>
				<option value="07:00" >07:00</option>
				<option value="08:00" >08:00</option>
				<option value="09:00" >09:00</option>
				<option value="10:00" >10:00</option>
				<option value="11:00" >11:00</option>
				<option value="12:00" >12:00</option>
				<option value="13:00" >13:00</option>
				<option value="14:00" >14:00</option>
				<option value="15:00" >15:00</option>
				<option value="16:00" >16:00</option>
				<option value="17:00" >17:00</option>
				<option value="18:00" >18:00</option>
				<option value="19:00" >19:00</option>
				<option value="20:00" >20:00</option>
				<option value="21:00" >21:00</option>
				<option value="22:00" >22:00</option>
				<option value="23:00" >23:00</option>
				<option value="24:00" >24:00</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Lugar Entrega
		</td>
		<td>
			<select name="lugar_entrega">
				<option value="0" selected>Seleccione una opción</option>
				<option value="Oficina" >Oficina</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Lugar Devolución
		</td>
		<td>
			<select name="lugar_devolucion">
				<option value="0" selected>Seleccione una opción</option>
				<option value="Oficina" >Oficina</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Cliente 
		</td>
		<td>
			<input type="text" name="cliente" value="{{ $contrato->cliente }}" placeholder="Ingresar Cliente" required>
		</td>
	</tr>
	<tr>
		<td>
			Carnet Conducir 
		</td>
		<td>
			<input type="text" name="carnet_conducir" value="{{ $contrato->carnet_conducir }}" placeholder="Ingresar Carnet" required>
		</td>
	</tr>
	<tr>
		<td>
			Vencimiento 
		</td>
		<td>
			<input type="text" name="vencimiento" value="{{ $contrato->vencimiento }}" class="datepicker" placeholder="Ingresar Fecha" required>
		</td>
	</tr>
	<tr>
		<td>
			Domicilio 
		</td>
		<td>
			<input type="text" name="domicilio" value="{{ $contrato->domicilio }}"  placeholder="Ingresar Domicilio" required>
		</td>
	</tr>
	<tr>
		<td>
			Fono 
		</td>
		<td>
			<input type="text" name="fono" value="{{ $contrato->fono }}"  placeholder="Ingresar Fono" required>
		</td>
	</tr>
	<tr>
		<td>
			Email 
		</td>
		<td>
			<input type="text" name="email" value="{{ $contrato->email }}"  placeholder="Ingresar Email" required>
		</td>
	</tr>
	<tr>
		<td>
			Hotel 
		</td>
		<td>
			<select name="hotel">
				<option value="0" selected>Seleccione una opción</option>
				<option value="hotels" >Hoteles</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Conserje 
		</td>
		<td>
			<input type="text" name="conserje" value="{{ $contrato->conserje }}"   placeholder="Ingresar Conserje" required>
		</td>
	</tr>
	<tr>
		<td>
			Valor 
		</td>
		<td>
			<input type="text" name="valor" value="{{ $contrato->valor }}"  placeholder="Ingresar Valor" required>
		</td>
	</tr>
	<tr>
		<td>
			Deducible 
		</td>
		<td>
			<input type="text" name="deducible" value="{{ $contrato->deducible }}"  placeholder="Ingresar Deducible" required>
		</td>
	</tr>
	<tr>
		<td>
			Silla 
		</td>
		<td>
			<select name="silla">
				<option value="0" selected>Seleccione una opción</option>
				<option value="Si" >Si</option>
				<option value="No" >No</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			GPS 
		</td>
		<td>
			<select name="gps">
				<option value="0" selected>Seleccione una opción</option>
				<option value="Si" >Si</option>
				<option value="No" >No</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			KM Inicial 
		</td>
		<td>
			<input type="text" name="km_inicial" value="{{ $contrato->km_inicial }}"  placeholder="Ingresar KM" required>
		</td>
	</tr>
	<tr>
		<td>
			KM Final 
		</td>
		<td>
			<input type="text" name="km_final" value="{{ $contrato->km_final }}"  placeholder="Ingresar KM" required>
		</td>
	</tr>
	<tr>
		<td>
			Firma
		</td>
		<td>
			<div class="sigPad" id="smoothed" style="width:404px;">
				<ul class="sigNav">
					<li class="btn btn-info clearButton"><a href="#clear">Limpiar</a></li>
				</ul>
				<div class="sig sigWrapper" style="height:auto;">
				<div class="typed"></div>
				<canvas class="pad" width="400" height="250"></canvas>
					<input type="hidden" name="firma" class="output">
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" id="enviar" class="btn btn-info" value="Guardar">
		</td>
	</tr>
</table>
{{ Form::close() }}
</div>

@stop