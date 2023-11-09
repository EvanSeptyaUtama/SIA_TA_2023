
@extends('layouts.admin_layouts.app_admin')

@section('title', 'Pengguna Admin')
@section('content')
    <div class="m-2">
      <div class="container-fluid">
        
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center"><strong>PENGGUNA ADMIN</strong></h3>

                <!-----Breadcrumbs--->
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Pengguna Admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="table-responsive">
                   <table id="example" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>Admin</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th width="150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_user_admin as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->role}}</td>
                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <form action="{{route('show_profile_admin', $data->id)}}" method="get">
                                                    <button type="submit" class="btn btn-sm btn-info mt-2">
                                                        Edit
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col">
                                                <form action="{{route('hapus_admin', $data->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger mt-2">
                                                        Hapus
                                                    </button>
                                               </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div></div>
        </div>
    </div> 
    </div>
@endsection