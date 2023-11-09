@extends('layouts.admin_layouts.app_admin')

@section('titel', 'Tampil Data Kategori')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <a href="{{route('index_kategori')}}">Kembali</a>
            </div>
        </div>
        <div class="col-md-12">
            <div>
                <p>Id : {{$data_kategori->id}}</p>
                <p>Nama Kategori : {{$data_kategori->nama_kategori}}</p>
            </div>
        </div>
    </div>
</div>
@endsection