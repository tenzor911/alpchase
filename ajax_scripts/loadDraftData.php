<?php
include ('../classes/draft/draftLoaderGeneral.php');
include ('../classes/draft/draftLoaderFilter.php');
include ('../classes/draft/draftLoaderSearch.php');

include ('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$generalData = new draftLoaderGeneral;
$filterData = new draftLoaderFilter;
$searchData = new draftLoaderSearch;
?>
<table width='2200' border='1' cellpadding='0' cellspacing='0' align='center'>
    <tr>
        <td width='40'><center><b>№</b></center></td>
        <td width='60'><center><b>Дата</b></center></td>
        <td width='180'><center><b>ФИО</b></center></td>
        <td width='180'><center><b>Email</b></center></td>
        <td width='140'><center><b>Телефон</b></center></td>
        <td width='200'><center><b>Наименование компании</b></center></td>
        <td width='200'><center><b>Страна обращения</b></center></td>
        <td width='200'><center><b>Город обращения</b></center></td>
        <td width='600'><center><b>Наименование услуги</b></center></td>
        <td width='60' colspan='3'><center><b>Опции</b></center></td>
    </tr>
<?php            
if( isset($_POST["parameter"]) )
{
    $filter = $_REQUEST['filter_parameter_select'];
    $parameter = $_REQUEST['parameter'];
    $filterData->loadDraftByFilter($filter, $parameter);  
} 
elseif (isset($_POST["company_search_name"]))
{
    $companyData = $_REQUEST['company_search_name'];
    $searchData->loadDraftBySearch($companyData);
} 
else 
{
    $generalData->loadDraft(); 
}
?>
</table>
