$(document).ready(function() {
    $('.borrar_usuario').click(function(){
    	var r = confirm("¿Desea borrar este usuario?");
		if (r == true) {
    		window.location.href = $('#baseurl').val() + '/BorrarUsuario/' + $(this).attr('data-id');
		}
    });
});