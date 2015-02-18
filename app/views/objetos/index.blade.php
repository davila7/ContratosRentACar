@extends('layouts.layout')
@section('titulo')
Missing
@stop
@section('head')
@parent
{{ HTML::script('js/page/objetos_index.js') }}
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<div class="row">
  <div class="span12">
    <div class="row">
      <div class="span10"><div id="google_map"></div></div>
      <div class="span2">
     	Missing Recientes
      <table class="table table-hover">
     	@foreach($data[0] as $objeto)
     	<tr onclick="buscaMissing({{$objeto->latitud_objeto}},{{$objeto->longitud_objeto}})">
     	<td>
     	{{ $objeto->nombre_objeto }} {{ HTML::link('#', 'Ir al Missing', array('onclick' => 'buscaMissing( '.$objeto->latitud_objeto.' , '.$objeto->longitud_objeto.' )')) }}
     	</td>
     	</tr>
       @endforeach
     </table>
      </div>
      @if(Auth::check())
      <div class="span2">
     	Mis Missing Recientes
      <table class="table table-hover">
     	@foreach($data[1] as $objeto)
     	<tr>
     	<td>
     	{{ $objeto->nombre_objeto }} {{ HTML::link('#', 'Ir al Missing', array('onclick' => 'buscaMissing( '.$objeto->latitud_objeto.' , '.$objeto->longitud_objeto.' )')) }}
     	</td>
     	</tr>
       @endforeach
     </table>
      </div>
      @endif
      {{ URL::to('/') }}
    </div>
  </div>
</div> 
@stop