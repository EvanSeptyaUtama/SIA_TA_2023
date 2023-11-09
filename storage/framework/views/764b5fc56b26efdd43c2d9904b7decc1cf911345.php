<h3><strong>ABSENSI GURU</strong></h3>
<br>
<h4><strong>Laporan Harian Absen Guru</strong></h4>
<table class="table rounded" >
    <thead>
        <tr class="text-center">
            <th><strong>Tanggal</strong></th>
            <th><strong>Mulai</strong></th>
            <th><strong>Selesai</strong></th>
            <th><strong>Keterangan</strong></th>
            <th><strong>Guru</strong></th>
            <th><strong>Kelas</strong></th>
            <th><strong>Mata Pelajaran</strong></th>
          </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data_absen_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr class="text-center">
              <td><?php echo e($data->tanggal_absen_guru); ?></td>
              <td><?php echo e($data->waktu_mulai_guru); ?></td>
              <td><?php echo e($data->waktu_selesai_guru); ?></td>
              <td><?php echo e($data->keterangan_guru); ?></td>
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
</table><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Absensi/absen_guru/absen_guru_export_excel.blade.php ENDPATH**/ ?>