 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Data Halaman Utama</strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('store_halaman_utama')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Yayasan</label>
                    <input type="text" name="nama_yayasan"class="form-control" placeholder="Nama Yayasan">
                </div>
                <div class="form-group">
                    <label>Instansi</label>
                    <input type="text" name="nama_instansi"class="form-control" placeholder="Nama Instansi/Sekolah">
                </div>
                <div class="form-group">
                    <label>Penjelasan</label>
                    <input type="text" name="penjelasan"class="form-control" placeholder="Penjelasan dari sekolah">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar"class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit data</button>
            </form>
        </div>
    </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/hu/halaman_utama_tambah.blade.php ENDPATH**/ ?>