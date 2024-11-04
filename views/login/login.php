<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/css/login.css">
    <title>Đăng Nhập</title>
</head>

<body>
    <div class="login-form">
        <a href="<?= BASE_URL ?>"><i class="fa-solid fa-circle-chevron-left"></i>Trang chủ</a>
        <div class="img">
            <img src="<?= BASE_URL . 'assets/client/img/logo.jpg' ?>">
        </div>
        <h2>Đăng Nhập</h2>
        <form method="POST">
            <div class="username">
                <label>Email :</label><br>
                <input name="user" type="text" required>
                <label>Mật khẩu :</label><br>
                <input name="pass" type="password" required>

            </div>
            <p>Bạn chưa có tài khoản ? <a href="<?= BASE_URL . '?act=login-register' ?>">Đăng Ký Ngay</a></p>
            <div class="next">
                <input type="submit" name="btn-login" value="Đăng Nhập">
            </div>
        </form>
    </div>
</body>

</html>