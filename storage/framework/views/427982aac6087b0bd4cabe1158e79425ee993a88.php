

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
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Foto</label>
                        <div class="col-sm-10">
                            <img src="<?php echo e(url('storage/Komite/' . $data_guru->foto_guru)); ?>" class="rounded" style="width: 100px"><br>
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
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/data_guru_edit.blade.php ENDPATH**/ ?>