$(document).ready(function() {
    
	$(document).on("click", ".agregar_pregunta", function() {
		btn = $(this);
		$(this).removeClass('agregar_pregunta');
		var id_examen = $(this).attr('data-id-examen');
		var id_pregunta = $(this).attr('data-id-pregunta');
    		$.ajax({
			type: "GET",
			url: $('#baseurl').val()+"/AgregarPreguntaExamen/"+id_examen+"/"+id_pregunta,
			success:function(data){
				btn.removeClass('agregar_pregunta').addClass('quitar_pregunta');
				btn.val('Quitar');
			},
			error:function (response){
				error = eval(response);
				alert('error'+error)
			}
			});
	});

	$(document).on("click", ".quitar_pregunta", function() {
		btn = $(this);
		var id_examen = $(this).attr('data-id-examen');
		var id_pregunta = $(this).attr('data-id-pregunta');
    		$.ajax({
			type: "GET",
			url: $('#baseurl').val()+"/QuitarPreguntaExamen/"+id_examen+"/"+id_pregunta,
			success:function(data){
				btn.removeClass('quitar_pregunta').addClass('agregar_pregunta');
				btn.val('Agregar');
			},
			error:function (response){
				error = eval(response);
				alert('error'+error)
			}
			});
	});

});