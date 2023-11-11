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
                <a class="btn btn-outline-warning" href="{{route('index_pengajar')}}">Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center"><h3><strong>{{ __('Profil Pengajar') }}</strong></h3></div>
                
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-4 text-center">
                            <div class="d-flex justify-content-center">
                                    <img src="{{asset('storage/Tenaga_Pengajar/'. $data_pengajar->foto_pengajar) }}"  class="rounded mb-2 w-full h-full" alt="" height="200px">    
                               
                            </div>
                            <div class="row pt-2">
                                    <div class="col-md-4 text-secondary">Nama</div>
                                    <div class="col-md-8"><h5>{{$data_pengajar->nama_pengajar}}</h5></div> 
                                <hr>
                                    <div class="col-md-4 text-secondary">Alamat</div>
                                    <div class="col-md-8"><h5>{{$data_pengajar->alamat_pengajar}}</h5></div> 
                                <hr>  
                                <div class="col-md-4 text-secondary">Nomor Telepon</div>
                                    <div class="col-md-8"><h5>{{$data_pengajar->no_telp_pengajar}}</h5></div> 
                                <hr>
                                    <div class="col-md-4 text-secondary">Agama</div>
                                    <div class="col-md-8"><h5>{{$data_pengajar->agama_pengajar}}</h5></div>
                                <hr>
                                    <div class="col-md-4 text-secondary">Jenis Kelamin</div>
                                    <div class="col-md-8"><h5>{{$data_pengajar->jenis_kelamin_pengajar}}</h5></div>
                                </div>
                        </div>
                        <div class="col-md-7 pt-2 text-center">
                            <div class="row"> 
                                    <div class="col-md-4 text-secondary">Wali Kelas</div>
                                    <div class="col-md-8"><h5>{{ $data_pengajar->kelas ? $data_pengajar->kelas->nama_kelas : 'Tidak Sebagai Wali Kelas' }}</h5></div>
                                 <hr>
                                    <div class="col-md-5 text-secondary">Nomor Induk Pegawai</div>
                                    <div class="col-md-7"><h5>{{$data_pengajar->nip_pengajar}}</h5></div> 
                                <hr>  
                                    <div class="col-md-5 text-secondary">Jabatan</div>
                                    <div class="col-md-7"><h5>{{$data_pengajar->jabatan_pengajar}}</h5></div> 
                                 <hr> 
                                    <div class="col-md-5 text-secondary">Tempat Lahir</div>
                                    <div class="col-md-7"><h5>{{$data_pengajar->tempat_lahir_pengajar}}</h5></div> 
                                <hr> 
                                    <div class="col-md-5 text-secondary">Tanggal Lahir</div>
                                    <div class="col-md-7"><h5>{{$data_pengajar->ttl_pengajar}}</h5></div> 
                                <hr>
                                <div class="col-md-5 text-secondary">Suku</div>
                                    <div class="col-md-7"><h5>{{$data_pengajar->suku_pengajar}}</h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">RT/RW</div>
                                    <div class="col-md-7"><h5>{{$data_pengajar->rt_rw_pengajar}}</h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">Desa/Kelurahan</div>
                                    <div class="col-md-7"><h5>{{$data_pengajar->desa_kelurahan_pengajar}}</h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">Kecamatan/Kota</div>
                                    <div class="col-md-7"><h5>{{$data_pengajar->kecamatan_kota_pengajar}}</h5></div> 
                                <hr> 
                                <div class="col-md-5 text-secondary">Kode Pos</div>
                                    <div class="col-md-7"><h5>{{$data_pengajar->kode_pos_pengajar}}</h5></div> 
                            </div>
                        </div>
                    </div>
                       
                        
                </div>
            </div>
        </div>
        
        </div>
    </div>
@endsection