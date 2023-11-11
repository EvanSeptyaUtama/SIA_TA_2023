@extends('layouts.admin_layouts.app_admin')

@section('title', 'Data Admin')

@section('content')

<div class="m-2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-11">
                <div class="row mt-4">
                        <div class="col">
                            <!-----Breadcrumbs--->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('index_kelas')}}">Kelas</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kelas{{$data_kelas->nama_kelas}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                        <div class="row justify-content-start">
                                    <div class="row ">
                                        <div class="">
                                            <h2><strong><i><u>Data Kelas</u></i></strong></h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"><h5><strong>Kelas</strong></h5></div>
                                        <div class="col-md-10 mt-1">: <i>Kelas {{$data_kelas->nama_kelas}}</i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"><h5><strong>Wali Kelas</strong></h5></div>
                                        <div class="col-md-10 mt-1">: <i> {{ $data_kelas->pengajar ? $data_kelas->pengajar->nama_pengajar : 'Belum ada wali kelas' }}</i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"><h5><strong>Nama Siswa</strong></h5></div>
                                        <div class="col-md-10 mt-1" style="text-align: justify;">
                                        @forelse ($data_kelas->siswas as $item)
                                            - {{$item->nama_siswa}} .
                                        @empty
                                            <p>Belum ada data siswa!!</p>
                                        @endforelse 
                                        </div>
                                    </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection