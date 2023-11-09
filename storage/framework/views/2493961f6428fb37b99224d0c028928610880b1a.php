

<?php $__env->startSection('title', 'Admin | Absen Siswa'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <h2 class="text-center"><strong>Edit Absensi</strong></h2>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('index_absen_siswa')); ?>">Absen Siswa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                      </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="<?php echo e(route('index_absen_siswa')); ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center"><?php echo e(__('Data Absen Siswa')); ?></div>
                        
                            <div class="card-body">
                                <form action="<?php echo e(route('update_absen_siswa', $data_absen_siswa)); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo method_field('patch'); ?>
                                    <?php echo csrf_field(); ?> 
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal_absen" value="<?php echo e($data_absen_siswa->tanggal_absen); ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Waktu Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="waktu_mulai" value="<?php echo e($data_absen_siswa->waktu_mulai); ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Waktu Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="waktu_selesai" value="<?php echo e($data_absen_siswa->waktu_selesai); ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Keterangan</label>
                                        <div class="col-sm-10">
                                            <select name="keterangan" class="form-control">
                                                <option value="Hadir" <?php echo e(($data_absen_siswa->keterangan === 'Hadir') ? 'Selected' : ''); ?>>Hadir</option>
                                                <option value="Izin" <?php echo e(($data_absen_siswa->keterangan === 'Izin') ? 'Selected' : ''); ?>>Izin</option>
                                                <option value="Sakit" <?php echo e(($data_absen_siswa->keterangan === 'Sakit') ? 'Selected' : ''); ?>>Sakit</option>
                                                <option value="Alfa" <?php echo e(($data_absen_siswa->keterangan === 'Alfa') ? 'Selected' : ''); ?>>Alfa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Foreign key : Table Siswa--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Siswa</label>
                                        <div class="col-sm-10">
                                            <select name="siswa_id" class="form-control" class="form-control" >
                                                <?php $__currentLoopData = $edit_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>" <?php echo e($data_absen_siswa->siswa_id == $item->id ? 'selected':''); ?>><?php echo e($item->nama_siswa); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!---Foreign key : Table Kelas--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Kelas</label>
                                        <div class="col-sm-10">
                                            <select name="kelas_id" class="form-control" >
                                                <?php $__currentLoopData = $edit_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>" <?php echo e($data_absen_siswa->kelas_id == $item->id ? 'selected':''); ?> ><?php echo e($item->nama_kelas); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Foreign key : Table Semester--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Semester</label>
                                        <div class="col-sm-10">
                                            <select name="tahun_pelajaran_id" class="form-control" >
                                                <?php $__currentLoopData = $edit_tahun_pelajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>" <?php echo e($data_absen_siswa->tahun_pelajaran_id == $item->id ? 'selected':''); ?>><?php echo e($item->semester); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Foreign key : Table Tahun Ajaran--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Tahun Ajaran</label>
                                        <div class="col-sm-10">
                                            <select name="tahun_pelajaran_id" class="form-control" >
                                                <?php $__currentLoopData = $edit_tahun_pelajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>" <?php echo e($data_absen_siswa->tahun_pelajaran_id == $item->id ? 'selected':''); ?>><?php echo e($item->tahun_ajaran); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
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
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Absensi/absen_siswa/absen_siswa_edit.blade.php ENDPATH**/ ?>