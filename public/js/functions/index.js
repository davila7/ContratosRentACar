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
					$(location).attr('href',$('#baseurl').val()+'/index');
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