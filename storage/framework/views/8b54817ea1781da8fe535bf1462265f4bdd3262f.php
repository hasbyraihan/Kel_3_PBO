<?php $__env->startSection('judul', 'List Akun'); ?>
<?php $__env->startSection('script_head'); ?>
<link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Item</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('home')); ?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active">Akun</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"></h3>
            <div class="card-tools">
                <button
                    type="button"
                    class="btn btn-tool"
                    data-card-widget="collapse"
                    title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button
                    type="button"
                    class="btn btn-tool"
                    data-card-widget="remove"
                    title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0" style="margin: 20px">
            <table
                id="previewAkun"
                class="table table-striped table-bordered display"
                style="width:100%">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Foto Item</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Harga Barang</th>
                    </tr>
                </thead>
                <tbody>
                  
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <th scope="row"><?php echo e($row->id); ?></th>
                      <td><?php echo e($row->nama_item); ?></td>
                      <td><?php echo e($row->deskripsi_item); ?></td>
                      <td><?php echo e($row->harga_item); ?></td>
                      <td><?php echo e($row->stok_item); ?></td>
                      <td>
                          <button type="button" class="btn btn-primary">Primary</button>
                          <button type="button" class="btn btn-secondary">Secondary</button>
                      </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<?php $__env->stopSection(); ?> <?php $__env->startSection('script_footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base_admin.base_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Vico Triansyah\PBO\Praktikum\PBO GAME\Laravel-9-AdminLTE-master - Salin\resources\views/page/admin/akun/dataitem.blade.php ENDPATH**/ ?>