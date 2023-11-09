@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Absen Guru')
@section('content')
    <div class="m-2">
        <div class="row">
            <div class="col-md-8">
                <h3 class="text-center"><strong>ABSEN GURU</strong></h3>
                <!-----Breadcrumbs--->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('index_absen_guru')}}">Absen Guru</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lihat</li>
                    </ol>
                </nav>
            </div>
          </div>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="{{route('index_absen_guru')}}"> Kembali</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <div class="card">
                        <div class="card-header text-center">{{ __('Tampil Data Absen Guru') }}</div>
                        
                        <div class="card-body ">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class=""><span class="text-secondary">Keterangan</span> <h4><strong>{{$data_absen_guru->keterangan_guru}}</strong></h4></div>
                                            <div class=""><span class="text-secondary">Tanggal Absen</span> <h4><strong>{{$data_absen_guru->tanggal_absen_guru->format('l d F Y')}}</strong></h4></div>
                                            <div class=""><span class="text-secondary">Waktu Mulai</span> <h4><strong>{{$data_absen_guru->waktu_mulai_guru->format('h:i A')}}</strong></h4></div>
                                            <div class=""><span class="text-secondary">Waktu Selesai</span> <h4><strong>{{$data_absen_guru->waktu_selesai_guru->format('h:i A')}}</strong></h4></div>
                                        </div>
                                        <div class="col">
                                            <div class=""><span class="text-secondary">Nama Guru</span> <h4><strong>{{$data_absen_guru->gurus->nama_guru}}</strong></h4></div>
                                            <div class=""><span class="text-secondary">Kelas</span> <h4><strong>{{$data_absen_guru->kelas->nama_kelas}}</strong></h4></div>
                                            <div class=""><span class="text-secondary">Mata Pelajaran</span> <h4><strong>{{$data_absen_guru->mata_pelajarans->mata_pelajaran}}</strong></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
    </div>
@endsection