

<?php $__env->startSection('title', 'Admin | Pengajar'); ?>
<?php $__env->startSection('content'); ?>
<div class="m-2">
    <div class="container">
            <h3 class="text-center"><strong>BIODATA PENGAJAR</strong></h3>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="<?php echo e(route('index_guru')); ?>">Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
                <div class="card">
                    <div class="card-header text-center"><?php echo e(__('Tambah Data Pengajar')); ?></div>
    
                    <div class="card-body">
                        <form action="<?php echo e(route('store_guru')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?> 
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">NIP</label>
                                <div class="col-sm-10">
                                    <input type="number" name="nip" placeholder="Nomor Induk Pegawai" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_guru" placeholder="Nama Lengkap" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" name="no_telp" placeholder="Nomor Aktif" class="form-control">
                                </div>
                            </div>
    
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Jenis Kelamin</label>
                                <div class="col-sm-10 rounded">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="#">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat_guru" placeholder="Alamat Lengkap" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
                                </div>
                            </div>
    
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" name="ttl" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Foto</label>
                                <div class="col-sm-10">
                                    <input class="form-control rounded" type="file" name="foto_guru">
                                </div>
                            </div>
                            
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jabatan" placeholder="Jabatan" class="form-control">
                                </div>
                            </div>
    
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Agama</label>
                                <div class="col-sm-10">
                                    <select name="agama" class="form-control">
                                        <option value="#">-- Pilih Agama --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katholik" >Katholik</option>
                                        <option value="Protestan" >Protestan</option>
                                        <option value="Hindu" >Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select></div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Suku</label>
                                <div class="col-sm-10">
                                    <input type="text" name="suku" placeholder="suku" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">RT/RW</label>
                                <div class="col-sm-10">
                                    <input type="text" name="rt_rw" placeholder="Contoh : 002/004" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Desa/Kelurahan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="desa_kelurahan" placeholder="Desa Kelurahan" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kecamatan" placeholder="kecamatan" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-2 col-label-form">Kode Pos</label>
                                <div class="col-sm-10">
                                    <input type="number" name="kode_pos" placeholder="kode_pos" class="form-control">
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
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/data_guru_tambah.blade.php ENDPATH**/ ?>