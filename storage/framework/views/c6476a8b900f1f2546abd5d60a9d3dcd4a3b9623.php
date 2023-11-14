

<?php $__env->startSection('title', 'Admin | Absen Siswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="m-2">
<div class="row mt-2">
    <div class="container">
        <div class="card border-dark">
            <div class="row m-2">
                <div class="col-md-12">
                    <h2>Rekapitulasi Absensi Siswa</h2>
                    <?php if(!is_null($tanggalFormatted)): ?>
                        <h5>Hasil rekapitulasi absensi siswa mulai dari tanggal <?php echo e($tanggalFormatted); ?> : </h5>
                    <?php endif; ?>
                    <form action="<?php echo e(route('index_rekap_absen_siswa')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-4">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="tanggal"><strong>Tanggal Awal</strong></label>
                                    <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control border-dark" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4 d-flex flex-column">
                                <button type="submit" class="btn btn-success col-4 mt-auto"><strong>Cari</strong></button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                    <table id="example" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID Siswa</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Jumlah Absensi</th>
                                <th>Hadir</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Alpha</th>
                                <th>Persentase Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $rekapAbsensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->id); ?></td>
                                    <td><?php echo e($data->nisn); ?></td>
                                    <td><?php echo e($data->nama_siswa); ?></td>
                                    <td><?php echo e($data->jumlah_absensi); ?></td>
                                    <td><?php echo e($data->jumlah_hadir); ?></td>
                                    <td><?php echo e($data->jumlah_sakit); ?></td>
                                    <td><?php echo e($data->jumlah_ijin); ?></td>
                                    <td><?php echo e($data->jumlah_alpa); ?></td>
                                    <td><?php echo e(number_format($data->persentase_kehadiran, 0, '.', '')); ?> %</td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Preinan\sistem_absen\SIA_TA_2023\resources\views/admin/Absensi/absen_siswa/rekap_siswa.blade.php ENDPATH**/ ?>