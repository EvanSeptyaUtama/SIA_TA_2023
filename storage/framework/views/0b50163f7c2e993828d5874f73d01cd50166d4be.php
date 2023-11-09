

<?php $__env->startSection('title', 'Produk'); ?>
    
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-6 p-4">
                <h3>Tambah</h3>
                <form action="<?php echo e(route('store_student')); ?>" method="post" enctype="multipart/form-data">
                     
                    <?php echo csrf_field(); ?>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Nama</label>
                        <input name="name" type="text" class="form-control" class="col-sm-10"  placeholder="Nama">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">City</label>
                        <input name="city" type="text" class="form-control" class="col-sm-10"  placeholder="City">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Marks</label>
                        <input name="marks" type="number" class="form-control" class="col-sm-10"  placeholder="Marks">
                    </div>
                    <div>
                        <button type="submit">Tambah</button>
                    </div>
                </form>
            </div>
              <div class="col-md-6 p-4">
                <h1>Table Student</h1>
                <?php if(session()->has('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <table class="table table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">Nama</th>
                        <th scope="col">City</th>
                        <th scope="col">Marks</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <th ><?php echo e($s->name); ?></th>
                            <td><?php echo e($s->city); ?></td>
                            <td><?php echo e($s->marks); ?></td>
                            <td>
                                <form action="<?php echo e(route('edit_student', $s->id)); ?>" method="get">
                                    <button type="submit" class="btn btn-outline-secondary mt-2">
                                        Edit 
                                   </button>
                                </form>
                                <form action="<?php echo e(route('hapus_student', $s->id)); ?>" method="post">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-outline-secondary mt-2">
                                        HAPUS 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/query_builder/student.blade.php ENDPATH**/ ?>