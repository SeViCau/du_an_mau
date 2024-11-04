<?php

function authorListAll()
{
    $title = 'Danh sach author';
    $view = 'authors/index';
    $script = 'datatable';
    $script2 = 'authors/script';
    $style = 'datatable';

    $authors = listAll('authors');
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function authorShowOne($id)
{
    $author = showOne('authors', $id);
    if (empty($author)) {
        e404();
    }
    $title = 'Chi tiet author' . '  :  ' . $author['name'];
    $view = 'authors/show';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function authorCreate()
{
    $title = 'Them author';
    $view = 'authors/create';
    if (!empty($_POST)) {
        $data = [
            'name' => $_POST['name'] ?? null,
        ];

        // Biến kiểm tra validateTag
        $errors = validateauthorCreate($data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=author-create');
            exit;
        }

        insert('authors', $data);

        $_SESSION['success'] = 'Thao tác thành công';

        header('Location: ' . BASE_URL_ADMIN . '?act=author');
        exit;
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateauthorCreate($data)
{
    $errors = [];
    // Trường Name
    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    } else if (!checkUniqueName('authors', $data['name'])) {
        $errors[] = 'Name đã được sử dụng';
    }

    return $errors;
}

function authorUpdate($id)
{
    $author = showOne('authors', $id);
    if (empty($author)) {
        e404();
    }
    $title = 'Cập nhật author' . '  :  ' . $author['name'];
    $view = 'authors/update';

    if (!empty($_POST)) {
        $data = [
            'name' => $_POST['name'] ?? null,
        ];

        // Biến kiểm tra validate
        $errors = validateauthorUpdate($id, $data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
        } else {
            update('authors', $id, $data);
            $_SESSION['success'] = 'Thao tác thành công';
        }

        header('Location: ' . BASE_URL_ADMIN . '?act=author-update&id=' . $id);
        exit;
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateauthorUpdate($id, $data)
{
    $errors = [];
    // Trường Name
    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    } else if (!checkUniqueNameForUpdate('authors', $id, $data['name'])) {
        $errors[] = 'Trường name bị trùng';
    }

    return $errors;
}

function authorDelete($id)
{
    delete2('authors', $id);
    $_SESSION['success'] = 'Thao tác thành công';
    header('Location: ' . BASE_URL_ADMIN . '?act=author');
    exit;
}
