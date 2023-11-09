

<?php $__env->startSection('title', 'Admin | Visi-Misi'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><strong>TAMPIL HALAMAN VISI-MISI</strong></h2>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="<?php echo e(route('index_visi_misi')); ?>"> Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
                <div class="card">
                    <div class="card-header text-center"><?php echo e(__('Tampil Data Halaman Visi-Misi')); ?></div>
                    
                    <div class="card-body text-center">
                            <p>Visi : <?php echo e($data_visi_misi->visi); ?></p>
                            <p>Misi : <?php echo e($data_visi_misi->misi); ?></p>
                            <img src="<?php echo e(url('storage/Visi_Misi/'. $data_visi_misi->gambar_visi_misi)); ?>" class="rounded" alt="" height="200px">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/visi_misi/visi_misi_tampil.blade.php ENDPATH**/ ?>