

<?php $__env->startSection('title', 'Admin | Visi-Misi'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><strong>DATA HALAMAN VISI-MISI</strong></h2>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="<?php echo e(route('index_visi_misi')); ?>"> Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
                <div class="card">
                    <div class="card-header text-center"><?php echo e(__('Data Halaman Visi-Misi')); ?></div>
                    
                    <div class="card-body">
                        <form action="<?php echo e(route('update_visi_misi', $data_visi_misi)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo method_field('patch'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Visi</label>
                                <input type="text" name="visi"class="form-control"
                                    value="<?php echo e($data_visi_misi->visi); ?>">
                            </div>
                            <div class="form-group">
                                <label>Misi</label>
                                <input type="text" name="misi"class="form-control"
                                value="<?php echo e($data_visi_misi->misi); ?>">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar_visi_misi"class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/visi_misi/visi_misi_edit.blade.php ENDPATH**/ ?>