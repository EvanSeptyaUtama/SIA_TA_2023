

@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Pengajar')
@section('content')
    <div class="m-2">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                <h3 class="text-center"><strong>BIODATA PENGAJAR</strong></h3>
                <!-----Breadcrumbs--->
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Biodata Pengajar</li>
                            </ol>
                        </nav>
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
                                    </svg> Maaf!</h4>                            </div>
                                    Terdapat kesalahan dalam input data
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
            </div>
            <!---Table Guru---->
            <div class="row">
                <div class="table-responsive">
                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dataGuru">
                            <i class="fa fa-plus"></i> Data Guru
                          </button>
                        <a class="btn btn-success" href="{{route('eksport_excel_guru')}}"> Excel</a>
                    </div>
                    <br>
                    <table id="example" class="table table-striped nowrap" style="width:100%">
                        <thead >
                            <tr>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Alamat</th>
                                <th width="200px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_guru as $data)
                            <tr >
                                <td>{{$data->nip}}</td>
                                <td>{{$data->nama_guru}}</td>
                                <td>{{$data->jabatan}}</td>
                                <td>{{$data->alamat_guru}}</td>
                                <td class="text-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <form action="{{route('tampil_guru', $data->id)}}" method="get">
                                                    <button type="submit" class="btn btn-sm btn-secondary mt-2">
                                                        Lihat 
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col">
                                                <form action="{{route('edit_guru',$data->id)}}" method="get">
                                                    <button type="submit" class="btn btn-sm btn-info mt-2">
                                                        Edit
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col">
                                                <form action="{{route('hapus_guru', $data->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger mt-2">
                                                        Hapus
                                                    </button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
             <!-- Modal -->
             @include('admin.Master.biodata_guru.data_guru_tambah')
        </div>
    </div>
@endsection

