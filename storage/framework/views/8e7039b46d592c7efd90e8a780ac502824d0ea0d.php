<?php
$links = [
    [
        "href" => route('home'),
        "text" => "Dasboard",
        "icon" => "fas fa-home",
        "is_multi" => false
    ],
    [
        "text" => "Kelola Akun",
        "icon" => "fas fa-users",
        "is_multi" => true,
        "href" => [
            [
                "section_text" => "Data Item",
                "section_icon" => "far fa-circle",
                "section_href" => route('akun.index')
            ],
            [
                "section_text" => "Tambah Item",
                "section_icon" => "far fa-circle",
                "section_href" => route('akun.add')
            ],
            [
                "section_text" => "Tambah Item",
                "section_icon" => "far fa-circle",
                "section_href" => route('akun.add')
            ]
            
        ]
    ]
];
$navigation_links = json_decode(json_encode($links));
?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo e(asset('vendor/adminlte3/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php $__currentLoopData = $navigation_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if(!$link->is_multi): ?>
            <li class="nav-item">
            <a href="<?php echo e((url()->current() == $link->href) ? '#' : $link->href); ?>" class="nav-link <?php echo e((url()->current() == $link->href) ? 'active' : ''); ?>">
              <i class="nav-icon <?php echo e($link->icon); ?>"></i>
              <p>
                <?php echo e($link->text); ?>

                
              </p>
            </a>
            </li>
            <?php else: ?>
            <?php
                foreach($link->href as $section){
                    if (url()->current() == $section->section_href) {
                        $open = 'menu-open';
                        $status = 'active';
                        break; // Put this here
                    } else {
                        $open ='';
                        $status = '';
                    }
                }
            ?>
            <li class="nav-item <?php echo e($open); ?>">
            <a href="#" class="nav-link <?php echo e($status); ?>">
                <i class="nav-icon <?php echo e($link->icon); ?>"></i>
                <p>
                  <?php echo e($link->text); ?>

                  <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <?php $__currentLoopData = $link->href; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item">
                  <a href="<?php echo e((url()->current() == $section->section_href) ? '#' : $section->section_href); ?>" class="nav-link <?php echo e((url()->current() == $section->section_href) ? 'active' : ''); ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e($section->section_text); ?></p>
                  </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </li>
            <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH C:\Users\ASUS\Documents\PBONIH\Laravel-9-AdminLTE-master\Laravel-9-AdminLTE-master\resources\views/layouts/components/sidebar.blade.php ENDPATH**/ ?>