

<?php $__env->startSection('title', 'Administrasi'); ?>

<?php $__env->startSection('content'); ?>
   <div class="container-fluid  d-grid gap-2 ">
    <div class="p-lg-2">
        <?php if(Auth::user()->role =="admin"): ?>
       <div class="flex flex-column">
         <div class="container-role-admin"><strong>Hallo,  <?php echo e(Auth::user()->name); ?>.</strong></div>

        <h2>Selamat datang di halaman Admin</h2>
       </div>
       <?php endif; ?>
    </div>
    <div class="card border-3 rounded-5  p-2">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="<?php echo e(asset('/pi_assets/img/logo_stargen.png')); ?>" class="img-fluid_1 rounded  " alt="...">
            </div>
            <div class="col-md-8">
                    <div>
                        <h1><strong>STAR GENERATION | Yayasan Duta Serega</strong></h1>
                    </div>
                    <div>
                        <h3><strong>JL. Apt Pranoto, RT.35, No.99A, Sangatta Utara, Kec. Sangatta Utara, Kab. Kutai Timur, Prov. Kalimantan Timur</strong></h3>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="p-lg-2">
        <div class="card-body ">
            <div class="row text-white d-flex gap-4 justify-content-center p-2">
                 <!---Card 2--->
                 <div class="card bg-warning col-5 ml-3" style="width: 24rem;">
                    <div class="card-body">
                        <div class="car-body-icon">
                            <i class="fa fa-user mr-5"></i>
                        </div>
                        <h5 class="card-title text-center text-light" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 30px"><strong>Data Pengajar</strong></h5>
                        <div class="display-6 text-light"><i>Jumlah <?php echo e($hitung_pengajar); ?></i></div>
                        <a class="link-box-ha" href="<?php echo e(route('index_guru')); ?>" class="btn btn-primary">
                            <p class="card-text-ha">Lihat Detail <i class="fa fa-angle-double-right ml-2"></i></p>
                        </a>
                    </div>
                </div>
                <!---Card 2--->
                <div class="card bg-success col-5 ml-3" style="width: 24rem;">
                    <div class="card-body">
                        <div class="car-body-icon">
                            <i class="fa fa-user mr-5"></i>
                        </div>
                        <h5 class="card-title text-center text-light" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 30px"><strong>Data Siswa</strong></h5>
                        <div class="display-6  text-light"><i>Jumlah <?php echo e($hitung_siswa); ?></i></div>
                        <a class="link-box-ha" href="<?php echo e(route('index_siswa')); ?>" class="btn btn-primary">
                            <p class="card-text-ha">Lihat Detail <i class="fa fa-angle-double-right ml-2"></i></p>
                        </a>
                    </div>
                </div>
                 <!---Card 3--->
                 <div class="card bg-primary col-5 ml-3" style="width: 24rem;">
                    <div class="card-body">
                        <div class="car-body-icon">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <h5 class="card-title text-center text-light"><strong>Facebook</strong></h5>
                        <div class="display-4 text-light">STARGEN</div>
                        <a class="link-box-ha" href="https://m.facebook.com/profile.php/?id=100053819389212&name=xhp_nt__fb__action__open_user" class="btn btn-primary">
                            <p class="card-text-ha">Join & Like <i class="fa fa-angle-double-right ml-2"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Preinan\sistem_absen\SIA_TA_2023\resources\views/admin/DashboardLayout.blade.php ENDPATH**/ ?>