@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Susunan Organisasi')
@section('content')
    <div class="m-2">
        <div class="container"></div>
        <h2 class="text-center"><strong>EDIT HALAMAN STRUKTUR ORGANISASI</strong></h2>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="{{route('index_susunan_organisasi')}}"> Kembali</a>
            </div>
        </div>
         <!---Alert-->
         <div class="row justify-content-center">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <div class="alert-title">
                            <h4> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg> Maaf!</h4> 
                        </div>
                            Terdapat kesalahan dalam mengedit data Struktur Organisasi
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div> 
                @endif

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center">{{ __('Data Halaman Susunan Organisasi') }}</div>
                
                <div class="card-body">
                    <form action="{{route('update_susunan_organisasi', $data_susunan_organisasi)}}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama"class="form-control"
                                value="{{$data_susunan_organisasi->nama}}">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan"class="form-control"
                                value="{{$data_susunan_organisasi->jabatan}}">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                             <input type="file" name="gambar"class="form-control">
                             <img src="{{url('storage/Susunan_Organisasi/'. $data_susunan_organisasi->gambar) }}" class="rounded" alt="" height="200px">
                           
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection