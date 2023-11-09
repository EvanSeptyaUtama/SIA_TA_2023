@extends('layouts.admin_layouts.app_admin')

@section('titel', 'Tambah Data Kategori')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('index_kategori')}}">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="{{route('store_kategori')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Nama Kategori</label>
                    <input name="nama_kategori" type="text" placeholder="Nama Ketegori">
                </div>
                <div>
                    <button type="submit">Tambah</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection