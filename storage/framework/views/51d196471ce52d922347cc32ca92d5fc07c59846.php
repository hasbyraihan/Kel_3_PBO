<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('judul'); ?> | Laravel 9 - AdminLTE 3</title>

        <!-- Google Font: Source Sans Pro -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte3/plugins/fontawesome-free/css/all.min.css')); ?>">
        <!-- icheck bootstrap -->
        <link
            rel="stylesheet"
            href="<?php echo e(asset('vendor/adminlte3/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte3/css/adminlte.min.css')); ?>">
    </head>
    <body class="hold-transition
    <?php if(Route::is('login') || Route::is('password.request') || Route::is('password.reset')): ?>
    login-page
    <?php elseif(Route::is('register')): ?>
    register-page
    <?php else: ?>
    login-page
    <?php endif; ?>">
        <?php echo $__env->yieldContent('content'); ?>

        <!-- jQuery -->
        <script src="<?php echo e(asset('vendor/adminlte3/plugins/jquery/jquery.min.js')); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo e(asset('vendor/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(asset('vendor/adminlte3/js/adminlte.min.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\Users\ASUS\Documents\PBONIH\Laravel-9-AdminLTE-master\Laravel-9-AdminLTE-master - Salin\resources\views/layouts/base_admin/base_auth.blade.php ENDPATH**/ ?>