$(document).ready(function() {
    $('#login').click(function(){
			var email = $('#email').val();
			var password = $('#password').val();
			$.ajax({
			type: "GET",
			url: $('#baseurl').val()+"/LoginUsuario",
			data: { email : email, password : password },
			success:function(data){
				jsondata = eval(data);
				msg = eval(jsondata.msg);
				tipo = eval(jsondata.tipo);
				if(msg == true){
					alert(tipo)
					if(tipo == 3){
						$(location).attr('href',$('#baseurl').val()+'/IndexAlumno');
					}else{
						$(location).attr('href',$('#baseurl').val()+'/indexcma');
					}
					
				}else{
					$('#alert-login').removeClass('hide');
				}			
			},
			error:function (response){
				error = eval(response);
				alert('error '+error)
			}
			});
    });

});