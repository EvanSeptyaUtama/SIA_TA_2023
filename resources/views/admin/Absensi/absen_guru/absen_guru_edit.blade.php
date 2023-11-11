@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Absen Guru')
@section('content')
    <div class="m-2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <h2 class="text-center"><strong>Edit Absensi</strong></h2>
                    <div class="row">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('index_absen_guru')}}">Absen Guru</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                      </div>
                    <div class="d-flex justify-content-start mb-2">
                        <div>
                            <a class="btn btn-outline-warning" href="{{route('index_absen_guru')}}">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row justify-content-center">
                <div class="col-lg-10 align-self-center">
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center">{{ __('Data Absen Guru') }}</div>
                        
                            <div class="card-body">
                                <form action="{{ route('update_absen_guru', $data_absen_guru->id) }}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf 
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal_absen_guru" value="{{$data_absen_guru->tanggal_absen_guru}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Waktu Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="waktu_mulai_guru" value="{{$data_absen_guru->waktu_mulai_guru}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Waktu Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="time" name="waktu_selesai_guru" value="{{$data_absen_guru->waktu_selesai_guru}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Keterangan</label>
                                        <div class="col-sm-10">
                                            <select name="keterangan_guru" class="form-control">
                                                <option value="Hadir" {{($data_absen_guru->keterangan_guru === 'Hadir') ? 'Selected' : ''}}>Hadir</option>
                                                <option value="Izin" {{($data_absen_guru->keterangan_guru === 'Izin') ? 'Selected' : ''}}>Izin</option>
                                                <option value="Sakit" {{($data_absen_guru->keterangan_guru === 'Sakit') ? 'Selected' : ''}}>Sakit</option>
                                                <option value="Alfa" {{($data_absen_guru->keterangan_guru === 'Alfa') ? 'Selected' : ''}}>Alfa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Foreign key : Table Siswa--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Pengajar</label>
                                        <div class="col-sm-10">
                                            <select name="pengajar_id" class="form-control" class="form-control" >
                                                @foreach ($edit_pengajar as $item)
                                                    <option value="{{$item->id}}" {{$data_absen_guru->pengajar_id == $item->id ? 'selected':'' }}>{{$item->nama_pengajar}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!---Foreign key : Table Kelas--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Kelas</label>
                                        <div class="col-sm-10">
                                            <select name="kelas_id" class="form-control" >
                                                @foreach ($edit_kelas as $item)
                                                    <option value="{{$item->id}}" {{$data_absen_guru->kelas_id == $item->id ? 'selected':'' }} >{{$item->nama_kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--Foreign key : Table Mata Pelajaran--->
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-label-form">Mata Pelajaran</label>
                                        <div class="col-sm-10">
                                            <select name="mata_pelajaran_id" class="form-control" >
                                                @foreach ($edit_mata_pelajaran as $item)
                                                    <option value="{{$item->id}}" {{$data_absen_guru->mata_pelajaran_id == $item->id ? 'selected':'' }}>{{$item->mata_pelajaran}}</option>
                                                @endforeach
                                            </select>
                                        </div>
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