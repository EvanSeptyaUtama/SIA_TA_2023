  <!-- Modal -->
  <div class="modal fade" id="halamanPPDB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PPDB</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('store_halaman_ppdb')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> 
                <div class="row mb-4">
                    <label>Judul</label>
                    <input type="text" name="judul_ppdb" placeholder="Judul PPDB" class="form-control">
                </div>
                
                <div class="row mb-4">
                    <label>Penjelasan</label>
                    <input type="text" name="penjelasan_ppdb" placeholder="Penjelasan PPDB" class="form-control">
                </div>

                <div class="row mb-4">
                    <label>Gambar</label>
                    <input type="file" name="gambar_brosur_ppdb" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit data</button>
            </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/ppdb/halaman_ppdb_tambah.blade.php ENDPATH**/ ?>