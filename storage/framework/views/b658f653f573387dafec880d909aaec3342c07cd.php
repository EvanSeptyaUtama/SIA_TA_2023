

<?php $__env->startSection('title', 'Admin | Informasi Akademik'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2"> 
        <div class="container-fluid">
            <h3 class="text-center"><strong>INFORMASI AKADEMIK</strong></h3>
            <div class="d-flex justify-content-start mb-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminPiInformasiAkademik">
                    <i class="fa fa-plus"></i> Halaman Informasi Akademik
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
                            <th >Hari</th>
                            <th>Tanggal</th>
                            <th >Informasi</th>
                            <th >Keterangan</th>
                            <th >Gambar</th>
                            <th >Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data_informasi_akademik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($data->hari_informasi_akademik); ?></td>
                                <td><?php echo e($data->tanggal_informasi_akademik); ?></td>
                                <td><?php echo e($data->informasi_informasi_akademik); ?></td>
                                <td><?php echo e($data->keterangan_informasi_akademik); ?></td>
                                <td>
                                    <img src="<?php echo e(url('storage/Informasi_Akademik/' . $data->gambar_informasi_akademik)); ?>" class="rounded" style="width: 100px">
                                </td>
                                <td class="text-center">
                                    <div>
                                        <form action="<?php echo e(route('tampil_informasi_akademik', $data)); ?>" method="get">
                                            <button type="submit" class="btn btn-secondary mt-2">
                                                Lihat
                                            </button>
                                        </form>
                                        <form action="<?php echo e(route('edit_informasi_akademik',$data)); ?>" method="get">
                                            <button type="submit" class="btn btn-info mt-2">
                                                Edit
                                            </button>
                                        </form>
                                    <form action="<?php echo e(route('hapus_informasi_akademik', $data->id)); ?>" method="post">
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
        <?php echo $__env->make('admin.Profil_Instansi.informasi_akademik.informasi_akademik_tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/informasi_akademik/Informasi_akademik.blade.php ENDPATH**/ ?>