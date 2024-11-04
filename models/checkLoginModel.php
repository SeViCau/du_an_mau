<?php
if (!function_exists('checkUser')) {
    function checkUser($user, $pass)
    {
            $sql = "SELECT * FROM users WHERE email = :user AND password = :pass";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(":user", $user);
            $stmt->bindParam(":pass", $pass);
            $stmt->execute();
            $taikhoan = $stmt->fetch(PDO::FETCH_ASSOC);
            return $taikhoan;
            echo $taikhoan;
    }
}

