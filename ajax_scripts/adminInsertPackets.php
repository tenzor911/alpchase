<?php
include('../classes/admin/class.adminDataOperations.php');

$dbDataId       = $_POST['JsDataId'];
$dbDataName     = $_POST['JsDataName'];
$dbTableName    = $_POST['JsTableName'];
$dbFieldName    = $_POST['JsFieldName'];
$dbInstanceName = $_POST['JsInstanceName'];

$priceCommon    = $_POST['JsPriceCommon'];
$priceEconom    = $_POST['JsPriceEconom'];
$priceStandart  = $_POST['JsPriceStandart'];
$priceVip       = $_POST['JsPriceVip'];

$dataOperation = new adminDataOperations();

$dataOperation->insertPacketData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName, $priceCommon, $priceEconom, $priceStandart, $priceVip);
?>
