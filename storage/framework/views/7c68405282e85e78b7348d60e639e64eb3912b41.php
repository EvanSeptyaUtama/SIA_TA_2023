

<?php $__env->startSection('title', 'Admin | Absen Siswa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="m-2">
      <div class="row">
        <h3 class="text-center"><strong> ABSEN SISWA</strong></h3>
      </div>
      <div class="row">
        <div class="col">
            <!-----Breadcrumbs--->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('halaman_utama_admin')); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Absen Siswa</li>
                </ol>
            </nav>
        </div>
      </div>
       <!---Alert-->
       <div class="row">
        <div class="col-md-12">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <div class="alert-title"><h4>Maaf!</h4></div>
                        Terdapat kesalahan dalam input data
                    <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

          <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
          <?php endif; ?>

          <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
          <?php endif; ?>
        </div>
       </div>
      <!---Input Absen--->
      <div class="row mt-2">
          <div class="container">
            <div class="card border-dark">
              <div class="row m-2">
                <div class="col-md-12">
                  <h3><i><u>Input Absensi Siswa</u></i></h3>
                  <form action="<?php echo e(route('store_absen_siswa')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                      <?php if(count($errors) > 0): ?>
                      <div class="alert alert-danger">
                          <ul>
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                      </div>
                      <?php endif; ?>
                    </div>
                      <div class="row">
                        <!--Input Foreign key : table siswa dan table kelas-->
                        <div class="col-md-4 mb-2">
                          <div class="form-group ">
                            <label class="col-sm-2 col-label-form"><strong>Siswa</strong></label>
                            <select name="siswa_id" class="form-control border-dark" class="col-sm-10" >
                                <option value="">- Pilih Siswa -</option>
                                  <?php $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_siswa); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>

                          <div class="form-group mt-1">
                            <label class="col-sm-2 col-label-form"><strong>Kelas</strong></label>
                            <select name="kelas_id" class="form-control border-dark" class="col-sm-10" >
                              <option value="">- Pilih Kelas -</option>
                                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_kelas); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                          <div class="form-group mt-1">
                            <label class="col-sm-3 col-label-form"><strong>Semester</strong></label>
                            <select name="tahun_pelajaran_id" class="form-control border-dark" class="col-sm-10" >
                              <option value="">- Pilih Semester -</option>   
                              <?php $__currentLoopData = $tahun_pelajarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->semester); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                        </div>
                        <!---Input tanggal dan waktu masuk-->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="tanggal"><strong>Tanggal</strong></label>
                            <input type="date" name="tanggal_absen" id="tanggal_absen" class="form-control border-dark" required>
                          </div>
                          <div class="form-group mt-1">
                            <label class="form-group"><strong>Keterangan</strong></label>
                                <select name="keterangan" class="form-control border-dark">
                                    <option value="#">- Keterangan -</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Alfa">Alfa</option>
                                </select>
                          </div>
                          <div class="form-group mt-1">
                            <label class="col-sm-4 col-label-form"><strong>Tahun Ajaran</strong></label>
                            <select name="tahun_ajaran_id" class="form-control border-dark" class="col-sm-10" >
                              <option value="">- Pilih Tahun Ajaran -</option>  
                              <?php $__currentLoopData = $tahun_pelajarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->tahun_ajaran); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                        </div>
                         <!---Input keterangan dan waktu keluar-->
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="waktu_mulai"><strong>Waktu Mulai</strong></label>
                              <input type="time" name="waktu_mulai" id="waktu_mulai" class="form-control border-dark" required>
                            </div>
                            <div class="form-group mt-1">
                              <label for="waktu_selesai"><strong>Waktu Selesai</strong></label>
                              <input type="time" name="waktu_selesai" id="waktu_selesai" class="form-control border-dark" required>
                            </div>
                          </div>
                      </div>
                      <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success "><strong>ABSEN</strong></button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!---Table Absen--->
      <div class="row mt-2">
        <div class="container">
          <div class="card border-dark ">
            <div class="row m-2">
              <!---Bagian Header : judul, tombol tambah, alert, tombol cari-->
              <div class="row mb-2 justify-content-between">
                
                  <!----Tombol cetak absen-->
                  <div class="col-md-7 mt-2">
                    <div class="card border-dark border-2">
                      <div class="row m-2">
                        <div class="col-md-4 mt-1">
                          <h4><strong><i>Laporan Harian</i></strong></h4>
                        </div>
                        <div class="col-md-2 mt-1">
                            <a href="<?php echo e(route('laporan_harian_absen_siswa_kelas_1')); ?>" class="btn btn-outline-dark"><strong>Kelas 1</strong></a>
                        </div>
                        <div class="col-md-2 mt-1">
                            <a href="<?php echo e(route('laporan_harian_absen_siswa_kelas_2')); ?>" class="btn btn-outline-dark"><strong>Kelas 2</strong></a>
                        </div>
                        <div class="col-md-2 mt-1">
                            <a href="<?php echo e(route('laporan_harian_absen_siswa_kelas_3')); ?>" class="btn btn-outline-dark"><strong>Kelas 3</strong></a>
                        </div>
                        <div class="col-md-2 mt-1">
                            <a href="<?php echo e(route('laporan_harian_absen_siswa_kelas_4')); ?>" class="btn btn-outline-dark"><strong>Kelas 4</strong></a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <!---Bagian Body : table dan pagination-->
              <div class="row p-2">
                <div class="table-responsive">
                  <table id="example" class="table table-striped nowrap" style="width:100%">
                      <thead>
                          <tr class="text-center">
                              <th>Tanggal</th>
                              <th>Mulai</th>
                              <th>Selesai</th>
                              <th>Keterangan</th>
                              <th>Siswa</th>
                              <th>Kelas</th>
                              <th>Aksi</th>
                            </tr>
                      </thead>
                      <tbody>
                            <?php $__currentLoopData = $data_absen_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center">
                                    <td><?php echo e($data->tanggal_absen); ?></td>
                                    <td><?php echo e($data->waktu_mulai); ?></td>
                                    <td><?php echo e($data->waktu_selesai); ?></td>
                                    <td><?php echo e($data->keterangan); ?></td>
                                    <td>
                                        <?php echo e($data->siswas->nama_siswa); ?>

                                    </td>
                                    <td>
                                        <?php echo e($data->kelas->nama_kelas); ?>

                                    </td>
                                    <td class="text-center">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <form 
                                                      action="<?php echo e(route('tampil_absen_siswa', $data)); ?>" method="get">
                                                        <button type="submit" class="btn btn-sm btn-secondary mt-2">
                                                            Detail
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col">
                                                    <form
                                                    onsubmit="return confirm('Apakah anda yakin edit data absen siswa ?');"  
                                                      action="<?php echo e(route('edit_absen_siswa', $data->id)); ?>" method="get">
                                                        <button type="submit" class="btn btn-sm btn-info mt-2">
                                                            Edit
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col">
                                                  
                                                    <form
                                                    onsubmit="return confirm('Apakah anda yakin hapus data absen siswa ?');"  
                                                        action="<?php echo e(route('hapus_absen_siswa', $data->id)); ?>" method="post">
                                                        <?php echo method_field('delete'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button type="submit" class="btn btn-sm btn-danger mt-2">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/admin/Absensi/absen_siswa/absen_siswa.blade.php ENDPATH**/ ?>