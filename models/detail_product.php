<?php 

if (!function_exists('IdlistAll')) {
    function Id_listAll($tableName1,$tableName2,$nameStyle,$id)
    {
        try {
            $sql = "SELECT * FROM $tableName1 JOIN $tableName2 ON $tableName1.$nameStyle = $tableName2.id WHERE $tableName1.id = '$id'";

            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e) {
            debug($e);
        }
    }
}