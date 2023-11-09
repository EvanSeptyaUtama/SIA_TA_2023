

<?php $__env->startSection('titel', 'Tampil Data Kota'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <a href="<?php echo e(route('index_kota')); ?>">Kembali</a>
            </div>
        </div>
        <div class="col-md-12">
            <div>
                <p>Id : <?php echo e($tampil_kota->id); ?></p>
                <p>Nama Kota : <?php echo e($tampil_kota->nama_kota); ?></p>
               
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/kota/kota_tampil.blade.php ENDPATH**/ ?>