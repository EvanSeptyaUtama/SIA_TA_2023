

<?php $__env->startSection('title', 'Data Admin'); ?>

<?php $__env->startSection('content'); ?>

<div class="m-2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-11">
                <div class="row mt-4">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('index_kelas')); ?>">Kelas</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kelas<?php echo e($data_kelas->nama_kelas); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                        <div class="row justify-content-start">
                                    <div class="row ">
                                        <div class="">
                                            <h2><strong><i><u>Data Kelas</u></i></strong></h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"><h5><strong>Kelas</strong></h5></div>
                                        <div class="col-md-10 mt-1">: <i>Kelas <?php echo e($data_kelas->nama_kelas); ?></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"><h5><strong>Wali Kelas</strong></h5></div>
                                        <div class="col-md-10 mt-1">: <i> <?php echo e($data_kelas->pengajar ? $data_kelas->pengajar->nama_pengajar : 'Belum ada wali kelas'); ?></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"><h5><strong>Nama Siswa</strong></h5></div>
                                        <div class="col-md-10 mt-1" style="text-align: justify;">
                                        <?php $__empty_1 = true; $__currentLoopData = $data_kelas->siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            - <?php echo e($item->nama_siswa); ?> .
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <p>Belum ada data siswa!!</p>
                                        <?php endif; ?> 
                                        </div>
                                    </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/umum/kelas/kelas/index_kelas.blade.php ENDPATH**/ ?>