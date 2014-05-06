$(document).ready(function(){
    var counter = 1;
    $(function ()    {
        $('#add_field').click(function()   {
            if(counter>10){
                alert("Only 10 textboxes allow");
                return false;
            }  
            counter += 1;
            $('#container').append('<select name="dynfields[]' + '" class="uk-margin-small-top" id="select_country_id_' + counter + '" onchange="ajax_update_service(this.value);""><option value="">страна не выбрана</option></select> <select name="dynfields[]' + '" class="uk-margin-small-top" id="select_service_id_' + counter + '""><option value="">услуга не назначена</option></select><p>' );
            return counter;
        });
    });
  });