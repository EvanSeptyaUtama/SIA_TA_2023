


<?php $__env->startSection('title', 'Pengguna Admin'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
      <div class="container-fluid">
        
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center"><strong>PENGGUNA ADMIN</strong></h3>

                <!-----Breadcrumbs--->
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Pengguna Admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                        <p><?php echo e($message); ?></p>
                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                   <table id="example" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>Admin</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th width="150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data_user_admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($data->name); ?></td>
                                <td><?php echo e($data->email); ?></td>
                                <td><?php echo e($data->role); ?></td>
                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <form action="<?php echo e(route('show_profile_admin', $data->id)); ?>" method="get">
                                                    <button type="submit" class="btn btn-sm btn-info mt-2">
                                                        Edit
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col">
                                                <form action="<?php echo e(route('hapus_admin', $data->id)); ?>" method="post">
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
                </div></div>
        </div>
    </div> 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Preinan\sistem_absen\SIA_TA_2023\resources\views/admin/pengguna/pengguna_admin.blade.php ENDPATH**/ ?>