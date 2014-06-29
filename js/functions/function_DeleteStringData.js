function deleteFromRegistry(dataNumber)   {
    var answer = confirm ('Запись будет удалена! Продолжить?')
    if (answer) 
    window.location='../system/registryDelete.php?delete='+dataNumber;  
}

function deleteFromDraft(dataNumber)   {
    var answer = confirm ('Запись будет удалена! Продолжить?')
    if (answer) 
    $.post( 
        "../system/draftDelete.php",
        {dataToDelete: dataNumber },
        function(data) {
            alert(data);
        }
                
    );
}