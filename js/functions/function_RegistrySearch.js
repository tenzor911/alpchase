$(document).ready(function() {
    $("#filter_option").change(function(){
        $.post( 
            "../../ajax_scripts/filterDataUpdate.php",
            {filter_data_select: $(this).val() },
            function(data) {
                $('#filter_parameter').html(data);
                $("#data_field").val("0");
            }
        );
    });
       
    $("#filter_parameter").click(function(){    
        $.post( 
            "./../ajax_scripts/loadRegistryData.php",
            {parameter: $(this).val(), filter_parameter_select: $('#filter_option').val() },
            function(success) {
                $('#data_field').html(success);    
            }
        );
    });
    
    $("#search_data").keyup(function(){
        $.post( 
            "../../ajax_scripts/loadRegistryData.php",
            {company_search_name: $(this).val() },
            function(data) {
                $('#data_field').html(data);
            }
        );
    });  
});
