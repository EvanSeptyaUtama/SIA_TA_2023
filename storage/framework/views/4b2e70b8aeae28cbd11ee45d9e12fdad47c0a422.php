

<?php $__env->startSection('title', 'Admin | Absen Guru'); ?>
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
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('index_absen_guru')); ?>">Absen Guru</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                      </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="<?php echo e(route('index_absen_guru')); ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center"><?php echo e(__('Data Absen Guru')); ?></div>
                        
                            <div class="card-body">
                                <form action="<?php echo e(route('update_absen_guru', $data_absen_guru)); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo method_field('patch'); ?>
                                    <?php echo csrf_field(); ?> 
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal_absen_guru" value="<?php echo e($data_absen_guru->tanggal_absen_guru); ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Waktu Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="waktu_mulai_guru" value="<?php echo e($data_absen_guru->waktu_mulai_guru); ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Waktu Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="waktu_selesai_guru" value="<?php echo e($data_absen_guru->waktu_selesai_guru); ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Keterangan</label>
                                        <div class="col-sm-10">
                                            <select name="keterangan_guru" class="form-control">
                                                <option value="Hadir" <?php echo e(($data_absen_guru->keterangan_guru === 'Hadir') ? 'Selected' : ''); ?>>Hadir</option>
                                                <option value="Izin" <?php echo e(($data_absen_guru->keterangan_guru === 'Izin') ? 'Selected' : ''); ?>>Izin</option>
                                                <option value="Sakit" <?php echo e(($data_absen_guru->keterangan_guru === 'Sakit') ? 'Selected' : ''); ?>>Sakit</option>
                                                <option value="Alfa" <?php echo e(($data_absen_guru->keterangan_guru === 'Alfa') ? 'Selected' : ''); ?>>Alfa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Foreign key : Table Siswa--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Guru</label>
                                        <div class="col-sm-10">
                                            <select name="guru_id" class="form-control" class="form-control" >
                                                <?php $__currentLoopData = $edit_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>" <?php echo e($data_absen_guru->guru_id == $item->id ? 'selected':''); ?>><?php echo e($item->nama_guru); ?></option>
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
                                                    <option value="<?php echo e($item->id); ?>" <?php echo e($data_absen_guru->kelas_id == $item->id ? 'selected':''); ?> ><?php echo e($item->nama_kelas); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Foreign key : Table Mata Pelajaran--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Mata Pelajaran</label>
                                        <div class="col-sm-10">
                                            <select name="mata_pelajaran_id" class="form-control" >
                                                <?php $__currentLoopData = $edit_mata_pelajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>" <?php echo e($data_absen_guru->mata_pelajaran_id == $item->id ? 'selected':''); ?>><?php echo e($item->mata_pelajaran); ?></option>
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
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Absensi/absen_guru/absen_guru_edit.blade.php ENDPATH**/ ?>