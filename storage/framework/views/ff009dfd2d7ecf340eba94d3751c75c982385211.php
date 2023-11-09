

<?php $__env->startSection('titel', 'Tampil Data Kategori'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <a href="<?php echo e(route('index_kategori')); ?>">Kembali</a>
            </div>
        </div>
        <div class="col-md-12">
            <div>
                <p>Id : <?php echo e($data_kategori->id); ?></p>
                <p>Nama Kategori : <?php echo e($data_kategori->nama_kategori); ?></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/kategori/kategori_tampil.blade.php ENDPATH**/ ?>