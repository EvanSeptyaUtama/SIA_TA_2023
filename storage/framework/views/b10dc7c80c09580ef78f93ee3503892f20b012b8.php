

<?php $__env->startSection('title', 'Admin | Informasi Pengumuman'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><strong>TAMPIL HALAMAN INFORMASI PENGUMUMAN</strong></h2>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="<?php echo e(route('index_halaman_ip_ppdb')); ?>"> Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Tampil Data Halaman Informasi Pengumuman')); ?></div>
                
                <div class="card-body text-center">
                        <p>Judul : <?php echo e($data_ip_ppdb->judul_informasi_pengumuman); ?></p>
                        <img src="<?php echo e(url('storage/PPDB/'. $data_ip_ppdb->gambar_informasi_pengumuman)); ?>" class="rounded" alt="" height="200px">
                    
                </div>
            </div>
        </div>
        </div>
        
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/ppdb/hal_ip_ppdb_tampil.blade.php ENDPATH**/ ?>