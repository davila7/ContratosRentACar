$(document).ready(function() {
    $('.borrar_examen').click(function(){
    	var r = confirm("¿Desea borrar este examen?");
		if (r == true) {
			var id = $(this).attr('data-id');
			$.ajax({
			type: "GET",
			url: $('#baseurl').val()+"/BorrarExamen",
			data: { id : id },
			success:function(data){
				jsondata = eval(data);
				msg = eval(jsondata.msg);
				if(msg == '1'){
					alert('Examen borrado con exito!');
					location.reload();
				}else{
					alert('Error al borrar el examen.');
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