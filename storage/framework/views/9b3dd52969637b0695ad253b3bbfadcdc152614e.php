

<?php $__env->startSection('title', 'Admin | Visi-Misi'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container-fluid">
            <h3 class="text-center"><strong>VISI - MISI</strong></h3>
        <div class="d-flex justify-content-start mb-2">
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminPiVisiMisi">
                <i class="fa fa-plus"></i> Halaman Visi-Misi Profil Instansi
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
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data_visi_misi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($data->visi); ?></td>
                            <td><?php echo e($data->misi); ?></td>
                            <td>
                                <img src="<?php echo e(url('storage/Visi_Misi/' . $data->gambar_visi_misi)); ?>" class="rounded" style="width: 100px">
                            </td>
                            <td class="text-center">
                                <div>
                                    <form action="<?php echo e(route('tampil_visi_misi', $data)); ?>" method="get">
                                        <button type="submit" class="btn btn-sm btn-secondary mt-2">
                                            Lihat 
                                        </button>
                                    </form>
                                    <form action="<?php echo e(route('edit_visi_misi',$data)); ?>" method="get">
                                        <button type="submit" class="btn btn-sm btn-info mt-2">
                                            Edit
                                        </button>
                                    </form>
                                   <form action="<?php echo e(route('hapus_visi_misi', $data->id)); ?>" method="post">
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
        <?php echo $__env->make('admin.Profil_Instansi.visi_misi.visi_misi_tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/visi_misi/visi_misi.blade.php ENDPATH**/ ?>