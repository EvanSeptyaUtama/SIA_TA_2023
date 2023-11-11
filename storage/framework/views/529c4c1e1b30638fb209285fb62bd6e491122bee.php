

<?php $__env->startSection('title', 'Halaman Utama'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <h3 class="text-center"><strong>DATA HALAMAN UTAMA</strong></h3>
        <div class="d-flex justify-content-end mb-2">
            <div>
                <a class="btn btn-warning" href="<?php echo e(route('index_halaman_utama')); ?>"> Kembali</a>
            </div>
        </div>
         <!---Alert-->
         <div class="row justify-content-center">
            <div class="col-md-12">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <div class="alert-title">
                            <h4> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg> Maaf!</h4> 
                        </div>
                            Terdapat kesalahan dalam mengedit data Halaman Utama
                        <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div> 
                <?php endif; ?>

            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Edit Data Halaman Utama')); ?></div>
                
                <div class="card-body">
                    <form action="<?php echo e(route('update_halaman_utama', $halaman_utama)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('patch'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Yayasan</label>
                            <input type="text" name="nama_yayasan"class="form-control"
                                value="<?php echo e($halaman_utama->nama_yayasan); ?>">
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <input type="text" name="nama_instansi"class="form-control"
                                value="<?php echo e($halaman_utama->nama_instansi); ?>">
                        </div>
                        <div class="form-group">
                            <label>Penjelasan</label>
                            <input type="text" name="penjelasan"class="form-control"
                                value="<?php echo e($halaman_utama->penjelasan); ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Gambar 1</label>
                            <input type="text" name="deskripsi_gambar1"class="form-control"
                                value="<?php echo e($halaman_utama->deskripsi_gambar1); ?>">
                        </div>
                        <div class="form-group">
                            <label>Gambar Pertama</label>
                            <input type="file" name="gambar_pertama"class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Gambar 2</label>
                            <input type="text" name="deskripsi_gambar2"class="form-control"
                                value="<?php echo e($halaman_utama->deskripsi_gambar2); ?>">
                        </div>
                        <div class="form-group">
                            <label>Gambar Kedua</label>
                            <input type="file" name="gambar_kedua"class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Gambar 3</label>
                            <input type="text" name="deskripsi_gambar3"class="form-control"
                                value="<?php echo e($halaman_utama->deskripsi_gambar3); ?>">
                        </div>
                        <div class="form-group">
                            <label>Gambar Ketiga</label>
                            <input type="file" name="gambar_ketiga"class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/hu/halaman_utama_edit.blade.php ENDPATH**/ ?>