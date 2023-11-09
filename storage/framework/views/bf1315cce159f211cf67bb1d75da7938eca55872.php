

<?php $__env->startSection('title', 'Admin | Informasi Pengumuman'); ?>
<?php $__env->startSection('content'); ?>
<div class="m-2">
    <div class="container">
        <h2 class="text-center"><strong>EDIT INFORMASI PENGUMUMAN PPDB</strong></h2>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="<?php echo e(route('index_halaman_ip_ppdb')); ?>"> Kembali</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header text-center"><?php echo e(__('Data Informasi Pengumuman')); ?></div>

            <div class="card-body">
                <form action="<?php echo e(route('update_halaman_ip_ppdb', $data_ip_ppdb)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo method_field('patch'); ?>
                    <?php echo csrf_field(); ?> 
                    <div class="row mb-4">
                        <label>Judul</label>
                        <input type="text" name="judul_informasi_pengumuman" value="<?php echo e($data_ip_ppdb->judul_informasi_pengumuman); ?>" class="form-control">
                    </div>

                    <div class="row mb-4">
                        <label>Gambar</label>
                        <input type="file" name="gambar_informasi_pengumuman" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/ppdb/hal_ip_ppdb_edit.blade.php ENDPATH**/ ?>