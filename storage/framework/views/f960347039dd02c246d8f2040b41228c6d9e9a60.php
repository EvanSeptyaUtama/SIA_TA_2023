

<?php $__env->startSection('title', 'Produk'); ?>
    
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo e(route('store_student')); ?>" method="post" enctype="multipart/form-data">
                     
                    <?php echo csrf_field(); ?>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Nama</label>
                        <input name="name" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Produk">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">City</label>
                        <input name="city" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Produk">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Marks</label>
                        <input name="marks" type="number" class="form-control" class="col-sm-10"  placeholder="Nama Ketegori">
                    </div>
                    <div>
                        <button type="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/query_builder/student_create.blade.php ENDPATH**/ ?>