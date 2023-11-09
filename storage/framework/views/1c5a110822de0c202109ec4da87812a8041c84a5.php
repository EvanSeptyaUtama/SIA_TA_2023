

<?php $__env->startSection('title', 'Kota'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="m-2">
  <div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-md-8 m-2">
            <a href="<?php echo e(route('tambah_kota')); ?>">Tambah Kota</a>
        </div>
        <div class="col-md-8 mt-2">
          <?php if($message = Session::get('success')): ?>
          <div class="alert alert-success">
              <p><?php echo e($message); ?></p>
          </div>
      <?php endif; ?>
        </div>
        <div class="col-md-8">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                  <tr>
                    <th>Nama Kota</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data_kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1"><?php echo e($data->nama_kota); ?></p>
                            </div>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <form action="<?php echo e(route('tampil_kota', $data)); ?>" method="get">
                                  <button type="submit" class="btn btn-outline-secondary mt-2">
                                       Detail 
                                  </button>
                                </form>
                              </div>
                              <div class="col">
                                <form action="<?php echo e(route('edit_kota', $data)); ?>" method="get">
                                  <button type="submit" class="btn btn-outline-primary mt-2">
                                      Edit
                                  </button>
                                </form>
                              </div>
                              <div class="col">
                                <form action="<?php echo e(route('hapus_kota', $data->id)); ?>" method="post">
                                  <?php echo method_field('delete'); ?>
                                  <?php echo csrf_field(); ?>
                                  <button type="submit" class="btn btn-outline-danger mt-2">
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
              </table>
              <div>
                <div>
                  <?php echo $data_kota->withQueryString()->links('pagination::bootstrap-5'); ?>

              </div>
              </div>
        </div>
    </div>
</div>
</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/kota/kota_index.blade.php ENDPATH**/ ?>