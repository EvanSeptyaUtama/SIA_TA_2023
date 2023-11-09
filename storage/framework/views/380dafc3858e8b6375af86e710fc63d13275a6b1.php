
<!-- Modal -->
<div class="modal fade" id="adminPiAktivitas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Halaman Aktivitas</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('store_aktivitas')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Aktivitas</label>
                    <input type="text" name="nama_aktivitas" placeholder="Nama Aktivitas" class="form-control">
                </div>
                <div class="form-group">
                    <label>Penjelasan</label>
                    <input type="text" name="penjelasan_aktivitas" placeholder="Penejelasan tentang aktivitas" class="form-control">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar_aktivitas"class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit data</button>
            </form>
        </div>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/aktivitas/aktivitas_tambah.blade.php ENDPATH**/ ?>