<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css.css">
    <title>Liên Hệ</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Liên Hệ Với Chúng Tôi</h1>
        <form class="contact-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3 mt-3">
                        <label for="name">Họ và tên</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3 mt-3">
                        <label for="phone">Số điện thoại</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <label for="subject">Tiêu đề</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                </div>
            </div>
                <div class="form-group">
                <label for="message">Nội dung</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Gửi</button>
        </form>
    </div>
</body>
</html>
