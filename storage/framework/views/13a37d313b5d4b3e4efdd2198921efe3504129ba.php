

<?php $__env->startSection('titel', 'Tampil Data Produk'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <a href="<?php echo e(route('index_produk')); ?>">Kembali</a>
            </div>
        </div>
        <div class="col-md-12">
            <div>
                <p>Id : <?php echo e($data_produk->id); ?></p>
                <p>Kota : <?php echo e($data_produk->kategoris->kotas->nama_kota); ?></p>
                <p>Kategori : <?php echo e($data_produk->kategoris->nama_kategori); ?></p>
                <p>Nama Produk : <?php echo e($data_produk->nama_produk); ?></p>
                <p>Harga Produk : <?php echo e($data_produk->harga_produk); ?></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/coba/produk/produk_tampil.blade.php ENDPATH**/ ?>