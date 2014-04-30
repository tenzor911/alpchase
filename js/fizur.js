function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

$('input[name=lico_type]').click(function() {
    if ($('.radio_fz').is(':checked')) {
        $('.company').prop('disabled', true);
    } else {
        $('.company').prop('disabled', false);
    }
});