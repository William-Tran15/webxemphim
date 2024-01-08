<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-toolbox"></i>
      </div>
      <div class="sidebar-brand-text mx-3">MinMovie</div>
      <div class="sidebar-brand-icon rotate-15">
        <i class="fas fa-toolbox"></i>
      </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tổng Quan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Quản Lý Phim
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-list-ul"></i>
        <span>Danh Mục</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Danh sách danh mục</h6>
          <a class="collapse-item" href=" <?php echo e(route('admin.cate.list')); ?> "><i class="far fa-list-alt pr-2"></i>Thể Loại</a>
          <a class="collapse-item" href=" <?php echo e(route('admin.nation.list')); ?> "><i class="far fa-flag pr-2"></i>Quốc Gia</a>
          <a class="collapse-item" href=" <?php echo e(route('admin.year.list')); ?> "><i class="far fa-calendar-check pr-2"></i>Năm Sản Xuất</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-video"></i>
        <span>Phim</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Danh mục quản lý</h6>
          <a class="collapse-item" href="<?php echo e(route('admin.movie.list')); ?> "><i class="fas fa-film pr-2"></i>Phim</a>
          <a class="collapse-item" href="cards.html"><i class="far fa-file-video pr-2"></i>Tủ Phim</a>
          <a class="collapse-item" href="cards.html"><i class="far fa-comment-alt pr-2"></i>Bình Luận</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Quản Lý Người Dùng
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-user"></i>
        <span>Người Dùng</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Danh mục quản lý:</h6>
          <a class="collapse-item" href="login.html"><i class="far fa-user pr-2"></i>Danh Sách</a>
          <a class="collapse-item" href="register.html"><i class="fas fa-plus-circle pr-2"></i>Thêm Người Dùng</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Thống Kê</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Bảng</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
<?php /**PATH E:\laragon\www\webxemphim\resources\views/admin/admin_layout/menu.blade.php ENDPATH**/ ?>