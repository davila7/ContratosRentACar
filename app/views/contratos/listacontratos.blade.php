@extends('layouts.layout')
@section('head')

{{ HTML::script('js/functions/listacontratos.js') }}
@stop
@section('titulo')
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Contratos</h1>
<br/>
{{ HTML::link('index','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
{{ HTML::link('CrearContrato','Crear Contrato',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>
<div class="container">
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
        <button id="btn_busca" class="btn btn-default" type="button">Buscar!</button>
      </span>
      <input type="text" id="busca" value="{{ $busca }}" class="form-control" placeholder="Buscar por...">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <!--<div class="col-lg-3">
    <div class="input-group">
      <input type="text" class="datepicker form-control" placeholder="Fecha">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Fecha Final</button>
      </span>
    </div>
  </div>
   <div class="col-lg-3">
    <div class="input-group">
      <input type="text" name="fecha_inicio" class="datepicker form-control" placeholder="Fecha">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Fecha Inicio</button>
      </span>
    </div>
  </div>-->
</div>
</div>
<br/>

<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>
          Cliente
        </th>

        <th>
          Detalle
        </th>

        <th>
          Ver PDF
        </th>

        <th>
          Editar
        </th>

        <th>
          Eliminar
        </th>
      </tr>
    </thead>
    <tbody>
@if($contratos != null)
  @foreach($contratos as $cont)
      <tr>
        <td>
          {{ $cont->cliente }}
        </td>
        <td>
            <a href="DetalleContrato/{{ $cont->id}}" class="btn btn-xs btn-info" title="Detalles">
            <i class="fa fa-check-square-o"></i>  Detalles </a>
        </td>
        <td>
           <a href="VerContratoPDF/{{ $cont->id}}" class="btn btn-xs btn-info" title="Detalles">
            <i class="fa fa-check-square-o"></i>  Ver pdf </a>
        </td>
        <td>
          <a href="EditarContrato/{{ $cont->id}}" class="btn btn-xs btn-warning" title="Editar">
          <i class="fa fa-check-square-o"></i>  Editar </a>
        </td>
        <td>
          <button class="btn btn-xs btn-danger borrar_contrato" data-id="{{ $cont->id }}" title="Eliminar">
          <i class="fa fa-check-square-o"></i>  Eliminar </button>
        </td>
       @endforeach
      @else
        No existen Contratos
      @endif
    </tbody>
  </table>
</div>

<!--<ul class="list-group">
	<li class="list-group-item list-group-item active">
     	<h4 class="list-group-item-heading">Contratos</h4>
    </li>
@if($contratos != null)
	@foreach($contratos as $cont)
    <li class="list-group-item list-group-item">
	     <h4 class="list-group-item-heading">{{ $cont->cliente }}

	     <button class="btn btn-xs btn-danger pull-right borrar_contrato" data-id="{{ $cont->id }}" title="Eliminar">
	     	<i class="fa fa-check-square-o"></i>  Eliminar </button>

	     <a href="EditarContrato/{{ $cont->id}}" class="btn btn-xs btn-warning pull-right" title="Editar">
	     	<i class="fa fa-check-square-o"></i>  Editar </a>
	     
	     <a href="DetalleContrato/{{ $cont->id}}" class="btn btn-xs btn-info pull-right" title="Detalles">
	     	<i class="fa fa-check-square-o"></i>  Detalles </a>

        <a href="VerContratoPDF/{{ $cont->id}}" class="btn btn-xs btn-info pull-right" title="Detalles">
        <i class="fa fa-check-square-o"></i>  Ver pdf </a>
	     </h4>

	     <span>Inicio: {{ date("d-m-Y",strtotime($cont->fecha_inicial)) }} </span> | <span>Fin: {{ date("d-m-Y",strtotime($cont->fecha_final)) }} </span>
	     | <span>Valor: {{ $cont->valor }} </span>
    </li>
    @endforeach
@else
	No existen Contratos
@endif
</ul>-->
@stop