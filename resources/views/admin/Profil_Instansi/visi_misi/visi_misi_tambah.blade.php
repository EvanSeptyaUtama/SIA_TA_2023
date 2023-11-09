<!-- Modal -->
<div class="modal fade" id="adminPiVisiMisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Visi-Misi</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('store_visi_misi') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Visi</label>
                    <input type="text" name="visi" placeholder="Misi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Misi</label>
                    <input type="text" name="misi" placeholder="Visi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar_visi_misi"class="form-control">
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
  </div>