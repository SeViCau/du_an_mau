<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Create
            </h6>
        </div>
        <div class="card-body">

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
            <form action="" method="POST" enctype="multipart/form-data"> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Tên Sản Phẩm:</label>
                            <input type="text" class="form-control" id="name"
                                value="<?= isset($_SESSION['data']) ? $_SESSION['data']['name'] : null ?>"
                                placeholder="Enter name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="excerpt" class="form-label">Nội dung sản phẩm:</label>
                            <input type="text" class="form-control" id="excerpt"
                                value="<?= isset($_SESSION['data']) ? $_SESSION['data']['excerpt'] : null ?>"
                                placeholder="Enter name" name="excerpt">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price_old" class="form-label">Giá Cũ:</label>
                            <input type="number" class="form-control" id="price_old"
                                value="<?= isset($_SESSION['data']) ? $_SESSION['data']['price_old'] : null ?>"
                                placeholder="Enter price_old" name="price_old">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price_new" class="form-label">Giá Mới:</label>
                            <input type="number" class="form-control" id="price_new"
                                value="<?= isset($_SESSION['data']) ? $_SESSION['data']['price_new'] : null ?>"
                                placeholder="Enter price_new" name="price_new">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 mt-3">
                            <label for="img" class="form-label">Ảnh:</label>
                            <input type="file" class="form-control"  id="img"
                                value="<?= isset($_SESSION['data']) ? $_SESSION['data']['img'] : null ?>"
                                placeholder="Enter name" name="img">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="category" class="form-label">Chọn Danh Mục:</label>
                            <select name="category_id" id="category" class="form-control">
                                <?php foreach ($category_options as $value) : ?>
                                    <option <?= isset($_SESSION['data']) && $_SESSION['data']['category_id'] == $value ? 'selected' : null ?> value="<?= $value ?>"><?= $value['name_category'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="author" class="form-label">Nhãn Hàng:</label>
                            <select name="author_id" id="author" class="form-control">
                                <?php foreach ($author_options as $value) : ?>
                                    <option <?= isset($_SESSION['data']) && $_SESSION['data']['author_id'] == $value ? 'selected' : null ?> value="<?= $value ?>"><?= $value['name_author'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="status" class="form-label">Trạng Thái:</label>
                            <select name="status" id="status" class="form-control">
                                <option <?= isset($_SESSION['data']) && $_SESSION['data']['status'] === 'on'  ? 'selected' : null ?> value="on">Sẵn Hàng</option>
                                <option <?= isset($_SESSION['data']) && $_SESSION['data']['status'] === 'off' ? 'selected' : null ?> value="off">Hết Hàng</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="mr-3 btn btn-primary">Submit</button>
                <a href="<?= BASE_URL_ADMIN ?>?act=post" class="btn btn-danger">Back to list</a>

            </form>
        </div>
    </div>
</div>

<?php if (isset($_SESSION['data'])) {
    unset($_SESSION['data']);
} ?>