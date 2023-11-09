<table class="table">
    <thead class="text-center">
        <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td><?php echo e($data->nisn); ?></td>
        <td><?php echo e($data->nama_siswa); ?></td>
        <td><?php echo e($data->alamat_siswa); ?></td>
        <td><?php echo e($data->jenis_kelamin); ?></td>
        <td class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="<?php echo e(route('tampil_siswa', $data->id)); ?>" method="get">
                            <button type="submit" class="btn btn-outline-secondary mt-2">
                                Lihat
                            </button>
                        </form>
                    </div>
                    <div class="col">
                        <form action="<?php echo e(route('edit_siswa', $data->id)); ?>" method="get">
                            <button type="submit" class="btn btn-outline-primary mt-2">
                                Edit
                            </button>
                        </form>
                    </div>
                    <div class="col">
                        <form action="<?php echo e(route('hapus_siswa', $data->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-outline-danger mt-2">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
    </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/data_siswa_excel.blade.php ENDPATH**/ ?>