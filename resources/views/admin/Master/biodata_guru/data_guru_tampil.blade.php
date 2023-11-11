@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Pengajar')
@section('content')
    <div class="m-2">
        <div class="container">
            <h2 class="text-center"><STRONG>DETAIL BIODATA PENGAJAR</STRONG></h2>
            <div class="row">
                <div class="col">
                    <!-----Breadcrumbs--->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('index_guru')}}">Biodata Pengajar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lihat</li>
                        </ol>
                    </nav>
                </div>
            </div>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="{{route('index_guru')}}">Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><h3><strong>{{ __('Profil Pengajar') }}</strong></h3></div>
                
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-4 text-center">
                            <div class="d-flex justify-content-center">
                            <img src="{{asset('storage/Guru_image/'. $data_guru->foto_guru) }}" class="rounded mb-2 w-full h-full" alt="" height="200px">    
                            </div>
                            <div class="row pt-2">
                                    <div class="col-md-4 text-secondary">Nama</div>
                                    <div class="col-md-8"><h5>{{$data_guru->nama_guru}}</h5></div> 
                                <hr>
                                    <div class="col-md-4 text-secondary">Alamat</div>
                                    <div class="col-md-8"><h5>{{$data_guru->alamat_guru}}</h5></div> 
                                <hr>  
                                <div class="col-md-4 text-secondary">Nomor Telepon</div>
                                    <div class="col-md-8"><h5>{{$data_guru->no_telp}}</h5></div> 
                                <hr>
                                    <div class="col-md-4 text-secondary">Agama</div>
                                    <div class="col-md-8"><h5>{{$data_guru->agama}}</h5></div>
                                <hr>
                                    <div class="col-md-4 text-secondary">Jenis Kelamin</div>
                                    <div class="col-md-8"><h5>{{$data_guru->jenis_kelamin}}</h5></div>
                                <!-- <hr>
                                    <div class="col-md-4 text-secondary">Wali Kelas</div>
                                    <div class="col-md-8"><h5>{{ $data_guru->kelas ? $data_guru->kelas->nama_kelas : '' }}</h5></div> -->
                            </div>
                        </div>
                        <div class="col-md-7 pt-2 text-center">
                            <div class="row"> 
                                    <div class="col-md-5 text-secondary">Nomor Induk Pegawai</div>
                                    <div class="col-md-7"><h5>{{$data_guru->nip}}</h5></div> 
                                <hr>  
                                    <div class="col-md-5 text-secondary">Jabatan</div>
                                    <div class="col-md-7"><h5>{{$data_guru->jabatan}}</h5></div> 
                                 <hr> 
                                    <div class="col-md-5 text-secondary">Tempat Lahir</div>
                                    <div class="col-md-7"><h5>{{$data_guru->tempat_lahir}}</h5></div> 
                                <hr> 
                                    <div class="col-md-5 text-secondary">Tanggal Lahir</div>
                                    <div class="col-md-7"><h5>{{$data_guru->ttl}}</h5></div> 
                                <hr>
                                <div class="col-md-5 text-secondary">Suku</div>
                                    <div class="col-md-7"><h5>{{$data_guru->suku}}</h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">RT/RW</div>
                                    <div class="col-md-7"><h5>{{$data_guru->rt_rw}}</h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">Desa/Kelurahan</div>
                                    <div class="col-md-7"><h5>{{$data_guru->desa_kelurahan}}</h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">Kecamatan</div>
                                    <div class="col-md-7"><h5>{{$data_guru->kecamatan}}</h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">Kode Pos</div>
                                    <div class="col-md-7"><h5>{{$data_guru->kode_pos}}</h5></div> 
                            </div>
                        </div>
                    </div>
                       
                        
                </div>
            </div>
        </div>
        
        </div>
    </div>
@endsection