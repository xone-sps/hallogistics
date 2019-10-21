<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
        <div class="os-padding">
          <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll; right: 0px; bottom: 0px;">
          <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hal Logistics</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(route('admin.index')); ?>" class="nav-link <?php echo e(Route::current()->getName() == 'admin.index' ? 'active' : ''); ?>">
              <p class="text">
                Dashboard
              </p>
            </a>          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.news')); ?>" class="nav-link <?php echo e(Route::current()->getName() == 'admin.news' ? 'active' : ''); ?>">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">News</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('admin.branch')); ?>" class="nav-link <?php echo e(Route::current()->getName() == 'admin.branch' ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p class="text">
                Branch
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.package')); ?>" class="nav-link <?php echo e(Route::current()->getName() == 'admin.package' ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p class="text">
                Package
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo e(route('admin.package_overpart')); ?>" class="nav-link <?php echo e(Route::current()->getName() == 'admin.package_overpart' ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p class="text">
                Package Over
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </div>
  </div>
        </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\xampp new\htdocs\hallogisticscli\laravel\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>