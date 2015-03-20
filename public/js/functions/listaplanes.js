$(document).ready(function() {
     $('.borrar_plan').click(function(){
    	var r = confirm("¿Desea borrar este plan?");
		if (r == true) {
			var id = $(this).attr('data-id');
			$.ajax({
			type: "GET",
			url: $('#baseurl').val()+"/BorrarPlan/"+id,
			success:function(data){
				jsondata = eval(data);
				msg = eval(jsondata.msg);
				if(msg == '1'){
					alert('Pregunta borrada con exito!');
					location.reload();
				}else{
					alert('Este plan se encuentra ligado a un usuario y no se puede borrar.');
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