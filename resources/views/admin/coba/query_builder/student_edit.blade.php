@extends('layouts.admin_layouts.app_admin')

@section('title', 'Produk')
    
@section('content')
    <div class="container">
        <div class="row justify-content-center pt-4">
            <a href="{{route('index_student')}}">Kembali</a>
            <div class="col-md-6">
                <form action="{{route('update_student', $student)}}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Nama</label>
                        <input name="name" type="text" class="form-control" class="col-sm-10" value="{{$student->name}}"  placeholder="Nama Produk">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">City</label>
                        <input name="city" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Produk" value="{{$student->city}}">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Marks</label>
                        <input name="marks" type="number" class="form-control" class="col-sm-10"  placeholder="Nama Ketegori" value="{{$student->marks}}">
                    </div>
                    <div>
                        <button type="submit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection