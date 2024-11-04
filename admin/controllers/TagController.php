<?php
function tagListAll()
{
    $title = 'Danh sach tag';
    $view= 'tags/index';
    $script = 'datatable';
    $script2 = 'tags/script';
    $style = 'datatable';

    $tags = listAll('tags');
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function tagshowOne($id)
{
    $tag = showOne('tags', $id);
    if (empty($tag)) {
        e404();
    }
    $title = 'Chi tiet tag' . '  :  ' . $tag['name'];
    $view= 'tags/show';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function tagCreate()
{
    $title = 'Them tag';
    $view= 'tags/create';
    if (!empty($_POST)) {
        $data = [
            'name' => $_POST['name'] ?? null,
        ];

        // Biến kiểm tra validate
        $errors = validateTagCreate($data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=tag-create');
            exit;
        }

        insert('tags', $data);

        $_SESSION['success'] = 'Thao tác thành công';

        header('Location: ' . BASE_URL_ADMIN . '?act=tag');
        exit;
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateTagCreate($data)
{
    $errors = [];
    // Trường Name
    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    } else if (!checkUniqueName('tags', $data['name'])) {
        $errors[] = 'Trường Name bị trùng';
    }


    return $errors;
}

function tagUpdate($id)
{
    $tag = showOne('tags', $id);
    if (empty($tag)) {
        e404();
    }
    $title = 'Cập nhật tag' . '  :  ' . $tag['name'];
    $view= 'tags/update';

    if (!empty($_POST)) {
        $data = [
            'name' => $_POST['name'] ?? null,
        ];

        // Biến kiểm tra validate
        $errors = validateTagUpdate($id, $data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
        } else {
            update('tags', $id, $data);
            $_SESSION['success'] = 'Thao tác thành công';
        }

        header('Location: ' . BASE_URL_ADMIN . '?act=tag-update&id=' . $id);
        exit;
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateTagUpdate($id, $data)
{
    $errors = [];
    // Trường Name
    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    } else if (!checkUniqueNameForUpdate('tags', $id, $data['name'])) {
        $errors[] = 'Trường Name bị trùng';
    }

    return $errors;
}

function tagDelete($id)
{
    delete2('tags', $id);
    $_SESSION['success'] = 'Thao tác thành công';
    header('Location: ' . BASE_URL_ADMIN . '?act=tag');
    exit;
}
