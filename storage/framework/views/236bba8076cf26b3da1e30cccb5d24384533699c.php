

<?php $__env->startSection('title', 'Admin | Siswa'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container-fluid">
            <!---Bagian Header : judul, tombol tambah, alert, tombol cari-->
            <div class="row mb-1 justify-content-between">
                <h3 class="text-center"><strong>BIODATA SISWA</strong></h3>

                <!-----Breadcrumbs--->
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Biodata Siswa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
                <!---Alert-->
                <div class="mt-2">
                    <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                        <p><?php echo e($message); ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
              
            <div class="row">
                    <div class="table-responsive">
                        <div>
                            <a 
                                class="btn btn-primary" 
                                href="<?php echo e(route('tambah_siswa')); ?>"
                                data-bs-toggle="modal" 
                                data-bs-target="#dataSiswa"><i class="fa fa-plus"></i> Data Siswa</a>
                            <a class="btn btn-success" href="<?php echo e(route('eksport_excel_siswa')); ?>"> Excel</a>
                        </div>
                        <br>
                            <table id="example" class="table table-striped nowrap" style="width:100%">
                                <thead>
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
                                                                <button type="submit" class="btn btn-secondary mt-2">
                                                                    Lihat
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form action="<?php echo e(route('edit_siswa', $data->id)); ?>" method="get">
                                                                <button type="submit" class="btn btn-info mt-2">
                                                                    Edit
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form action="<?php echo e(route('hapus_siswa', $data->id)); ?>" method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('delete'); ?>
                                                                <button type="submit" class="btn btn-danger mt-2">
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

            <!-- Modal -->
            <?php echo $__env->make('admin.Master.tambah_data_siswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/data_siswa.blade.php ENDPATH**/ ?>