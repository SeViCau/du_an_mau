<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL_ADMIN ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user-astronaut"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <button class="nav-item active bg-info text-white p-1" onclick="openNewWindowClient()">Client Home</button>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <button class="nav-item active bg-info text-white p-1" onclick="openNewWindowMyPHP()">My PHP</button>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
            <i class="fas fa-user"></i>
            <span>Quản Lý Users</span>
        </a>
        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=user' ?>">Danh Sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=user-create' ?>">Thêm Mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse1">
            <i class="fas fa-user"></i>
            <span>Quản Lý Posts</span>
        </a>
        <div id="collapse2" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=post' ?>">Danh Sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=post-create' ?>">Thêm Mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse1">
            <i class="fas fa-user"></i>
            <span>Quản Lý Liên Kết Tag</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=tag' ?>">Danh Sách Thẻ</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN . '?act=tag-create' ?>">Liên Kết Post - Tag</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASE_URL_ADMIN . '?act=category' ?>">
            <i class="fab fa-apple"></i> Quản Lý Danh Mục
        </a>

    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= BASE_URL_ADMIN . '?act=author' ?>">
            <i class="fab fa-apple"></i> Quản Lý Nhãn Hàng
        </a>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>