@extends('layouts.admin_layouts.app_admin')

@section('title', 'Kategori')
    
@section('content')

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12 m-2">
            <a href="{{route('tambah_kategori')}}">Tambah Kategori</a>
        </div>
        <div class="col-md-12">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                  <tr>
                    <th>Nama Kategori</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data_kategori as $data)
                    <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1">{{$data->nama_kategori}}</p>
                            </div>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <form action="{{route('tampil_kategori', $data)}}" method="get">
                                  <button type="submit" class="btn btn-outline-secondary mt-2">
                                       Detail 
                                  </button>
                                </form>
                              </div>
                              <div class="col">
                                <form action="{{route('edit_kategori', $data)}}" method="get">
                                  <button type="submit" class="btn btn-outline-primary mt-2">
                                      Edit
                                  </button>
                                </form>
                              </div>
                              <div class="col">
                                <form action="{{route('hapus_kategori', $data->id)}}" method="post">
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
              </div>
        </div>
    </div>
</div>
    
@endsection