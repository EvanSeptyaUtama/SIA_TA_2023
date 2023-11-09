

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
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
            <div class="table-responsive mt-4">
                <table id="example" class="table" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Yayasan</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Penjelasan</th>
                            <th scope="col">Gambar</th>
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
                                    <img src="<?php echo e(url('storage/' . $data->gambar)); ?>" class="rounded" style="width: 100px">
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