
<?
include("config.php");
include("style/top.php");

echo "
<table width=100% border=0 cellspacing=0 cellpadding=0>
<tr>
	<td width =50% bgcolor='#007799'>
	<b><center><font size='6'>База данных по статистике</font></center></b>
	</td>
</tr>
<tr>
<td bgcolor='#7799BB'>

<center><br><form action = insert_question.php method ='GET'>

<input type='text' name=text size='20' maxlength=10 onKeyPress ='if ((event.keyCode < 48) || (event.keyCode > 57)) event.returnValue = false;'>

<br><br><center><table border=1><tr><td><INPUT TYPE='radio' NAME='a2' VALUE= 'Отмена подписки' checked>Отмена подписки</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= 'Возврат средств'>Возврат средств</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= 'Не работает PIN'>Не работает PIN</td><tr>
<td><INPUT TYPE='radio' NAME='a2' VALUE= 'Запрос на новый PIN'>Запрос на новый PIN</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= 'Тип услуги'>Тип услуги</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= 'Баннер'>Баннер</td><tr>
<td><INPUT TYPE='radio' NAME='a2' VALUE= 'Не найден в базе'>Не найден в базе</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= 'Самостоятельно отключено'>Самостоятельно отключено</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= 'Другая причина'>Другая причина</td></table>
<br>
<input type=submit value=Добавить></center>
<br></form>
</td>
</tr>
<tr>
	<td bgcolor='#77BBBB'>
<br>
	<center><b>Список номеров</b></center><hr>
";

		echo "<center><br><table border=1>";
		echo "<tr><td><b><center>Дата</center></b></td><td><b><center>Номера телефонов</center></b></td><td><b><center>Причина</center></b></td><td><b>Удаление</b></td></tr>";

		if($dbq=mysql_query("select * from questions"))
		{
			while($db = mysql_fetch_array($dbq))
			{
				echo "<tr><td>".$db['Date']."&nbsp;</td><td><center>".$db['Text']."</center></td><td>".$db['Reason']."&nbsp;</td><td><a href = 'delete_question.php?delete=".$db['ID']."'>Удалить</a></td></tr>";
	
			}
			echo "</table><br><hr>";
		}
		else
		{
			echo "<p><b>Error: ".mysql_error()."</b><p>";
		}
		

 
echo "
	</td>
</tr>
</table>

";
include("style/bottom.php");

?>