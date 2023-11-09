@extends('layouts.admin_layouts.app_admin')

@section('titel', 'Edit Data Kota')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('index_kota')}}">Kembali</a>
        </div>
        <div class="col-md-12">
            <form action="{{route('update_kota', $edit_kota)}}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div>
                    <label>Nama Kota</label>
                    <input name="nama_kota" value="{{$edit_kota->nama_kota}}" type="text">
                </div>
                <div>
                    <button type="submit">Edit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection