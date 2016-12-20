/**
 * Function to hidden Parent DIV of  button "Close"
 * @param {type} elemento
 * @returns void
 */
function hiddenParent(elemento) {
	elemento.parent().fadeOut( "slow" ,function(){
		elemento.parent().addClass('hidden').removeClass('show');
	});
	
}

/**
 * Show flash messages DIV and ADD errors into UL 
 * 
 * @param DOM elemento
 * @param array error_list
 * @returns {undefined}
 */
function showErrorsFlashDiv(elemento, error_list) {
	elemento.removeClass('hidden').addClass('show');
	elemento.find("ul").empty();
	$.each(error_list, function (index, value) {
		elemento.find("ul").append('<li>' + value + '</li>');
	});
	$('html,body').animate({
        scrollTop: elemento.offset().top-5},
        'slow');

}
//TODO: Desabilitar TABS si apenas se esta creando el registro de un paciente
//$('#domicilio-tab').attr("data-toggle", "").parent('li').addClass("disabled");  



