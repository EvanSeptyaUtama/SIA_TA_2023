@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Siswa')
@section('content')
    <div class="m-2">
        <div class="container">
            <h3 class="text-center"><strong>BIODATA SISWA</strong></h3>
            <div class="d-flex justify-content-start mb-2">
                <div>
                    <a class="btn btn-outline-warning" href="{{route('index_siswa')}}">Kembali</a>
                </div>
            </div>
            <div class="table-responsive">
                <div class="card">
                    <div class="card-header text-center">{{ __('Tambah Data Siswa') }}</div>
                
                    <div class="card-body">
                        <form action="{{ route('store_siswa') }}" method="post" enctype="multipart/form-data">
                            @csrf 
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">NISN</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="nisn" placeholder="Nisn" >
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama_siswa" placeholder="Nama Lengkap" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Alamat</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="alamat_siswa" placeholder="Alamat" class="form-control">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
                                </div>
                            </div>
    
                            
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Foto Siswa</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="foto_siswa">
                                </div>
                            </div>

                            <!---Foreign key table kelas---->
                            <div class="form-group mt-1">
                                <label class="col-sm-4 col-label-form"><strong>Kelas</strong></label>
                                <select name="kelas_id" class="form-control border-dark" class="col-sm-10" >
                                <option value="">- Pilih Kelas -</option>  
                                @foreach ($kelas as $item)
                                        <option value="{{$item->id}}">{{$item->nama_kelas}}</option>
                                    @endforeach
                                
                                </select>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="date" name="ttl" class="form-control">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Jenis Kelamin</label>
                                <div class="col-sm-10 rounded">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="#">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Agama</label>
                                <div class="col-sm-10 rounded">
                                    <select name="agama" class="form-control">
                                        <option value="#">-- Pilih Agama --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Khonghucu</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Anak ke-</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="anak_ke" placeholder="Contoh : Pertama, Kedua, ....">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Suku</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="suku" placeholder="Suku">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Jumlah Saudara</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="jumlah_saudara" placeholder="Contoh: 1,2,3,4... / Boleh tidak di isi">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Cita-Cita</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="cita_cita" placeholder="Cita-cita">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Hobi</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="hobi" placeholder="Hobi"> 
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">No Telepon</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="no_telp" placeholder="Nomor Aktif">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Tinggal bersama</label>
                                <div class="col-sm-10 rounded">
                                    <select name="tinggal_bersama" class="form-control">
                                        <option value="#">-- Tinggal bersama --</option>
                                        <option value="OrangTua">Orang Tua</option>
                                        <option value="Wali">Wali</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">RT/RW</label>
                                <div class="col-sm-10"> 
                                    <input class="form-control" type="text" name="rt_rw" placeholder="Contoh: 02/04">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">DESA/KELURAHAN</label>
                                <div class="col-sm-10"> 
                                    <input class="form-control" type="text" name="desa_kelurahan" placeholder="Desa/Kelurahan">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">KECAMATAN</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="kecamatan" placeholder="Kecamatan">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Kode Pos</label>
                                <div class="col-sm-10">
                                    <input  type="number" class="form-control" name="kode_pos" placeholder="Contoh : 75611..">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                        </form>  
                    </div>
                </div>
            </div></div> 
    </div>
@endsection