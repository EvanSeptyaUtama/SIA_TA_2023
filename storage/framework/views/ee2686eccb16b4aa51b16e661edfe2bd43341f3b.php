

<?php $__env->startSection('title', 'Admin | Absen Siswa'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <h2 class="text-center"><strong>Tambah Absensi</strong></h2>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-warning" href="<?php echo e(route('index_absen_siswa')); ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center"><?php echo e(__('Tambah Data Absen Siswa')); ?></div>
                        
                            <div class="card-body">
                                <form action="<?php echo e(route('store_absen_siswa')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?> 
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Tanggal</label>
                                        <input class="col-sm-10 " type="date" name="tanggal_absen" class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Waktu Mulai</label>
                                        <input class="col-sm-10 " type="time" name="waktu_mulai" class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Waktu Selesai</label>
                                        <input class="col-sm-10 " type="time" name="waktu_selesai" class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Keterangan</label>
                                        <input class="col-sm-10 " type="text" name="keterangan" placeholder="Contoh : Hadir, Alfa, Sakit, Izin" class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Siswa</label>
                                        <select name="siswa_id" class="form-control" class="col-sm-10" >
                                            <?php $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_siswa); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Kelas</label>
                                        <select name="kelas_id" class="form-control" class="col-sm-10" >
                                            <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kelas); ?></option>
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
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Absensi/absen_siswa/absen_siswa_tambah.blade.php ENDPATH**/ ?>