@extends('layouts.admin_layouts.app_admin')

@section('titel', 'Tampil Data Kota')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <a href="{{route('index_kota')}}">Kembali</a>
            </div>
        </div>
        <div class="col-md-12">
            <div>
                <p>Id : {{$tampil_kota->id}}</p>
                <p>Nama Kota : {{$tampil_kota->nama_kota}}</p>
               
            </div>
        </div>
    </div>
</div>
@endsection