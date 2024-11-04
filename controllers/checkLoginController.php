<?php

function LoginUser()
{
    require_once PATH_VIEW . "login/login.php";

    // Đảm bảo session được khởi động

    if (isset($_POST['btn-login']) && $_POST['btn-login']) {
        $user = isset($_POST['user']) ? $_POST['user'] : null; // Kiểm tra nếu tồn tại
        $pass = isset($_POST['pass']) ? $_POST['pass'] : null; // Kiểm tra nếu tồn tại

        // Kiểm tra điều kiện
        if ($user && $pass) {
            $taikhoan = checkUser($user, $pass);

            if ($taikhoan == null) {
                echo "<script>alert('Đăng Nhập Không Thành Công');</script>";
                return 0; // Không đăng nhập thành công
            }
            // Nếu đăng nhập thành công và $taikhoan là một mảng
            if (is_array($taikhoan)) {
                $type = $taikhoan['type'];

                if ($type == 1) {
                    $_SESSION['id'] = $taikhoan['id'];
                    $_SESSION['name_admin'] = $taikhoan['name'];
                    $_SESSION['name'] = $_SESSION['name_admin'];
                    $_SESSION['email'] = $taikhoan['email'];
                    $_SESSION['pass'] = $taikhoan['password'];
                    $_SESSION['type'] = $type;
                    header("Location:" . BASE_URL_ADMIN);
                    exit(); // Dừng thực thi sau khi chuyển hướng
                } elseif ($type == 0) {
                    $_SESSION['id'] = $taikhoan['id'];
                    $_SESSION['name'] = $taikhoan['name'];
                    $_SESSION['email'] = $taikhoan['email'];
                    $_SESSION['pass'] = $taikhoan['password'];
                    $_SESSION['type'] = $type;
                    header("Location:" . BASE_URL);
                    exit(); // Dừng thực thi sau khi chuyển hướng
                } else {
                    header("Location:" . PATH_VIEW . "404.php");
                    exit(); // Dừng thực thi sau khi chuyển hướng
                }
            }
        } else {
            echo "<script>alert('Vui lòng nhập tên đăng nhập và mật khẩu.');</script>";
        }
    }
}


function RegisterUser()
{
    require_once PATH_VIEW . "login/register.php";
    if(!empty($_POST) && $_POST['btn-login'])  {
        $data = [
            'name' => $_POST['nickname'] ?? null,
            'email' => $_POST['email'] ?? null,
            'password' => $_POST['pass'] ?? null,
            'type' => '0',
        ];

        $errors = validateUserCreate($data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header("Location:" . BASE_URL . 'act=login-register');
        }

        insert('users', $data);
        
        header('Location: ' . BASE_URL);
        exit;
    }

}

function InformationUser($id)
{
    $user = showOne('users', $id);
    if (empty($user)) {
        e404();
    }
    $title = "Thông tin : " . $_SESSION['name'];
    $view = 'login/information';
    require_once PATH_VIEW . 'layouts/master.php';
}

function LogoutUser()
{
    session_unset();
    header("Location:" . BASE_URL . "?act=login-in");
}


function validateUserCreate($data)
{
    $errors = [];
    // Trường Name
    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 15) {
        $errors[] = 'Trường name độ dài tối đa 15 ký tự';
    }

    // Trường Email
    if (empty($data['email'])) {
        $errors[] = 'Trường email là bắt buộc';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Trường email không đúng định dạng';
    } else if (!checkUniqueEmail('users', $data['email'])) {
        $errors[] = 'Trường email đã được sử dụng';
    }

    // Trường Password
    if (empty($data['password'])) {
        $errors[] = 'Trường password là bắt buộc';
    } else if (strlen($data['password']) < 8 || strlen($data['password']) > 20) {
        $errors[] = 'Trường password lớn hơn 8 và nhỏ hơn 20 ký tự';
    }

    // Trường Type
    if ($data['type'] === null) {
        $errors[] = 'Trường type là bắt buộc';
    } else if (!in_array($data['type'], [0, 1])) {
        $errors[] = 'Trường type phải là 0 hoặc 1';
    }


    return $errors;
}

if (!function_exists('checkUniqueEmail')) {
    // Nếu không trùng thì trả về true
    // Nếu trùng thì trả về false
    function checkUniqueEmail($tableName, $email)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE email = :email LIMIT 1";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $data = $stmt->fetch();
            return empty($data) ? true : false;
        } catch (Exception $e) {
            debug($e);
        }
    }
}
