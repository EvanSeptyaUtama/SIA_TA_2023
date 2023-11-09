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
                        <li class="breadcrumb-item"><a href="{{route('index_user_admin')}}">Pengguna Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    <div class="d-flex justify-content-start mb-2">
        <div>
            <a class="btn btn-outline-warning" href="{{route('index_user_admin')}}">Kembali</a>
        </div>
    </div>
    <div class="table-responsive">
        <div class="card">
            <div class="card-header text-center">{{ __('Edit Data Admin') }}</div>
            
            <div class="card-body">
                <form action="{{ route('update_user_admin', $data_user_admin) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control"
                            value="{{ $data_user_admin->name }}">
                        </div> 
                    </div>
                    
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control"
                                value="{{ $data_user_admin->email }}"></div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Role</label>
                        <div class="col-sm-10">
                            <select name="role" class="form-control" disabled>
                                <option value="admin" {{($data_user_admin->role === 'admin') ? 'Selected' : ''}}>Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-label-form">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" disabled
                                value="{{ $data_user_admin->password }}"></div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                </form>
            </div>
        </div>
    </div>
    
    </div>
</div>

@endsection