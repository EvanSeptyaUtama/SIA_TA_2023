@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Jadwal Mengajar')
@section('content')
    <div class="m-2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <h2 class="text-center"><strong>Tambah Jadwal</strong></h2>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('index_jadwal_mengajar_guru')}}">Jadwal Mengajar</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{route('index_jadwal_mengajar_guru')}}">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
           <!---Alert-->
           <div class="row justify-content-center">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <div class="alert-title">
                            <h4> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg> Maaf!</h4> 
                        </div>
                            Terdapat kesalahan dalam mengedit data Jadwal Mengajar
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
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center">{{ __('Tambah Data Jadwal Mengajar') }}</div>
                            <div class="card-body">
                                <form action="{{ route('update_jadwal_mengajar_guru', $data_jadwal_mengajar_guru) }}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf 
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Tanggal</label>
                                        <input class="col-sm-10 " type="date" name="tanggal" value="{{$data_jadwal_mengajar_guru->tanggal}}" class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Waktu Mulai</label>
                                        <input class="col-sm-10 " type="time" name="waktu_mulai"  value="{{$data_jadwal_mengajar_guru->waktu_mulai}}" class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Waktu Selesai</label>
                                        <input class="col-sm-10 " type="time" name="waktu_selesai"  value="{{$data_jadwal_mengajar_guru->waktu_selesai}}" class="form-control">
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-label-form">Hari</label>
                                        <input class="col-sm-10 " type="text" name="hari"  value="{{$data_jadwal_mengajar_guru->hari}}" placeholder="Contoh : Senin, Selasa, dll..." class="form-control">
                                    </div>
                                     <!--Foreign key : Table Pengajar--->
                                    <div class="form-group mt-1">
                                        <label class="col-sm-2 col-label-form">Pengajar</label>
                                        <select name="pengajar_id" class="form-control" class="col-sm-10" >
                                            @foreach ($edit_pengajar as $item)
                                                <option value="{{$item->id}}" {{$data_jadwal_mengajar_guru->pengajar_id == $item->id ? 'selected':'' }}>{{$item->nama_pengajar}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--Foreign key : Table Kelas--->
                                    <div class="form-group mt-1">
                                        <label class="col-sm-2 col-label-form">Kelas</label>
                                        <select name="kelas_id" class="form-control" class="col-sm-10" >
                                            @foreach ($edit_kelas as $item)
                                                <option value="{{$item->id}}" {{$data_jadwal_mengajar_guru->kelas_id == $item->id ? 'selected':'' }}>{{$item->nama_kelas}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--Foreign key : Table Mata Pelajaran--->
                                    <div class="form-group mt-1">
                                        <label class="col-sm-2 col-label-form">Mata Pelajaran</label>
                                        <select name="mata_pelajaran_id" class="form-control" class="col-sm-10" >
                                            @foreach ($edit_mapel as $item)
                                                <option value="{{$item->id}}" {{$data_jadwal_mengajar_guru->mata_pelajaran_id == $item->id ? 'selected':'' }}>{{$item->mata_pelajaran}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection