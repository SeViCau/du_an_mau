<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .product-detail {
            display: flex;
            justify-content: space-between;
        }

        .product-image {
            border: 1px solid #000;
        }

        .product-image img {
            width: 500px;
            border-radius: 8px;
        }

        .product-info {
            width: 45%;
            padding-left: 20px;
        }

        .product-info h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
        }

        .product-info .price_new {
            font-size: 28px;
            color: #e63946;
            margin-bottom: 20px;
        }
        .product-info .price_new .price_old{
            font-size: 20px;
            color: #000;
            margin-bottom: 20px;
            margin-left: 15px;
            text-decoration:line-through;
            
        }
        .product-info .description {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .product-info .category {
            font-size: 14px;
            color: #777;
            margin-bottom: 15px;
        }

        .product-info .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #0077b6;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .product-info .btn:hover {
            background-color: #005f8a;
        }

        .product-additional {
            margin-top: 40px;
        }

        .product-additional h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .product-additional ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .product-additional ul li {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        /* Responsive for mobile */
        @media (max-width: 768px) {
            .product-detail {
                flex-direction: column;
                align-items: center;
            }

            .product-image, .product-info {
                width: 100%;
                padding-left: 0;
            }

            .product-info {
                padding-top: 20px;
            }
        }
    </style>
</head>
<body>

<form class="container" method="POST">
    <div class="product-detail">
        <div class="product-image">
            <img src="<?= BASE_URL . 'assets/client/img/profile_img/' . $detail['img'] ?>" alt="Product Image">
        </div>
        <div class="product-info">
            <h1><?= $detail['name'] ?></h1>
            <h4 class="price_new"><?= $detail['price_new'] ?><span class="price_old"><?= $detail['price_old'] ?></span></h4>
            <p class="category">Danh mục : <?= $post1['name_category'] ?></p>
            <p class="category">Nhãn hàng : <?= $post2['name_author'] ?></p>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Số lượng:</label>
                <input type="number" min="0" class="form-control"
                name="soluong">
            </div>
            <!-- Hidden inputs to send additional data -->
            <input type="hidden" name="ten" value="<?= $detail['name'] ?>">
            <input type="hidden" name="hinhanh" value="<?= $detail['img'] ?>">
            <input type="hidden" name="danhmuc" value="<?= $post1['name_category'] ?>">
            <input type="hidden" name="tacgia" value="<?= $post2['name_author'] ?>">
            <input type="hidden" name="gia" value="<?= $detail['price_new'] ?>">

            <button type="submit" class="btn" name="addcart">Thêm vào giỏ hàng</button>
            
        </div>
    </div>
</form>

</body>
</html>
