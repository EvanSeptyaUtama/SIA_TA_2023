

<?php $__env->startSection('title', 'Struktur Organisasi'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container-fluid">
            <h3 class="text-center"><strong>STRUKTUR ORGANISASI</strong></h3>
        <div class="d-flex justify-content-start mb-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminPiSusunanOrganisasi">
                <i class="fa fa-plus"></i> Halaman Susunan Organisasi Profil Instansi
            </button>
        </div>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <div class="table-responsive mt-4">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data_susunan_organisasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($data->nama); ?></td>
                            <td><?php echo e($data->jabatan); ?></td>
                            <td>
                                <img src="<?php echo e(url('storage/Susunan_Organisasi/' . $data->gambar)); ?>" class="rounded" style="width: 100px">
                            </td>
                            <td class="text-center">
                                <div>
                                    <form action="<?php echo e(route('tampil_susunan_organisasi', $data)); ?>" method="get">
                                        <button type="submit" class="btn btn-sm btn-secondary mt-2">Lihat</button>
                                    </form>
                                    <form action="<?php echo e(route('edit_susunan_organisasi',$data)); ?>" method="get">
                                        <button type="submit" class="btn btn-sm btn-info mt-2">
                                            Edit
                                        </button>
                                    </form>
                                   <form action="<?php echo e(route('hapus_susunan_organisasi', $data->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger mt-2">
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
        <?php echo $__env->make('admin.Profil_Instansi.susunan_organisasi.susunan_organisasi_tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/susunan_organisasi/susunan_organisasi.blade.php ENDPATH**/ ?>