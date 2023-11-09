

<?php $__env->startSection('titel', 'Tambah Data Produk'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row p-4">
        <div class="col-md-12">
            <a href="<?php echo e(route('index_produk')); ?>">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="<?php echo e(route('store_produk')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Kota</label>
                    <select name="kota_id" class="form-control" class="col-sm-10" >
                        <option value="">- Pilih Kota -</option>
                        <?php $__currentLoopData = $kotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kota); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Kategori</label>
                    <select name="kategori_id" class="form-control" class="col-sm-10" >
                        <option value="">- Pilih Kategori -</option>
                        <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kategori); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Nama Produk</label>
                    <input name="nama_produk" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Produk">
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Harga Produk</label>
                    <input name="harga_produk" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Ketegori">
                </div>
                <div>
                    <button type="submit">Tambah</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/produk/produk_tambah.blade.php ENDPATH**/ ?>