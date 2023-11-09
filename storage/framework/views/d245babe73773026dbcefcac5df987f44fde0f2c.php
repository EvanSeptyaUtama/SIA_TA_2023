

<?php $__env->startSection('title', 'Jadwal Mengajar'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    
                    <h2 class="text-center"><strong>Tambah Jadwal Mengajar</strong></h2>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-warning" href="<?php echo e(route('index_jadwal_mengajar')); ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center"><?php echo e(__('Tambah Data Jadwal Mengajar')); ?></div>
                        
                            <div class="card-body">
                                <form action="<?php echo e(route('store_jadwal_mengajar')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?> 
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Hari</label>
                                        <input class="col-sm-10 " type="text" name="hari" placeholder="Contoh : Senin, Selasa, dll.." class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Jam-ke</label>
                                        <input class="col-sm-10 " type="text" name="jam_ke" placeholder="Contoh : 2, 3, dll.." class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Waktu</label>
                                        <input class="col-sm-10 " type="text" name="waktu" placeholder="Contoh : 12:00 PM - 02:00 PM.." class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Guru</label>
                                        <select name="guru_id" class="form-control" class="col-sm-8 " >
                                            <option value="#">-- Pilih Guru --</option>
                                            <?php $__currentLoopData = $data_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>"></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/mengajar/jadwal_mengajar_tambah.blade.php ENDPATH**/ ?>