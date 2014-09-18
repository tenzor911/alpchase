<?php
include('../classes/admin/class.adminDataOperations.php');

$dbDataId       = $_POST['JsDataId'];
$dbDataName     = $_POST['JsDataName'];
$dbTableName    = $_POST['JsTableName'];
$dbFieldName    = $_POST['JsFieldName'];
$dbInstanceName = $_POST['JsInstanceName'];
$packetCat      = $_POST['JsCategory'];

$dataOperation = new adminDataOperations();

$dataOperation->insertPacketData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName, $packetCat);
?>
