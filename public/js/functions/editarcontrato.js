$(document).ready(function() {
    var sig = $('#firma').val();
	$('.sigPad').signaturePad({
		drawOnly:true,
		}).regenerate(sig);
});