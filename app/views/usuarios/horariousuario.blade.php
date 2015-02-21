@extends('layouts.layout')
@section('head')

{{ HTML::script('js/lib/fullcalendar.js') }}
{{ HTML::script('js/lib/gcal.js') }}
{{ HTML::script('js/functions/horariousuario.js') }}

{{ HTML::style('css/fullcalendar.css'); }}
{{ HTML::style('css/fullcalendar.print.css'); }}


	<script type="text/javascript">
		
		/*
			jQuery document ready
		*/
		
		$(document).ready(function()
		{
			/*
				date store today date.
				d store today date.
				m store current month.
				y store current year.
			*/
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();


			
			/*
				Initialize fullCalendar and store into variable.
				Why in variable?
				Because doing so we can use it inside other function.
				In order to modify its option later.
			*/
			
			var calendar = $('#calendar').fullCalendar(
			{
				/*
					header option will define our calendar header.
					left define what will be at left position in calendar
					center define what will be at center position in calendar
					right define what will be at right position in calendar
				*/
				header:
				{
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				/*
					defaultView option used to define which view to show by default,
					for example we have used agendaWeek.
				*/
				defaultView: 'agendaWeek',
				/*
					selectable:true will enable user to select datetime slot
					selectHelper will add helpers for selectable.
				*/
				selectable: true,
				selectHelper: true,
				/*
					when user select timeslot this option code will execute.
					It has three arguments. Start,end and allDay.
					Start means starting time of event.
					End means ending time of event.
					allDay means if events is for entire day or not.
				*/
				select: function(start, end, allDay)
				{
					/*
						after selection user will be promted for enter title for event.
					*/
					var title = prompt('Asignatura:');
					var id_usuario = {{ $user->id }};
					/*
						if title is enterd calendar will add title and event into fullCalendar.
					*/
					if (title){
						calendar.fullCalendar('renderEvent',{
								title: title,
								start: start,
								end: end,
								allDay: allDay
							},
							true // make the event "stick"
						);
						var data = { title : title,
									ano_start : start.getFullYear(),
									mes_start : start.getMonth(),
									dia_start : start.getDate(),
									hora_start : start.getHours(),
									minuto_start : start.getMinutes(),
									ano_end : end.getFullYear(),
									mes_end : end.getMonth(),
									dia_end : end.getDate(),
									hora_end : end.getHours(),
									minuto_end : end.getMinutes(),
									todo_dia : 1,
									id_usuario: id_usuario };

						$.ajax({
			  			type: "GET",
			  			url: $('#baseurl').val()+"/GuardaHorario",
			  			data: data,
			  			success:function(data){
				  			alert('curso agregado con exito!');
						},
						error:function (response){
							error = eval(response);
							alert('error'+error)
						}
						});
					}
					calendar.fullCalendar('unselect');
				},
				/*
					editable: true allow user to edit events.
				*/
				editable: false,
				/*
					events is the main option for calendar.
					for demo we have added predefined events in json object.
				*/
				events: [
					@foreach ($horario as $hor)
    					{
						title: '{{ $hor->titulo }}',
						start: new Date(
							{{ $hor->ano_start }}, 
							{{ $hor->mes_start }}, 
							{{ $hor->dia_start }}, 
							{{ $hor->hora_start }}, 
							{{ $hor->minuto_start }}),
						end: new Date(
							{{ $hor->ano_end }}, 
							{{ $hor->mes_end }}, 
							{{ $hor->dia_end }}, 
							{{ $hor->hora_end }}, 
							{{ $hor->minuto_end }}),
						allDay: false
						},
					@endforeach
				]
			});
			
		});

	</script>


<style type="text/css">

		#calendar
		{
			width: 900px;
			margin: 0 auto;
			background-color: #FFFFFF;
		}
	</style>
@stop
@section('titulo')
Missing/Lista de Usuarios
@stop
@section('sidebar')
    @parent
@stop
@section('content')
<h1> Horario Usuario</h1> {{ $user->nombre }} {{ $user->apellido_paterno }} {{ $user->apellido_materno }}
<br/>
{{ HTML::link('ListaUsuarios','Volver',array( 'type' => 'button', 'class' => 'btn btn-default')) }}
<br/>
<br/>

	<!--FullCalendar container div-->
	<div id='calendar'></div>
	<br/>
	<br/>
<ul class="list-group">
	@foreach ($horario as $hor)
	<li class="list-group-item">{{ $hor->titulo }} - 
		Comienzo: {{ $hor->dia_start }}/{{ $hor->mes_start + 1 }}/{{ $hor->ano_start }} 
		{{ $hor->hora_start }}:{{ $hor->minuto_start }} - 
		Fin: {{ $hor->dia_end }}/{{ $hor->mes_end + 1 }}/{{ $hor->ano_end }} 
		{{ $hor->hora_end }}:{{ $hor->minuto_end }}
	<a class="btn btn-default borrar_horario" alt="Eliminar" data-id="{{ $hor->id }}"><i class="fa fa-close"></i></a>
	</li>
	@endforeach
</ul>

@stop