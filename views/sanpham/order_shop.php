<div class="container">
    <div class="order-form">
        <form method="POST" class="text-center">
            <div class="row">
                <div class="col-6 text-start">
                    <h2 class="text-center">Form Đặt Hàng</h2>
                    <label for="name">Họ và tên:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="phone">Số điện thoại:</label>
                    <input type="text" id="phone" name="phone" required>

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>

                    <label for="address">Địa chỉ:</label>
                    <input type="text" id="address" name="address" required>


                    <label for="note">Ghi chú:</label>
                    <textarea id="note" name="note" placeholder="Ghi chú thêm..."></textarea>

                    <h5 class="order-title my-3">Hình thức thanh toán</h5>
                    <div class="payment">
                        <input type="radio" name="payinformation" value="1" id="pay-cod">
                        <label for="pay-cod">Thanh toán tiền mặt khi nhận hàng (COD)</label><br>

                        <input type="radio" name="payinformation" value="2" id="pay-bank">
                        <label for="pay-bank">Thanh toán bằng chuyển khoản ngân hàng</label>
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-center">Sản Phẩm</h2>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Image</th>
                                <th>Đơn Giá</th>
                                <th>Số Lượng</th>
                                <th>Thành Tiền</th>
                            </tr>
                        </thead>
                        <tbody id="giohang">
                            <?php $STT = 1;
                            $tong_tien = 0;
                            foreach ($showcart as $key): ?>
                                <tr>
                                    <td><?= $STT++ ?></td>
                                    <td><?= $key['ten'] ?></td>
                                    <td><img style="width: 100px" src="<?= BASE_URL . 'assets/client/img/profile_img/' . $key['hinhanh'] ?>"" alt=""></td>
                                    <td><?= $key['gia'] ?></td>
                                    <td><?= $key['soluong'] ?></td>
                                    <td><?= number_format($key['soluong'] * $key['gia'], 0, ',', '.') ?> VNĐ</td>
                                </tr>
                                <?php
                                $tong_tien += $key['soluong'] * $key['gia'];
                                ?>

                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan=" 2">Tổng tiền</th>
                                    <th class="" colspan="5">
                                        <?= number_format($tong_tien, 0, ',', '.') ?> VNĐ
                                    </th>
                                </tr>
                                </tfoot>
                    </table>
                </div>
            </div>

            <button class="btn btn-primary p-3 fs-3 mt-4" type="submit" name="submit_order">Đặt Hàng</button>
        </form>
    </div>
</div>