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
                        <img src="{{url('storage/'. $halaman_utama->gambar) }}" class="rounded" alt="" height="200px">
                    
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection