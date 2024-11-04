<?php
session_start();
// Require các file trong commons
require_once '../common/env.php';
require_once '../common/connect-db.php';
require_once '../common/helper.php';
require_once '../common/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

// Điều hướng
$act = $_GET['act'] ?? '/';
match ($act) {
    '/' => dashboard(),


    // CRUD User
    'user' => userListAll(),
    'user-detail' => userShowOne($_GET['id']),
    'user-create' => userCreate(),
    'user-update' => userUpdate($_GET['id']),
    'user-delete' => userDelete($_GET['id']),

    // CRUD CateGory
    'category' => categoryListAll(),
    'category-detail' => categoryShowOne($_GET['id']),
    'category-create' => categoryCreate(),
    'category-update' => categoryUpdate($_GET['id']),
    'category-delete' => categoryDelete($_GET['id']),

    // CRUD Author
    'author' => authorListAll(),
    'author-detail' => authorShowOne($_GET['id']),
    'author-create' => authorCreate(),
    'author-update' => authorUpdate($_GET['id']),
    'author-delete' => authorDelete($_GET['id']),

    // CRUD Tag
    'tag' => tagListAll(),
    'tag-detail' => tagShowOne($_GET['id']),
    'tag-create' => tagCreate(),
    'tag-update' => tagUpdate($_GET['id']),
    'tag-delete' => tagDelete($_GET['id']),


    // CRUD POST
    'post' => postListAll(),
    'post-detail' => postShowOne($_GET['id']),
    'post-create' => postCreate(),
/*     'post-update' => postUpdate($_GET['id']),
    'post-delete' => postDelete($_GET['id']), */
};

require_once '../common/disconnect-db.php';
