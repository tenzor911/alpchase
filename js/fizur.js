$('input[name=lico_type]').click(function() {
    if ($('.radio_fz').is(':checked')) {
        $('.company').prop('disabled', true);
    } else {
        $('.company').prop('disabled', false);
    }
});