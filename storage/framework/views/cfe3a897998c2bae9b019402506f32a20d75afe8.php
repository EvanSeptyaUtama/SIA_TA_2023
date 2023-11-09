

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Produk')); ?></div>

                    <div class="card-group m-auto">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card m-3" style="width: 18rem;">
                                <img class="card-img-top" src="<?php echo e(url('storage/' . $product->image)); ?>"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"><?php echo e($product->name); ?></p>
                                    <form action="<?php echo e(route('show_product', $product)); ?>" method="get">
                                        <button type="submit" class="btn btn-primary">Show detail</button>
                                    </form>
                                    <?php if(Auth::check() && Auth::user()->is_admin): ?>
                                        <form action="<?php echo e(route('delete_product', $product)); ?>" method="post">
                                            <?php echo method_field('delete'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger mt-2">Delete product</button>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_login_register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/index_product.blade.php ENDPATH**/ ?>