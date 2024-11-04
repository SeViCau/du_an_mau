<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?>
        <a href="<?= BASE_URL_ADMIN ?>?act=post-create" class="btn btn-primary">Thêm Mới</a>
    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables Example
            </h6>
        </div>
        <div class="card-body">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Sản Phẩm</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Name</th>
                            <th>Img</th>
                            <th>Price_Cũ</th>
                            <th>Price_Mới</th>
                            <th>Status</th>
                            <th>Acction</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $postsindex1 = $posts;
                            foreach ($postsindex1 as $post) : ?>
                            <tr>
                                <td><?= $post['id'] ?></td>
                                <td><?= $post['category_id'] ?></td>
                                <td><?= $post['author_id'] ?></td> 
                                <td><?= $post['name'] ?></td>
                                <td><?= $post['img'] ?></td>
                                <td><?= $post['price_old'] ?></td>
                                <td><?= $post['price_new'] ?></td>
                                <td><?= $post['status'] ?></td>
                                <td class="d-flex">
                                    <a href="<?= BASE_URL_ADMIN ?>?act=category-detail&id=<?= $category['id'] ?>" class="btn btn-info">Show</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=category-update&id=<?= $category['id'] ?>" class="btn btn-warning">Update</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=category-delete&id=<?= $category['id'] ?>"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>ID Sản Phẩm</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Name</th>
                            <th>Img</th>
                            <th>Price_Cũ</th>
                            <th>Price_Mới</th>
                            <th>Status</th>
                            <th>Acction</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>