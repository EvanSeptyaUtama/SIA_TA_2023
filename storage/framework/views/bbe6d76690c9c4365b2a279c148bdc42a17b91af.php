

<?php $__env->startSection('titel', 'Tambah Data Kategori'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo e(route('index_kategori')); ?>">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="<?php echo e(route('store_kategori')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div>
                    <label>Nama Kategori</label>
                    <input name="nama_kategori" type="text" placeholder="Nama Ketegori">
                </div>
                <div>
                    <button type="submit">Tambah</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/kategori/kategori_tambah.blade.php ENDPATH**/ ?>