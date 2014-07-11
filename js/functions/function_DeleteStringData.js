function deleteFromRegistry(dataNumber)   {
    var answer = confirm ('Запись будет удалена! Продолжить?');
    if (answer) 
    $.post( 
        "../system/dataDelete.php",
        {dataToDelete: dataNumber },
        function(data) {
            alert(data);
            $("#data_field").load('../ajax_scripts/loadRegistryData.php');
        }        
    );
}

function deleteFromDraft(dataNumber)   {
    var answer = confirm ('Запись будет удалена! Продолжить?');
    if (answer) 
    $.post( 
        "../system/dataDelete.php",
        {dataToDelete: dataNumber },
        function(data) {
            alert(data);
            $("#data_field").load('../ajax_scripts/loadDraftData.php');
        }        
    );
}