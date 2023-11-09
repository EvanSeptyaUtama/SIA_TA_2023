
<?php $__env->startSection('title', ' Profile'); ?>

<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2 class="text-center"><STRONG>PENGGUNA ADMIN</STRONG></h2>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('index_user_admin')); ?>">Pengguna Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                <div class="d-flex justify-content-start mb-2">
                    <div>
                        <a class="btn btn-outline-warning" href="<?php echo e(route('index_user_admin')); ?>">Kembali</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="card">
                        <div class="card-header text-center"><?php echo e(__('Edit Data Admin')); ?></div>
                        
                        <div class="card-body">
                            <form action="<?php echo e(route('edit_profile')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" class="form-control"
                                        value="<?php echo e($user->name); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="<?php echo e($user->email); ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="role" class="form-control"
                                        value="<?php echo e($user->is_admin ? 'Member' : 'Admin'); ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Change profile details</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                </div>
                </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/show_profile.blade.php ENDPATH**/ ?>