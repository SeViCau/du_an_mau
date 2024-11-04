<?php
    // Khai báo các hàm dùng Global
    // nếu chưa tạo hàm require_file thì .... tạo
    if(!function_exists('require_file')) {
        function require_file($pathFolder) {
            $scandirfiles = scandir($pathFolder);
            $files = array_diff($scandirfiles,['.','..']);
            /* debug($files); */
            foreach ($files as $file) {
                require_once $pathFolder . $file;
            }
        }
    }

    if(!function_exists('debug')) {
        function debug($data) {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
            die;
        }
    }

    if(!function_exists('e404')) {
        function e404() {
            echo "404 - Not found";
            die;
        }
    }
?>