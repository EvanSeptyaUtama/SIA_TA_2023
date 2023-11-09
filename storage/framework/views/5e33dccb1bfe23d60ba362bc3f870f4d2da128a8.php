

<?php $__env->startSection('title', 'Admin | Absen Siswa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="m-2">
        <div class="container-fluid">
            <div class="row">
                <h3 class="text-center"><strong> ABSEN SISWA</strong></h3>
              </div>
              <div class="row">
                <div class="col">
                    <!-----Breadcrumbs--->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Absen Siswa</li>
                        </ol>
                    </nav>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <h1>evan</h1>
                    <form action="/calculate" method="post">
                        <?php echo csrf_field(); ?>
                        <label for="number">Number:</label>
                        <input type="text" id="number" name="number" required>
                        <button type="submit">Calculate</button>
                    </form>
                
                    
                    <?php for($i = 0; $i < 30; $i++): ?>
                        <?php $__currentLoopData = $input_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><?php echo e($data->name); ?></p>
                            <p><?php echo e($data->email); ?></p>
                            <!-- Display other data properties as needed -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endfor; ?>
                </div>
              </div>
        </div>  
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Absensi/absen_siswa/calculate.blade.php ENDPATH**/ ?>