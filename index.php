<?php
session_start();
// Require các file trong common
require_once './common/env.php';
require_once './common/connect-db.php';
require_once './common/helper.php';
require_once './common/model.php';

// Biến Môi Trường
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

$act = $_GET['act'] ?? '/';
match ($act) {
    '/' => homeIndex(),

    //CRUD Nav
    'nav-product' => navProduct(),
    'nav-brand' => navBrand(),
    'nav-us' => navAboutus(),
    'nav-hotline' => navHotline(),

    //CRUD Login
    'login-in' => LoginUser(),
    'login-register' => RegisterUser(),
    'login-information' => InformationUser($_SESSION['id']),
    'login-out' => LogoutUser(),

    // CRUD Detail
    'detail' => detail_Product($_GET['id']),
    // CRUD Bag
    'bag' => bag_shop(),
    'bag_delete' => bag_shop_delete($_GET['id']),
    'bag' => bag_shop(),
    'order' => order_shop()
};

require_once './common/disconnect-db.php';
