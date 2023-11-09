@extends('layouts.admin_layouts.app_admin')

@section('title', 'Produk')
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('store_student')}}" method="post" enctype="multipart/form-data">
                     
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Nama</label>
                        <input name="name" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Produk">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">City</label>
                        <input name="city" type="text" class="form-control" class="col-sm-10"  placeholder="Nama Produk">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Marks</label>
                        <input name="marks" type="number" class="form-control" class="col-sm-10"  placeholder="Nama Ketegori">
                    </div>
                    <div>
                        <button type="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection