$(document).ready(function(){
    $("#restorePassword").click(function () {
        if ( $(".restoringBox").is(":hidden") ) {
            $(".restoringBox").slideDown("slow");
            $("#restorePassword").css('color', 'red');
        } else {
            $(".restoringBox").slideUp("slow");
            $("#restorePassword").css('color', 'black');
        }
    });

    $(".activateRestore").attr('disabled',true);
    $('#emailForRestore').keyup(function(){
        if($(this).val().length !=0) {
            $('.activateRestore').attr('disabled', false); 
            $('#captchaCode').attr('disabled', false); 
            $("#activateRestore").css('color', 'green');
        } else {
            $('.activateRestore').attr('disabled',true);
            $('#captchaCode').attr('disabled', true); 
            $("#activateRestore").css('color', 'gray');
        }
    });     
    
    $(".activateRestore").click(function() {
        var emailToRestore = $('.emailForRestore').val();
        var captcha = $('.captchaCode').val();
        $.post( 
            "ajax_scripts/restoringEmail.php",
            {   
                email: emailToRestore,
                captchaCode: captcha,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    });
});