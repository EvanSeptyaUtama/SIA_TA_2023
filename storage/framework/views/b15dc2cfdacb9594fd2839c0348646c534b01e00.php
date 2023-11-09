

<?php $__env->startSection('halaman_utama'); ?>
  <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <?php $__currentLoopData = $data_hal_utama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div  class="col-lg-6 d-flex flex-column justify-content-center">
              <h1><?php echo e($data->nama_yayasan); ?></h1>
              <h2 style="font-display: bold"><?php echo e($data->nama_instansi); ?></h2>
              <p><?php echo e($data->penjelasan); ?></p>
            </div>
            <div class="col-lg-6 mt-1"  >
              <img src="<?php echo e(url('storage/'. $data->gambar)); ?>" class="img-fluid rounded"  alt="">
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
  
      </div>
  </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
  <!-- ======= Section : Sejarah ======= -->
  <section id="sejarah" class="about">

    <div class="container">
      <header class="section-header">
        <p>Sejarah</p>
      </header>
      <div class="row gx-0">
        <?php $__currentLoopData = $data_hal_sejarah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6 d-flex flex-column justify-content-center" >
          <div class="content">
            <h3>Sejarah</h3>
            <h2><?php echo e($data->judul_sejarah); ?></h2>
            <p>
              <?php echo e($data->penjelasan_singkat); ?>

            </p>
            <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Selengkapnya....
          </button>
            <div class="modal" id="staticBackdrop">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title"> <strong>SEJARAH STAR GENERATION</strong></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body" style="text-align: justify">
                  <?php echo e($data->penjelasan_lengkap); ?>

                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <!---Gambar Sejarah--->
        <div class="col-lg-6 d-flex align-items-center">
          <img src="<?php echo e(url('storage/Sejarah/'. $data->gambar_sejarah)); ?>" class="img-fluid" alt="">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>
  <!-- End Section : sejarah -->
  <!-- ======= Visi-Misi Section ======= -->
  <div id="visi-misi" class="features ">
    <header class="section-header">
    </header>
    <div class="container" >
      <!-- Visi-Misi Tabs -->
      <div class="row feture-tabs">
        <?php $__currentLoopData = $data_hal_visi_misi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6">
          <img src="<?php echo e(url('storage/Visi_Misi/', $data->gambar_visi_misi)); ?>" class="img-fluid rounded" alt="">
        </div>
        <div class="col-lg-6 mt-4">
          <h3>VISI DAN MISI STAR GENERATION</h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li>
              <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Visi - Misi</a>
            </li>
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">
          
            <div class="tab-pane fade show active" id="tab1">
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>VISI</h4>
              </div>
              <p><?php echo e($data->visi); ?></p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>MISI</h4>
              </div>
              <p><?php echo e($data->misi); ?></p>
            
            </div>
            <!-- End Tab 1 Content -->
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div><!-- End Feature Tabs -->
    </div>
  </div>
  <!-- End Features Section -->
  <!-- ======= Section : aktivitas ======= -->
  <section id="aktivitas" class="values">
    <div class="container">
      <header class="section-header">
        <h2>AKTIVITAS</h2>
        <p>Kegiatan Star Generation</p>
      </header>

      <div class="row">
      <?php $__currentLoopData = $data_hal_aktivitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-4 mt-4 mt-lg-0" >
        <div class="box">
          <img src="<?php echo e(url ('storage/Kegiatan_Sekolah/', $data->gambar_aktivitas)); ?>" class="img-fluid" alt="">
          <h3><?php echo e($data->nama_aktivitas); ?></h3>
          <p><?php echo e($data->penjelasan_aktivitas); ?></p>
        </div>
      </div>   
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>
  <!-- End Section : aktivitas -->
  
  <!-- ======= Section : Social Media ======= -->
  <section id="services" class="services">

    <div class="container">

      <header class="section-header">
        <h2>SOSIAL</h2>
        <p>Media Star Generation</p>
      </header>

      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <div class="service-box blue">
            <i class='bi bi-facebook' style='font-size:70px;color:rgb(3, 75, 208)'></i>
            <h3>Facebook</h3>
            <a class="read-more" href="https://m.facebook.com/profile.php/?id=100053819389212&name=xhp_nt__fb__action__open_user" >Join & Like </span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-box green">
            <i class="fa fa-envelope" style='font-size:70px;color:#048a18f4'></i>
            <h3>Email</h3>
            <a href="#" class="read-more"><span>Visit</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-box red">
            <i class="fa fa-home" style='font-size:70px;color:#eeeb2fd3'></i>
            <h3>Office</h3>
            <p>Jl. APT. Pranoto RT. 035 No. 99A, Sangatta Utara, Kutai Timur, Kalimantan Timur</p>
            <a href="#" class="read-more"><span>Alamat Sekolah</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- End Section : Social Media -->
  <!-- ======= Section : Susunan Organisasi ======= -->
  <section id="organisasi" class="team">

    <div class="container" >
      <header class="section-header">
        <h2>Organisasi</h2>
        <p>Susunan Organisai Star Generation</p>
      </header>

      <div class="row gy-4">
        <?php $__currentLoopData = $data_hal_susunan_organisasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" >
          <div class="member">
            <div class="member-img">
              <img src="<?php echo e(url('storage/Susunan_Organisasi/'. $data->gambar)); ?>" class="img-fluid"  alt="">
            </div>
            <div class="member-info">
              <h4><?php echo e($data->nama); ?></h4>
              <span><?php echo e($data->jabatan); ?></span>
            </div>
          </div>
        </div>     
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

    </div>

  </section>
  <!-- End Team Section -->
  <!-- ======= Section : Logo terkait instansi ======= -->
  <section id="logo" class="clients">

    <div class="container ">

      <header class="section-header">
        <h2>LOGO</h2>
        <p>Logo terkait instansi Star Generation</p>
      </header>
      <div class="col-lg-5 col-md-12">
       
          <img src="<?php echo e(asset('pi_assets/img/logo_stargen.png')); ?>" class="" width="100px" alt="">
          <img src="<?php echo e(asset('pi_assets/img/logo_new_yds.png')); ?>"  width="100px" alt="">
   
      
    </div>

  </section>
  <!-- End Clients Section -->
  <!-- ======= Section : Informasi akademik ======= -->
  <section id="informasi_akademik" class="recent-blog-posts">
    <div class="container">
      <header class="section-header">
        <h2>Informasi Akademik</h2>
        <p>Informasi Akan Di Perbaharui Secara Berkala</p>
      </header>

      <div class="row">
        <?php $__currentLoopData = $data_hal_informasi_akademik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="<?php echo e(url('storage/Informasi_Akademik/'. $data->gambar_informasi_akademik)); ?>" class="img-fluid" alt=""></div>
            <span class="post-date"> <?php echo e($data->hari_informasi_akademik); ?>,  <?php echo e($data->tanggal_informasi_akademik); ?></span>
            <h3 class="post-title"><?php echo e($data->informasi_informasi_akademik); ?></h3>
            <p><?php echo e($data->keterangan_informasi_akademik); ?></p>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>

    </div>

  </section>
  <!-- End Recent Blog Posts Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container">

      <header class="section-header">
        <h2>Kontak</h2>
        <p>Kontak Kami</p>
      </header>

      <div class="row gy-4 text-center">

        <div class="col-lg-12">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Alamat</h3>
                <p>Jl. APT. Pranoto RT. 035 No. 99A<br>Sangatta, Kutai Timur, Kaltim</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Nomor Telepon</h3>
                <p>081351416682<br> 0822 5143 1125</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                stargensgt@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Waktu Buka Sekolah</h3>
                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
              </div>
            </div>
          </div>

        </div>

     
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
  <!-- ======= Section : pertanyaan pengguna website ======= -->
  <section id="faq" class="faq">
    <div class="container" >
        <header class="section-header">
          <h2>P.T.P.W</h2>
          <p>Pertanyaan terkait pengguna website?</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Varius vel pharetra vel turpis nunc eget lorem dolor?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End Section : pertanyaan pengguna website -->        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_instansi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/halaman_utama.blade.php ENDPATH**/ ?>