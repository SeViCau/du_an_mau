<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/css/login.css">
    <title>Đăng Ký</title>
</head>

<body>
    <div class="login-form">
        <a href="<?= BASE_URL ?>"><i class="fa-solid fa-circle-chevron-left"></i>Trang chủ</a>
        <div class="img">
            <img src="<?= BASE_URL . 'assets/client/img/logo.jpg' ?>">
        </div>
        <h2>Đăng Ký</h2>
        <?php if (isset($_SESSION['errors'])): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($_SESSION['errors'] as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>
        <form method="POST">
            <div class="username">
                <label>Nickname :</label><br>
                <input name="nickname" type="text" required>
                <label>Email :</label><br>
                <input name="email" type="email" required>
                <label>Mật khẩu :</label><br>
                <input name="pass" type="password" required>
            </div>
            <p>Bạn đã có tài khoản ! <a href="<?= BASE_URL . '?act=login-in' ?>">Đăng Nhập</a></p>
            <div class="next">
                <input type="submit" name="btn-login" value="Đăng Ký">
            </div>
        </form>
    </div>
</body>

</html>