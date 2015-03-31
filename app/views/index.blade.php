@extends('layouts.layout')
@section('head')
@stop
@section('titulo')
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<div class="container">
  <div class="col-md-12" >
  	<h3 class="text-center">Panel de Control</h3></div>
  <div class="col-md-12" >
  <div class="col-md-4" >
  </div>
  <div class="col-md-4" >
  <table class="table">
    <tr>
      <td>
       <h4 class='text-primary'>Bienvenido <strong>@if (Auth::check()) {{Auth::user()->nombre}} @endif</strong></h4>
      </td>
    </tr>
  <tr>
      <td>
        <a href="CrearContrato" class="btn btn-default" alt="Contrato"><i class="fa fa fa-file-text"></i> Crear Contrato</a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="ListaContratos" class="btn btn-default" alt="Contratos"><i class="fa fa-search"></i> Buscar Contrato</a>
      </td>
    </tr>
    <tr>
        <td>
          <a href="CerrarSesion" class="btn btn-warning">Cerrar Sesión</a>
        </td>
    </tr>
  </table>
  </div>
@stop



