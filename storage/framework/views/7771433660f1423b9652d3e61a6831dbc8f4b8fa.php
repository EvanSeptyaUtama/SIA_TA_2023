

<?php $__env->startSection('title', 'Data Admin | Kepala Sekolah'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <h1 class="text-success">
            GeeksforGeeks
        </h1>
        <strong>Bootstrap 5 Responsive Tables</strong>
        <h2 class="text-center">DATA KEPALA SEKOLAH</h2>
        <div class="d-flex justify-content-end mb-2">
            <div>
                <a class="btn btn-warning" href="<?php echo e(route('index_kepala_sekolah')); ?>">Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Edit Data Kepala Sekolah')); ?></div>
                
                <div class="card-body">
                    <form action="<?php echo e(route('update_kepala_sekolah', $data_kepala_sekolah)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('patch'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>NRKS</label>
                            <input type="number" name="nrks" class="form-control"
                                value="<?php echo e($data_kepala_sekolah->nrks); ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_kepsek" class="form-control"
                                value="<?php echo e($data_kepala_sekolah->nama_kepsek); ?>">
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" name="no_telp" class="form-control"
                                value="<?php echo e($data_kepala_sekolah->no_telp); ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat Kepsek</label>
                            <input type="text" name="alamat_kepsek" class="form-control"
                                value="<?php echo e($data_kepala_sekolah->alamat_kepsek); ?>">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control"
                                value="<?php echo e($data_kepala_sekolah->tempat_lahir); ?>">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="ttl" class="form-control"
                                value="<?php echo e($data_kepala_sekolah->ttl); ?>">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/data_kepala_sekolah_edit.blade.php ENDPATH**/ ?>