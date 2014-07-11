    var glob;

   function test(element_row_number, country_id, country_name){
        updateSelectCountry('select_country_id'+element_row_number, country_id, country_name);
       //selectCountryAll(element_row_number, country_id);
        
    }
    
    function getRow(numrows){
        getRows = numrows;
    }

    function setRow() {
        getRows++;
        return  getRows;
    }
    
    function decRow(){
        setRow()--;
        return setRow();
    }
    
    function updateSelectCountry(element_row_number, country_id, country_name) {
        $.post( "../ajax_scripts/countryListUpdate.php", 
        {country_select: country_id,
        country_name: country_name}, 
        function (country_response) {
            $('#' + element_row_number).html(country_response+'<option value='+country_id+' selected>'+country_name+'</option>'); 
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
                    $(this).html('<option value="0">услуга не назначена</option>');			
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
    
    function deleteItem(row_id, user_id, country_id, service_id, podservice_id) {    
        var answer = confirm ('Секция услуг будет удалена! Продолжить?');
        if (answer) 
        $.post( "../ajax_scripts/deleteBasketItem.php", 
        {user_index: user_id, 
         country_index: country_id, 
         service_index: service_id, 
         podservice_index: podservice_id},
         function(data) {			
            $("#itemRowNumber"+row_id).remove();	
        }); 
    }
    
      function addSection() {    
        var x = setRow();
        alert(x);
        var newTextBoxDiv = $(document.createElement('tr')).attr("id", 'itemRowNumber' + x);
        newTextBoxDiv.before().html('<td><center><select name="countries['+ x +']" id="select_country_id'+ x +'" onchange="selectCountryAll('+ x +', this.value);"><option value="0" selected>страна не выбрана</option></select></center></td><td><center><select name="services['+ x +']" id="select_service_id' + x + '" class="select_service'+ x +'" onclick="selectService('+ x +',this.value)";></select></center></td><td><center><select name="podservices['+ x +']" id="select_podservice_id'+ x +'" class="select_podservice'+ x +'"></select></center></td><td><center><a href="#"><img src="../icons/bullet_cross.png" alt="удалить" title="удалить" onclick="removeItem('+ x +')";></a></center></td>');
        newTextBoxDiv.appendTo("#mytable");
        test(x);
    }
    
    function removeItem(itemId) {   
        //decRow();
        var answer = confirm ('Секция услуг будет удалена! Продолжить?');
        if (answer)
        $("#itemRowNumber" + itemId).remove();
    }
    
    