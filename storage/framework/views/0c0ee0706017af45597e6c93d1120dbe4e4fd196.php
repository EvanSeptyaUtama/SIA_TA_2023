

<?php $__env->startSection('title', 'Admin | Jadwal Mengajar Guru'); ?>

<?php $__env->startSection('content'); ?>
<div class="m-2">
    <div class="container-fluid">
        <!---Bagian Header : judul, tombol tambah, alert, tombol cari-->
        <div class="row mb-2 justify-content-between">
            <h3 class="text-center"><strong>JADWAL MENGAJAR GURU</strong></h3>
            <div class="row">
                <div class="col">
                    <!-----Breadcrumbs--->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jadwal Mengajar Guru</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-3 mb-1">
                <div>
                    <a class="btn btn-success" href="<?php echo e(url('/Export_excel_jadwal_mengajar')); ?>"> Excel</a>
                </div>
            </div>
            
         <!---Alert-->
         <div class="row">
            <div class="col-md-12">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <div class="alert-title"><h4>Maaf!</h4></div>
                            Terdapat kesalahan dalam input data
                        <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div> 
                <?php endif; ?>

              <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
              <?php endif; ?>

              <?php if(session('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
              <?php endif; ?>
            </div>
        </div>
        </div>
        
        <!---Bagian Body : table dan pagination-->
        <div class="row">
            <div class="table-responsive">
                <table id="example" class="table table-striped nowrap" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>Tanggal</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Hari</th>
                            <th>Guru</th>
                            <th>Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th width="150px">Aksi</th>
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
                            <td class="text-center">
                                <div class="container">
                                    <div class="row">
                                        <!---Tombol tampil data secara detail--->
                                        <div class="col">
                                            <a 
                                                href="<?php echo e(route('tampil_jadwal_mengajar_guru', $data)); ?>" 
                                                method="get" 
                                                class="btn btn-sm btn-secondary mt-2">
                                                Lihat
                                            </a>
                                        </div>
                                        <!---Tombol hapus--->
                                        <div class="col">
                                            <form action="<?php echo e(route('hapus_jadwal_mengajar_guru', $data->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger mt-2">
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
                </table>
            </div>
        </div>
    </div>
</div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Jadwal_Mengajar/jadwal_mengajar.blade.php ENDPATH**/ ?>