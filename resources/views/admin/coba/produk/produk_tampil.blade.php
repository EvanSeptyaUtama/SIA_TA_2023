@extends('layouts.admin_layouts.app_admin')

@section('titel', 'Tampil Data Produk')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <a href="{{route('index_produk')}}">Kembali</a>
            </div>
        </div>
        <div class="col-md-12">
            <div>
                <p>Id : {{$data_produk->id}}</p>
                <p>Kota : {{$data_produk->kategoris->kotas->nama_kota}}</p>
                <p>Kategori : {{$data_produk->kategoris->nama_kategori}}</p>
                <p>Nama Produk : {{$data_produk->nama_produk}}</p>
                <p>Harga Produk : {{$data_produk->harga_produk}}</p>
            </div>
        </div>
    </div>
</div>
@endsection