@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Visi-Misi')
@section('content')
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><strong>TAMPIL HALAMAN VISI-MISI</strong></h2>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="{{route('index_visi_misi')}}"> Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
                <div class="card">
                    <div class="card-header text-center">{{ __('Tampil Data Halaman Visi-Misi') }}</div>
                    
                    <div class="card-body text-center">
                            <p>Visi : {{$data_visi_misi->visi}}</p>
                            <p>Misi : {{$data_visi_misi->misi}}</p>
                            <img src="{{url('storage/Visi_Misi/'. $data_visi_misi->gambar_visi_misi) }}" class="rounded" alt="" height="200px">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection