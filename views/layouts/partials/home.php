<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/client/css/copy1.css' ?>">
</head>

<body>
    <div class="banner">
        <img src="<?php BASE_URL ?>assets/client/img/banner1.jpg" alt="Chưa Có Ảnh" id="banner_anh">
    </div>
    <div class="item">
        <h1>Danh mục Sản phẩm</h1>
        <div class="full-item">

            <div class="item-center mr25">
                <a class="item-link" href="<?= BASE_URL . '?act=nav-product' ?>">
                    <img src="<?php BASE_URL ?>assets/client/img/item2.jpg" alt="Chưa có ảnh">
                </a>
                <p>Lắc Chân</p>
            </div>

            <div class="item-center mr25">
                <a class="item-link" href="<?= BASE_URL . '?act=nav-product' ?>">
                    <img src="<?php BASE_URL ?>assets/client/img/item3.jpg" alt="Chưa có ảnh">
                </a>
                <p>Vòng tay</p>
            </div>

            <div class="item-center mr25">
                <a class="item-link" href="<?= BASE_URL . '?act=nav-product' ?>">
                    <img src="<?php BASE_URL ?>assets/client/img/item4.jpg" alt="Chưa có ảnh">
                </a>
                <p>Nhẫn</p>
            </div>

            <div class="item-center">
                <a class="item-link" href="<?= BASE_URL . '?act=nav-product' ?>">
                    <img src="<?php BASE_URL ?>assets/client/img/item5.jpg" alt="Chưa có ảnh">
                </a>
                <p>Khuyên tai</p>
            </div>
            <div class="item-center mr25">
                <a class="item-link" href="<?= BASE_URL . '?act=nav-product' ?>">
                    <img src="<?php BASE_URL ?>assets/client/img/item1.jpg" alt="Chưa có ảnh">
                </a>
                <p>Vòng Cổ</p>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <?php require_once PATH_VIEW . 'layouts/partials/tintuc.php' ?>
    </div>

    <div class="product_home">
        <h1>Sàn Phẩm Mới Nhất</h1>
        <div class="show_product">
            <?php foreach ($allProduct as $key) : ?>
                <div class="box_product">
                    <a href="?act=detail&id=<?= $key['id'] ?>"><img src="<?= BASE_URL . 'assets/client/img/profile_img/' . $key['img'] ?>"></a>
                    <h5><?= $key['name'] ?></h5>
                    <p><?= $key['price_new'] ?> <span class="span-p"><?= $key['price_old'] ?></span></p>
                    <!-- <input type="button" value="Thêm vào giỏ hàng"> -->
                    <div class="button-buy">
                        <input type="button" value="Thêm vào giỏ hàng">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>