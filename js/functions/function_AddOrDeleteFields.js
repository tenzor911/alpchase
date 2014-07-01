function addSection() {
	var section_i = $("#countSections").val();
	section_i++;

	if (section_i > 10)  {
		alert("Достигнут лимит добавления полей!");
		return false;
	}
        
	var section_delete_button = '';
        
	if (section_i > 1) {
            section_delete_button = '<input type="button" onclick="delSection('+section_i+'); return false;" value="Удалить секцию">';
        }
        
	var newTextBoxDiv = $(document.createElement('div')).attr("id", 'CountryServiceOptionsBlock' + section_i);
        
	newTextBoxDiv.after().html('<p><hr><select name="countries['+section_i+']" class="uk-margin-small-top" onchange="selectCountryAll('+section_i+',this.value);" id="select_country_id' + section_i + '"><option value="">страна не выбрана</option></select></p> <div id="country_block'+section_i+'"><p id="service_block'+section_i+'1"><select name="services['+section_i+'][1]" class="select_service'+section_i+'" onchange="selectService('+section_i+'1,this.value);" id="select_service_id' + section_i + '1"><option value="">услуга не назначена</option></select> <select name="podservices['+section_i+'][1]" class="select_podservice' + section_i + '" id="select_podservice_id' + section_i + '1"><option value="">услуга не назначена</option></select></p></div><p><input type="button" onclick="addService('+section_i+'); return false;" value="Добавить услугу"> '+section_delete_button+'</p><input type="hidden" id="countServices' + section_i + '" value="1">');
	newTextBoxDiv.appendTo("#ServiceBlockGroup");
	updateSelectCountry('select_country_id' + section_i);
	$("#countSections").val(section_i);
}


function addService( section_i ) {

	var service_i = $("#countServices"+section_i).val();
	service_i++;
	
	if (service_i > 10)  {
		alert("Достигнут лимит добавления полей!");
		return false;
	}
	
	var country_id = $('#select_country_id' + section_i).val();

	$("#country_block" + section_i).append('<p id="service_block'+section_i+''+service_i+'"><select name="services['+section_i+']['+service_i+']" class="select_service'+section_i+'" onchange="selectService('+section_i + ''+service_i+',this.value);" id="select_service_id' + section_i + ''+service_i+'"><option value="">услуга не назначена</option></select> <select name="podservices['+section_i+']['+service_i+']" class="select_podservice' + section_i + '" id="select_podservice_id' + section_i + ''+service_i+'"><option value="">услуга не назначена</option></select> <a href="#" onclick="delService(' + section_i + ',' + service_i + '); return false;">Удалить</a></p>');
	if( country_id > 0 ) {
            selectCountry(section_i + ''+service_i, country_id);
            $("#countServices"+section_i).val(service_i);
        }
}

function delSection( section_i ) {
	$("#CountryServiceOptionsBlock" + section_i).remove();
}

function delService( section_i, service_i ) {
	$('#service_block'+section_i+''+service_i).remove();
}

$(document).ready(function(){
    $("#countSections").val('0');
    addSection();
});  



