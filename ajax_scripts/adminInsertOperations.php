<?php
include('../classes/admin/class.adminDataOperations.php');

$dbDataId       = $_POST['JsDataId'];
$dbDataName     = $_POST['JsDataName'];
$dbTableName    = $_POST['JsTableName'];
$dbFieldName    = $_POST['JsFieldName'];
$dbInstanceName = $_POST['JsInstanceName'];

$dataOperation = new adminDataOperations();

$dataOperation->insertData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName);
?>
