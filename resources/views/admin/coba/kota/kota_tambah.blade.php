@extends('layouts.admin_layouts.app_admin')

@section('titel', 'Tambah Data Kota')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="{{route('store_kota')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Nama Kota</label>
                    <input name="nama_kota" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Kota">
                </div>
                <div>
                    <button type="submit">Tambah</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection