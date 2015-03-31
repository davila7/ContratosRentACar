$(document).ready(function() {
    $('.borrar_contrato').click(function(){
    	var r = confirm("¿Desea borrar este contrato?");
		if (r == true) {
    		window.location.href = $('#baseurl').val() + '/BorrarContrato/' + $(this).attr('data-id');
		}
    });


    $('#btn_busca').click(function(){
    	var busca = $('#busca').val();
    	window.location.href = $('#baseurl').val() +'/ListaContratos/'+ busca;

    });
});