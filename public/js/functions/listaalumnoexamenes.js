$(document).ready(function() {
    
	$(document).on("click", ".agregar_examen", function() {
		btn = $(this);
		var id_examen = $(this).attr('data-id-examen');
		var id_usuario = $(this).attr('data-id-usuario');
    		$.ajax({
			type: "GET",
			url: $('#baseurl').val()+"/AgregarExamenAlumno/"+id_examen+"/"+id_usuario,
			success:function(data){
				btn.removeClass('agregar_examen').addClass('quitar_examen');
				btn.val('Quitar');
			},
			error:function (response){
				error = eval(response);
				alert('error'+error)
			}
			});
	});

	$(document).on("click", ".quitar_examen", function() {
		btn = $(this);
		var id_examen = $(this).attr('data-id-examen');
		var id_usuario = $(this).attr('data-id-usuario');
    		$.ajax({
			type: "GET",
			url: $('#baseurl').val()+"/QuitarExamenAlumno/"+id_examen+"/"+id_usuario,
			success:function(data){
				btn.removeClass('quitar_examen').addClass('agregar_examen');
				btn.val('Agregar');
			},
			error:function (response){
				error = eval(response);
				alert('error'+error)
			}
			});
	});

});