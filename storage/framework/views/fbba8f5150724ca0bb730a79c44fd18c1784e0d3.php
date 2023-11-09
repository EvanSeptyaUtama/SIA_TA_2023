

<?php $__env->startSection('titel', 'Tambah Data Kota'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="<?php echo e(route('store_kota')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Nama Kota</label>
                    <input name="nama_kota" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Kota">
                </div>
                <div>
                    <button type="submit">Tambah</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/kota/kota_tambah.blade.php ENDPATH**/ ?>