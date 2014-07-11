<?php
class draftLoaderSearch 
{
    function loadDraftBySearch($searchWord)
    {
        $result = mysql_query("SELECT * FROM users_customers WHERE customer_compname LIKE '%$searchWord%' AND quest_status = 'черновик' ORDER BY customer_id DESC");
        while($data = mysql_fetch_assoc($result))
        {   
            echo "<tr>";
            echo    "<td width='40'>".$data['customer_id']."</td>";
            echo    "<td width='60'>".$data['quest_date']."</td>";
            echo    "<td width='200'>".$data['customer_surn']." ".$data['customer_name']." ".$data['customer_midd']."</td>";
            echo    "<td width='180'>".$data['customer_email']."</td>";
            echo    "<td width='140'>".$data['customer_primaryphone']."</td>";
            echo    "<td width='200'>".$data['customer_compname']."</td>";
            echo    "<td width='120'>".$data['customer_country']."</td>";
            echo    "<td width='120'>".$data['customer_city']."</td>";
            echo    "<td width='120'>".$data['customer_country']."</td>";
            echo    "<td width='200'>".$data['customer_compname']."</td>";
            echo    "<td width='20'><center><a href='../system/draftEdit.php?edit=".$data['customer_id']."'><img src='../icons/bullet_edit.png' alt='редактировать' title='редактировать'></a></center></td>"; 
            echo    "<td width='20'>";
            if ($data['customer_email'] != '')
            { 
                echo "<center><a href='../system/draftChange.php?change=".$data['customer_id']."'><img src='../icons/mail.png' alt='известить клиента' title='известить клиента'></a></center>"; 
            }
            echo    "</td>";
            echo    "<td width='20'><center><a href='#'><img src='../icons/bullet_cross.png' id='deleteData' onclick='deleteFromDraft(".$data['customer_id'].")' alt='удалить' title='удалить'></a></center></td>";
            echo "</tr>";
        }
    }
}
