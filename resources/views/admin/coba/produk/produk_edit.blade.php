@extends('layouts.admin_layouts.app_admin')

@section('titel', 'Edit Data Produk')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('index_produk')}}">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="{{route('update_produk', $data_produk)}}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div>
                    <label>Nama Produk</label>
                    <input name="nama_produk" value="{{$data_produk->nama_produk}}" type="text">
                </div>
                <div>
                    <label>Harga Produk</label>
                    <input name="harga_produk" value="{{$data_produk->harga_produk}}" type="text" >
                </div>
                <!--- Foreign key : kota --->
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Kota</label>
                    <select name="kota_id" class="form-control" class="col-sm-10" >
                        @foreach ($kotas as $item)
                            <option value="{{$item->id}}" {{ $data_produk->kota_id == $item->id ? 'selected':'' }}>{{$item->nama_kota}}</option>
                        @endforeach
                    </select>
                </div>
                <!----Foreign key : kategori---->
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Kategori</label>
                    <select name="kategori_id" class="form-control" class="col-sm-10" >
                        @foreach ($kategoris as $item)
                            <option value="{{$item->id}}" {{$data_produk->kategori_id == $item->id ? 'selected':'' }}>{{$item->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit">Edit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection