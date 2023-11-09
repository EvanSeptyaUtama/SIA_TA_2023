@extends('layouts.admin_layouts.app_admin')

@section('title', 'Struktur Organisasi')
@section('content')
    <div class="m-2">
        <div class="container-fluid">
            <h3 class="text-center"><strong>STRUKTUR ORGANISASI</strong></h3>
        <div class="d-flex justify-content-start mb-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminPiSusunanOrganisasi">
                <i class="fa fa-plus"></i> Halaman Susunan Organisasi Profil Instansi
            </button>
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
                            Terdapat kesalahan dalam input data Struktur Organisasi
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
        <div class="table-responsive mt-4">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_susunan_organisasi as $data)
                        <tr>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->jabatan}}</td>
                            <td>
                                <img src="{{ url('storage/Susunan_Organisasi/' . $data->gambar) }}" class="rounded" style="width: 100px">
                            </td>
                            <td class="text-center">
                                <div>
                                    <form action="{{route('tampil_susunan_organisasi', $data)}}" method="get">
                                        <button type="submit" class="btn btn-sm btn-secondary mt-2">Lihat</button>
                                    </form>
                                    <form action="{{route('edit_susunan_organisasi',$data)}}" method="get">
                                        <button type="submit" class="btn btn-sm btn-info mt-2">
                                            Edit
                                        </button>
                                    </form>
                                   <form action="{{ route('hapus_susunan_organisasi', $data->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger mt-2">
                                            Hapus 
                                        </button>
                                   </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        @include('admin.Profil_Instansi.susunan_organisasi.susunan_organisasi_tambah')
    </div>
@endsection