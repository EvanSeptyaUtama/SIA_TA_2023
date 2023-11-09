<!-- Modal -->
<div class="modal fade" id="adminPiSusunanOrganisasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Halaman Struktur Organisasi</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('store_susunan_organisasi')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap dalam Susunan Organisasi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" placeholder="Jabatan dalam Susunan Organisasi" class="form-control">
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
  </div><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Profil_Instansi/susunan_organisasi/susunan_organisasi_tambah.blade.php ENDPATH**/ ?>