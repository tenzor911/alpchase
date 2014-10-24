<?php
include('../classes/admin/class.adminDataOperations.php');

$dbDataId       = $_POST['JsDataId'];
$dbDataName     = $_POST['JsDataName'];
$dbTableName    = $_POST['JsTableName'];
$dbFieldName    = $_POST['JsFieldName'];
$dbFieldId      = $_POST['JsFieldId'];
$dbInstanceName = $_POST['JsInstanceName'];

$priceCommon    = $_POST['JsPriceCommon'];
$priceEconom    = $_POST['JsPriceEconom'];
$priceStandart  = $_POST['JsPriceStandart'];
$priceVip       = $_POST['JsPriceVip'];

$dataOperation = new adminDataOperations();
$dataOperation->savePacketData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName, $dbFieldId, $priceCommon, $priceEconom, $priceStandart, $priceVip);

?>
