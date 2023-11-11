
<div class="modal fade" id="dataPengajar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>BIODATA PENGAJAR</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
        </div>
        <div class="modal-body">
            <form action="{{ route('store_pengajar') }}" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">NIP</label>
                    <div class="col-sm-9">
                        <input type="number" name="nip_pengajar" placeholder="Nomor Induk Pegawai" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_pengajar" placeholder="Nama Lengkap Pengajar" class="form-control">
                    </div>
                </div>
                  <!---Foreign key table kelas---->
                 <div class="row mb-3">
                    <label class="col-sm-3 col-label-form">Wali Kelas <i>(opsional)</i></label>
                    <div class="col-sm-9">
                        <select name="kelas_id" class="form-control" >
                            <option value="">- Pilih Kelas -</option>  
                                @foreach ($kelas as $item)
                                    <option value="{{$item->id}}">{{$item->nama_kelas}}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Foto</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="file" name="foto_pengajar">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" name="no_telp_pengajar" placeholder="Nomor Aktif" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Jenis Kelamin</label>
                    <div class="col-sm-9 rounded">
                        <select name="jenis_kelamin_pengajar" class="form-control">
                            <option value="#">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Alamat</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="alamat_pengajar" placeholder="Alamat Lengkap" class="form-control" rows="4"></textarea>
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" name="tempat_lahir_pengajar" placeholder="Tempat Lahir" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" name="ttl_pengajar" class="form-control">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Jabatan</label>
                    <div class="col-sm-9">
                        <input type="text" name="jabatan_pengajar" placeholder="Jabatan" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Agama</label>
                    <div class="col-sm-9">
                        <select name="agama_pengajar" class="form-control">
                            <option value="#">-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Katholik" >Katholik</option>
                            <option value="Protestan" >Protestan</option>
                            <option value="Hindu" >Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select></div>
                </div>

                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Suku</label>
                    <div class="col-sm-9">
                        <input type="text" name="suku_pengajar" placeholder="suku" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">RT/RW</label>
                    <div class="col-sm-9">
                        <input type="text" name="rt_rw_pengajar" placeholder="Contoh : 002/004" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Desa/Kelurahan</label>
                    <div class="col-sm-9">
                        <input type="text" name="desa_kelurahan_pengajar" placeholder="Desa/Kelurahan" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Kecamatan/Kota</label>
                    <div class="col-sm-9">
                        <input type="text" name="kecamatan_kota_pengajar" placeholder="kecamatan/kota" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Kode Pos</label>
                    <div class="col-sm-9">
                        <input type="number" name="kode_pos_pengajar" placeholder="kode_pos" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
      </div>
    </div>
  </div>