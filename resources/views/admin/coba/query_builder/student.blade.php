@extends('layouts.admin_layouts.app_admin')

@section('title', 'Produk')
    
@section('content')
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-6 p-4">
                <h3>Tambah</h3>
                <form action="{{route('store_student')}}" method="post" enctype="multipart/form-data">
                     
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Nama</label>
                        <input name="name" type="text" class="form-control" class="col-sm-10"  placeholder="Nama">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">City</label>
                        <input name="city" type="text" class="form-control" class="col-sm-10"  placeholder="City">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Marks</label>
                        <input name="marks" type="number" class="form-control" class="col-sm-10"  placeholder="Marks">
                    </div>
                    <div>
                        <button type="submit">Tambah</button>
                    </div>
                </form>
            </div>
              <div class="col-md-6 p-4">
                <h1>Table Student</h1>
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">Nama</th>
                        <th scope="col">City</th>
                        <th scope="col">Marks</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($student as $s)
                        <tr class="text-center">
                            <th >{{$s->name}}</th>
                            <td>{{$s->city}}</td>
                            <td>{{$s->marks}}</td>
                            <td>
                                <form action="{{route('edit_student', $s->id)}}" method="get">
                                    <button type="submit" class="btn btn-outline-secondary mt-2">
                                        Edit 
                                   </button>
                                </form>
                                <form action="{{route('hapus_student', $s->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-secondary mt-2">
                                        HAPUS 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            
        </div>
    </div>
@endsection