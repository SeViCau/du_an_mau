<?php
    // Biến Localhost
    define('DB_HOST'        ,       'localhost' );
    define('DB_POST'        ,       '3306'      );
    define('DB_USERNAME'    ,       'root'      );
    define('DB_PASSWORD'    ,       ''          );
    define('DB_NAME'        ,       'du_an_mau' );

    // Biến URL
    define('BASE_URL'       ,       'http://localhost/Du_An_Mau/');
    define('BASE_URL_ADMIN' ,       'http://localhost/Du_An_Mau/admin/');

    // Tự động thêm class
    define('PATH_CSS_ADMIN'             ,   __DIR__     .   '/../assets/admin/css/');
    define('PATH_CSS_CLIENT'            ,   __DIR__     .   '/../assets/client/css/');


    // Biến ADMIN
    define('PATH_CONTROLLER_ADMIN'      ,   __DIR__     .   '/../admin/controllers/' );
    define('PATH_MODEL_ADMIN'           ,   __DIR__     .   '/../admin/models/'      );
    define('PATH_VIEW_ADMIN'            ,   __DIR__     .   '/../admin/views/'       );
    

    // Biến Client
    define('PATH_CONTROLLER'            ,   __DIR__     .   '/../controllers/'       );
    define('PATH_MODEL'                 ,   __DIR__     .   '/../models/'            );
    define('PATH_VIEW'                  ,   __DIR__     .   '/../views/'             ); 
?>