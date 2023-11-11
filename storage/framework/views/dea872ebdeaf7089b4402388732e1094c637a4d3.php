

<?php $__env->startSection('title', 'Admin | Halaman Utama'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2"> 
        <div class="container-fluid">
            <h3 class="text-center"><strong>HALAMAN UTAMA</strong></h3>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa fa-plus"></i> Halaman Utama Profil Instansi
                    </button>
                </div>
            </div>
             <!---Alert-->
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <div class="alert-title">
                                    <h4> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg> Maaf!</h4> 
                                </div>
                                    Terdapat kesalahan dalam input data Halaman Utama
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
            <div class="table-responsive mt-4">
                <table id="example" class="table" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Yayasan</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Penjelasan</th>
                            <th scope="col">Deskripsi & Gambar 1</th>
                            <th scope="col">Deskripsi & Gambar 2</th>
                            <th scope="col">Deskripsi & Gambar 3</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data_halaman_utama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($data->nama_yayasan); ?></td>
                                <td><?php echo e($data->nama_instansi); ?></td>
                                <td><?php echo e($data->penjelasan); ?></td>
                                <td>
                                    <?php echo e($data->deskripsi_gambar1); ?> <hr>
                                    <img src="<?php echo e(url('storage/Halaman_Utama1/' . $data->gambar_pertama)); ?>" class="img-index_admin" >
                                </td>
                                <td>
                                <p><?php echo e($data->deskripsi_gambar2); ?></p> <hr>
                                    <img src="<?php echo e(url('storage/Halaman_Utama2/' . $data->gambar_kedua)); ?>" class="img-index_admin">
                                </td>
                                <td> 
                                <?php echo e($data->deskripsi_gambar3); ?> <hr>
                                    <img src="<?php echo e(url('storage/Halaman_Utama3/' . $data->gambar_ketiga)); ?>" class="img-index_admin">
                                </td>
                                <td class="text-center">
                                    <div>
                                        <form action="<?php echo e(route('show_halaman_utama', $data)); ?>" method="get">
                                            <button type="submit" class="btn btn-sm btn-secondary mt-2">
                                                Lihat
                                            </button>
                                        </form>
                                        <form action="<?php echo e(route('edit_halaman_utama',$data)); ?>" method="get">
                                            <button type="submit" class="btn btn-sm btn-info mt-2">
                                                Edit
                                            </button>
                                        </form>
                                    <form action="<?php echo e(route('hapus_halaman_utama', $data->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="btn btn-danger mt-2">
                                                Hapus
                                            </button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php echo $__env->make('admin.Profil_Instansi.hu.halaman_utama_tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/hu/halaman_utama.blade.php ENDPATH**/ ?>