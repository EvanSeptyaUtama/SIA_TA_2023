

<?php $__env->startSection('title', 'Kategori'); ?>
    
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12 m-2">
            <a href="<?php echo e(route('tambah_kategori')); ?>">Tambah Kategori</a>
        </div>
        <div class="col-md-12">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                  <tr>
                    <th>Nama Kategori</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1"><?php echo e($data->nama_kategori); ?></p>
                            </div>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <form action="<?php echo e(route('tampil_kategori', $data)); ?>" method="get">
                                  <button type="submit" class="btn btn-outline-secondary mt-2">
                                       Detail 
                                  </button>
                                </form>
                              </div>
                              <div class="col">
                                <form action="<?php echo e(route('edit_kategori', $data)); ?>" method="get">
                                  <button type="submit" class="btn btn-outline-primary mt-2">
                                      Edit
                                  </button>
                                </form>
                              </div>
                              <div class="col">
                                <form action="<?php echo e(route('hapus_kategori', $data->id)); ?>" method="post">
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
              </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/kategori/kategori_index.blade.php ENDPATH**/ ?>