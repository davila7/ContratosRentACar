$(document).ready(function() {
    var sig = $('#firma').val();
	$('.sigPad').signaturePad({
		displayOnly:true,
		}).regenerate(sig);
});