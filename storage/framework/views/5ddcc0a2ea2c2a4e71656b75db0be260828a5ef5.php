

<?php $__env->startSection('title', 'Admin | Informasi Akademik'); ?>

<?php $__env->startSection('content'); ?>

<div class="m-2">
    <div class="container">
        <h2 class="text-center">EDIT INFORMASI AKADEMIK</h2>
    <div class="d-flex justify-content-start mb-2">
        <div>
            <a class="btn btn-outline-warning" href="<?php echo e(route('index_informasi_akademik')); ?>">Kembali</a>
        </div>
    </div>
    <div class="table-responsive">
        <div class="card">
            <div class="card-header text-center"><?php echo e(__('Edit Data Informasi Akademik')); ?></div>
            
            <div class="card-body">
                <form action="<?php echo e(route('update_informasi_akademik', $data_informasi_akademik)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo method_field('patch'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Hari</label>
                        <input class="col-sm-10 " type="text" name="hari_informasi_akademik" class="form-control"
                            value="<?php echo e($data_informasi_akademik->hari_informasi_akademik); ?>">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Tanggal </label>
                        <input  class="col-sm-10 " type="date" name="tanggal_informasi_akademik" class="form-control"
                            value="<?php echo e($data_informasi_akademik->tanggal_informasi_akademik); ?>">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Informasi</label>
                        <input class="col-sm-10 " type="text" name="informasi_informasi_akademik" class="form-control"
                            value="<?php echo e($data_informasi_akademik->informasi_informasi_akademik); ?>">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Keterangan</label>
                        <input class="col-sm-10 " type="text" name="keterangan_informasi_akademik" class="form-control"
                            value="<?php echo e($data_informasi_akademik->keterangan_informasi_akademik); ?>">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Gambar</label>
                        <input class="col-sm-10 " type="file" name="gambar_informasi_akademik" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/informasi_akademik/informasi_akademik_edit.blade.php ENDPATH**/ ?>