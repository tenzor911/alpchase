function reviveData()   {
    var answer = confirm ('Вернуть исходные данные?')
    if (answer) { 
        location.reload();  
    }   
} 

function dropData() {
    var answer = confirm ('Очистить все поля?')
    if (answer) {
        document.getElementsByName("edit_name")[0].value = '';
        document.getElementsByName("edit_surn")[0].value = '';
        document.getElementsByName("edit_midd")[0].value = '';
        document.getElementsByName("edit_email")[0].value = '';
        document.getElementsByName("edit_primphone")[0].value = '';
        document.getElementsByName("edit_addphone")[0].value = '';
        document.getElementsByName("edit_compname")[0].value = '';
        document.getElementsByName("edit_country")[0].value = '';
        document.getElementsByName("edit_city")[0].value = '';
    }
}