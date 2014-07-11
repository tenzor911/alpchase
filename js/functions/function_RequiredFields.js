$(document).ready(function(){    
    $(':text').keyup(function() {
        if($("input[name*='cust_name']").val() !== "" && $("input[name*='cust_surn']").val() !== "" && $("input[name*='cust_email']").val() !== "" && $("input[name*='cust_primphone']").val() !== "" && $("input[name*='cust_country']").val() !== "" && $("input[name*='cust_city']").val() !== "" && $("input[name*='cust_trustee']").val() !== "") 
        {
            $("input[name*='option_send']").removeAttr('disabled');
            $('.msg_send').hide();
            $('.sending_disable').hide();
        } else {
            $("input[name*='option_send']").attr('disabled', true);  
            $('.msg_send').hide();
            $('.sending_disable').show();
        }
    });
});