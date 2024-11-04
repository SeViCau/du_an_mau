<?php
if (!function_exists('IdlistAll')) {
    function Id_listAll($tableName1,$tableName2,$nameStyle)
    {
        try {
            $sql = "SELECT * FROM $tableName1 JOIN $tableName2 ON $tableName1.$nameStyle=$tableName2.id";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            debug($e);
        }
    }
}

