



<?php $__env->startSection('title', 'Admin | Jadwal Mengajar'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <h3 class="text-center mt-3"><strong>DATA JADWAL MENGAJAR</strong></h3>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-success" href="<?php echo e(route('tambah_jadwal_mengajar')); ?>"> Tambah Jadwal</a>
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
                    <tr class="text-center">
                        <th>No</th>
                        <th>Hari</th>
                        <th>Jam-Ke</th>
                        <th>Waktu</th>
                        <th>Guru</th>
                        <th>Aksi</th>
                      </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data_jadwal_mengajar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center">
                        <td><?php echo e($data->id); ?></td>
                        <td><?php echo e($data->hari); ?></td>
                        <td><?php echo e($data->jam_ke); ?></td>
                        <td><?php echo e($data->waktu); ?></td>
                        <td>
                            <?php $__currentLoopData = $data->gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($item->nama_guru); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td class="text-center">
                            <div>
                                <form action="" method="get">
                                    <button type="submit" class="btn btn-outline-secondary mt-2">
                                        <i class='fa fa-eye'></i> 
                                    </button>
                                </form>
                                <form action="" method="get">
                                    <button type="submit" class="btn btn-outline-primary mt-2">
                                        <i class='fa fa-pencil'></i> 
                                    </button>
                                </form>
                               <form action="" method="post">
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
        <hr>
        <div class="container">
            <div class="row" >
                <?php $__currentLoopData = $data_jadwal_mengajar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3" >
                        <p>Hari : <?php echo e($data->hari); ?></p>
                        <p>Jam-ke : <?php echo e($data->jam_ke); ?></p>
                        <p>Waktu : <?php echo e($data->waktu); ?></p>
                        <?php $__currentLoopData = $data->gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p>Guru : <?php echo e($item->nama_guru); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-md-1">
                        <form action="" method="get">
                             <button type="submit" class="btn btn-outline-secondary mt-2">
                                 <i class='fa fa-eye'></i> 
                             </button>
                         </form>
                         <form action="" method="get">
                             <button type="submit" class="btn btn-outline-primary mt-2">
                                 <i class='fa fa-pencil'></i> 
                             </button>
                         </form>
                        <form action="" method="post">
                             <button type="submit" class="btn btn-outline-danger mt-2">
                                 <i class='fa fa-trash'></i> 
                             </button>
                        </form>
                 </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
           
        </div>
        <hr>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/mengajar/jadwal_mengajar.blade.php ENDPATH**/ ?>