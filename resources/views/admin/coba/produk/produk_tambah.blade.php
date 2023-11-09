@extends('layouts.admin_layouts.app_admin')

@section('titel', 'Tambah Data Produk')
    
@section('content')
<div class="container">
    <div class="row p-4">
        <div class="col-md-12">
            <a href="{{route('index_produk')}}">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="{{route('store_produk')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Kota</label>
                    <select name="kota_id" class="form-control" class="col-sm-10" >
                        <option value="">- Pilih Kota -</option>
                        @foreach ($kotas as $item)
                            <option value="{{$item->id}}">{{$item->nama_kota}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Kategori</label>
                    <select name="kategori_id" class="form-control" class="col-sm-10" >
                        <option value="">- Pilih Kategori -</option>
                        @foreach ($kategoris as $item)
                            <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Nama Produk</label>
                    <input name="nama_produk" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Produk">
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Harga Produk</label>
                    <input name="harga_produk" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Ketegori">
                </div>
                <div>
                    <button type="submit">Tambah</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection