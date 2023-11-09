<h3 class="text-center"><strong>BIODATA PENGAJAR</strong></h3>
<br>
<table class="table">
    <thead class="text-center">
        <tr>
            <th><strong>NIP</strong></th>
            <th><strong>Nama</strong></th>
            <th><strong>No Telepon</strong></th>
            <th><strong>Jenis Kelamin</strong></th>
            <th><strong>Alamat</strong></th>
            <th><strong>Tempat Lahir</strong></th>
            <th><strong>Tanggal Lahir</strong></th>
            <th><strong>Jabatan</strong></th>
            <th><strong>Agama</strong></th>
            <th><strong>Suku</strong></th>
            <th><strong>RT/RW</strong></th>
            <th><strong>Desa/Kelurahan</strong></th>
            <th><strong>Kecamatan</strong></th>
            <th><strong>Kode Pos</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data->nip); ?></td>
            <td><?php echo e($data->nama_guru); ?></td>
            <td><?php echo e($data->no_telp); ?></td>
            <td><?php echo e($data->jenis_kelamin); ?></td>
            <td><?php echo e($data->alamat_guru); ?></td>
            <td><?php echo e($data->tempat_lahir); ?></td>
            <td><?php echo e($data->ttl); ?></td>
            <td><?php echo e($data->jabatan); ?></td>
            <td><?php echo e($data->agama); ?></td>
            <td><?php echo e($data->suku); ?></td>
            <td><?php echo e($data->rt_rw); ?></td>
            <td><?php echo e($data->desa_kelurahan); ?></td>
            <td><?php echo e($data->kecamatan); ?></td>
            <td><?php echo e($data->kode_pos); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/data_guru_export_excel.blade.php ENDPATH**/ ?>