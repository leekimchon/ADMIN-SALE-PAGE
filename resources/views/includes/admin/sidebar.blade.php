<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{ route('home.index') }}" class="brand-link">
    <img src="/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name ?? '' }}</a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('categories.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Danh mục sản phẩm
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('product.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Sản phẩm
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('slider.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Slider
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Tài khoản
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('role.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Nhóm quyền
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>