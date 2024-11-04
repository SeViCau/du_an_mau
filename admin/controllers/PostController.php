<?php
function postListAll()
{
    $title = "Danh sách bài POST < SẢN PHẨM >";
    $style = 'datatable';
    $script = 'datatable';
    $script2 = 'posts/script';
    $posts = listAll('posts');
    $view = 'posts/index';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function postShowOne($id)
{
    $post = showOne('posts', $id);
    if (empty($posts)) {
        e404();
    }
    $title = 'Chi tiết Bài Post' . ' : ' . $posts['title'];
    $view = 'posts/show';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function postCreate()
{
    $title = 'Thêm Bài Post';
    $category_options = listAll('categories');
    $author_options = listAll('authors');
    $view = 'posts/create';

    if (!empty($_POST)) {
        // Kiểm tra và lọc dữ liệu từ POST
        $name = $_POST['name'] ?? null;
        $excerpt = $_POST['excerpt'] ?? null;
        $price_old = $_POST['price_old'] ?? null;
        $price_new = $_POST['price_new'] ?? null;
        $category_id = $_POST['category_id'] ?? null;
        $author_id = $_POST['author_id'] ?? null;
        $status = $_POST['status'] ?? null;

        // Kiểm tra xem ảnh có được tải lên không
        if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
            $img = $_FILES['img']['name'];
            $tmp = $_FILES['img']['tmp_name'];

            // Kiểm tra loại file và kích thước file (ví dụ chỉ cho phép ảnh jpg, png)
            $allowed_types = ['image/jpeg', 'image/png'];
            if (in_array($_FILES['img']['type'], $allowed_types)) {
                // Di chuyển ảnh vào thư mục assets/client/img/profile/
                if (move_uploaded_file($tmp, '../assets/client/img/profile_img/' . $img)) {
                    $data = [
                        'name' => $name,
                        'excerpt' => $excerpt,
                        'img' => $img,
                        'price_old' => $price_old,
                        'price_new' => $price_new,
                        'category_id' => $category_id,
                        'author_id' => $author_id,
                        'status' => $status
                    ];

                    // Chèn dữ liệu vào bảng 'posts'
                    insert('posts', $data);

                    // Thông báo thành công
                    $_SESSION['success'] = 'Thao tác thành công';
                    header('Location: ' . BASE_URL_ADMIN . '?act=post');
                    exit;
                } else {
                    // Xử lý khi không thể di chuyển file ảnh
                    $_SESSION['error'] = 'Lỗi khi tải lên ảnh.';
                }
            } else {
                $_SESSION['error'] = 'Chỉ cho phép tải lên file ảnh định dạng JPG hoặc PNG.';
            }
        } else {
            $_SESSION['error'] = 'Vui lòng chọn một ảnh hợp lệ.';
        }
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

