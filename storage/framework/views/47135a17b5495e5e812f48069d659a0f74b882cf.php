

<?php $__env->startSection('title', 'Admin | Siswa'); ?>

<?php $__env->startSection('content'); ?>

<div class="m-2">
    <div class="container">
        <h2 class="text-center"><strong>BIODATA SISWA</strong></h2>
        <div class="row">
            <div class="col">
                <!-----Breadcrumbs--->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('index_siswa')); ?>">Biodata Siswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="<?php echo e(route('index_siswa')); ?>">Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Edit Data Siswa')); ?></div>
                
                <div class="card-body">
                    <form action="<?php echo e(route('update_siswa', $data_siswa)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('patch'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">NISN</label>
                            <div class="col-sm-10">
                                <input type="number" name="nisn" class="form-control"
                                value="<?php echo e($data_siswa->nisn); ?>">
                            </div>
                        </div>
                        
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Nama</label>
                            <div class="col-sm-10">
                                <input  type="text" name="nama_siswa" class="form-control"
                                value="<?php echo e($data_siswa->nama_siswa); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat_siswa" class="form-control"
                                value="<?php echo e($data_siswa->alamat_siswa); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tempat_lahir" class="form-control"
                                value="<?php echo e($data_siswa->tempat_lahir); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input  type="date" name="ttl" class="form-control"
                                value="<?php echo e($data_siswa->ttl); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Foto Siswa</label>
                            <div class="col-sm-10">
                                <img src="<?php echo e(url('storage/Siswa/'. $data_siswa->foto_siswa)); ?>" class="rounded mb-2" alt="" height="200px">
                                <input type="file" name="foto_siswa" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki-Laki" <?php echo e(($data_siswa->jenis_kelamin === 'Laki-Laki') ? 'Selected' : ''); ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?php echo e(($data_siswa->jenis_kelamin === 'Perempuan') ? 'Selected' : ''); ?>>Perempuan</option>
                                </select></div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Agama</label>
                            <div class="col-sm-10">
                                <select name="agama" class="form-control">
                                    <option value="Islam" <?php echo e(($data_siswa->agama === 'Islam') ? 'Selected' : ''); ?>>Islam</option>
                                    <option value="Katholik" <?php echo e(($data_siswa->agama === 'Katholik') ? 'Selected' : ''); ?>>Katholik</option>
                                    <option value="Protestan" <?php echo e(($data_siswa->agama === 'Protestan') ? 'Selected' : ''); ?>>Protestan</option>
                                    <option value="Hindu" <?php echo e(($data_siswa->agama === 'Hindu') ? 'Selected' : ''); ?>>Hindu</option>
                                    <option value="Budha" <?php echo e(($data_siswa->agama === 'Budha') ? 'Selected' : ''); ?>>Budha</option>
                                    <option value="Konghucu" <?php echo e(($data_siswa->agama === 'Konghucu') ? 'Selected' : ''); ?>>Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Anak ke-</label>
                            <div class="col-sm-10">
                                <input  type="text" name="anak_ke" class="form-control" value="<?php echo e($data_siswa->anak_ke); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Suku</label>
                            <div class="col-sm-10">
                                <input type="text" name="suku" class="form-control" value="<?php echo e($data_siswa->suku); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Jumlah Saudara</label>
                            <div class="col-sm-10">
                                <input type="number" name="jumlah_saudara" class="form-control" value="<?php echo e($data_siswa->jumlah_saudara); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Cita-cita</label>
                            <div class="col-sm-10">
                                <input type="text" name="cita_cita" class="form-control" value="<?php echo e($data_siswa->cita_cita); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Hobi</label>
                            <div class="col-sm-10">
                                <input type="text" name="hobi" class="form-control" value="<?php echo e($data_siswa->hobi); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_telp" class="form-control" value="<?php echo e($data_siswa->no_telp); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form">Tinggal bersama</label>
                            <div class="col-sm-10">
                                <select name="tinggal_bersama" class="form-control">
                                    <option value="OrangTua" <?php echo e(($data_siswa->tinggal_bersama === 'OrangTua') ? 'Selected' : ''); ?>>Orang Tua</option>
                                    <option value="Wali" <?php echo e(($data_siswa->tinggal_bersama === 'Wali') ? 'Selected' : ''); ?>>Wali</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form" >RT/RW</label>
                            <div class="col-sm-10">
                                <input  type="text" name="rt_rw" class="form-control" value="<?php echo e($data_siswa->rt_rw); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form" >DESA/KELURAHAN</label>
                            <div class="col-sm-10">
                                <input type="text" name="desa_kelurahan" class="form-control" value="<?php echo e($data_siswa->desa_kelurahan); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form" >KECAMATAN</label>
                            <div class="col-sm-10">
                                <input type="text" name="kecamatan" class="form-control" value="<?php echo e($data_siswa->kecamatan); ?>">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-label-form" >Kode Pos</label>
                            <div class="col-sm-10">
                                <input type="number" name="kode_pos" class="form-control" value="<?php echo e($data_siswa->kode_pos); ?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/data_siswa_edit.blade.php ENDPATH**/ ?>