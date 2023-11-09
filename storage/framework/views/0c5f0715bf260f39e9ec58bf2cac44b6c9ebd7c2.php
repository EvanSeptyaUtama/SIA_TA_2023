

<?php $__env->startSection('title', 'Data Admin'); ?>
<?php $__env->startSection('content'); ?>
   
    <div class="m-2">
        <h3 class="text-center"><strong>DATA KEPALA SEKOLAH</strong></h3>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-success" href="<?php echo e(route('tambah_kepala_sekolah')); ?>"> Tambah Data Kepala Sekolah</a>
            </div>
        </div>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>NRKS</th>
                    <th>Nama</th>
                    <th>No.Telp</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data_kepala_sekolah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                     <td><?php echo e($data->nrks); ?></td>
                     <td><?php echo e($data->nama_kepsek); ?></td>
                     <td><?php echo e($data->no_telp); ?></td>
                     <td><?php echo e($data->alamat_kepsek); ?></td>
                     <td><?php echo e($data->tempat_lahir); ?></td>
                     <td><?php echo e($data->ttl); ?></td>
                     <td class="text-center">
                        <div>
                            <form action="<?php echo e(route('tampil_kepala_sekolah', $data)); ?>" method="get">
                                <button type="submit" class="btn btn-outline-secondary mt-2">
                                    <i class='fa fa-eye'></i> 
                                </button>
                            </form>
                            <form action="<?php echo e(route('edit_kepala_sekolah',$data)); ?>" method="get">
                                <button type="submit" class="btn btn-outline-primary mt-2">
                                    <i class='fa fa-pencil'></i> 
                                </button>
                            </form>
                           <form action="<?php echo e(route('hapus_kepala_sekolah', $data->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" class="btn btn-outline-danger mt-2">
                                    <i class='fa fa-trash'></i> 
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Master/data_kepala_sekolah.blade.php ENDPATH**/ ?>