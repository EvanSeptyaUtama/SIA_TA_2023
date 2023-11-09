

<?php $__env->startSection('title', 'Admin | Susunan Organisasi'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container"></div>
        <h2 class="text-center"><strong>EDIT HALAMAN SUSUNAN ORGANISASI</strong></h2>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="<?php echo e(route('index_susunan_organisasi')); ?>"> Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Data Halaman Susunan Organisasi')); ?></div>
                
                <div class="card-body">
                    <form action="<?php echo e(route('update_susunan_organisasi', $data_susunan_organisasi)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('patch'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama"class="form-control"
                                value="<?php echo e($data_susunan_organisasi->nama); ?>">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan"class="form-control"
                                value="<?php echo e($data_susunan_organisasi->jabatan); ?>">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                             <input type="file" name="gambar"class="form-control">
                             <img src="<?php echo e(url('storage/Susunan_Organisasi/'. $data_susunan_organisasi->gambar)); ?>" class="rounded" alt="" height="200px">
                           
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/susunan_organisasi/susunan_organisasi_edit.blade.php ENDPATH**/ ?>