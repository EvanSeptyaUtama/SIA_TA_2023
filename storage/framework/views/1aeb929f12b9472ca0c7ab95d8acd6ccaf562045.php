

<?php $__env->startSection('title', 'Kepala Sekolah'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <h3 class="text-center"><strong>DATA KEPALA SEKOLAH</strong></h3>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-warning" href="<?php echo e(route('index_kepala_sekolah')); ?>">Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Seluruh Data Kepala Sekolah')); ?></div>
                
                <div class="card-body text-center">
                        <H2>Data Kepala Sekolah</H2>
                        <hr>
                        <p>NRKS : <?php echo e($data_kepala_sekolah->nrks); ?></p>
                        <p>Nama : <?php echo e($data_kepala_sekolah->nama_kepsek); ?></p>
                        <p>No.Telp : <?php echo e($data_kepala_sekolah->no_telp); ?></p>
                        <p>Alamat : <?php echo e($data_kepala_sekolah->alamat_kepsek); ?></p>
                        <p>Tempat Lahir : <?php echo e($data_kepala_sekolah->tempat_lahir); ?></p>
                        <p>Tanggal Lahir : <?php echo e($data_kepala_sekolah->ttl); ?></p>
                        <img src="<?php echo e(url('storage/Kepala_Sekolah/'. $data_kepala_sekolah->foto_kepala_sekolah)); ?>" class="rounded" alt="" height="200px">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/data_kepala_sekolah_tampil.blade.php ENDPATH**/ ?>