

<?php $__env->startSection('title', 'Admin | Jadwal Mengajar'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <h2 class="text-center"><strong>Tambah Jadwal Mengajar Guru</strong></h2>
                     <!-----Breadcrumbs--->
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('index_jadwal_mengajar_guru')); ?>">Jadwal Mengajar</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
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
            <!---Alert-->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <div class="alert-title">
                                <h4> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg> Maaf!</h4> 
                            </div>
                                Terdapat kesalahan dalam input data Jadwal Mengajar
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
           
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center"><?php echo e(__('Data Jadwal Mengajar')); ?></div>
                        
                            <div class="card-body">
                                <form action="<?php echo e(route('store_jadwal_mengajar_guru')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?> 
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Waktu Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="waktu_mulai" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Waktu Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="waktu_selesai" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Hari</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="hari" placeholder="Contoh : Senin, Selasa, dll..." class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Guru</label>
                                        <div class="col-sm-10">
                                            <select name="guru_id" class="form-control">
                                                <option value="">- Pilih Guru -</option> 
                                                <?php $__currentLoopData = $tambah_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_guru); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Kelas</label>
                                        <div class="col-sm-10">
                                            <select name="kelas_id" class="form-control">
                                                <option value="">- Pilih Kelas -</option> 
                                                <?php $__currentLoopData = $tambah_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kelas); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Mata Pelajaran</label>
                                        <div class="col-sm-10">
                                            <select name="mata_pelajaran_id" class="form-control">
                                                <option value="">- Pilih Mata Pelajaran -</option> 
                                                <?php $__currentLoopData = $tambah_mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->mata_pelajaran); ?></option>
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
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Jadwal_Mengajar/jadwal_mengajar_tambah.blade.php ENDPATH**/ ?>