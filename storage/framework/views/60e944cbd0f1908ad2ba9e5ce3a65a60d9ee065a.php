
<!-- Modal -->
<div class="modal fade" id="halamanIpPPDB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Informasi Pengumuman PPDB</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('store_halaman_ip_ppdb')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> 
                <div class="row mb-4">
                    <label>Judul</label>
                    <input type="text" name="judul_informasi_pengumuman" placeholder="Judul informasi pengumuman" class="form-control">
                </div>
                
                <div class="row mb-4">
                    <label>Gambar</label>
                    <input type="file" name="gambar_informasi_pengumuman" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit data</button>
            </form>
        </div>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/ppdb/hal_ip_ppdb_tambah.blade.php ENDPATH**/ ?>