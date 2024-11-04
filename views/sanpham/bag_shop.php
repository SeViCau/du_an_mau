<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Trang giỏ hàng</h1>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Image</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody id="giohang">
            <?php $STT = 1;
            $tong_tien = 0;
            foreach($showcart as $key): ?>
            <tr>
                    <td><?= $STT++ ?></td>
                    <td><?= $key['ten'] ?></td>
                    <td><img style="width: 100px" src="<?= BASE_URL . 'assets/client/img/profile_img/' . $key['hinhanh'] ?>"" alt=""></td>
                    <td><?= $key['gia'] ?></td>
                    <td><?= $key['soluong'] ?></td>
                    <td><?= number_format($key['soluong'] * $key['gia'], 0, ',', '.') ?> VNĐ</td>

                    <td>
                        <a href="<?= BASE_URL ?>?act=bag_delete&id=<?= $key['id'] ?>" 
                        onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')"
                        class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                
            
                <?php 
                    $tong_tien += $key['soluong'] * $key['gia'];
                ?>

        <?php endforeach ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">Tổng tiền</th>
                <th class="" colspan="5">
                    <?= number_format($tong_tien, 0, ',', '.') ?> VNĐ
                </th>

            </tr>
        </tfoot>
    </table>
    
    <div class="col-6 d-flex justify-content-end">
            <a href="<?= BASE_URL ?>?act=order" class="btn btn-primary">Đặt Mua</a>
        </div>
</body>
</html>