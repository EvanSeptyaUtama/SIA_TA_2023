

<?php $__env->startSection('title', 'Data Admin'); ?>

<?php $__env->startSection('content'); ?>

<div class="m-2">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                    <p> Kelas : <?php echo e($data_kelas->nama_kelas); ?></p>
                    <p>Wali Kelas : <br>
                        <?php echo e($data_kelas->gurus ? $data_kelas->gurus->nama_guru : 'Tidak ada wali kelas'); ?>

                    </p>
                    <p> Nama Siswa : <br>
                        <?php $__empty_1 = true; $__currentLoopData = $data_kelas->siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            - <?php echo e($item->nama_siswa); ?> <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p>Belum ada data siswa!!</p>
                        <?php endif; ?> 
                    </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/umum/kelas/kelas/index_kelas.blade.php ENDPATH**/ ?>