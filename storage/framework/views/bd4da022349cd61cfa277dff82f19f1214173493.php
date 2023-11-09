

<?php $__env->startSection('title', 'Admin | Pengajar'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><STRONG>DETAIL BIODATA PENGAJAR</STRONG></h2>
            <div class="row">
                <div class="col">
                    <!-----Breadcrumbs--->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('index_guru')); ?>">Biodata Pengajar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lihat</li>
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
                <div class="card-header text-center"><h3><strong><?php echo e(__('Profil Pengajar')); ?></strong></h3></div>
                
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-4">
                            <img src="<?php echo e(url('storage/Komite/'. $data_guru->foto_guru)); ?>" class="rounded" alt="" height="200px">
                            <div class="row pt-2">
                                    <div class="col-md-4 text-secondary">Nama</div>
                                    <div class="col-md-8"><h5><?php echo e($data_guru->nama_guru); ?></h5></div> 
                                <hr>
                                    <div class="col-md-4 text-secondary">Alamat</div>
                                    <div class="col-md-8"><h5><?php echo e($data_guru->alamat_guru); ?></h5></div> 
                                <hr>  
                                <div class="col-md-4 text-secondary">Nomor Telepon</div>
                                    <div class="col-md-8"><h5><?php echo e($data_guru->no_telp); ?></h5></div> 
                                <hr>
                                    <div class="col-md-4 text-secondary">Agama</div>
                                    <div class="col-md-8"><h5><?php echo e($data_guru->agama); ?></h5></div>
                                <hr>
                                    <div class="col-md-4 text-secondary">Jenis Kelamin</div>
                                    <div class="col-md-8"><h5><?php echo e($data_guru->jenis_kelamin); ?></h5></div> 
                            </div>
                        </div>
                        <div class="col-md-7 pt-2">
                            <div class="row">
                                    <div class="col-md-5 text-secondary">Nomor Induk Pegawai</div>
                                    <div class="col-md-7"><h5><?php echo e($data_guru->nip); ?></h5></div> 
                                <hr>  
                                    <div class="col-md-5 text-secondary">Jabatan</div>
                                    <div class="col-md-7"><h5><?php echo e($data_guru->jabatan); ?></h5></div> 
                                 <hr> 
                                    <div class="col-md-5 text-secondary">Tempat Lahir</div>
                                    <div class="col-md-7"><h5><?php echo e($data_guru->tempat_lahir); ?></h5></div> 
                                <hr> 
                                    <div class="col-md-5 text-secondary">Tanggal Lahir</div>
                                    <div class="col-md-7"><h5><?php echo e($data_guru->ttl); ?></h5></div> 
                                <hr>
                                <div class="col-md-5 text-secondary">Suku</div>
                                    <div class="col-md-7"><h5><?php echo e($data_guru->suku); ?></h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">RT/RW</div>
                                    <div class="col-md-7"><h5><?php echo e($data_guru->rt_rw); ?></h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">Desa/Kelurahan</div>
                                    <div class="col-md-7"><h5><?php echo e($data_guru->desa_kelurahan); ?></h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">Kecamatan</div>
                                    <div class="col-md-7"><h5><?php echo e($data_guru->kecamatan); ?></h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">Kode Pos</div>
                                    <div class="col-md-7"><h5><?php echo e($data_guru->kode_pos); ?></h5></div> 
                            </div>
                        </div>
                    </div>
                       
                        
                </div>
            </div>
        </div>
        
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/data_guru_tampil.blade.php ENDPATH**/ ?>