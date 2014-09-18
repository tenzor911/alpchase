<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

class adminDataOperations   {
    public function insertData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName/*, $packetCat*/) 
    {
        $checkDataPresence = mysql_query("SELECT ".$dbDataId." FROM ".$dbTableName." WHERE ".$dbFieldName."='$dbDataName' LIMIT 1");
        if( mysql_num_rows( $checkDataPresence ) > 0 ) 
        {
            echo "Ошибка! ".$dbInstanceName." ".$dbDataName." уже есть в списке!";    
        } 
        else 
        {
            mysql_query("INSERT INTO ".$dbTableName." (".$dbFieldName.") VALUES ('$dbDataName')");    
            echo "".$dbInstanceName." ".$dbDataName." успешно добавлена!";
            /*echo $packetCat;*/
        }
    }
    
    public function insertPacketData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName, $packetCat) 
    {
        $checkDataPresence = mysql_query("SELECT ".$dbDataId." FROM ".$dbTableName." WHERE ".$dbFieldName."='$dbDataName' LIMIT 1");
        if( mysql_num_rows( $checkDataPresence ) > 0 ) 
        {
            echo "Ошибка! ".$dbInstanceName." ".$dbDataName." уже есть в списке!";    
        } 
        else 
        {
            mysql_query("INSERT INTO ".$dbTableName." (".$dbFieldName.", packet_type) VALUES ('$dbDataName', '$packetCat')");    
            echo "".$dbInstanceName." ".$dbDataName." успешно добавлен!";
            /*echo $packetCat;*/
        }
    }
    
    public function insertUserData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName, $dbUsrPass, $dbUsrEmail, $dbUsrRole) 
    {
        $checkDataPresence = mysql_query("SELECT ".$dbDataId." FROM ".$dbTableName." WHERE ".$dbFieldName."='$dbDataName' LIMIT 1");
        if( mysql_num_rows( $checkDataPresence ) > 0 ) 
        {
            echo "Ошибка! ".$dbInstanceName." ".$dbDataName." уже есть в списке!";    
        } 
        else 
        {
            mysql_query("INSERT INTO ".$dbTableName." (".$dbFieldName.", um_pass, um_email, um_role) VALUES ('$dbDataName', md5('$dbUsrPass'),'$dbUsrEmail', '$dbUsrRole' )");    
            echo "".$dbInstanceName." ".$dbDataName." успешно добавлена!";
        }
    }
    
    public function saveData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName, $dbFieldId) 
    {
        $checkDataPresence = mysql_query("SELECT ".$dbDataId." FROM ".$dbTableName." WHERE ".$dbFieldName."='$dbDataName' LIMIT 1");
        if( mysql_num_rows( $checkDataPresence ) > 0 ) 
        {
            echo "Ошибка! ".$dbInstanceName." ".$dbDataName." уже есть в списке!";   
        } 
        else 
        {
            mysql_query("UPDATE ".$dbTableName." SET ".$dbFieldName."='$dbDataName' WHERE ".$dbDataId."='$dbFieldId'");
            echo "".$dbInstanceName." ".$dbDataName." успешно сохранена!";
        }
    }  
    
    public function savePacketData($dbInstanceName, $dbDataName, $dbDataId, $dbTableName, $dbFieldName, $dbFieldId, $packetCat) 
    {
        $checkDataPresence = mysql_query("SELECT ".$dbDataId." FROM ".$dbTableName." WHERE ".$dbFieldName."='$dbDataName' LIMIT 1");
        if( mysql_num_rows( $checkDataPresence ) > 0 ) 
        {
            echo "Ошибка! ".$dbInstanceName." ".$dbDataName." уже есть в списке!";   
        } 
        else 
        {
            mysql_query("UPDATE ".$dbTableName." SET ".$dbFieldName."='$dbDataName', packet_type='$packetCat' WHERE ".$dbDataId."='$dbFieldId'");
            echo "".$dbInstanceName." ".$dbDataName." успешно сохранен!";
        }
    }  
    
    public function saveUserData($dbInstanceName, $dbDataName, $dbUsrPassword, $dbUsrEmail, $dbUsrRole, $dbDataId, $dbTableName, $dbFieldName, $dbFieldId) 
    {
        $checkDataPresence = mysql_query("SELECT ".$dbDataId." FROM ".$dbTableName." WHERE ".$dbFieldName."='$dbDataName' LIMIT 1");
        if( mysql_num_rows( $checkDataPresence ) > 0 ) 
        {
            echo "Ошибка! ".$dbInstanceName." ".$dbDataName." уже есть в списке!";   
        } 
        else 
        {
            mysql_query("UPDATE ".$dbTableName." SET ".$dbFieldName."='$dbDataName', um_pass=MD5('".$dbUsrPassword."'), um_email='$dbUsrEmail', um_role='$dbUsrRole' WHERE ".$dbDataId."='$dbFieldId'");
            echo "".$dbInstanceName." ".$dbDataName." успешно сохранен!";
        }
    }  
    
    
}
