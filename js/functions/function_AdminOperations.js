$(document).ready(function(){
    //------------------------------------------------------------------------------  ПОЛЬЗОВАТЕЛИ --------------------------------------------------------------------------
    $("#adduser").click(function() {
        var newLogin       = $('#newlogin').val();
        var newPassw       = $('#newpassw').val();
        var newEmail       = $('#newemail').val();
        var newRole        = $('#newrole').val();
        var dbId           = 'um_id';
        var dbTableName    = 'users_managers';
        var dbFieldName    = 'um_login';
        var dbInstanceName = 'Пользователь';
        $.post( 
            "../../ajax_scripts/adminInsertUsers.php",
            {   
                JsDataName      : newLogin,
                usrPassw        : newPassw,
                usrEmail        : newEmail,
                usrRole         : newRole,
                JsDataId        : dbId,
                JsTableName     : dbTableName,
                JsFieldName     : dbFieldName,
                JsInstanceName  : dbInstanceName,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    });
    
    $('input[id^="editUserData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/editUserData/, '');
        updateSelectRole('role' + fieldId);
        $('#login'+fieldId).prop('disabled', false);
        $('#password'+fieldId).prop('disabled', false);
        $('#email'+fieldId).prop('disabled', false);
        $('#role'+fieldId).prop('disabled', false);
        $(this).prop('disabled', true);
        $('#saveUserData'+fieldId).prop('disabled', false);
        $('#deleteUserData'+fieldId).prop('disabled', true);
    });
    
    $('input[id^="saveUserData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/saveUserData/, '');
        $('#login'+fieldId).prop('disabled', true);
        $('#password'+fieldId).prop('disabled', true);
        $('#email'+fieldId).prop('disabled', true);
        $('#role'+fieldId).prop('disabled', true);
            
        var newLogin = $('#login' + fieldId).val();
        var newPassw = $('#password' + fieldId).val();
        var newEmail = $('#email' + fieldId).val();
        var newRole  = $('#role' + fieldId).val();
        
        var dbId           = 'um_id';
        var dbTableName    = 'users_managers';
        var dbFieldName    = 'um_login';
        var dbInstanceName = 'Пользователь';
            
        $.post( 
        "../../ajax_scripts/adminSaveUsers.php",
            {   
                usrId           : fieldId,
                JsDataName      : newLogin,
                JsFieldId       : fieldId,
                usrPassw        : newPassw,
                usrEmail        : newEmail,
                usrRole         : newRole,
                JsDataId        : dbId,
                JsTableName     : dbTableName,
                JsFieldName     : dbFieldName,
                JsInstanceName  : dbInstanceName,
                dataType: "json"
            },
                function(success) {
                    alert(success);
                }
        );
        $(this).prop('disabled', true);
        $('#editUserData'+fieldId).prop('disabled', false);
        $('#deleteUserData'+fieldId).prop('disabled', false);
    });    

    function updateSelectRole(roleId) {
        $.ajax({
            type: "POST",
            url: "../../ajax_scripts/roleListUpdate.php",  
            dataType: "html",
            cache: false,
            success: function (response) {
                $('#' + roleId).html(response);
            }
        });
    }
    //------------------------------------------------------------------------------  ПОЛЬЗОВАТЕЛИ --------------------------------------------------------------------------
    //
    //
    //
    //
    //------------------------------------------------------------------------------  ПАКЕТЫ --------------------------------------------------------------------------------
    $("#addpacket").click(function() {
        var newDataName = $('#newPacket').val();
        
        var priceCommon = $('#commonPrice').val();
        var priceEconom = $('#economPrice').val();
        var priceStandart = $('#standartPrice').val();
        var priceVip = $('#vipPrice').val();
        
        
        
        var dbId = 'packet_id';
        var dbTableName = 'system_packets';
        var dbFieldName = 'packet_name';
        var dbInstanceName = 'Пакет';
        $.post( 
                "../../ajax_scripts/adminInsertPackets.php",
            {   
                JsDataName: newDataName,
                
                JsPriceCommon: priceCommon,
                JsPriceEconom: priceEconom,
                JsPriceStandart: priceStandart,
                JsPriceVip: priceVip,
                
                JsDataId: dbId,
                JsTableName: dbTableName,
                JsFieldName: dbFieldName,
                JsInstanceName: dbInstanceName,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    });
    
    $('input[id^="editPacketData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/editPacketData/, '');
        $('#packet' + fieldId).prop('disabled', false);
        $('#commonPrice' + fieldId).prop('disabled', false);
        $('#economPrice' + fieldId).prop('disabled', false);
        $('#standartPrice' + fieldId).prop('disabled', false);
        $('#vipPrice' + fieldId).prop('disabled', false);
        $(this).prop('disabled', true);
        $('#savePacketData' + fieldId).prop('disabled', false);
        $('#deletePacketData' + fieldId).prop('disabled', true);
    });
    
    $('input[id^="savePacketData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/savePacketData/, '');
        $('#packet'+fieldId).prop('disabled', true);
        $('#commonPrice' + fieldId).prop('disabled', true);
        $('#economPrice' + fieldId).prop('disabled', true);
        $('#standartPrice' + fieldId).prop('disabled', true);
        $('#vipPrice' + fieldId).prop('disabled', true);
        
        var newDataName = $('#packet' + fieldId).val();
       
        var priceCommon = $('#commonPrice' + fieldId).val();
        var priceEconom = $('#economPrice' + fieldId).val();
        var priceStandart = $('#standartPrice' + fieldId).val();
        var priceVip = $('#vipPrice' + fieldId).val();
       
        var dbId = 'packet_id';
        var dbTableName = 'system_packets';
        var dbFieldName = 'packet_name';
        var dbInstanceName = 'Пакет';
        $.post( 
            "../../ajax_scripts/adminSavePackets.php",
            {   
                JsFieldId       : fieldId,
                
                JsPriceCommon: priceCommon,
                JsPriceEconom: priceEconom,
                JsPriceStandart: priceStandart,
                JsPriceVip: priceVip,
                
                JsDataName      : newDataName,
                JsDataId        : dbId,
                JsTableName     : dbTableName,
                JsFieldName     : dbFieldName,
                JsInstanceName  : dbInstanceName,
                dataType        : "json"
            },
            function(success) {
                alert(success);
            }
        );
        $(this).prop('disabled', true);
        $('#editPacketData'+fieldId).prop('disabled', false);
        $('#deletePacketData'+fieldId).prop('disabled', false);
    });
    //------------------------------------------------------------------------------  ПАКЕТЫ --------------------------------------------------------------------------------
    //
    //
    //
    //
    //------------------------------------------------------------------------------  СТРАНЫ --------------------------------------------------------------------------------
    $("#addcountry").click(function() {
        var newDataName = $('#newCountry').val();
        var dbId = 'country_id';
        var dbTableName = 'system_countries';
        var dbFieldName = 'country_name';
        var dbInstanceName = 'Страна';
        $.post( 
                "../../ajax_scripts/adminInsertOperations.php",
            {   
                JsDataName: newDataName,
                JsDataId: dbId,
                JsTableName: dbTableName,
                JsFieldName: dbFieldName,
                JsInstanceName: dbInstanceName,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    });
    
    $('input[id^="editCountryData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/editCountryData/, '');
        $('#country' + fieldId).prop('disabled', false);
        $(this).prop('disabled', true);
        $('#saveCountryData' + fieldId).prop('disabled', false);
        $('#deleteCountryData' + fieldId).prop('disabled', true);
    });
    
    $('input[id^="saveCountryData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/saveCountryData/, '');
        $('#country'+fieldId).prop('disabled', true);
        var newDataName = $('#country' + fieldId).val();
        var dbId = 'country_id';
        var dbTableName = 'system_countries';
        var dbFieldName = 'country_name';
        var dbInstanceName = 'Страна';
        $.post( 
            "../../ajax_scripts/adminSaveOperations.php",
            {   
                JsFieldId       : fieldId,
                JsDataName      : newDataName,
                JsDataId        : dbId,
                JsTableName     : dbTableName,
                JsFieldName     : dbFieldName,
                JsInstanceName  : dbInstanceName,
                dataType        : "json"
            },
            function(success) {
                alert(success);
            }
        );
        $(this).prop('disabled', true);
        $('#editCountryData'+fieldId).prop('disabled', false);
        $('#deleteCountryData'+fieldId).prop('disabled', false);
    }); 
    //------------------------------------------------------------------------------  СТРАНЫ --------------------------------------------------------------------------------
    //
    // 
    //  
    // 
    //------------------------------------------------------------------------------  УСЛУГИ --------------------------------------------------------------------------------
    $("#addservice").click(function() {
        var newDataName = $('#newService').val();
        var dbId = 'service_id';
        var dbTableName = 'system_services';
        var dbFieldName = 'service_name';
        var dbInstanceName = 'Услуга';
        $.post( 
                "../../ajax_scripts/adminInsertOperations.php",
            {   
                JsDataName: newDataName,
                JsDataId: dbId,
                JsTableName: dbTableName,
                JsFieldName: dbFieldName,
                JsInstanceName: dbInstanceName,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    });
    
    $('input[id^="editServiceData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/editServiceData/, '');
        $('#service' + fieldId).prop('disabled', false);
        $(this).prop('disabled', true);
        $('#saveServiceData' + fieldId).prop('disabled', false);
        $('#deleteServiceData' + fieldId).prop('disabled', true);
    });
    
    $('input[id^="saveServiceData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/saveServiceData/, '');
        $('#service'+fieldId).prop('disabled', true);
        var newDataName = $('#service' + fieldId).val();
        var dbId = 'service_id';
        var dbTableName = 'system_services';
        var dbFieldName = 'service_name';
        var dbInstanceName = 'Услуга';
        $.post( 
            "../../ajax_scripts/adminSaveOperations.php",
            {   
                JsFieldId       : fieldId,
                JsDataName      : newDataName,
                JsDataId        : dbId,
                JsTableName     : dbTableName,
                JsFieldName     : dbFieldName,
                JsInstanceName  : dbInstanceName,
                dataType        : "json"
            },
            function(success) {
                alert(success);
            }
        );
        $(this).prop('disabled', true);
        $('#editServiceData'+fieldId).prop('disabled', false);
        $('#deleteServiceData'+fieldId).prop('disabled', false);
    });    
    //------------------------------------------------------------------------------  УСЛУГИ --------------------------------------------------------------------------------
    //
    // 
    //  
    //    
    //------------------------------------------------------------------------------ ПОДУСЛУГИ ------------------------------------------------------------------------------    
    $("#addpodservice").click(function() {
        var newDataName = $('#newPodservice').val();
        var dbId = 'podservice_id';
        var dbTableName = 'system_podservice';
        var dbFieldName = 'podservice_name';
        var dbInstanceName = 'Подуслуга';
        $.post( 
                "../../ajax_scripts/adminInsertOperations.php",
            {   
                JsDataName: newDataName,
                JsDataId: dbId,
                JsTableName: dbTableName,
                JsFieldName: dbFieldName,
                JsInstanceName: dbInstanceName,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    });

    $('input[id^="editPodserviceData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/editPodserviceData/, '');
        $('#podservice' + fieldId).prop('disabled', false);
        $(this).prop('disabled', true);
        $('#savePodserviceData' + fieldId).prop('disabled', false);
        $('#deletePodserviceData' + fieldId).prop('disabled', true);
    });
    
    $('input[id^="savePodserviceData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/savePodserviceData/, '');
        $('#podservice'+fieldId).prop('disabled', true);
        var newDataName = $('#podservice' + fieldId).val();
        var dbId = 'podservice_id';
        var dbTableName = 'system_podservice';
        var dbFieldName = 'podservice_name';
        var dbInstanceName = 'Подуслуга';
        $.post( 
            "../../ajax_scripts/adminSaveOperations.php",
            {   
                JsFieldId       : fieldId,
                JsDataName      : newDataName,
                JsDataId        : dbId,
                JsTableName     : dbTableName,
                JsFieldName     : dbFieldName,
                JsInstanceName  : dbInstanceName,
                dataType        : "json"
            },
            function(success) {
                alert(success);
            }
        );
        $(this).prop('disabled', true);
        $('#editPodserviceData'+fieldId).prop('disabled', false);
        $('#deletePodserviceData'+fieldId).prop('disabled', false);
    });
    //------------------------------------------------------------------------------ ПОДУСЛУГИ ------------------------------------------------------------------------------ 
    //
    //
    //
    //
    //------------------------------------------------------------------------------ РОЛИ -----------------------------------------------------------------------------------
    $("#addrole").click(function() {
        var newDataName = $('#newRole').val();
        var dbId = 'role_id';
        var dbTableName = 'system_roles';
        var dbFieldName = 'role_name';
        var dbInstanceName = 'Роль';
        $.post( 
                "../../ajax_scripts/adminInsertOperations.php",
            {   
                JsDataName: newDataName,
                JsDataId: dbId,
                JsTableName: dbTableName,
                JsFieldName: dbFieldName,
                JsInstanceName: dbInstanceName,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    });
    
    $('input[id^="editRoleData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/editRoleData/, '');
        $('#role' + fieldId).prop('disabled', false);
        $(this).prop('disabled', true);
        $('#saveRoleData' + fieldId).prop('disabled', false);
        $('#deleteRoleData' + fieldId).prop('disabled', true);
    });
    
    $('input[id^="saveRoleData"]').click(function(){
        var fieldId = $(this).attr('id').replace(/saveRoleData/, '');
        $('#role'+fieldId).prop('disabled', true);
        var newDataName = $('#role' + fieldId).val();
        
        var dbId = 'role_id';
        var dbTableName = 'system_roles';
        var dbFieldName = 'role_name';
        var dbInstanceName = 'Роль';
        
        $.post( 
            "../../ajax_scripts/adminSaveOperations.php",
            {   
                JsFieldId       : fieldId,
                JsDataName      : newDataName,
                JsDataId        : dbId,
                JsTableName     : dbTableName,
                JsFieldName     : dbFieldName,
                JsInstanceName  : dbInstanceName,
                dataType        : "json"
            },
            function(success) {
                alert(success);
            }
        );
        $(this).prop('disabled', true);
        $('#editRoleData'+fieldId).prop('disabled', false);
        $('#deleteRoleData'+fieldId).prop('disabled', false);
    }); 
    //------------------------------------------------------------------------------ РОЛИ -----------------------------------------------------------------------------------
    
    function updateSelectCountry() {
        $.ajax({
            type: "POST",
            url: "../../ajax_scripts/countryListUpdate.php",  
            dataType: "html",
            cache: false,
            success: function (response) {
                $('#select_country').html(response);
            }
        });
    }	
    
    function updateSelectService1() {
        $.ajax({
            type: "POST",
            url: "../../ajax_scripts/serviceSelectSimple.php",  
            dataType: "html",
            cache: false,
            success: function (response) {
                $('#select_service1').html(response);
            }
        });
    }
             
    function updateSelectService2() {
        $.ajax({
            type: "POST",
            url: "../../ajax_scripts/serviceSelectSimple.php",  
            dataType: "html",
            cache: false,
            success: function (response) {
                $('#select_service2').html(response);
            }
        });
    }
             
    function updatePodselectService() {
        $.ajax({
            type: "POST",
            url: "../../ajax_scripts/podserviceSelectSimple.php",  
            dataType: "html",
            cache: false,
            success: function (response) {
                $('#select_podservice').html(response);
            }
        });
    }
             
    $("#insertContServ").click(function(){    
        var index_Country = document.getElementById('select_country').selectedIndex;
        var index_Service = document.getElementById('select_service1').selectedIndex;
        $.post( 
            "../../ajax_scripts/insertContServRelation.php",
            {   
                selectCountryVal : index_Country,
                selectServiceVal : index_Service,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    });
            
    $("#insertServPods").click(function(){    
        var index_Service = document.getElementById('select_service2').selectedIndex;
        var index_Podservice = document.getElementById('select_podservice').selectedIndex;
        $.post( 
            "../../ajax_scripts/insertServPodsRelation.php",
            {   
                selectServiceVal : index_Service,
                selectPodserviceVal : index_Podservice,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    });
            
    $(document).ready(function(){
        updateSelectCountry();   
        updateSelectService1();
        updateSelectService2();
        updatePodselectService();
    });
});