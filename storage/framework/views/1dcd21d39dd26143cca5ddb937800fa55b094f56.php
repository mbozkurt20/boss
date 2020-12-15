<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name'). ''); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        #app2{
            background-image: url('https://images.pexels.com/photos/733758/pexels-photo-733758.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
            height: 100%;
            background-size: cover;
            background-position:center ;
        }
    </style>
</head>
<body>
<div id="app2">
    <nav class="navbar navbar-expand-md " >
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <div class="logo_container text-center"></div>
                <p style="color: white"><?php echo e(config('app.name')); ?> Bilgi Teknolojileri</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>
                <div>
                    <marquee><i class="text-center table-responsive col-sm-12" style="color: white">Bizi Tercih Etiiğiniz İçin Teşekkür Eder, İyi Alışverişler Dileriz...</i></marquee>
                </div>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="menu_item">
                            <a class="nav-link mx-1" style="border: 1px solid white;color: white"  href="<?php echo e(route('login')); ?>"> <?php echo e(__('Giriş Yap')); ?></a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" style="border: 1px solid white;color: white" href="<?php echo e(route('register')); ?>"><?php echo e(__('Bize Katılın')); ?></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a style="color: white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Çıkış Yap')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
<?php if(session()->has('success')): ?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        Toast.fire({
            icon: 'success',
            title: '<?php echo e(session()->get('success')); ?>'
        })
    </script>
<?php endif; ?>
<?php if(session()->has('error')): ?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        Toast.fire({
            icon: 'warning',
            title: '<?php echo e(session()->get('error')); ?>'
        })
    </script>
<?php endif; ?>
</body>
</html>
