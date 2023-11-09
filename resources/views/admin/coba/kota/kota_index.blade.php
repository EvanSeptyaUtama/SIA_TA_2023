@extends('layouts.admin_layouts.app_admin')

@section('title', 'Kota')
    
@section('content')
<div class="m-2">
  <div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-md-8 m-2">
            <a href="{{route('tambah_kota')}}">Tambah Kota</a>
        </div>
        <div class="col-md-8 mt-2">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif
        </div>
        <div class="col-md-8">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                  <tr>
                    <th>Nama Kota</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data_kota as $data)
                    <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1">{{$data->nama_kota}}</p>
                            </div>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <form action="{{route('tampil_kota', $data)}}" method="get">
                                  <button type="submit" class="btn btn-outline-secondary mt-2">
                                       Detail 
                                  </button>
                                </form>
                              </div>
                              <div class="col">
                                <form action="{{route('edit_kota', $data)}}" method="get">
                                  <button type="submit" class="btn btn-outline-primary mt-2">
                                      Edit
                                  </button>
                                </form>
                              </div>
                              <div class="col">
                                <form action="{{route('hapus_kota', $data->id)}}" method="post">
                                  @method('delete')
                                  @csrf
                                  <button type="submit" class="btn btn-outline-danger mt-2">
                                       Hapus
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>      
                    @endforeach
                  
                </tbody>
              </table>
              <div>
                <div>
                  {!! $data_kota->withQueryString()->links('pagination::bootstrap-5') !!}
              </div>
              </div>
        </div>
    </div>
</div>
</div>

    
@endsection