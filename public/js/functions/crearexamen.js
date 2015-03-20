$(document).ready(function() {
    
	 $('#submit').click(function(){
	 	this.form.submit()
	 	/*var values = [];
    	$('.preguntas option:selected').each(function() { 
    		values.push( $(this).attr('value') );
		});
    	if( hasDuplicates(values) ){
    		alert('Algunas preguntas se repiten.')
    	}else{
    		alert('ya pooo')
    		document.getElementById("form_examen").submit();
    		//alert($('#form_examen').attr('method'))
    		
    	}*/
    		
    });

jQuery.validator.addMethod("preguntas", function(value, element) {
  // allow any non-whitespace characters as the host part
  $('.preguntas option:selected').each(function() { 
            values.push( $(this).attr('value') );
        });
        if( hasDuplicates(values) ){
            return false;
        }else{
           return true;
        }
}, 'No se deben repetir las preguntas seleccionadas.');

function hasDuplicates(array) {
    var valuesSoFar = {};
    for (var i = 0; i < array.length; ++i) {
        var value = array[i];
        if (Object.prototype.hasOwnProperty.call(valuesSoFar, value)) {
            return true;
        }
        valuesSoFar[value] = true;
    }
    return false;
}

});