<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="product_home">
        <h1>Kiin</h1>
        <div class="show_product">
            <?php foreach ($allProduct1 as $key) : ?>
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

        <h1>DuySon</h1>
        <div class="show_product">
            <?php foreach ($allProduct2 as $key) : ?>
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

        <h1>Rosi</h1>
        <div class="show_product">
            <?php foreach ($allProduct3 as $key) : ?>
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

        <h1>Gemy</h1>
        <div class="show_product">
            <?php foreach ($allProduct4 as $key) : ?>
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

        <h1>Zir</h1>
        <div class="show_product">
            <?php foreach ($allProduct5 as $key) : ?>
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