function updateSelectCountry(selectCountryId) {
    $.ajax({
        type: "POST",
        url: "../ajax_scripts/countryListUpdate.php",  
        dataType: "html",
        cache: false,
        success: function (response) {
            $('#' + selectCountryId).html(response);
        }
    });
}	

function selectCountryAll(id, country) {		
    $.post( "../ajax_scripts/serviceListUpdate.php", 
    {country_select: country}, 
    function(data) {			
        $('.select_service'+id).each( 
            function() {				
                $(this).html(data);			
            }
        );			
        $('.select_podservice'+id).each( 
            function() {				
                $(this).html('<option value="0">услуга не назначена</option>');			
            }
        );		
    });    
}
	
function selectCountry(id, country) {		
    $.post( "../ajax_scripts/serviceListUpdate.php", 
    {country_select: country}, 
    function(data) {
        $('#select_service_id'+id).html(data);		
    });    
}
    
function selectService(id,service) {         		
    $.post( "../ajax_scripts/podserviceListUpdate.php", 
    {service_select: service}, 
    function(data) {			
        $('#select_podservice_id'+id).html(data);		
    });    
}