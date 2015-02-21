$(document).ready(function() {
    
	$('.borrar_horario').click(function (){
		var id = $(this).attr('data-id');
		var r = confirm("¿Desea borrar este curso?");
		if (r == true) {
    		$.ajax({
			type: "GET",
			url: $('#baseurl').val()+"/BorrarHorario",
			data: { id : id },
			success:function(data){
				alert('Curso Borrado con exito!');
				location.reload();
			},
			error:function (response){
				error = eval(response);
				alert('error'+error)
			}
			});
		}
	});
	
});