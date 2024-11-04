<?php
function homeIndex()
{
    $title = 'Home';
    $view = 'layouts/partials/home';
    $allProduct = strlistAll('posts',8);
    require_once PATH_VIEW . 'layouts/master.php';
}


function detail_product($id) {
    $post1 = Id_listAll('posts', 'categories', 'category_id', $id);
    $post2 = Id_listAll('posts', 'authors', 'author_id', $id);
    $detail = showOne('posts', $id);
    
    if (empty($detail)) {
        e404(); // Gọi hàm để hiển thị lỗi 404 nếu chi tiết không có
    }
    
    $title = 'Chi tiết ' . $detail['name'];
    $view = 'layouts/partials/detail';
    require_once PATH_VIEW . 'layouts/master.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addcart'])) {
        $data = [
            'ten' => $_POST['ten'] ?? null,
            'hinhanh' => $_POST['hinhanh'] ?? null,
            'danhmuc' => $_POST['danhmuc'] ?? null,
            'tacgia' => $_POST['tacgia'] ?? null,
            'gia' => $_POST['gia'] ?? null,
            'soluong' => $_POST['soluong'] ?? null
        ];

        insert('cart', $data);
        echo "<script>alert('Thêm thành công');</script>";
    }
}

function bag_shop() {
    $title = 'Giỏ Hàng';
    $view = 'sanpham/bag_shop';
    $showcart = listAll('cart');
    require_once PATH_VIEW . 'layouts/master.php';
}

function bag_shop_delete($id) {
    delete2('cart', $id);
    header('Location: ' . BASE_URL . '?act=bag');
    exit;
}

function order_shop() {
    $title = 'Đặt Hàng';
    $view = 'sanpham/order_shop';
    $showcart = listAll('cart');
    require_once PATH_VIEW . 'layouts/master.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_order'])) {
        $data = [
            'name' => $_POST['name'] ?? null,
            'phone' => $_POST['phone'] ?? null,
            'email' => $_POST['email'] ?? null,
            'address' => $_POST['address'] ?? null,
            'note' => $_POST['note'] ?? null,
            'pay_bank' => $_POST['payinformation'] ?? null
        ];

        insert('order_buy', $data);
        echo "<script>alert('Đặt hàng thành công');</script>";

    }
}

