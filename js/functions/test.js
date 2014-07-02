    function test(element_row_number, country_id, country_name){
        updateSelectCountry('select_country_id'+element_row_number, country_id, country_name); 
    }

    function updateSelectCountry(element_row_number, country_id, country_name) {
        $.ajax({
            type: "POST",
            url: "../ajax_scripts/countryListUpdate.php",  
            dataType: "html",
            cache: false,
            success: function (country_response) {
                $('#' + element_row_number).html(country_response + '<option value=' + country_id +' selected>' + country_name +' (по умолчанию)'+'</option>');
            }
	});
    }
    
    function selectCountryAll(element_row_number, country_id) {
        $.post( "../ajax_scripts/serviceListUpdate.php", 
        {country_select: country_id}, 
        function(service_response) {			
            $('.select_service' + element_row_number).each( 
                function() {				
                    $(this).html(service_response);			
                }
            );			
            $('.select_podservice' + element_row_number).each( 
                function() {				
                    $(this).html('<option value="0">Услуга не назначена</option>');			
                }
            );		
        });    
    }
    
    function selectService(element_row_number, service_id) {         		
        $.post( "../ajax_scripts/podserviceListUpdate.php", 
        {service_select: service_id}, 
        function(podservice_response) {			
            $('#select_podservice_id' + element_row_number).html(podservice_response);		
        });    
    }
    