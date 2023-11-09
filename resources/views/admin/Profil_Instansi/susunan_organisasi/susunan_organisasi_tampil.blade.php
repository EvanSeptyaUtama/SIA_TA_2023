@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Susunan Organisasi')
@section('content')
    <div class="m-2">
       <div class="container">
            <h2 class="text-center"><strong>TAMPIL HALAMAN SUSUNAN ORGANISASI</strong></h2>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="{{route('index_susunan_organisasi')}}"> Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
                <div class="card">
                    <div class="card-header text-center">{{ __(' Data Halaman Susunan Organisasi') }}</div>
                    
                    <div class="card-body text-center">
                            <p>Nama : {{$data_susunan_organisasi->nama}}</p>
                            <p>Jabatan : {{$data_susunan_organisasi->jabatan}}</p>
                            <img src="{{url('storage/Susunan_Organisasi/'. $data_susunan_organisasi->gambar) }}" class="rounded" alt="" height="200px">
                        
                    </div>
                </div>
            </div>
       </div>
    </div>
@endsection