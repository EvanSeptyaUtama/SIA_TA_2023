

<?php $__env->startSection('title', 'Halaman Aktivitas'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><strong>TAMPIL AKTIVITAS</strong></h2>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="<?php echo e(route('index_aktivitas')); ?>"> Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
                <div class="card">
                    <div class="card-header text-center"><?php echo e(__('Data Halaman Aktivitas')); ?></div>
                    
                    <div class="card-body text-center">
                            <p>Aktivitas : <?php echo e($data_aktivitas->nama_aktivitas); ?></p>
                            <p>Penjelasan : <?php echo e($data_aktivitas->penjelasan_aktivitas); ?></p>
                            <img src="<?php echo e(url('storage/Kegiatan_Sekolah/'. $data_aktivitas->gambar_aktivitas)); ?>" class="rounded" alt="" height="200px">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/aktivitas/aktivitas_tampil.blade.php ENDPATH**/ ?>