<?php

include ('../setup/mysql_settings.php');

$info1 = $_POST['info1'];

$result=mysql_query("SELECT $info1 FROM users_customers");

echo "
<table width='1652' border='1' cellpadding='0' cellspacing='0' align='center'>
  <tr>
    <td width='50'>№</td>
    <td width='100'>Дата</td>
    <td width='100'>Статус</td>
    <td width='200'>ФИО</td>
    <td width='150'>Email</td>
    <td width='120'>Телефон</td>
    <td width='200'>Наименование компании</td>
    <td width='150'>Страна обращения</td>
    <td width='150'>Город обращения</td>
    <td width='150'>Страна услуги</td>
    <td width='150'>Город услуги</td>
    <td>Наименование услуги</td>
  </tr>";

while($data = mysql_fetch_assoc($result))
{   
    echo "<tr>";
    echo    "<td width='50'>".$data['customer_id']."</td>";
    echo    "<td width='100'>".$data['quest_date']."</td>";
    echo    "<td width='100'>".$data['quest_status']."</td>";
    echo    "<td width='200'>".$data['customer_name']."</td>";
    echo    "<td width='150'>".$data['customer_email']."</td>";
    echo    "<td width='120'>".$data['customer_primaryphone']."</td>";
    echo    "<td width='200'>".$data['customer_compname']."</td>";
    echo    "<td width='150'>".$data['customer_country']."</td>";
    echo    "<td width='150'>".$data['customer_city']."</td>";
    echo    "<td width='150'>".$data['customer_compname']."</td>";
    echo    "<td width='150'>".$data['customer_compname']."</td>";
    echo    "<td>".$data['customer_compname']."</td>";
    echo "</tr>";
}
echo "</table>";
?>