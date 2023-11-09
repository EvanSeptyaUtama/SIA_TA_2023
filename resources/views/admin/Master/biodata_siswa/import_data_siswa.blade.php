<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Import Excel Biodata Siswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('import_excel')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label >Pilih File</label>
                    <input type="file" class="form-control" name="file" >
                </div>
                <button type="button" class="btn btn-primary mt-1">Submit</button>
            </form>
        </div>
      </div>
    </div>
  </div>