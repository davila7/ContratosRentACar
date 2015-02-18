
	jQuery(document).ready(function() {

		//modal loading
  		$('#modal-loading').modal({
  			backdrop: 'static',
	  		show: false,
	  		closable: false
  		});
		/**** datepicker para la fecha de perdida ****/
		$(".input-date").datepicker({
	   			 todayHighlight: true
		});

		/***** click para esconder el texto de recompensa en el formulario ****/
		$(document).on("click", "#recompensa_check", function() {
			if($(this).is(':checked')){
				$('.div-recompensa').removeClass('hide');
			}else{
				$('.div-recompensa').addClass('hide');
			}
		});	
	//ABRE MODAL DE CONFIRMACION PARA REMOVER UN MARKER
	function remove_marker(Id,nombre){
			$('.confirma-borrar').attr('data-id',Id);
			$('.nombre_missing').text(nombre);
			$('#confirm-delete-share').modal();
	}

	//CLICK EN EL BOTON REMOVE PARA ABRIR EL MODAL
	$(document).on("click", ".btn-remove", function(){
		var nom_objeto = $(this).attr('data-nombre');
		var id = $(this).attr('data-id');
		remove_marker(id, nom_objeto);
	});
	
	//CONFIRMA QUE SE BORRA EL MARKER
	$(document).on("click", ".confirma-borrar", function() {
		var Id = $(this).attr('data-id');	
		var myData = { id : Id };
		$.ajax({
			  type: "POST",
			  url: $('#baseurl').val()+"/borrarobjeto",
			  data: myData,
			  success:function(data){
			  	$('#confirm-delete-share').modal('hide');
			  		jQuery('#reload_map').click();
				},
				error:function (xhr, ajaxOptions, thrownError){
				}
			});
	}); 
});













