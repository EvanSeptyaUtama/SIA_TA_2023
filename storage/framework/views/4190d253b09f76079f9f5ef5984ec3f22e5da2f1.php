

<?php $__env->startSection('title', 'Absen Siswa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container-fluid">
            <h3 class="text-center mt-2"><strong>ABSEN SISWA</strong></h3>
        <hr>
        <div class="row">
            <div class="col">
                <!-----Breadcrumbs--->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('laporan_harian_absen_siswa_kelas_1')); ?>">Absen Siswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laporan Harian Kelas 1</li>
                    </ol>
                </nav>
            </div>
          </div>
        <h4><i>Laporan Harian Kelas 1</i></h4>
        <div class="row justify-content-start  mb-1">
            <div>
                <a class="btn btn-warning" href="<?php echo e(route('index_absen_siswa')); ?>">Kembali</a>
                <a class="btn btn-success" href="<?php echo e(route('eksport_excel_kelas_1')); ?>">Export Excel</a>
            </div>
        </div>
        <!----Table---->
        <div class="row mt-4">
                <div class="table-responsive">
                    <table id="example" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                              <th>Tanggal</th>
                              <th>Mulai</th>
                              <th>Selesai</th>
                              <th width="50px">Keterangan</th>
                              <th>Siswa</th>
                              <th>Kelas</th>
                              <th>Semester</th>
                              <th>Tahun ajaran</th>
                              <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data_absen_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($data->kelas->nama_kelas == '1'): ?>
                                        <tr >
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
                                            <td>
                                                <?php echo e($data->tahun_pelajarans->semester); ?>

                                            </td>
                                            <td>
                                                <?php echo e($data->tahun_pelajarans->tahun_ajaran); ?>

                                            </td>      
                                            <td>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <form
                                                                action="<?php echo e(route('tampil_absen_siswa', $data)); ?>" method="get">
                                                                <button type="submit" class="btn btn-sm btn-secondary mt-2">
                                                                    Detail
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form
                                                            onsubmit="return confirm('Apakah anda yakin edit data absen siswa ?');"  
                                                            action="<?php echo e(route('edit_absen_siswa', $data->id)); ?>" method="get">
                                                                <button type="submit" class="btn btn-sm btn-info mt-2">
                                                                    Edit
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                        
                                                            <form
                                                            onsubmit="return confirm('Apakah anda yakin hapus data absen siswa ?');"  
                                                                action="<?php echo e(route('hapus_absen_siswa', $data->id)); ?>" method="post">
                                                                <?php echo method_field('delete'); ?>
                                                                <?php echo csrf_field(); ?>
                                                                <button type="submit" class="btn btn-sm btn-danger mt-2">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                  </table>
                </div>
                
            <div class="row mt-2">
                <h3><u>Keterangan Absen.</u></h3>
                <ul>
                <li>Hadir : </li>
                <li>Sakit :</li>
                <li>Alfa  :</li>
                <li>Izin  :</li>
                <li>Persen Hadir  :</li>
            </div>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Preinan\sistem_absen\SIA_TA_2023\resources\views/admin/Absensi/absen_siswa/kelas/kelas_1.blade.php ENDPATH**/ ?>