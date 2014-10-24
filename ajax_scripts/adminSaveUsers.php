<?php
include('../classes/admin/class.adminDataOperations.php');

$dbDataId       = $_POST['JsDataId'];
$dbDataName     = $_POST['JsDataName'];
$dbTableName    = $_POST['JsTableName'];
$dbFieldName    = $_POST['JsFieldName'];
$dbInstanceName = $_POST['JsInstanceName'];
$dbFieldId      = $_POST['JsFieldId'];
        
$dbUsrPass      = $_POST['usrPassw'];
$dbUsrEmail     = $_POST['usrEmail'];
$dbUsrRole      = $_POST['usrRole'];
    
$dataOperation = new adminDataOperations();

$dataOperation->saveUserData($dbInstanceName, $dbDataName, $dbUsrPass, $dbUsrEmail, $dbUsrRole, $dbDataId, $dbTableName, $dbFieldName, $dbFieldId);

?>
