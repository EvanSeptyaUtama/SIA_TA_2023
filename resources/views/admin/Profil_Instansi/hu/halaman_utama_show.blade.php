@extends('layouts.admin_layouts.app_admin')

@section('title', 'Halaman Utama')
@section('content')
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><strong>TAMPIL HALAMAN UTAMA</strong></h2>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="{{route('index_halaman_utama')}}"> Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center">{{ __('Data Halaman Utama') }}</div>
                
                <div class="card-body text-center">
                        <p>Nama Yayasan : {{$halaman_utama->nama_yayasan}}</p>
                        <p>Nama Isntansi : {{$halaman_utama->nama_instansi}}</p>
                        <p>Penjelasan : {{$halaman_utama->penjelasan}}</p>
                        <p>Deskripsi Gambar 1 : {{$halaman_utama->deskripsi_gambar1}}</p>
                        <p>Deskripsi Gambar 1 : {{$halaman_utama->deskripsi_gambar2}}</p>
                        <p>Deskripsi Gambar 1 : {{$halaman_utama->deskripsi_gambar3}}</p>
                        <img src="{{url('storage/Halaman_Utama1/'. $halaman_utama->gambar_pertama) }}" class="rounded  mb-1" alt="" width="200px" height="200px">
                        <img src="{{url('storage/Halaman_Utama2/'. $halaman_utama->gambar_kedua) }}" class="rounded mb-1" alt="" width="200px" height="200px">
                        <img src="{{url('storage/Halaman_Utama3/'. $halaman_utama->gambar_ketiga) }}" class="rounded" alt="" width="200px" height="200px">
                    
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection