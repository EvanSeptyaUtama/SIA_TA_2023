

<?php $__env->startSection('title', 'Halaman Utama'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <h3 class="text-center"><strong>DATA HALAMAN UTAMA</strong></h3>
        <div class="d-flex justify-content-end mb-2">
            <div>
                <a class="btn btn-warning" href="<?php echo e(route('index_halaman_utama')); ?>"> Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Edit Data Halaman Utama')); ?></div>
                
                <div class="card-body">
                    <form action="<?php echo e(route('update_halaman_utama', $halaman_utama)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('patch'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Yayasan</label>
                            <input type="text" name="nama_yayasan"class="form-control"
                                value="<?php echo e($halaman_utama->nama_yayasan); ?>">
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <input type="text" name="nama_instansi"class="form-control"
                                value="<?php echo e($halaman_utama->nama_instansi); ?>">
                        </div>
                        <div class="form-group">
                            <label>Penjelasan</label>
                            <input type="text" name="penjelasan"class="form-control"
                                value="<?php echo e($halaman_utama->penjelasan); ?>">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar"class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/hu/halaman_utama_edit.blade.php ENDPATH**/ ?>