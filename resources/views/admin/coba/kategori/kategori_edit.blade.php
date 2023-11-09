@extends('layouts.admin_layouts.app_admin')

@section('titel', 'Edit Data Kategori')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('index_kategori')}}">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="{{route('update_kategori', $data_kategori)}}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div>
                    <label>Nama Kategori</label>
                    <input name="nama_kategori" value="{{$data_kategori->nama_kategori}}" type="text" placeholder="Nama Ketegori">
                </div>
                <div>
                    <button type="submit">Edit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection