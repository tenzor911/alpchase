<?php
include('../classes/admin/class.adminDataOperations.php');

$dbDataId       = $_POST['JsDataId'];
$dbDataName     = $_POST['JsDataName'];
$dbTableName    = $_POST['JsTableName'];
$dbFieldName    = $_POST['JsFieldName'];
$dbInstanceName = $_POST['JsInstanceName'];

$dbUsrPass      = $_POST['usrPassw'];
$dbUsrEmail     = $_POST['usrEmail'];
$dbUsrRole      = $_POST['usrRole'];
    
$dataOperation = new adminDataOperations();

$dataOperation->insertUserData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName, $dbUsrPass, $dbUsrEmail, $dbUsrRole);

?>
