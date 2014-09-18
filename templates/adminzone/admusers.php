<html lang="en-gb" dir="ltr">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Административная панель - Редактирование пользователей</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="../css/uikit.css">
        <script src="../../js/jquery/jquery-1.10.2.js"></script>
        <script src="../../js/functions/function_AdminOperations.js"></script>
        <script>
            $(document).ready(function() {
                $.ajax({
                    type: "POST",
                    url: "../../ajax_scripts/roleListUpdate.php",  
                    dataType: "html",
                    cache: false,
                    success: function (response) {
                        $('#newrole').html(response);
                    }
                });
            });
        </script>
    </head>
    <body class="tm-background">
        <input value="Вернуться назад" onclick="location.href='../adminpanel'" type="button" style="width: 300px">
        <center><h2>Редактировать список пользователей</h2></center>
        <hr>
    </body>
</html>    

<?php

include ('../../setup/mysql_settings.php');

$currentUsers = mysql_query("SELECT * FROM users_managers");

echo    "<table border='1' cellspacing='0' cellpadding='0' align='center'>";
echo        "<tr>";
echo            "<td width='100'>";
echo                "<input type='text' id='newlogin' size='20' placeholder='укажите логин'>";
echo            "</td>";
echo            "<td width='100'>";
echo                "<input type='password' id='newpassw' size='19' placeholder='укажите пароль'>";
echo            "</td>";
echo            "<td width='100'>";
echo                "<input type='text' id='newemail' size='20' placeholder='укажите email'>";
echo            "</td>";
echo            "<td width='320'>";
echo                " укажите роль для пользователя: <select id='newrole'></select>";
echo            "</td>";
echo            "<td width='100'>";
echo                "<input type='button' id='adduser' value='добавить пользователя' size='62'>";
echo            "</td>";
echo        "</tr>";
echo    "</table>";

echo    "<br>";
echo    "<hr>";
echo    "<br>";

echo    "<table border='1' cellspacing='0' cellpadding='0' align='center' id='users_table'>";
echo        "<tr><td width='50'><center>№</center></td><td width='100'><center>Логин</center></td><td width='100'><center>Пароль</center></td><td width='100'><center>Email</center></td><td width='100'><center>Роль</center></td><td width='100' colspan='3'><center>Опции</center></td></tr>";
$row_counter = 0;
while ($getUserFields = mysql_fetch_array($currentUsers))
{
    $row_counter++;
    echo "<script>getUsersRows(".mysql_num_rows($currentUsers).");</script>"; 
    echo "<tr id='itemRowNumber".$row_counter."'>";
    echo    "<td width='50'><center>".$getUserFields['um_id']."</center></td>";
    if ($getUserFields['um_login'] == 'admin') 
    {
        echo    "<td width='100'><input type='text' id='login".$row_counter."' value='".$getUserFields['um_login']."' size='20' disabled></td>";
    } else 
    {
        echo    "<td width='100'><input type='text' id='login".$row_counter."' value='".$getUserFields['um_login']."' size='20' disabled></td>";    
    }
    echo    "<td width='100'><input type='password' id='password".$row_counter."' value='".($getUserFields['um_pass'])."' size='20' disabled></td>";
    echo    "<td width='100'><input type='text' id='email".$row_counter."' value='".$getUserFields['um_email']."' size='20' disabled></td>";
    if ($getUserFields['um_login'] == 'admin') 
    {
        echo    "<td width='100'><input type='text' id='role".$row_counter."' value='".$getUserFields['um_role']."' size='20' disabled></td>";
    } else 
    {
        echo    "<td width='100'><select id='role".$row_counter."' disabled><option value>".$getUserFields['um_role']."</option></select></td>";    
    }
    echo    "<td width='50'>";
        if ($getUserFields['um_login'] != 'admin') 
        { 
            echo "<center><input type='button' id='editUserData".$row_counter."' value='редактировать'></center></td>";
        }
    echo "</td>";    
    echo    "<td width='50'>";
        if ($getUserFields['um_login'] != 'admin') 
        { 
            echo "<center><input type='button' id='saveUserData".$row_counter."' value='сохранить' disabled></center></td>";
        }
    echo "</td>";
    echo    "<td width='50'>";
        if ($getUserFields['um_login'] != 'admin') 
        { 
            echo "<center><input type='button' id='deleteUserData".$row_counter."' value='удалить'></center></td>"; 
        }
    echo "</td>";
    echo "</tr>";
}
echo    "</table>";
/*
echo "<center><button type='button' style='width:60px' alt='добавить пользователя' title='добавить пользователя' id='AddAdminUsersButton' onclick='addUsersSection()'><img src='../../icons/bullet_plus.png'></button> <button type='button' id='saveUsersButton' style='width:60px' alt='сохранить изменения' title='сохранить изменения'><img src='../../icons/disk_black.png'></button> <button type='button' style='width:60px' alt='не сохранять изменений' title='не сохранять изменений' id='exitAdminUsersButton'><img src='../../icons/asterisk_red.png'></button></center>";
*/
?>
