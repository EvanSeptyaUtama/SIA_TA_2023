@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Mata Pelajaran')

@section('content')

<div class="m-2">
    <div class="container">
        <h2 class="text-center"><strong>TAMBAH MATA PELAJARAN</strong></h2>
        <div class="row">
            <div class="col">
                <!-----Breadcrumbs--->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('index_mata_pelajaran')}}">Mata Pelajaran</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="d-flex justify-content-start mb-2">
            <div>
                <a class="btn btn-outline-warning" href="{{route('index_mata_pelajaran')}}">Kembali</a>
            </div>
        </div>
        <div class="table-responsive">
            <div class="card">
                <div class="card-header text-center">{{ __('Data Mata Pelajaran') }}</div>
            
                <div class="card-body">
                    <form action="{{route('store_mata_pelajaran')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Mata Pelajaran :</label>
                            <input type="text" name="mata_pelajaran" placeholder="Cth: Mate-matika, Bahasa Indonesia.." class="form-control">
                        </div>
            
                        <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection