<!DOCTYPE html>
<html lang="en">
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
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte3/css/adminlte.min.css')); ?>">
        <?php echo $__env->yieldContent('script_head'); ?>
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php echo $__env->make('layouts.components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('layouts.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="content-wrapper">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <?php echo $__env->make('layouts.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('layouts.components.control_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?php echo e(asset('vendor/adminlte3/plugins/jquery/jquery.min.js')); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo e(asset('vendor/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(asset('vendor/adminlte3/js/adminlte.min.js')); ?>"></script>
        <!-- AdminLTE for demo purposes -->
        

        <?php echo $__env->yieldContent('script_footer'); ?>
    </body>
</html>
<?php /**PATH D:\Vico Triansyah\PBO\Praktikum\PBO GAME\Laravel-9-AdminLTE-master - Salin\resources\views/layouts/base_admin/base_dashboard.blade.php ENDPATH**/ ?>