@extends('layouts.admin_layouts.app_admin')

@section('title', 'Halaman Aktivitas')
@section('content')
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><strong>TAMPIL AKTIVITAS</strong></h2>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="{{route('index_aktivitas')}}"> Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
                <div class="card">
                    <div class="card-header text-center">{{ __('Data Halaman Aktivitas') }}</div>
                    
                    <div class="card-body text-center">
                            <p>Aktivitas : {{$data_aktivitas->nama_aktivitas}}</p>
                            <p>Penjelasan : {{$data_aktivitas->penjelasan_aktivitas}}</p>
                            <img src="{{url('storage/Kegiatan_Sekolah/'. $data_aktivitas->gambar_aktivitas) }}" class="rounded" alt="" height="200px">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection