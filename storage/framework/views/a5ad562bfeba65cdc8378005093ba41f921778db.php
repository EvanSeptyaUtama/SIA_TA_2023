

<?php $__env->startSection('title', 'Data Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="m-2">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center"><strong>SEMESTER</strong></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Semester</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!---Alert-->
                    <div class="row">
                        <div class="col-md-5">
                            <?php if($message = Session::get('success')): ?>
                                <div class="alert alert-success">
                                    <p><?php echo e($message); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
            </div>
            <!------->
            <div class="row justify-content-start">
                <div class="col-md-5 p-2">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center"><h3><strong><?php echo e(__('Data Semester')); ?></strong></h3></div>
                            <div class="card-body">
                                <table id="example" class="table table-striped nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Semester</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $data_semester; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr >
                                            <td><?php echo e($data->nama_semester); ?></td>
                                            <td >
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <form action="<?php echo e(route('edit_semester',$data)); ?>" method="get">
                                                                <button type="submit" class="btn btn-info mt-2">
                                                                    Edit
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form action="<?php echo e(route('hapus_semester', $data->id)); ?>" method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('delete'); ?>
                                                                <button type="submit" class="btn btn-danger mt-2">
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
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center"><h3><strong><?php echo e(__('Tambah Data Semester')); ?></strong></h3></div>
                       
                            <div class="card-body">
                                <form action="<?php echo e(route('store_semester')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <label class="col-sm-3 col-label-form mt-1">Semester :</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_semester" placeholder="Cth: Ganjil dan Genap.." class="form-control">
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
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/umum/umum_semester.blade.php ENDPATH**/ ?>