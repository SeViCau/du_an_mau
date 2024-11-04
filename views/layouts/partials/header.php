<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="header-logo">
            <a href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>assets/client/img/logo.jpg" alt="Chưa Có Ảnh"></a>
            <div class="user-client">
                <img src="<?= BASE_URL ?>assets/client/img/user.gif" alt="">
                <div class="ml15 mt-2 login-account">
                    <?php if (isset($_SESSION['name']) && $_SESSION['name'] != '') { ?>
                        <h6 class="hi-header">Xin chào <?php echo $_SESSION['name']; ?></h6>
                        <div class="in-login">
                            <a href="<?= BASE_URL . '?act=login-information' ?>">Thông tin tài khoản</a>
                            <?php if (isset($_SESSION['type']) && $_SESSION['type'] == 0) { ?>
                                <a href="<?= BASE_URL . '?act=login-out' ?>"><i class="fa-solid fa-power-off mr10"></i>Đăng xuất</a>
                            <?php } ?>

                        </div>
                    <?php } else { ?>
                        <div class="out-login">
                            <a href="<?= BASE_URL . '?act=login-in' ?>">Đăng nhập</a>
                            <a href="<?= BASE_URL . '?act=login-register' ?>">Đăng ký</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <nav>
            <ul class="menu">
                <li class="mr25"><a href="<?= BASE_URL ?>">TRANG CHỦ</a></li>
                <li class="mr25"><a href="<?= BASE_URL . '?act=nav-product' ?>">SẢN PHẨM</a></li>
                <li class="mr25"><a href="<?= BASE_URL . '?act=nav-brand' ?>">NHÃN HÀNG</a></li>
                <li class="mr25"><a href="<?= BASE_URL . '?act=nav-us' ?>">VỀ CHÚNG TÔI</a></li>
                <li><a href="<?= BASE_URL . "?act=nav-hotline" ?>">LIÊN HỆ</a></li>
            </ul>

            <ul class="bottom-user">
                <li>
                    <label class="pr20 search" for="search">
                        <input class="input-search" type="search" placeholder="Search">
                        <a for="search" href="#">
                            <i class="ml20 fa-solid fa-magnifying-glass"></i>
                        </a>
                    </label>
                </li>
                <li id="boxcart" class="border-user-header"><a href="<?= BASE_URL . '?act=bag' ?>"><i class="fa-solid fa-bag-shopping"></i><span></span></a></li>
                <li class="pl20"><a href="#"><i class="fa-solid fa-bell"></i></a></li>
            </ul>
        </nav>
        <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
    </header>
</body>

</html>