@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Sejarah')
@section('content')
    <div class="m-2">
        <div class="container">
            <h3 class="text-center"><strong>SEJARAH</strong></h3>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="{{route('index_sejarah')}}"> Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center">{{ __('Tampil Data Halaman Sejarah') }}</div>
                
                <div class="card-body text-center">
                        <p>Judul : {{$data_sejarah->judul_sejarah}}</p>
                        <p>Penjelasan Singkat : {{$data_sejarah->penjelasan_singkat}}</p>
                        <p>Penjelasan Lengkap : {{$data_sejarah->penjelasan_lengkap}}</p>
                        <img src="{{ url('storage/Sejarah/' . $data_sejarah->gambar_sejarah) }}" class="rounded" style="width: 400px">
                        
                    </div>
            </div>
        </div>
        </div>
        
    </div>
@endsection