

<?php $__env->startSection('title', 'Admin | Pengajar'); ?>

<?php $__env->startSection('content'); ?>

<div class="m-2">
    <div class="container">
        <h2 class="text-center"><STRONG>BIODATA PENGAJAR</STRONG></h2>
        <div class="row">
            <div class="col">
                <!-----Breadcrumbs--->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('index_guru')); ?>">Biodata Pengajar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    <div class="d-flex justify-content-start mb-2">
        <div>
            <a class="btn btn-outline-warning" href="<?php echo e(route('index_guru')); ?>">Kembali</a>
        </div>
    </div>
    <!---Alert-->
    <div class="row">
        <div class="col-md-12">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <div class="alert-title">
                        <h4> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg> Maaf!</h4> 
                    </div>
                        Terdapat kesalahan dalam mengedit data
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
            <div class="card-header text-center"><?php echo e(__('Edit Data Pengajar')); ?></div>
            
            <div class="card-body">
                <form action="<?php echo e(route('update_guru', $data_guru->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo method_field('patch'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">NIP</label>
                        <div class="col-sm-10">
                            <input type="number" name="nip" class="form-control"
                            value="<?php echo e($data_guru->nip); ?>">
                        </div> 
                    </div>
                    
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_guru" class="form-control"
                                value="<?php echo e($data_guru->nama_guru); ?>"></div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Telepon</label>
                        <div class="col-sm-10">
                            <input type="number" name="no_telp" class="form-control"
                            value="<?php echo e($data_guru->no_telp); ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jenis_kelamin" class="form-control">
                                <option value="Laki-Laki" <?php echo e(($data_guru->jenis_kelamin === 'Laki-Laki') ? 'Selected' : ''); ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php echo e(($data_guru->jenis_kelamin === 'Perempuan') ? 'Selected' : ''); ?>>Perempuan</option>
                            </select></div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat_guru" class="form-control"
                            value="<?php echo e($data_guru->alamat_guru); ?>">
                        </div>
                    </div>
                    <!-----foreign key table kelas-->
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Kelas</label>
                        <div class="col-sm-10">
                            <select name="kelas_id" class="form-control" class="form-control" >
                                <option value="">-Bukan guru-</option>
                                <?php $__currentLoopData = $edit_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>" <?php echo e($data_guru->kelas_id == $item->id ? 'selected':''); ?>><?php echo e($item->nama_kelas); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempat_lahir" class="form-control"
                            value="<?php echo e($data_guru->tempat_lahir); ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input  type="date" name="ttl" class="form-control"
                            value="<?php echo e($data_guru->ttl); ?>">
                        </div>
                    </div>
                    <!-- <?php if($data_guru->foto_siswa != ''): ?>
                                                <img src="<?php echo e(url('storage/Siswa/'. $data_siswa->foto_siswa)); ?>" class="rounded mb-2 w-full h-full" alt="" height="200px">    
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('pi_assets/images/profile.jpg')); ?>" class="rounded mb-2 w-full h-full" alt="" height="200px">    
                                            <?php endif; ?> -->
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Foto</label>
                        <div class="col-sm-10">
                            <input class="form-control rounded mt-1" type="file" name="foto_guru">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="jabatan" class="form-control"
                            value="<?php echo e($data_guru->jabatan); ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Agama</label>
                        <div class="col-sm-10">
                            <select name="agama" class="form-control">
                                <option value="Islam" <?php echo e(($data_guru->agama === 'Islam') ? 'Selected' : ''); ?>>Islam</option>
                                <option value="Katholik" <?php echo e(($data_guru->agama === 'Katholik') ? 'Selected' : ''); ?>>Katholik</option>
                                <option value="Protestan" <?php echo e(($data_guru->agama === 'Protestan') ? 'Selected' : ''); ?>>Protestan</option>
                                <option value="Hindu" <?php echo e(($data_guru->agama === 'Hindu') ? 'Selected' : ''); ?>>Hindu</option>
                                <option value="Budha" <?php echo e(($data_guru->agama === 'Budha') ? 'Selected' : ''); ?>>Budha</option>
                                <option value="Konghucu" <?php echo e(($data_guru->agama === 'Konghucu') ? 'Selected' : ''); ?>>Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form" >Suku</label>
                        <div class="col-sm-10">
                            <input  type="text" name="suku" class="form-control" value="<?php echo e($data_guru->suku); ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form" >RT/RW</label>
                        <div class="col-sm-10">
                            <input  type="text" name="rt_rw" class="form-control" value="<?php echo e($data_guru->rt_rw); ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form" >DESA/KELURAHAN</label>
                        <div class="col-sm-10">
                            <input type="text" name="desa_kelurahan" class="form-control" value="<?php echo e($data_guru->desa_kelurahan); ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form" >KECAMATAN</label>
                        <div class="col-sm-10">
                            <input type="text" name="kecamatan" class="form-control" value="<?php echo e($data_guru->kecamatan); ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form" >Kode Pos</label>
                        <div class="col-sm-10">
                            <input type="number" name="kode_pos" class="form-control" value="<?php echo e($data_guru->kode_pos); ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                </form>
            </div>
        </div>
    </div>
    
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/biodata_guru/data_guru_edit.blade.php ENDPATH**/ ?>