<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STARGEN | <?php echo $__env->yieldContent('title'); ?></title>
    <link
    href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"
    rel="stylesheet"
  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    
     <!-- Fonts -->
     
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
 
     <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
     <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
     <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
     <script defer src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
     <script defer src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
     <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
      <script defer src="<?php echo e(asset('pi_assets/js/main.js')); ?>"></script>
</head>
<style>
    .main{
        height: 100vh;
    }
    .navbar{
        background: #86A8CF;
    }

    .main_utama{
        background: rgb(129, 195, 237);
        text-align: center;
        font-family:Arial, Helvetica, sans-serif;
        font-size: 20px;
        padding-top: 4px;
        padding-bottom: 4px ;
    }
    .sidebar{
        position: relative;
        border: rgb(218, 217, 217);
        border-right-style: solid; 
        background: #ffffff
    }
    .sidebar ul{
        list-style: none;
    }
    .sidebar ul li{
        padding: 5px;
        padding-left: 15px;
    }
    .sidebar ul li:hover{
     color: #d2cfcf;
     font-weight: bold;
    }
    .dropdown:hover{
        color: #d2cfcf;
     font-weight: bold;
    }
    .sidebar  ul li a{
        color: black;
        text-decoration: none 
    }
    .nav-link{
        color: black;
        padding-left: 15px;
        list-style: none;
    }
    .nav-link:hover{
        color: black;
    }
    .menu_profile{
        padding: 12px;
        border: rgb(218, 217, 217);
        border-bottom-style: solid;
    }
    .container-ln{
        border: rgb(9, 7, 7);
        border: solid;
    }
    .container-role-admin{
        font-size:3rem;  
        font-family:Georgia, 'Times New Roman', Times, serif
    }
    .display-4{
        font-weight: bold;
    }
    .display-6{
        font-weight: bold;
    }
    .box-link-ha{
        list-style-type: none;
    }
    .car-body-icon {
        position: absolute;
        z-index: 0;
        top: 10px;
        right: 4px;
        opacity: 0.5;
        font-size: 90px;
        margin-right: 10px;
    }
    .card-box-hu{
        border: solid;
        border-color: rgb(218, 217, 217);
        border-radius: 20px;
    }
    .link-box-ha{
        text-decoration: none;
    }
    .card-text-ha{
        color: #ffffff;
    }
    .card-text-ha:hover{
        color: #d2cfcf;
    }
    .box-facebook{
        border: solid;
        border-color: rgb(218, 217, 217);
        border-radius: 10px;
    }
    .card-header-fb{
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    /* .table{
        border-radius: 20px;
    }
    .table, th, td{
        border: 1px solid;
        border-radius: 20px;
    } */
   

</style>
<body>
    <div class="main d-flex flex-column justify-content-between ">
        <!----Navbar-->
        <nav class="navbar navbar-expand-md navbar-light navbar-dark bg-primary shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="/admin">
                    <strong>STAR GENERATION | ADMIN</strong>
                </a>
                <!-----Burger Button Mobile---->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbarss -->
                    <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <?php if(Auth::user()->role =='admin'): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('show_profile_admin')); ?>">
                                            Profile
                                        </a>
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>
                                    
                                    <?php else: ?>
                                        <a class="dropdown-item" href="<?php echo e(route('show_cart')); ?>">
                                            Cart
                                        </a>
                                    <?php endif; ?>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                  
                    </ul>
                </div>
            </div>
        </nav>
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar shadow-md col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                    <!--Hak Akses -> Halaman Admin--->
                    <?php if(Auth::check() && Auth::user()->role == 'admin'): ?>
                        <!---Sidebar non-profile--->
                        <ul class="nav flex-column">
                            <li>
                            <a href="/admin"><i class="fa fa-home"></i> Halaman Utama</a>
                            </li>
                            <div class="main_utama">
                                <strong>Menu Utama</strong>
                            </div>
                            <!---Sidebar : Data Pengguna --->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Data Pengguna</div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo e(route('index_user_admin')); ?>">Admin</a></li>
                                    </ul>
                            </div>
                             <!---Sidebar : Data Master--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Data Master</div>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo e(route('index_guru')); ?>">Pengajar</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('index_siswa')); ?>">Siswa</a></li>
                                </ul>
                            </div>
                             <!---Sidebar : Data Umum--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Data Umum</div>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo e(route('index_tahun_pelajaran')); ?>">Tahun Pelajaran</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('index_kelas')); ?>">Kelas</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('index_mata_pelajaran')); ?>">Mata Pelajaran</a></li>
                                </ul>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Jadwal Mengajar</div>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo e(route('tambah_jadwal_mengajar_guru')); ?>">Tambah Jadwal</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('index_jadwal_mengajar_guru')); ?>">Daftar Mengajar</a></li>
                                </ul>
                            </div>
                            <div class="main_utama">
                                <b class="main_utama_n">Menu Profil Instansi</b>
                            </div>
                             <!---Sidebar : Halaman Utama--->
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Halaman Awal Website</div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo e(route('index_halaman_utama')); ?>">Halaman Utama</a></li>
                                        <li><a class="dropdown-item" href="<?php echo e(route('index_sejarah')); ?>">Sejarah</a></li>
                                        <li><a class="dropdown-item" href="<?php echo e(route('index_aktivitas')); ?>">Aktivitas Sekolah</a></li>
                                        <li><a class="dropdown-item" href="<?php echo e(route('index_visi_misi')); ?>">Visi - Misi</a></li>
                                        <li><a class="dropdown-item" href="<?php echo e(route('index_susunan_organisasi')); ?>">Struktur Organisasi</a></li>
                                        <li><a class="dropdown-item" href="<?php echo e(route('index_informasi_akademik')); ?>">Informasi Akademik</a></li>
                                    </ul>
                            </div>
                             <!---Sidebar : Tentang Kami--->
                             <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">PPDB</div>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo e(route('index_halaman_ppdb')); ?>">Home</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('index_halaman_ip_ppdb')); ?>">Informasi Pengumuman</a></li>
                                </ul>
                            </div>
                            
                            <!---Menu Absen--->
                            <div class="main_utama">
                                <strong>Menu Absensi</strong>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Siswa</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo e(route('index_absen_siswa')); ?>">Absensi</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?php echo e(route('index_absen_siswa')); ?>">Rekab Absensi</a></li>
                                    
                                    
                                </ul>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Guru</div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo e(route('index_absen_guru')); ?>">Absensi</a></li>
                                </ul>
                            </div>
                            <!---Menu Coba--->
                            <div class="main_utama">
                                <strong>Menu Coba</strong>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Query Builder</div>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo e(route('index_kategori')); ?>">Kategori</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('index_produk')); ?>">Produk</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('index_kota')); ?>">Kota</a></li>
                                
                                <li><a class="dropdown-item" href="<?php echo e(route('index_student')); ?>">Laravel (hindi)</a></li>
                                </ul>
                            </div>
                            
                          
                            <?php else: ?>
                            <!---Hak Akses -> Halaman Absen--->
                            <div class="main_utama">
                                <b class="main_utama_n">Absensi</b>
                            </div>
                            <div class="nav-itemku dropdown">
                                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Halaman Utama</div>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Halaman Absen</a></li>
                                <li><a class="dropdown-item" href="#">Absen</a></li>
                                <li><a class="dropdown-item" href="#">Absen</a></li>
                                <li><a class="dropdown-item" href="#">Absen</a></li>
                                <li><a class="dropdown-item" href="#">Absen</a></li>
                                </ul>
                            </div>
                        </ul>
                    <?php endif; ?>
                </div>
                <!---Content--->
                <div class=" col-lg-10 ">
                    <main>
                        <?php echo $__env->yieldContent('content'); ?>
                    </main>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/layouts/admin_layouts/app_admin.blade.php ENDPATH**/ ?>