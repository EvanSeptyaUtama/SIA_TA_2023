<h3 class="text-center"><strong>BIODATA SISWA</strong></h3>
<br>
<table class="table">
    <thead class="text-center">
        <tr>
            <th><strong>NISN</strong></th>
            <th><strong>Nama</strong></th>
            <th><strong>Alamat</strong></th>
            <th><strong>Jenis Kelamin</strong></th>
            <th><strong>Tempat Lahir</strong></th>
            <th><strong>Tanggal Lahir</strong></th>
            <th><strong>Agama</strong></th>
            <th><strong>Suku</strong></th>
            <th><strong>Jumlah Saudara</strong></th>
            <th><strong>Cita-cita</strong></th>
            <th><strong>Hobi</strong></th>
            <th><strong>No Telepon(siswa/wali)</strong></th>
            <th><strong>Tinggal Bersama</strong></th>
            <th><strong>RT/RW</strong></th>
            <th><strong>Desa/Kelurahan</strong></th>
            <th><strong>Kecamatan</strong></th>
            <th><strong>Kode Pos</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data->nisn); ?></td>
            <td><?php echo e($data->nama_siswa); ?></td>
            <td><?php echo e($data->alamat_siswa); ?></td>
            <td><?php echo e($data->jenis_kelamin); ?></td>
            <td><?php echo e($data->tempat_lahir); ?></td>
            <td><?php echo e($data->ttl); ?></td>
            <td><?php echo e($data->agama); ?></td>
            <td><?php echo e($data->suku); ?></td>
            <td><?php echo e($data->jumlah_saudara); ?></td>
            <td><?php echo e($data->cita_cita); ?></td>
            <td><?php echo e($data->hobi); ?></td>
            <td><?php echo e($data->no_telp); ?></td>
            <td><?php echo e($data->tinggal_bersama); ?></td>
            <td><?php echo e($data->rt_rw); ?></td>
            <td><?php echo e($data->desa_kelurahan); ?></td>
            <td><?php echo e($data->kecamatan); ?></td>
            <td><?php echo e($data->kode_pos); ?></td>
           
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/biodata_siswa/data_siswa_export_excel.blade.php ENDPATH**/ ?>