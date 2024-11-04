<?php

function userListAll()
{
    $title = 'Danh sach User';
    $view = 'users/index';
    $script = 'datatable';
    $script2 = 'users/script';
    $style = 'datatable';

    $users = listAll('users');
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function userShowOne($id)
{
    $user = showOne('users', $id);
    if (empty($user)) {
        e404();
    }
    $title = 'Chi tiet User' . '  :  ' . $user['name'];
    $view = 'users/show';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function userCreate()
{
    $title = 'Them User';
    $view = 'users/create';
    if (!empty($_POST)) {
        $data = [
            'name' => $_POST['name'] ?? null,
            'email' => $_POST['email'] ?? null,
            'password' => $_POST['password'] ?? null,
            'type' => $_POST['type'] ?? null,
        ];

        // Biến kiểm tra validate
        $errors = validateUserCreate($data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=user-create');
            exit;
        }

        insert('users', $data);

        $_SESSION['success'] = 'Thao tác thành công';
        header('Location: ' . BASE_URL_ADMIN . '?act=user');
        exit;
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
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

function userUpdate($id)
{
    $user = showOne('users', $id);
    if (empty($user)) {
        e404();
    }
    $title = 'Cập nhật User' . '  :  ' . $user['name'];
    $view = 'users/update';

    if (!empty($_POST)) {
        $data = [
            'name' => $_POST['name'] ?? null,
            'email' => $_POST['email'] ?? null,
            'password' => $_POST['password'] ?? null,
            'type' => $_POST['type'] ?? null,
        ];

        // Biến kiểm tra validate
        $errors = validateUserUpdate($id, $data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
        } else {
            update('users', $id, $data);
            $_SESSION['success'] = 'Thao tác thành công';
        }

        header('Location: ' . BASE_URL_ADMIN . '?act=user-update&id=' . $id);
        exit;
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateUserUpdate($id, $data)
{
    $errors = [];
    // Trường Name
    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    }

    // Trường Email
    if (empty($data['email'])) {
        $errors[] = 'Trường email là bắt buộc';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Trường email không đúng định dạng';
    } else if (!checkUniqueEmailForUpdate('users', $id, $data['email'])) {
        $errors[] = 'Trường email bị trùng';
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

function userDelete($id)
{
    delete2('users', $id);
    $_SESSION['success'] = 'Thao tác thành công';
    header('Location: ' . BASE_URL_ADMIN . '?act=user');
    exit;
}
