@extends('layouts.layout')
@section('head')
@stop
@section('titulo')
PANEL DE CONTRO / CMA
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<div class="row" class="col-md-12">
  <div class="col-md-12" >
  	<h3 class="text-center">Panel de Control</h3></div>
  <div class="col-md-12" >
  <div class="col-md-4" >
  <table>
    <tr>
      <td>
       <h4 class='text-primary'>Areas de Trabajo</h4>
      </td>
    </tr>
    <tr>
    <td>
      <a href="ListaUsuarios" class="btn btn-default" alt="Usuarios"><i class="fa fa-users"></i> Usuarios</a>
    </td>
	</tr>
	<tr>
    <td>
     <a class="btn btn-default" target="_blank" alt="Examenes"><i class="fa fa-file-text"></i> Examenes</a>
    </td>
	</tr>
	<tr>
    <td>
      <a class="btn btn-default" target="_blank" alt="Examenes"><i class="fa fa-table"></i> Horarios</a>
    </td>
    </tr>
  </table>
  </div>
@stop



