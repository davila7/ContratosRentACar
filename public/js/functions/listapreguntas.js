$(document).ready(function() {
    $('.borrar_pregunta').click(function(){
    	var r = confirm("¿Desea borrar esta pregunta?");
		if (r == true) {
			var id = $(this).attr('data-id');
			$.ajax({
			type: "GET",
			url: $('#baseurl').val()+"/BorrarPregunta",
			data: { id : id },
			success:function(data){
				jsondata = eval(data);
				msg = eval(jsondata.msg);
				if(msg == '1'){
					alert('Pregunta borrada con exito!');
					location.reload();
				}else{
					alert('Esta pregunta se encuentra ligada a un examen y no se puede borrar.');
				}				
			},
			error:function (response){
				error = eval(response);
				alert('error'+error)
			}
			});
		}
    });
});