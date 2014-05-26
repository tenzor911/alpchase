$(document).ready(function(){
    $('input[name=lico_type]').click(function() {
        if ($('.radio_fz').is(':checked')) {
            $("input[name*='company']").prop('disabled', true);
            $("input[name*='position']").prop('disabled', true);
        } else {
            $("input[name*='company']").prop('disabled', false);
            $("input[name*='position']").prop('disabled', false);
        }
    });  
});