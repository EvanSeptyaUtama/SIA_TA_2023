

<?php $__env->startSection('title', 'Tahun Ajaran'); ?>
<?php $__env->startSection('content'); ?>

    <div class="m-2">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-12">
                    <h2 class="text-center"><strong>TAHUN AJARAN</strong></h2> 
                    <!-----Breadcrumbs--->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tahun Ajaran</li>
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
            <!--Tabel--->
            <div class="row justify-content-start">
                <div class="col-md-5 pt-2">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center">
                                <h3><strong><?php echo e(__('Data Tahun Ajaran')); ?></strong></h3>
                            </div>
                            <div class="card-body">
                                <table id="example" class="table table-striped nowrap" style="width:100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Tahun Ajaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data_tahun_ajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr >
                                            <td><?php echo e($data->tahun_ajaran); ?></td>
                                            <td >
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <form action="<?php echo e(route('edit_tahun_ajaran',$data)); ?>" method="get">
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-info">
                                                                    Edit
                                                                  </button>
                                                            </form>
                                                        </div>
                                                        <div class="col">
                                                            <form action="<?php echo e(route('hapus_tahun_ajaran', $data->id)); ?>" method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('delete'); ?>
                                                                <button type="submit" class="btn btn-danger ">
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
                <!--Inputan Data Tahun Ajaran-->
                <div class="col-md-7 pt-2">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center"><h3><strong><?php echo e(__('Tambah Data Tahun Ajaran')); ?></strong></h3></div>
                       
                            <div class="card-body">
                                <form action="<?php echo e(route('store_tahun_ajaran')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <label class="col-sm-3 col-label-form mt-1">Tahun Ajaran :</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tahun_ajaran" placeholder="Cth: 2023,2024...." class="form-control">
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
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/umum/umum_tahun_ajaran.blade.php ENDPATH**/ ?>