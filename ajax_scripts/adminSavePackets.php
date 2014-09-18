<?php
include('../classes/admin/class.adminDataOperations.php');

$dbDataId       = $_POST['JsDataId'];
$dbDataName     = $_POST['JsDataName'];
$dbTableName    = $_POST['JsTableName'];
$dbFieldName    = $_POST['JsFieldName'];
$dbFieldId      = $_POST['JsFieldId'];
$dbInstanceName = $_POST['JsInstanceName'];
$packetCat      = $_POST['JsCategory'];

$dataOperation = new adminDataOperations();
$dataOperation->savePacketData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName, $dbFieldId, $packetCat);

?>
