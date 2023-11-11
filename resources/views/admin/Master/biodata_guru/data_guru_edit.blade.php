@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Pengajar')

@section('content')

<div class="m-2">
    <div class="container">
        <h2 class="text-center"><STRONG>BIODATA PENGAJAR</STRONG></h2>
        <div class="row">
            <div class="col">
                <!-----Breadcrumbs--->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('index_guru')}}">Biodata Pengajar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    <div class="d-flex justify-content-start mb-2">
        <div>
            <a class="btn btn-outline-warning" href="{{route('index_guru')}}">Kembali</a>
        </div>
    </div>
    <!---Alert-->
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <div class="alert-title">
                        <h4> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg> Maaf!</h4> 
                    </div>
                        Terdapat kesalahan dalam mengedit data
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div> 
            @endif

          @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
          @endif
        </div>
    </div>
    <div class="table-responsive">
        <div class="card">
            <div class="card-header text-center">{{ __('Edit Data Pengajar') }}</div>
            
            <div class="card-body">
                <form action="{{ route('update_guru', $data_guru) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">NIP</label>
                        <div class="col-sm-10">
                            <input type="number" name="nip" class="form-control"
                            value="{{ $data_guru->nip }}">
                        </div> 
                    </div>
                    
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_guru" class="form-control"
                                value="{{ $data_guru->nama_guru }}"></div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form" for="foto_guru">Foto</label>
                        <div class="col-sm-10">
                           <input class="form-control rounded mt-1" id="foto_guru" type="file" name="foto_guru">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Telepon</label>
                        <div class="col-sm-10">
                            <input type="number" name="no_telp" class="form-control"
                            value="{{ $data_guru->no_telp }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jenis_kelamin" class="form-control">
                                <option value="Laki-Laki" {{($data_guru->jenis_kelamin === 'Laki-Laki') ? 'Selected' : ''}}>Laki-Laki</option>
                                <option value="Perempuan" {{($data_guru->jenis_kelamin === 'Perempuan') ? 'Selected' : ''}}>Perempuan</option>
                            </select></div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat_guru" class="form-control"
                            value="{{ $data_guru->alamat_guru }}">
                        </div>
                    </div>
                    <!-----foreign key table kelas-->
                    <!-- <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Kelas</label>
                        <div class="col-sm-10">
                            <select name="kelas_id" class="form-control" class="form-control" >
                                <option value="">-Bukan guru-</option>
                                @foreach ($kelas_edit as $item)
                                    <option value="{{$item->id}}" {{$data_guru->kelas_id == $item->id ? 'selected':'' }}>{{$item->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempat_lahir" class="form-control"
                            value="{{ $data_guru->tempat_lahir }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input  type="date" name="ttl" class="form-control"
                            value="{{ $data_guru->ttl }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="jabatan" class="form-control"
                            value="{{ $data_guru->jabatan }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Agama</label>
                        <div class="col-sm-10">
                            <select name="agama" class="form-control">
                                <option value="Islam" {{($data_guru->agama === 'Islam') ? 'Selected' : ''}}>Islam</option>
                                <option value="Katholik" {{($data_guru->agama === 'Katholik') ? 'Selected' : ''}}>Katholik</option>
                                <option value="Protestan" {{($data_guru->agama === 'Protestan') ? 'Selected' : ''}}>Protestan</option>
                                <option value="Hindu" {{($data_guru->agama === 'Hindu') ? 'Selected' : ''}}>Hindu</option>
                                <option value="Budha" {{($data_guru->agama === 'Budha') ? 'Selected' : ''}}>Budha</option>
                                <option value="Konghucu" {{($data_guru->agama === 'Konghucu') ? 'Selected' : ''}}>Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form" >Suku</label>
                        <div class="col-sm-10">
                            <input  type="text" name="suku" class="form-control" value="{{ $data_guru->suku}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form" >RT/RW</label>
                        <div class="col-sm-10">
                            <input  type="text" name="rt_rw" class="form-control" value="{{ $data_guru->rt_rw}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form" >DESA/KELURAHAN</label>
                        <div class="col-sm-10">
                            <input type="text" name="desa_kelurahan" class="form-control" value="{{ $data_guru->desa_kelurahan}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form" >KECAMATAN</label>
                        <div class="col-sm-10">
                            <input type="text" name="kecamatan" class="form-control" value="{{ $data_guru->kecamatan}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form" >Kode Pos</label>
                        <div class="col-sm-10">
                            <input type="number" name="kode_pos" class="form-control" value="{{ $data_guru->kode_pos}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                </form>
            </div>
        </div>
    </div>
    
    </div>
</div>

@endsection