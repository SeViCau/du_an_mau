<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="container-fluid">
        <!-- Page Heading -->
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Thông tin tài khoản
                </h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered border-dark">
                    <tr>
                        <th>Trường dữ liệu</th>
                        <th>Dữ Liệu</th>
                    </tr>
                    <tr>
                        <td>Tên người dùng</td>
                        <td><?php echo $_SESSION['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu</td>
                        <td><?php echo $_SESSION['pass'] ?></td>
                    </tr>
                </table>
                <a href="<?= BASE_URL ?>" class="btn btn-danger">Back to list</a>
            </div>
        </div>
    </div>
</body>

</html>