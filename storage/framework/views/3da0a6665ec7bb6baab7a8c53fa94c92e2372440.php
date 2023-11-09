

<?php $__env->startSection('titel', 'Edit Data Kota'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo e(route('index_kota')); ?>">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="<?php echo e(route('update_kota', $edit_kota)); ?>" method="post" enctype="multipart/form-data">
                <?php echo method_field('patch'); ?>
                <?php echo csrf_field(); ?>
                <div>
                    <label>Nama Kota</label>
                    <input name="nama_kota" value="<?php echo e($edit_kota->nama_kota); ?>" type="text">
                </div>
                <div>
                    <button type="submit">Edit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/kota/kota_edit.blade.php ENDPATH**/ ?>