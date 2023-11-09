@extends('layouts.admin_layouts.app_admin')

@section('title', 'Data Admin')

@section('content')

<div class="m-2">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                    <p> Kelas : {{$data_kelas->nama_kelas}}</p>
                    <p>Wali Kelas : <br>
                        {{ $data_kelas->gurus ? $data_kelas->gurus->nama_guru : 'Tidak ada wali kelas' }}
                    </p>
                    <p> Nama Siswa : <br>
                        @forelse ($data_kelas->siswas as $item)
                            - {{$item->nama_siswa}} <br>
                        @empty
                            <p>Belum ada data siswa!!</p>
                        @endforelse 
                    </p>
            </div>
        </div>
    </div>
@endsection