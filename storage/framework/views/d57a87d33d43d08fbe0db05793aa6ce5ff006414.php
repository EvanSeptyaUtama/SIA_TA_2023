
<div class="modal fade" id="dataGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>BIODATA PENGAJAR</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('store_guru')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> 
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">NIP</label>
                    <div class="col-sm-9">
                        <input type="number" name="nip" placeholder="Nomor Induk Pegawai" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_guru" placeholder="Nama Lengkap" class="form-control">
                    </div>
                </div>
                 <!---Foreign key table kelas---->
                 <div class="row mb-3">
                    <label class="col-sm-3 col-label-form">Wali Kelas <i>(opsional)</i></label>
                    <div class="col-sm-9">
                        <select name="kelas_id" class="form-control" >
                            <option value="">- Pilih Kelas -</option>  
                                <?php $__currentLoopData = $data_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kelas); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" name="no_telp" placeholder="Nomor Aktif" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Jenis Kelamin</label>
                    <div class="col-sm-9 rounded">
                        <select name="jenis_kelamin" class="form-control">
                            <option value="#">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" name="alamat_guru" placeholder="Alamat Lengkap" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" name="ttl" class="form-control">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Foto</label>
                    <div class="col-sm-9">
                        <input class="form-control rounded" type="file" name="foto_guru">
                    </div>
                </div>
                
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Jabatan</label>
                    <div class="col-sm-9">
                        <input type="text" name="jabatan" placeholder="Jabatan" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Agama</label>
                    <div class="col-sm-9">
                        <select name="agama" class="form-control">
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
                        <input type="text" name="suku" placeholder="suku" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">RT/RW</label>
                    <div class="col-sm-9">
                        <input type="text" name="rt_rw" placeholder="Contoh : 002/004" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Desa/Kelurahan</label>
                    <div class="col-sm-9">
                        <input type="text" name="desa_kelurahan" placeholder="Desa Kelurahan" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Kecamatan</label>
                    <div class="col-sm-9">
                        <input type="text" name="kecamatan" placeholder="kecamatan" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-sm-3 col-label-form">Kode Pos</label>
                    <div class="col-sm-9">
                        <input type="number" name="kode_pos" placeholder="kode_pos" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit data</button>
            </form>
        </div>
      </div>
    </div>
  </div><?php /**PATH D:\Preinan\sistem_absen\SIA_TA_2023\resources\views/admin/Master/biodata_guru/data_guru_tambah.blade.php ENDPATH**/ ?>