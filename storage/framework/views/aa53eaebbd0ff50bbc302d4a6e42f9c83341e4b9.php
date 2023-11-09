

<?php $__env->startSection('title', 'Admin | Informasi Akademik'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <h3 class="text-center"><strong>TAMPIL HALAMAN INFORMASI AKADEMIK</strong></h3>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="<?php echo e(route('index_informasi_akademik')); ?>"> Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Tampil Data Halaman Informasi Akademik')); ?></div>
                
                <div class="card-body text-center">
                        <p>Hari : <?php echo e($data_informasi_akademik->hari_informasi_akademik); ?></p>
                        <p>Tanggal : <?php echo e($data_informasi_akademik->tanggal_informasi_akademik); ?></p>
                        <p>Informasi : <?php echo e($data_informasi_akademik->informasi_informasi_akademik); ?></p>
                        <p>Keterangan : <?php echo e($data_informasi_akademik->keterangan_informasi_akademik); ?></p>
                        <img src="<?php echo e(url('storage/Informasi_Akademik/'. $data_informasi_akademik->gambar_informasi_akademik)); ?>" class="rounded" alt="" height="200px">
                    
                </div>
            </div>
        </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/informasi_akademik/informasi_akademik_tampil.blade.php ENDPATH**/ ?>