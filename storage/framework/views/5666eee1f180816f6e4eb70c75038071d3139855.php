

<?php $__env->startSection('title', 'Admin | Jadwal Mengajar'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <h2 class="text-center"><strong>Tambah Jadwal</strong></h2>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('index_jadwal_mengajar_guru')); ?>">Jadwal Mengajar</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="<?php echo e(route('index_jadwal_mengajar_guru')); ?>">Kembali</a>
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
                                <form action="<?php echo e(route('update_jadwal_mengajar_guru', $data_jadwal_mengajar_guru)); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo method_field('patch'); ?>
                                    <?php echo csrf_field(); ?> 
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Tanggal</label>
                                        <input class="col-sm-10 " type="date" name="tanggal" value="<?php echo e($data_jadwal_mengajar_guru->tanggal); ?>" class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Waktu Mulai</label>
                                        <input class="col-sm-10 " type="time" name="waktu_mulai"  value="<?php echo e($data_jadwal_mengajar_guru->waktu_mulai); ?>" class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Waktu Selesai</label>
                                        <input class="col-sm-10 " type="time" name="waktu_selesai"  value="<?php echo e($data_jadwal_mengajar_guru->waktu_selesai); ?>" class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Hari</label>
                                        <input class="col-sm-10 " type="text" name="hari"  value="<?php echo e($data_jadwal_mengajar_guru->hari); ?>" placeholder="Contoh : Senin, Selasa, dll..." class="form-control">
                                    </div>
                                     <!--Foreign key : Table Guru--->
                                    <div class="form-group mt-1">
                                        <label class="col-sm-2 col-label-form">Guru</label>
                                        <select name="guru_id" class="form-control" class="col-sm-10" >
                                            <?php $__currentLoopData = $edit_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" <?php echo e($data_jadwal_mengajar_guru->guru_id == $item->id ? 'selected':''); ?>><?php echo e($item->nama_guru); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <!--Foreign key : Table Kelas--->
                                    <div class="form-group mt-1">
                                        <label class="col-sm-2 col-label-form">Kelas</label>
                                        <select name="kelas_id" class="form-control" class="col-sm-10" >
                                            <?php $__currentLoopData = $edit_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" <?php echo e($data_jadwal_mengajar_guru->kelas_id == $item->id ? 'selected':''); ?>><?php echo e($item->nama_kelas); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <!--Foreign key : Table Mata Pelajaran--->
                                    <div class="form-group mt-1">
                                        <label class="col-sm-2 col-label-form">Mata Pelajaran</label>
                                        <select name="mata_pelajaran_id" class="form-control" class="col-sm-10" >
                                            <?php $__currentLoopData = $edit_mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" <?php echo e($data_jadwal_mengajar_guru->mata_pelajaran_id == $item->id ? 'selected':''); ?>><?php echo e($item->mata_pelajaran); ?></option>
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
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Jadwal_Mengajar/jadwal_mengajar_edit.blade.php ENDPATH**/ ?>