<h3><strong>Jadwal Mengajar Guru</strong></h3>
<br>
<table class="table ">
    <thead>
        <tr class="text-center">
            <th><strong>Tanggal</strong></th>
            <th><strong>Mulai</strong></th>
            <th><strong>Selesai</strong></th>
            <th><strong>Hari</strong></th>
            <th><strong>Guru</strong></th>
            <th><strong>Kelas</strong></th>
            <th><strong>Mata Pelajaran</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data_jadwal_mengajar_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="text-center">
            <td><?php echo e($data->tanggal); ?></td>
            <td><?php echo e($data->waktu_mulai); ?></td>
            <td><?php echo e($data->waktu_selesai); ?></td>
            <td><?php echo e($data->hari); ?></td>
            <td>
                <?php echo e($data->gurus->nama_guru); ?>

            </td>
            <td>
                <?php echo e($data->kelas->nama_kelas); ?>

            </td>
            <td>
                <?php echo e($data->mata_pelajarans->mata_pelajaran); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Jadwal_Mengajar/jadwal_mengajar_export_excel.blade.php ENDPATH**/ ?>