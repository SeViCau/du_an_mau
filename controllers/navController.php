<?php
function navProduct()
{
    $view = 'nav/nav-product';
    $title = 'Product';
    $allProduct1 = strlistAll_cate('posts','category_id',1);
    $allProduct2 = strlistAll_cate('posts','category_id',2);
    $allProduct3 = strlistAll_cate('posts','category_id',3);
    $allProduct4 = strlistAll_cate('posts','category_id',4);
    $allProduct5 = strlistAll_cate('posts','category_id',5);
    require_once PATH_VIEW . 'layouts/master.php';
}

function navBrand()
{
    $view = 'nav/nav-brand';
    $title = 'Brand-Us';
    $allProduct1 = strlistAll_cate('posts','author_id',1);
    $allProduct2 = strlistAll_cate('posts','author_id',2);
    $allProduct3 = strlistAll_cate('posts','author_id',3);
    $allProduct4 = strlistAll_cate('posts','author_id',4);
    $allProduct5 = strlistAll_cate('posts','author_id',6);
    require_once PATH_VIEW . 'layouts/master.php';
}

function navAboutus()
{
    $view = 'nav/nav-about-us';
    $title = 'About-Us';
    require_once PATH_VIEW . 'layouts/master.php';
}

function navHotline()
{
    $view = 'nav/nav-hotline';
    $title = 'Hotline-Us';
    require_once PATH_VIEW . 'layouts/master.php';
}