<!-- Modal -->
<div class="modal fade" id="adminPiSejarah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Halaman Sejarah</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('store_sejarah')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul_sejarah" placeholder="Judul Sejarah" class="form-control">
                </div>
                <div class="form-group">
                    <label>Penjelasan Singkat</label>
                    <input type="text" name="penjelasan_singkat" placeholder="Penejelasan singkat tentang sejarah" class="form-control">
                </div>
                <div class="form-group">
                    <label>Penjelasan Lengkap</label>
                    <input type="text" name="penjelasan_lengkap" placeholder="Penejelasan lengkap tentang sejarah" class="form-control">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar_sejarah"class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Kembali</button>
            </form>
        </div>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/sejarah/sejarah_tambah.blade.php ENDPATH**/ ?>