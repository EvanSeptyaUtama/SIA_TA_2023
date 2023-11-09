

<?php $__env->startSection('titel', 'Edit Data Produk'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo e(route('index_produk')); ?>">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="<?php echo e(route('update_produk', $data_produk)); ?>" method="post" enctype="multipart/form-data">
                <?php echo method_field('patch'); ?>
                <?php echo csrf_field(); ?>
                <div>
                    <label>Nama Produk</label>
                    <input name="nama_produk" value="<?php echo e($data_produk->nama_produk); ?>" type="text">
                </div>
                <div>
                    <label>Harga Produk</label>
                    <input name="harga_produk" value="<?php echo e($data_produk->harga_produk); ?>" type="text" >
                </div>
                <!--- Foreign key : kota --->
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Kota</label>
                    <select name="kota_id" class="form-control" class="col-sm-10" >
                        <?php $__currentLoopData = $kotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>" <?php echo e($data_produk->kota_id == $item->id ? 'selected':''); ?>><?php echo e($item->nama_kota); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <!----Foreign key : kategori---->
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Kategori</label>
                    <select name="kategori_id" class="form-control" class="col-sm-10" >
                        <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>" <?php echo e($data_produk->kategori_id == $item->id ? 'selected':''); ?>><?php echo e($item->nama_kategori); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div>
                    <button type="submit">Edit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/produk/produk_edit.blade.php ENDPATH**/ ?>