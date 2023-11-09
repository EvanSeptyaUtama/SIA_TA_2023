<h3><strong>Absen Siswa</strong></h3>
<br>
<span><strong>Laporan Absen Siswa Kelas 3</strong></span>
<br>
<table class="table rounded" >
    <thead>
        <tr class="text-center">
            <th><strong>Tanggal</strong></th>
            <th><strong>Mulai</strong></th>
            <th><strong>Selesai</strong></th>
            <th><strong>Keterangan</strong></th>
            <th><strong>Siswa</strong></th>
            <th><strong>Kelas</strong></th>
          </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data_absen_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($data->kelas->nama_kelas == '3'): ?>  
                <tr class="text-center">    
                    <td><?php echo e($data->tanggal_absen); ?></td>
                    <td><?php echo e($data->waktu_mulai); ?></td>
                    <td><?php echo e($data->waktu_selesai); ?></td>
                    <td><?php echo e($data->keterangan); ?></td>
                    <td>
                        <?php echo e($data->siswas->nama_siswa); ?>

                    </td>
                    <td>
                        <?php echo e($data->kelas->nama_kelas); ?>

                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Absensi/absen_siswa/kelas/kelas_3_export_excel.blade.php ENDPATH**/ ?>