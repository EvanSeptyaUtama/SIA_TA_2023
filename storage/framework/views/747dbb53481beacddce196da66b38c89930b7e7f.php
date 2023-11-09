<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('', 'STAR GENERATION')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<style scoped>
    .register-photo {
    background: #f1f7fc;
    padding: 80px 0
    }

    .register-photo .image-holder {
        display: table-cell;
        width: auto;
        background: url('pi_assets/img/Halamanutama_Stargen.png');
        background-size: cover
    }

    .register-photo .form-container {
        display: table;
        max-width: 900px;
        width: 90%;
        margin: 0 auto;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1)
    }

    .register-photo form {
        display: table-cell;
        width: 400px;
        background-color: #ffffff;
        padding: 40px 60px;
        color: #505e6c
    }

    @media (max-width:991px) {
        .register-photo form {
            padding: 40px
        }
    }

    .register-photo form h2 {
        font-size: 24px;
        line-height: 1.5;
        margin-bottom: 30px

    }

    .register-photo form .form-control {
        background: transparent;
        border: none;
        color:  #61acb3;
        border-bottom: 1px solid #dfe7f1;
        border-radius: 0;
        box-shadow: none;
        outline: none;
        color: inherit;
        text-indent: 0px;
        height: 40px
    }

    .register-photo form .form-check {
        font-size: 13px;
        line-height: 20px
    
    }

    .register-photo form .btn-primary {
        background: #61acb3 ;
        border: none;
        border-radius: 25px;
        padding: 11px;
        box-shadow: none;
        margin-top: 35px;
        text-shadow: none;
        outline: none !important
    }

    .register-photo form .btn-primary:hover,
    .register-photo form .btn-primary:active {
        background:#61acb3
    }

    .register-photo form .btn-primary:active {
        transform: translateY(1px)
    }

    .register-photo form .already {
        display: block;
        text-align: center;
        font-size: 12px;
        color: #6f7a85;
        opacity: 0.9;
        text-decoration: none
    }
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-secondary shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white" href="<?php echo e(route('halaman_utama')); ?>">
                    <strong>STAR GENERATION</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Linksss -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link text-white " href="<?php echo e(route('login')); ?>"><strong> <?php echo e(__('Login')); ?></strong></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link text-white " href="<?php echo e(route('register')); ?>"><strong><?php echo e(__('Register')); ?></strong></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 ">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\project-TA\laravel9\sistem_informasi_akademik\resources\views/layouts/app_login_register.blade.php ENDPATH**/ ?>