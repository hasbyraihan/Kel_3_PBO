<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <?php if(Auth::user()->user_image): ?>
                <img
                    src="<?php echo e(Auth::user()->user_image); ?>"
                    class="user-image img-circle elevation-2"
                    alt="User Image">
                <?php else: ?>
                <img
                    src="<?php echo e(asset('vendor/adminlte3/img/user2-160x160.jpg')); ?>"
                    class="user-image img-circle elevation-2"
                    alt="User Imagess">
                    <?php endif; ?>
                    <span class="d-none d-md-inline"><?php echo e(Auth::user()->name); ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <?php if(Auth::user()->user_image): ?>
                        <img
                        src="<?php echo e(Auth::user()->user_image); ?>"
                        class="img-circle elevation-2"
                        alt="User Imagess">
                        <?php else: ?>
                        <img
                            src="<?php echo e(asset('vendor/adminlte3/img/user2-160x160.jpg')); ?>"
                            class="img-circle elevation-2"
                            alt="User Imagess">
                            <?php endif; ?>

                            <p>
                                <?php echo e(Auth::user()->name); ?>

                                <small>Bergabung pada Rabu, 1 November 2023</small>
                            </p>
                        </li>
                        <!-- Menu Body -- <li class="user-body"> <div class="row"> <div class="col-4
                        text-center"> <a href="#">Followers</a> </div> <div class="col-4 text-center">
                        <a href="#">Sales</a> </div> <div class="col-4 text-center"> <a
                        href="#">Friends</a> </div> </div> <!-- /.row -- </li>-->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="<?php echo e(route('profile')); ?>" class="btn btn-default btn-flat">Profile</a>
                            <a
                                class="btn btn-default btn-flat float-right"
                                href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                                <form
                                    id="logout-form"
                                    action="<?php echo e(route('logout')); ?>"
                                    method="POST"
                                    style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                            
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-widget="control-sidebar"
                        data-slide="true"
                        href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
<?php /**PATH C:\Users\ASUS\Documents\PBONIH\Laravel-9-AdminLTE-master\Laravel-9-AdminLTE-master - Salin\resources\views/layouts/components/navbar.blade.php ENDPATH**/ ?>