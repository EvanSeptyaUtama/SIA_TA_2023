

<?php $__env->startSection('title', 'Absen Siswa'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="row">
            <div class="col-md-6 text-center">
                <h3><strong>ABSEN SISWA</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-----Breadcrumbs--->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('index_absen_siswa')); ?>">Absen Siswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lihat</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="<?php echo e(route('index_absen_siswa')); ?>"> Kembali</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <div class="card">
                        <div class="card-header text-center"><?php echo e(__('Tampil Data Absen Siswa')); ?></div>
                        
                        <div class="card-body ">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class=""><span class="text-secondary">Keterangan</span> <h4><strong><?php echo e($data_absen_siswa->keterangan); ?></strong></h4></div>
                                            <div class=""><span class="text-secondary">Tanggal Absen</span> <h4><strong><?php echo e($data_absen_siswa->tanggal_absen); ?></strong></h4></div>
                                            <div class=""><span class="text-secondary">Waktu Mulai</span> <h4><strong><?php echo e($data_absen_siswa->waktu_mulai); ?></strong></h4></div>
                                            <div class=""><span class="text-secondary">Waktu Selesai</span> <h4><strong><?php echo e($data_absen_siswa->waktu_selesai); ?></strong></h4></div>
                                        </div>
                                        <div class="col">
                                            <div class=""><span class="text-secondary">Tahun Ajaran</span> <h4><strong><?php echo e($data_absen_siswa->tahun_pelajarans->tahun_ajaran); ?></strong></h4></div>
                                            <div class=""><span class="text-secondary">Semester</span> <h4><strong><?php echo e($data_absen_siswa->tahun_pelajarans->semester); ?></strong></h4></div>
                                            <div class=""><span class="text-secondary">Nama Siswa</span> <h4><strong><?php echo e($data_absen_siswa->siswas->nama_siswa); ?></strong></h4></div>
                                            <div class=""><span class="text-secondary">Kelas</span> <h4><strong><?php echo e($data_absen_siswa->kelas->nama_kelas); ?></strong></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Preinan\sistem_absen\SIA_TA_2023\resources\views/admin/Absensi/absen_siswa/absen_siswa_tampil.blade.php ENDPATH**/ ?>