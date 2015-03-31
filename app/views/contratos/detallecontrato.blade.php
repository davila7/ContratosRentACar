@extends('layouts.layout')
@section('head')
{{ HTML::script('js/functions/detallecontrato.js') }}
@stop
@section('titulo')
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Crear Contrato</h1>
<br/>
{{ HTML::link('ListaContratos','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
<div class="table-responsive">
	<input type="hidden" id="firma" value='{{ $contrato->firma }}' />
<table class="table table-hover">
	<tr class="info">
		<td>
			Monto Garantía 
		</td>
		<td>
			{{ $contrato->monto_garantia }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Código Garantía
		</td>
		<td>
			{{ $contrato->codigo_garantia }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Fecha Vencimiento TC
		</td>
		<td>
			{{ $contrato->fecha_vencimiento_tc }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Marca 
		</td>
		<td>
			{{ $contrato->marca }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Modelo
		</td>
		<td>
			{{ $contrato->modelo }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Patente 
		</td>
		<td>
			{{ $contrato->patente }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Fecha Inicial 
		</td>
		<td>
			{{ $contrato->fecha_inicial }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Hora Inicial 
		</td>
		<td>
			{{ $contrato->hora_inicial }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Fecha Final 
		</td>
		<td>
			{{ $contrato->fecha_final }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Hora Final 
		</td>
		<td>
			{{ $contrato->hora_final }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Lugar Entrega
		</td>
		<td>
			{{ $contrato->lugar_entrega }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Lugar Devolución
		</td>
		<td>
			{{ $contrato->lugar_devolucion }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Cliente 
		</td>
		<td>
			{{ $contrato->cliente }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Carnet Conducir 
		</td>
		<td>
			{{ $contrato->carnet_conducir }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Vencimiento 
		</td>
		<td>
			{{ $contrato->vencimiento }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Domicilio 
		</td>
		<td>
			{{ $contrato->domicilio }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Fono 
		</td>
		<td>
			{{ $contrato->fono }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Email 
		</td>
		<td>
			{{ $contrato->email }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Hotel 
		</td>
		<td>
			{{ $contrato->hotel }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Conserje 
		</td>
		<td>
			{{ $contrato->conserje }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Valor 
		</td>
		<td>
			{{ $contrato->valor }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Deducible 
		</td>
		<td>
			{{ $contrato->deducible }}
		</td>
	</tr>
	<tr class="info">
		<td>
			Silla 
		</td>
		<td>
			{{ $contrato->silla }}
		</td>
	</tr>
	<tr class="info">
		<td>
			GPS 
		</td>
		<td>
			{{ $contrato->gps }}
		</td>
	</tr>
	<tr class="info">
		<td>
			KM Inicial 
		</td>
		<td>
			{{ $contrato->km_inicial }}
		</td>
	</tr>
	<tr class="info">
		<td>
			KM Final 
		</td>
		<td>
			{{ $contrato->km_final }}
		</td>
	</tr>
	<tr class="info">
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
</table>
</div>
@stop