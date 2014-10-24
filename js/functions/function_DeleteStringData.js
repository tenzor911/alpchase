function deleteFromRegistry(dataNumber)   {
    var answer = confirm ('Запись будет удалена! Продолжить?');
    if (answer) 
    $.post( 
        "../system/dataDelete.php",
        {dataToDelete: dataNumber },
        function(data) {
            $("#data_field").load('../ajax_scripts/loadRegistryData.php');
            //alert("Запись № " + data + " удалена!");
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
            $("#data_field").load('../ajax_scripts/loadDraftData.php');
            //alert("Запись № " + data + " удалена!");
        }        
    );
}