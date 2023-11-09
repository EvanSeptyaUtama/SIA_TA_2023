

<?php $__env->startSection('title', 'Produk'); ?>
    
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center pt-4">
            <a href="<?php echo e(route('index_student')); ?>">Kembali</a>
            <div class="col-md-6">
                <form action="<?php echo e(route('update_student', $student)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo method_field('patch'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Nama</label>
                        <input name="name" type="text" class="form-control" class="col-sm-10" value="<?php echo e($student->name); ?>"  placeholder="Nama Produk">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">City</label>
                        <input name="city" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Produk" value="<?php echo e($student->city); ?>">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Marks</label>
                        <input name="marks" type="number" class="form-control" class="col-sm-10"  placeholder="Nama Ketegori" value="<?php echo e($student->marks); ?>">
                    </div>
                    <div>
                        <button type="submit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/query_builder/student_edit.blade.php ENDPATH**/ ?>