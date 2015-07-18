@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/editarcontrato.js') }}
@stop
@section('titulo')
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
			Nombre Rentacar
		</td>
		<td>
			<select name="nombre_rentacar">
				<option value="Sin Empresa" {{ $contrato->nombre_rentacar == 'Sin Empresa' ? 'selected' : '' }}>Seleccione una opción</option>
				<option value="Easy Rent a Car" {{ $contrato->nombre_rentacar == 'Easy Rent a Car' ? 'selected' : '' }}>Easy Rent a Car</option>
				<option value="Atlas Rent a Car" {{ $contrato->nombre_rentacar == 'Atlas Rent a Car' ? 'selected' : '' }}>Atlas Rent a Car</option>
				<option value="Free Rent a Car" {{ $contrato->nombre_rentacar == 'Free Rent a Car' ? 'selected' : '' }}>Free Rent a Car</option>
			</select>
		</td>
	</tr>
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
				<option value="0" {{ $contrato->hora_inicial == '0' ? 'selected' : '' }}>Seleccione una opción</option>
				<option value="00:00" {{ $contrato->hora_inicial == '00:00' ? 'selected' : '' }}>00:00</option>
				<option value="01:00" {{ $contrato->hora_inicial == '01:00' ? 'selected' : '' }}>01:00</option>
				<option value="02:00" {{ $contrato->hora_inicial == '02:00' ? 'selected' : '' }}>02:00</option>
				<option value="03:00" {{ $contrato->hora_inicial == '03:00' ? 'selected' : '' }}>03:00</option>
				<option value="04:00" {{ $contrato->hora_inicial == '04:00' ? 'selected' : '' }}>04:00</option>
				<option value="05:00" {{ $contrato->hora_inicial == '05:00' ? 'selected' : '' }}>05:00</option>
				<option value="06:00" {{ $contrato->hora_inicial == '06:00' ? 'selected' : '' }}>06:00</option>
				<option value="07:00" {{ $contrato->hora_inicial == '07:00' ? 'selected' : '' }}>07:00</option>
				<option value="08:00" {{ $contrato->hora_inicial == '08:00' ? 'selected' : '' }}>08:00</option>
				<option value="09:00" {{ $contrato->hora_inicial == '09:00' ? 'selected' : '' }}>09:00</option>
				<option value="10:00" {{ $contrato->hora_inicial == '10:00' ? 'selected' : '' }}>10:00</option>
				<option value="11:00" {{ $contrato->hora_inicial == '11:00' ? 'selected' : '' }}>11:00</option>
				<option value="12:00" {{ $contrato->hora_inicial == '12:00' ? 'selected' : '' }}>12:00</option>
				<option value="13:00" {{ $contrato->hora_inicial == '13:00' ? 'selected' : '' }}>13:00</option>
				<option value="14:00" {{ $contrato->hora_inicial == '14:00' ? 'selected' : '' }}>14:00</option>
				<option value="15:00" {{ $contrato->hora_inicial == '15:00' ? 'selected' : '' }}>15:00</option>
				<option value="16:00" {{ $contrato->hora_inicial == '16:00' ? 'selected' : '' }}>16:00</option>
				<option value="17:00" {{ $contrato->hora_inicial == '17:00' ? 'selected' : '' }}>17:00</option>
				<option value="18:00" {{ $contrato->hora_inicial == '18:00' ? 'selected' : '' }}>18:00</option>
				<option value="19:00" {{ $contrato->hora_inicial == '19:00' ? 'selected' : '' }}>19:00</option>
				<option value="20:00" {{ $contrato->hora_inicial == '20:00' ? 'selected' : '' }}>20:00</option>
				<option value="21:00" {{ $contrato->hora_inicial == '21:00' ? 'selected' : '' }}>21:00</option>
				<option value="22:00" {{ $contrato->hora_inicial == '22:00' ? 'selected' : '' }}>22:00</option>
				<option value="23:00" {{ $contrato->hora_inicial == '23:00' ? 'selected' : '' }}>23:00</option>
				<option value="24:00" {{ $contrato->hora_inicial == '24:00' ? 'selected' : '' }}>24:00</option>
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
				<option value="0" {{ $contrato->hora_final == '0' ? 'selected' : '' }}>Seleccione una opción</option>
				<option value="00:00" {{ $contrato->hora_final == '00:00' ? 'selected' : '' }}>00:00</option>
				<option value="01:00" {{ $contrato->hora_final == '01:00' ? 'selected' : '' }}>01:00</option>
				<option value="02:00" {{ $contrato->hora_final == '02:00' ? 'selected' : '' }}>02:00</option>
				<option value="03:00" {{ $contrato->hora_final == '03:00' ? 'selected' : '' }}>03:00</option>
				<option value="04:00" {{ $contrato->hora_final == '04:00' ? 'selected' : '' }}>04:00</option>
				<option value="05:00" {{ $contrato->hora_final == '05:00' ? 'selected' : '' }}>05:00</option>
				<option value="06:00" {{ $contrato->hora_final == '06:00' ? 'selected' : '' }}>06:00</option>
				<option value="07:00" {{ $contrato->hora_final == '07:00' ? 'selected' : '' }}>07:00</option>
				<option value="08:00" {{ $contrato->hora_final == '08:00' ? 'selected' : '' }}>08:00</option>
				<option value="09:00" {{ $contrato->hora_final == '09:00' ? 'selected' : '' }}>09:00</option>
				<option value="10:00" {{ $contrato->hora_final == '10:00' ? 'selected' : '' }}>10:00</option>
				<option value="11:00" {{ $contrato->hora_final == '11:00' ? 'selected' : '' }}>11:00</option>
				<option value="12:00" {{ $contrato->hora_final == '12:00' ? 'selected' : '' }}>12:00</option>
				<option value="13:00" {{ $contrato->hora_final == '13:00' ? 'selected' : '' }}>13:00</option>
				<option value="14:00" {{ $contrato->hora_final == '14:00' ? 'selected' : '' }}>14:00</option>
				<option value="15:00" {{ $contrato->hora_final == '15:00' ? 'selected' : '' }}>15:00</option>
				<option value="16:00" {{ $contrato->hora_final == '16:00' ? 'selected' : '' }}>16:00</option>
				<option value="17:00" {{ $contrato->hora_final == '17:00' ? 'selected' : '' }}>17:00</option>
				<option value="18:00" {{ $contrato->hora_final == '18:00' ? 'selected' : '' }}>18:00</option>
				<option value="19:00" {{ $contrato->hora_final == '19:00' ? 'selected' : '' }}>19:00</option>
				<option value="20:00" {{ $contrato->hora_final == '20:00' ? 'selected' : '' }}>20:00</option>
				<option value="21:00" {{ $contrato->hora_final == '21:00' ? 'selected' : '' }}>21:00</option>
				<option value="22:00" {{ $contrato->hora_final == '22:00' ? 'selected' : '' }}>22:00</option>
				<option value="23:00" {{ $contrato->hora_final == '23:00' ? 'selected' : '' }}>23:00</option>
				<option value="24:00" {{ $contrato->hora_final == '24:00' ? 'selected' : '' }}>24:00</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Lugar Entrega
		</td>
		<td>
			<input type="text" name="lugar_entrega" value="{{ $contrato->lugar_entrega }}" placeholder="Lugar">
		</td>
	</tr>
	<tr>
		<td>
			Lugar Devolución
		</td>
		<td>
			<input type="text" name="lugar_devolucion" value="{{ $contrato->lugar_devolucion }}" placeholder="Lugar">
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
			<input type="text" name="hotel" value="{{ $contrato->hotel }}"  placeholder="Ingresar hotel" required>
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
				<option value="0" {{ $contrato->silla == '0' ? 'selected' : '' }}>Seleccione una opción</option>
				<option value="Si" {{ $contrato->silla == 'Si' ? 'selected' : '' }}>Si</option>
				<option value="No" {{ $contrato->silla == 'No' ? 'selected' : '' }}>No</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			GPS 
		</td>
		<td>
			<select name="gps">
				<option value="0" {{ $contrato->gps == '0' ? 'selected' : '' }}>Seleccione una opción</option>
				<option value="Si" {{ $contrato->gps == 'Si' ? 'selected' : '' }}>Si</option>
				<option value="No" {{ $contrato->gps == 'No' ? 'selected' : '' }}>No</option>
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