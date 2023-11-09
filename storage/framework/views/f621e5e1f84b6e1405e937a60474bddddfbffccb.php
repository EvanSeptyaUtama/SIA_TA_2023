

<?php $__env->startSection('title', 'Admin | Sejarah'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <h3 class="text-center"><strong>SEJARAH</strong></h3>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="<?php echo e(route('index_sejarah')); ?>"> Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Tampil Data Halaman Sejarah')); ?></div>
                
                <div class="card-body text-center">
                        <p>Judul : <?php echo e($data_sejarah->judul_sejarah); ?></p>
                        <p>Penjelasan Singkat : <?php echo e($data_sejarah->penjelasan_singkat); ?></p>
                        <p>Penjelasan Lengkap : <?php echo e($data_sejarah->penjelasan_lengkap); ?></p>
                        <img src="<?php echo e(url('storage/Sejarah/' . $data_sejarah->gambar_sejarah)); ?>" class="rounded" style="width: 400px">
                        
                    </div>
            </div>
        </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/sejarah/sejarah_tampil.blade.php ENDPATH**/ ?>