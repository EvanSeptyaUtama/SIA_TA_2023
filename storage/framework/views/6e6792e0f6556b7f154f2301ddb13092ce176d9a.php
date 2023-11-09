

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
                <div class="row">
                    <div class="col-md-12">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <div class="alert-title">
                                    <h4> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg> Maaf!</h4> 
                                </div>
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
            <div class="row">
                    <div class="table-responsive">
                        <div>
                            <a
                                class="btn btn-primary" 
                                href="<?php echo e(route('tambah_siswa')); ?>"
                                data-bs-toggle="modal" 
                                data-bs-target="#dataSiswa"><i class="fa fa-plus"></i> Data Siswa</a>
                            <a class="btn btn-success" href="<?php echo e(route('eksport_excel_siswa')); ?>">Eksport Excel</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Import Excel
                            </button>
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
                                                            <form   action="<?php echo e(route('tampil_siswa', $data->id)); ?>" method="get">
                                                                <button type="submit" class="btn btn-sm btn-secondary mt-2">
                                                                    Lihat
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form onsubmit="return confirm('Apakah anda yakin edit data siswa ?');" action="<?php echo e(route('edit_siswa', $data->id)); ?>" method="get">
                                                                <button type="submit" class="btn btn-sm btn-info mt-2">
                                                                    Edit
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form onsubmit="return confirm('Apakah anda yakin hapus data siswa ?');"   action="<?php echo e(route('hapus_siswa', $data->id)); ?>" method="post">
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
            <!-- Modal Tambah Data-->
            <?php echo $__env->make('admin.Master.biodata_siswa.tambah_data_siswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Modal Import Data-->
            <?php echo $__env->make('admin.Master.biodata_siswa.import_data_siswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/biodata_siswa/data_siswa.blade.php ENDPATH**/ ?>