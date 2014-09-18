$(document).ready(function() {
    $("input[name=cust_primphone]").keypress(function(event) {
        // Allow only backspace and delete
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 43) {
            // let it happen, don't do anything
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.preventDefault(); 
            }   
        }
    });
    
    $("input[name=cust_addphone]").keypress(function(event) {
        // Allow only backspace and delete
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 43) {
            // let it happen, don't do anything
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.preventDefault(); 
            }   
        }
    });
    
    $("#captchaCode").keypress(function(event) {
        if (event.keyCode < 48 || event.keyCode > 57) {
            event.preventDefault(); 
        } 
    });
});