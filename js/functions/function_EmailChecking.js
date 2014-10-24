$(document).ready(function(){
    $('form input[name="cust_email"]').blur(function () {
        var email = $(this).val();
        var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
        if (re.test(email)) {
            $('.msg_email').hide();
            $('.emailsuccess').show();
            $.post( 
             "../ajax_scripts/emailDatabaseCheck.php",
             { name_d: $(this).val() },
             function(data) {
                $('#alreadyexist').html(data);
             }
          );
            return true;
        } else {
            $('.msg_email').hide();
            $('.emailerror').show();
            return false;
        }
    });
});