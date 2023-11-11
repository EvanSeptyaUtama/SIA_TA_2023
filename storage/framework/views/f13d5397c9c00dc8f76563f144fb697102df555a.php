

<?php $__env->startSection('title', 'Halaman Utama'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><strong>TAMPIL HALAMAN UTAMA</strong></h2>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="<?php echo e(route('index_halaman_utama')); ?>"> Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Data Halaman Utama')); ?></div>
                
                <div class="card-body text-center">
                        <p>Nama Yayasan : <?php echo e($halaman_utama->nama_yayasan); ?></p>
                        <p>Nama Isntansi : <?php echo e($halaman_utama->nama_instansi); ?></p>
                        <p>Penjelasan : <?php echo e($halaman_utama->penjelasan); ?></p>
                        <img src="<?php echo e(url('storage/Halaman_Utama1/'. $halaman_utama->gambar_pertama)); ?>" class="rounded  mb-1" alt="" width="200px" height="200px">
                        <img src="<?php echo e(url('storage/Halaman_Utama2/'. $halaman_utama->gambar_kedua)); ?>" class="rounded mb-1" alt="" width="200px" height="200px">
                        <img src="<?php echo e(url('storage/Halaman_Utama3/'. $halaman_utama->gambar_ketiga)); ?>" class="rounded" alt="" width="200px" height="200px">
                    
                </div>
            </div>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/hu/halaman_utama_show.blade.php ENDPATH**/ ?>