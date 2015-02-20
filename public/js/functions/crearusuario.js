$(document).ready(function() {
    $("#form_usuario").validate({
	  rules: {
	    correo: {
	      email: true
	    }
	  }
	});
});