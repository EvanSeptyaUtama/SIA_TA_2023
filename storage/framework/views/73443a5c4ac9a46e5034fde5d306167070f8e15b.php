

<?php $__env->startSection('title', 'Data Admin'); ?>
<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><strong>TAMBAH TAHUN AJARAN</strong></h2>
            <div class="row">
                <div class="col">
                    <!-----Breadcrumbs--->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('index_tahun_ajaran')); ?>">Tahun Ajaran</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="<?php echo e(route('index_tahun_ajaran')); ?>">Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
                <div class="card">
                    <div class="card-header text-center"><?php echo e(__('Data Tahun Ajaran')); ?></div>
                
                    <div class="card-body">
                        <form action="<?php echo e(route('store_tahun_ajaran')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Tahun Ajaran :</label>
                                <input type="text" name="tahun_ajaran" placeholder="Cth: 2023,2024...." class="form-control">
                            </div>
                
                            <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/umum/umum_tahun_ajaran_tambah.blade.php ENDPATH**/ ?>