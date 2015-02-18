jQuery(document).ready(function() {

$(document).on("click", ".facelogin", function() {	
		$(this).attr('src','img/gif/facebook-loader.gif')
		var url = jQuery('#baseurl').val()+"/login/fb";
		window.location.href = url;
});

});