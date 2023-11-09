

<?php $__env->startSection('title', 'Produk'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="m-2">
  <div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-md-8 m-2">
            <a href="<?php echo e(route('tambah_produk')); ?>">Tambah Produk</a>
        </div>
        <div class="col-md-8">
            <table class="table align-middle table-striped mb-0 bg-white">
                <thead class="bg-light">
                  <tr class="text-center">
                    <th>Kota</th>
                    <th>Kategori</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Tanggal masuk</th>
                    <th>Tanggal keluar</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data_produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="ms-3">
                            <p class="fw-bold mb-1"><?php echo e($data->kotas->nama_kota); ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="ms-3">
                            <p class="fw-bold mb-1"><?php echo e($data->kategoris->nama_kategori); ?></p>
                          </div>
                        </div>
                      </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1"><?php echo e($data->nama_produk); ?></p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1"><?php echo e($data->harga_produk); ?></p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1"><?php echo e($data->created_at); ?></p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1"><?php echo e($data->updated_at); ?></p>
                            </div>
                          </div>
                        </td>
                        <td class="text-center">
                          <a 
                            href="" 
                            method="get" 
                            class="btn btn-outline-secondary mt-2">
                            <i class='fa fa-eye'></i> 
                          </a>
                          <a 
                            href="" 
                            method="get" 
                            class="btn btn-outline-primary mt-2">
                            <i class='fa fa-pencil'></i> 
                          </a>
                          <a 
                            href="" 
                            method="get" 
                            class="btn btn-outline-danger mt-2">
                            <i class='fa fa-trash'></i> 
                          </a>
                          
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
</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/produk/produk_index.blade.php ENDPATH**/ ?>