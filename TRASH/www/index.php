
<?
include("config.php");
include("style/top.php");

echo "
<table width=100% border=0 cellspacing=0 cellpadding=0>
<tr>
	<td width =50% bgcolor='#007799'>
	<b><center><font size='6'>���� ������ �� ����������</font></center></b>
	</td>
</tr>
<tr>
<td bgcolor='#7799BB'>

<center><br><form action = insert_question.php method ='GET'>

<input type='text' name=text size='20' maxlength=10 onKeyPress ='if ((event.keyCode < 48) || (event.keyCode > 57)) event.returnValue = false;'>

<br><br><center><table border=1><tr><td><INPUT TYPE='radio' NAME='a2' VALUE= '������ ��������' checked>������ ��������</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= '������� �������'>������� �������</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= '�� �������� PIN'>�� �������� PIN</td><tr>
<td><INPUT TYPE='radio' NAME='a2' VALUE= '������ �� ����� PIN'>������ �� ����� PIN</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= '��� ������'>��� ������</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= '������'>������</td><tr>
<td><INPUT TYPE='radio' NAME='a2' VALUE= '�� ������ � ����'>�� ������ � ����</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= '�������������� ���������'>�������������� ���������</td>
<td><INPUT TYPE='radio' NAME='a2' VALUE= '������ �������'>������ �������</td></table>
<br>
<input type=submit value=��������></center>
<br></form>
</td>
</tr>
<tr>
	<td bgcolor='#77BBBB'>
<br>
	<center><b>������ �������</b></center><hr>
";

		echo "<center><br><table border=1>";
		echo "<tr><td><b><center>����</center></b></td><td><b><center>������ ���������</center></b></td><td><b><center>�������</center></b></td><td><b>��������</b></td></tr>";

		if($dbq=mysql_query("select * from questions"))
		{
			while($db = mysql_fetch_array($dbq))
			{
				echo "<tr><td>".$db['Date']."&nbsp;</td><td><center>".$db['Text']."</center></td><td>".$db['Reason']."&nbsp;</td><td><a href = 'delete_question.php?delete=".$db['ID']."'>�������</a></td></tr>";
	
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