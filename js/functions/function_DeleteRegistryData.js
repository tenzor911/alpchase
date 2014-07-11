function away(dataNumber)   {
    var answer = confirm ('Запись будет удалена! Продолжить?')
    if (answer) 
    window.location='../system/draftDelete.php?delete='+dataNumber;  
}