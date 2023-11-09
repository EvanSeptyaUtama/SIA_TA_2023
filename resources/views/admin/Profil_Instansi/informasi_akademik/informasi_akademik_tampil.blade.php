@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Informasi Akademik')
@section('content')
    <div class="m-2">
        <div class="container">
            <h3 class="text-center"><strong>TAMPIL HALAMAN INFORMASI AKADEMIK</strong></h3>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="{{route('index_informasi_akademik')}}"> Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center">{{ __('Tampil Data Halaman Informasi Akademik') }}</div>
                
                <div class="card-body text-center">
                        <p>Hari : {{$data_informasi_akademik->hari_informasi_akademik}}</p>
                        <p>Tanggal : {{$data_informasi_akademik->tanggal_informasi_akademik}}</p>
                        <p>Informasi : {{$data_informasi_akademik->informasi_informasi_akademik}}</p>
                        <p>Keterangan : {{$data_informasi_akademik->keterangan_informasi_akademik}}</p>
                        <img src="{{url('storage/Informasi_Akademik/'. $data_informasi_akademik->gambar_informasi_akademik) }}" class="rounded" alt="" height="200px">
                    
                </div>
            </div>
        </div>
        </div>
        
    </div>
@endsection