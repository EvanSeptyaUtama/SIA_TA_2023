@extends('layouts.admin_layouts.app_admin')

@section('title', 'Produk')
    
@section('content')
<div class="m-2">
  <div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-md-8 m-2">
            <a href="{{route('tambah_produk')}}">Tambah Produk</a>
        </div>
        <div class="col-md-8">
            <table class="table align-middle table-striped mb-0 bg-white">
                <thead class="bg-light">
                  <tr class="text-center">
                    <th>Kota</th>
                    <th>Kategori</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Tanggal masuk</th>
                    <th>Tanggal keluar</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data_produk as $data)
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="ms-3">
                            <p class="fw-bold mb-1">{{$data->kotas->nama_kota}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="ms-3">
                            <p class="fw-bold mb-1">{{$data->kategoris->nama_kategori}}</p>
                          </div>
                        </div>
                      </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1">{{$data->nama_produk}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1">{{$data->harga_produk}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1">{{$data->created_at}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1">{{$data->updated_at}}</p>
                            </div>
                          </div>
                        </td>
                        <td class="text-center">
                          <a 
                            href="" 
                            method="get" 
                            class="btn btn-outline-secondary mt-2">
                            <i class='fa fa-eye'></i> 
                          </a>
                          <a 
                            href="" 
                            method="get" 
                            class="btn btn-outline-primary mt-2">
                            <i class='fa fa-pencil'></i> 
                          </a>
                          <a 
                            href="" 
                            method="get" 
                            class="btn btn-outline-danger mt-2">
                            <i class='fa fa-trash'></i> 
                          </a>
                          {{-- <div class="container">
                            <div class="row">
                              <div class="col">
                                <form action="{{route('tampil_produk', $data)}}" method="get">
                                  <button type="submit" class="btn btn-outline-secondary mt-2">
                                       Detail 
                                  </button>
                                </form>
                              </div>
                              <div class="col">
                                <form action="{{route('edit_produk', $data)}}" method="get">
                                  <button type="submit" class="btn btn-outline-primary mt-2">
                                      Edit
                                  </button>
                                </form>
                              </div>
                              <div class="col">
                                <form action="{{route('hapus_produk', $data->id)}}" method="post">
                                  @method('delete')
                                  @csrf
                                  <button type="submit" class="btn btn-outline-danger mt-2">
                                       Hapus
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div> --}}
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
</div>

    
@endsection