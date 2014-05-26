$(document).ready(function(){
    var counter = 1;
    $("#add_field").click(function () {
        if (counter > 10)  {
            alert("Достигнут лимит добавления полей!");
            return false;
        }
        var newTextBoxDiv = $(document.createElement('div'))
        .attr("id", 'CountryServiceOptionsBlock' + counter);
        newTextBoxDiv.after().html('<select name="dynfields1[]" id="select_country_id' + counter + '"><option value="">страна не выбрана</option></select> <select name="dynfields2[]" id="select_service_id' + counter + '"><option value="">услуга не выбрана</option></select><p>');
        newTextBoxDiv.appendTo("#ServiceBlockGroup");
        updateSelectCountry('select_country_id' + counter);
        counter++;
    });	
    
    $("#rem_field").click(function () {
        if(counter==1)  {
            alert("Достигнут лимит удаления полей!");
            return false;
        }   
	counter--;
        $("#CountryServiceOptionsBlock" + counter).remove();
     });  
});     
	