<?php
include ('../classes/registry/registryLoaderGeneral.php');
include ('../classes/registry/registryLoaderFilter.php');
include ('../classes/registry/registryLoaderSearch.php');

include ('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$generalData = new registryLoaderGeneral();
$filterData = new registryLoaderFilter();
$searchData = new registryLoaderSearch();
?>
<table width='2200' border='1' cellpadding='0' cellspacing='0' align='center'>
    <tr>
        <td width='40'><center><font size='2'><b>№</b></center></td>
        <td width='60'><center><font size='2'><b>Дата</b></center></td>
        <td width='60'><center><font size='2'><b>Статус</b></center></td>
        <td width='80'><center><font size='2'><b>Просмотры</b></center></td>
        <td width='100'><center><font size='2'><b>ФИО</b></center></td>
        <td width='120'><center><font size='2'><b>Email</b></center></td>
        <td width='80'><center><font size='2'><b>Телефон</b></center></td>
        <td width='160'><center><font size='2'><b>Наименование компании</b></center></td>
        <td width='120'><center><font size='2'><b>Страна обращения</b></center></td>
        <td width='120'><center><font size='2'><b>Город обращения</b></center></td>
        <td width='400'><center><font size='2'><b>Наименование услуги</b></center></td>
        <td width='60' colspan='3'><center><font size='2'><b>Опции</b></center></td>
    </tr>
<?php      
if( isset($_POST["parameter"]) )
{
    $filter = $_REQUEST['filter_parameter_select'];
    $parameter = $_REQUEST['parameter'];
    $filterData->loadRegistryByFilter($filter, $parameter);   
} elseif (isset($_POST["company_search_name"])){
    $companyData = $_REQUEST['company_search_name'];
    $searchData->loadRegistryBySearch($companyData);
} 
else 
{
    $generalData->loadRegistry();
}
?>
</table>
