function test(data, name){
    updateSelectCountry('select_country_id'+data, name);
}

function updateSelectCountry(selectCountryId, myname) {
        $.ajax({
            type: "POST",
            url: "../ajax_scripts/countryListUpdate.php",  
            dataType: "html",
            cache: false,
            success: function (response) {
                $('#' + selectCountryId).html(response +'<option selected>'+myname+'</option>' );
            }
	});
    }