

<?php $__env->startSection('title', 'Admin | Jadwal Mengajar'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <h3 class="text-center"><strong>DETAIL JADWAL MENGAJAR GURU</strong></h3>
        <div class="row">
            <div class="col">
                <!-----Breadcrumbs--->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('index_jadwal_mengajar_guru')); ?>">Jadwal Mengajar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lihat</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="<?php echo e(route('index_jadwal_mengajar_guru')); ?>"> Kembali</a>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-8 pt-1">
                <div class="table-responsive">
                    <div class="card">
                        <div class="card-header text-center text-light bg-primary"><strong><?php echo e(__('Edit Data Jadwal Mengajar')); ?></strong></div>
                        <div class="card-body">
                            <form action="<?php echo e(route('update_jadwal_mengajar_guru', $data_jadwal_mengajar_guru)); ?>" method="post" enctype="multipart/form-data">
                                <?php echo method_field('patch'); ?>
                                <?php echo csrf_field(); ?> 
                                <div class="row mb-2">
                                    <label class="col-sm-2 col-label-form">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal" value="<?php echo e($data_jadwal_mengajar_guru->tanggal); ?>" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="row mb-2">
                                    <label class="col-sm-2 col-label-form">Waktu Mulai</label>
                                    <div class="col-sm-10">
                                        <input type="time" name="waktu_mulai"  value="<?php echo e($data_jadwal_mengajar_guru->waktu_mulai); ?>" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="row mb-2">
                                    <label class="col-sm-2 col-label-form">Waktu Selesai</label>
                                    <div class="col-sm-10">
                                        <input type="time" name="waktu_selesai"  value="<?php echo e($data_jadwal_mengajar_guru->waktu_selesai); ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-sm-2 col-label-form">Hari</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="hari"  value="<?php echo e($data_jadwal_mengajar_guru->hari); ?>" placeholder="Contoh : Senin, Selasa, dll..." class="form-control">
                                    </div>
                                </div>
                                 <!--Foreign key : Table Pengajar--->
                                <div class="row mb-2">
                                    <label class="col-sm-2 col-label-form">Pengajar</label>
                                    <div class="col-sm-10">
                                        <select name="pengajar_id" class="form-control" >
                                            <?php $__currentLoopData = $edit_pengajar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" <?php echo e($data_jadwal_mengajar_guru->pengajar_id == $item->id ? 'selected':''); ?>><?php echo e($item->nama_pengajar); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <!--Foreign key : Table Kelas--->
                                <div class="row mb-2">
                                    <label class="col-sm-2 col-label-form">Kelas</label>
                                    <div class="col-sm-10">
                                        <select name="kelas_id" class="form-control">
                                            <?php $__currentLoopData = $edit_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" <?php echo e($data_jadwal_mengajar_guru->kelas_id == $item->id ? 'selected':''); ?>><?php echo e($item->nama_kelas); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <!--Foreign key : Table Mata Pelajaran--->
                                <div class="row mb-2">
                                    <label class="col-sm-2 col-label-form">Mata Pelajaran</label>
                                    <div class="col-sm-10">
                                        <select name="mata_pelajaran_id" class="form-control" >
                                            <?php $__currentLoopData = $edit_mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" <?php echo e($data_jadwal_mengajar_guru->mata_pelajaran_id == $item->id ? 'selected':''); ?>><?php echo e($item->mata_pelajaran); ?></option>
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
            <div class="col-md-4 pt-1">
                <div class="table-responsive">
                    <div class="card">
                        <div class="card-header bg-info text-light text-center"><strong><?php echo e(__('Data Jadwal Mengajar Guru')); ?></strong></div>
                        
                        <div class="card-body text-center">
                            <div class="container">
                                <div class="row justify-content-beetween">
                                    <div class="col">
                                        <label for="">Hari</label>
                                        <div class=""><h4><strong><?php echo e($data_jadwal_mengajar_guru->hari); ?></strong></h4></div>
                                    </div>
                                   
                                    <div class="col">
                                        <label for="">Tanggal</label>
                                        <div class=""><h4><strong><?php echo e($data_jadwal_mengajar_guru->tanggal); ?></strong></h4></div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Waktu Mulai</label>
                                        <div class=""><h4><strong><?php echo e($data_jadwal_mengajar_guru->waktu_mulai); ?></strong></h4></div>
                                    </div>
                                    <div class="col">
                                        <label for="">Waktu Selesai</label>
                                    <div class=""><h4><strong><?php echo e($data_jadwal_mengajar_guru->waktu_selesai); ?></strong></h4></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <label for="">Pengajar</label>
                                    <div class=""><h4><strong><?php echo e($data_jadwal_mengajar_guru->pengajar->nama_pengajar); ?></strong></h4></div>
                                </div>
                                <div class="row">
                                    <label for="">Kelas</label>
                                    <div class=""><h4><strong><?php echo e($data_jadwal_mengajar_guru->kelas->nama_kelas); ?></strong></h4></div>
                                </div>
                                <div class="row">
                                    <label for="">Mata Pelajaran</label>
                                    <div class=""><h4><strong><?php echo e($data_jadwal_mengajar_guru->mata_pelajarans->mata_pelajaran); ?></strong></h4></div>
                                </div>
                            </div>
                                
                    </div>
                </div>
            </div>
            
        </div>
        
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Jadwal_Mengajar/jadwal_mengajar_tampil.blade.php ENDPATH**/ ?>