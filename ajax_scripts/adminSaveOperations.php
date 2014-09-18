<?php
include('../classes/admin/class.adminDataOperations.php');

$dbDataId       = $_POST['JsDataId'];
$dbDataName     = $_POST['JsDataName'];
$dbTableName    = $_POST['JsTableName'];
$dbFieldName    = $_POST['JsFieldName'];
$dbFieldId      = $_POST['JsFieldId'];
$dbInstanceName = $_POST['JsInstanceName'];

$dataOperation = new adminDataOperations();
$dataOperation->saveData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName, $dbFieldId);
?>
