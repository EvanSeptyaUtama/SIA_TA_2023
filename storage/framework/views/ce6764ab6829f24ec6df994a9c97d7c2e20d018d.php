

<?php $__env->startSection('title', 'Data Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="m-2">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center"><strong>KELAS</strong></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kelas</li>
                                </ol>
                            </nav>
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
                                        Terdapat kesalahan dalam input data Kelas
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
            <!--Tabel--->
            <div class="row justify-content-start">
                <div class="col-md-5 p-2">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center"><h3><strong><?php echo e(__('Data Kelas')); ?></strong></h3></div>
                            <div class="card-body">
                                <table id="example" class="table table-striped nowrap" style="width:100%">
                                    <thead>
                                        <tr >
                                            <th >Kelas</th>
                                            <th width="200px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $data_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($data->nama_kelas); ?></td>
                                            <td>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <form action="<?php echo e(route('tampil_kelas', $data->id)); ?>" method="get">
                                                                <button type="submit" class="btn btn-sm btn-secondary mt-2">
                                                                    Lihat
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form action="<?php echo e(route('edit_kelas',$data)); ?>" method="get">
                                                                <button type="submit" class="btn btn-sm btn-info mt-2">
                                                                    Edit
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form action="<?php echo e(route('hapus_kelas', $data->id)); ?>" method="post">
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
                                </table></div>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-7 pt-2">
                    <div class="col">
                        <div class="table-responsive">
                            <div class="card">
                                <div class="card-header text-center"><h3><strong><?php echo e(__('Tambah Data Kelas')); ?></strong></h3></div>
                        
                                <div class="card-body">
                                    <form action="<?php echo e(route('store_kelas')); ?>" method="post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row mb-1">
                                            <label class="col-sm-3 col-label-form mt-1">Kelas :</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nama_kelas" placeholder="Cth: 1, 2, 3, 4..." class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/umum/kelas/umum_kelas.blade.php ENDPATH**/ ?>