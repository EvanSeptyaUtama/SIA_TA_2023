

<?php $__env->startSection('titel', 'Edit Data Kategori'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo e(route('index_kategori')); ?>">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="<?php echo e(route('update_kategori', $data_kategori)); ?>" method="post" enctype="multipart/form-data">
                <?php echo method_field('patch'); ?>
                <?php echo csrf_field(); ?>
                <div>
                    <label>Nama Kategori</label>
                    <input name="nama_kategori" value="<?php echo e($data_kategori->nama_kategori); ?>" type="text" placeholder="Nama Ketegori">
                </div>
                <div>
                    <button type="submit">Edit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/kategori/kategori_edit.blade.php ENDPATH**/ ?>