@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Informasi Pengumuman')
@section('content')
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><strong>TAMPIL HALAMAN INFORMASI PENGUMUMAN</strong></h2>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="{{route('index_halaman_ppdb')}}"> Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center">{{ __('Tampil Data Halaman PPDB') }}</div>
                
                <div class="card-body text-center">
                        <p>Judul : {{$data_ppdb->judul_ppdb}}</p>
                        <p>Penjelasan : {{$data_ppdb->penjelasan_ppdb}}</p>
                        <img src="{{url('storage/PPDB/'. $data_ppdb->gambar_brosur_ppdb) }}" class="rounded" alt="" height="200px">
                    
                </div>
            </div>
        </div>
        </div>
        
        
    </div>
@endsection