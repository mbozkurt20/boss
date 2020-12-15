    <!DOCTYPE html>
    <html lang="en">
    <head>

        <title><?php echo e(config('app.name')); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/bootstrap4/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap-select.min.css')); ?>">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet"
              type="text/css">
        <link href="<?php echo e(asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet"
              type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>">
        <link rel="stylesheet" type="text/css"
              href="<?php echo e(asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/main_styles.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/responsive.css')); ?>">
        <link href="<?php echo e(asset("assets/styles/toastr.min.css")); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset("css/footer.css")); ?>">


        <?php echo $__env->yieldContent('css'); ?>

        <script>
            window.csrfToken = "<?php echo e(csrf_token()); ?>"
        </script>
    </head>

    <body data-status="<?php echo e(Session::get("status")); ?>">

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300">
            <!-- Top Navigation -->


            <!-- Main Navigation -->

            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                                <div class="logo_container text-center">

                                    <a href="/"> <p class="text-uppercase font-weight-bold" style="color: black  ;letter-spacing: 3px "> <img style="" src="<?php echo e(asset("assets/new images/logo2.png")); ?>"> <?php echo e(config('app.name')); ?></p></a>

                                </div>

                            <nav class="navbar" >
                                <ul class="navbar_menu">
                                    <div class="dropdown"style="z-index: 100">
                                        <button class="dropbtn " style="font-size:14px">BİZ KİMİZ</button>
                                        <div class="dropdown-content">
                                            <a href="<?php echo e(route('hakkimizda')); ?>">Hakkımızda</a>
                                            <link rel="stylesheet" href="<?php echo e(asset("css/veosnet.css")); ?>">
                                        </div>
                                    </div>
                                    <div class="dropdown"style="z-index: 100">
                                        <button class="dropbtn " style="font-size:14px">ÜRÜNLERİMİZ</button>
                                        <div class="dropdown-content">
                                            <a href="<?php echo e(route('hakkimizda')); ?>">Hakkımızda</a>
                                            <link rel="stylesheet" href="<?php echo e(asset("css/veosnet.css")); ?>">
                                        </div>
                                    </div>
                                    <div class="dropdown"style="z-index: 100">
                                        <button class="dropbtn " style="font-size:14px">HİZMETLERİMİZ</button>
                                        <div class="dropdown-content">
                                            <a href="<?php echo e(route('hakkimizda')); ?>">Hakkımızda</a>
                                            <link rel="stylesheet" href="<?php echo e(asset("css/veosnet.css")); ?>">
                                        </div>
                                    </div>
                                    <div class="dropdown"style="z-index: 100">
                                        <button class="dropbtn " style="font-size:14px">KABLO LABORATUVAR</button>
                                        <div class="dropdown-content">
                                            <a href="<?php echo e(route('hakkimizda')); ?>">Hakkımızda</a>
                                            <link rel="stylesheet" href="<?php echo e(asset("css/veosnet.css")); ?>">
                                        </div>
                                    </div>

                                </ul>
                                <?php if(Auth::guest()): ?>
                                    <div class="dropdown show mx-4">
                                        <a class="btn btn-outline-warning dropdown-toggle mt-2" style="font-size: small" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Giriş Yap
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item mx-1" href="<?php echo e(route('login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                                Giriş Yap</a>
                                            <a class="dropdown-item" href="<?php echo e(route('register')); ?>"><i class="fa fa-user-plus mx-1"
                                                                                                       aria-hidden="true" ></i>Kayıt Ol</a>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <li class="account" style="background-color: transparent;color: black;z-index: 10">
                                        <a href="#">
                                            <?php echo e(Auth::user()->name); ?>

                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            <?php if(Auth::user()->isItAuthorized("admin")): ?>
                                                <li><b>Yönetici</b></li>
                                                <li><a href="<?php echo e(route('dashboard')); ?>"><i
                                                                class="fa fa-btn fa-dashboard"></i>Kontrol Paneli</a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(Auth::user()): ?>
                                                <li><b>Kullanıcı</b></li>
                                                <li><a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-btn fa-user"></i>Profilim</a>
                                                </li>
                                                <li><a href="<?php echo e(url('/orders')); ?>"><i class="fa fa-btn fa-list-alt"></i>Tekliflerim
                                                    </a>
                                                </li>
                                                    <li><a href="<?php echo e(route('userMesaj')); ?>"><i class="fa fa-btn fa-list-alt"></i>Mesajlarım
                                                        </a>
                                                    </li>
                                                <li><a href="<?php echo e(route('change.password')); ?>"><i class="fa fa-btn fa-key"></i>Şifre Yenileme</a></li>
                                            <?php endif; ?>
                                            <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Çıkış Yap</a>
                                            </li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                                <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fa fa-search"></i>
                                </a>
                                <div class="collapse" id="collapseExample" >
                                    <ul class="visible-for-medium-down hidden-sm hidden-xs">
                                        <form class="navbar-form" action="<?php echo e(route('search.product')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group-sm">
                                                <input type="text" class="form-control input-group-sm submit_on_enter" name="search" placeholder="Product Search">
                                            </div>
                                            <button type="submit"  class="btn btn-default hide" hidden>Ara</button>
                                        </form>
                                    </ul>
                                </div>
                                <ul class="navbar_user">

                                    <li class="checkout">
                                        <a href="<?php echo e(route('basket')); ?>">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            <span id="checkout_items" class="checkout_items"><?php echo e(Cart::count()); ?></span>
                                        </a>
                                    </li>

                                </ul>

                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <li class="menu_item"><a href="<?php echo e(route('home')); ?>">HOMEPAGE</a></li>
                    <?php $__currentLoopData = $categoryMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="menu_item"><a href="/category/<?php echo e($menu->slug); ?>"><?php echo e($menu->category_name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li class="menu_item"><a href="<?php echo e(route('contact')); ?>">CONTACT</a></li>


                    <?php if(Auth::guest()): ?>
                        <li class="menu_item">
                            <a href="<?php echo e(route('login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                Sign In</a>
                        </li>
                        <li class="menu_item">
                            <a href="<?php echo e(route('register')); ?>"><i class="fa fa-user-plus"
                                                                 aria-hidden="true"></i> Register</a>
                        </li>
                    <?php else: ?>
                        <li class="menu_item has-children">
                            <a href="#">
                                <?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->surname); ?>

                                <i class="fa fa-angle-down"></i>
                            </a>

                            <ul class="menu_selection">
                                <?php if(Auth::user()->isItAuthorized("admin")): ?>
                                    <li><b>ADMIN</b></li>
                                    <li><a href="<?php echo e(url('/admin-users')); ?>">Users</a></li>
                                    <li><a href="<?php echo e(url('/admin-category')); ?>">Category</a></li>
                                    <li><a href="<?php echo e(url('/admin-products')); ?>">Products</a>
                                    </li>
                                    <li><a href="<?php echo e(url('/admin-orders')); ?>">Orders</a></li>
                                <?php endif; ?>

                                <?php if(Auth::user()): ?>
                                    <li><b>USER</b></li>
                                    <li><a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                    <li><a href="<?php echo e(url('/orders')); ?>"><i class="fa fa-btn fa-list-alt"></i>Orders</a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                                </li>
                            </ul>


                        </li>
                    <?php endif; ?>


                </ul>
            </div>

        </div>


    <?php echo $__env->yieldContent('content'); ?>

    <!-- Site footer -->
        <footer class="site-footer" style="background-image: url('https://images.pexels.com/photos/1843717/pexels-photo-1843717.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
            <div class="container">
                <div class="row">


                    <div class="col-xs-6 col-md-3">
                        <h6 class="text-dark">KURUMSAL</h6>
                        <ul class="footer-links">
                            <li>
                                <?php $__currentLoopData = $mainyonetim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($m->ustbaslik == 1): ?>
                                        <a class="text-secondary" href="<?php echo e(route('homecontrol.edit',$m->id)); ?>"><?php echo e($m->baslik); ?></a><br>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <h6 class="text-dark">KATEGORİLER</h6>
                        <ul class="footer-links">
                            <?php $__currentLoopData = $categoryMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="text-secondary" href="/category/<?php echo e($menu->slug); ?>"><?php echo e($menu->category_name); ?></a><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6 class="text-dark">GÜVENLİ ALIŞVERİŞ</h6>
                        <ul class="footer-links">
                            <li>
                                    <?php $__currentLoopData = $mainyonetim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <?php if($m->ustbaslik == 2): ?>
                                        <a class="text-secondary" href="<?php echo e(route('homecontrol.edit',$m->id)); ?>"><?php echo e($m->baslik); ?></a><br>
                                    <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <h6 class="text-dark">Bize Ulaşın</h6>
                        <?php $__currentLoopData = $mainyonetim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($m->ustbaslik == 3): ?>
                                <a class="text-secondary" href="#"><?php echo e($m->baslik); ?></a><br>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12 mt-5">
                        <p class="copyright-text mb-3">Copyright &copy; 2020 Tüm Haklara Sahiptir.
                            <a href=""><?php echo e(config('app.name')); ?></a>
                        </p>
                        <img style="height: auto;width: 100px" src="https://www.freepnglogos.com/uploads/visa-and-mastercard-logo-26.png" alt="">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mt-5">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <a style="margin-left: 395px" title="Mesaj Gönder" href="<?php echo e(route('contact')); ?>"><img style="margin-bottom: -10px;height: 55px;width: 55px" src="https://4.bp.blogspot.com/-fVWyPSmY0Uw/VTzJBTcntrI/AAAAAAAAATg/LCIYIThm198/s1600/erkekler%2Bneden%2Bmesaj%2Batmaz.png " alt=""></a>
                    </div>
                </div>
            </div>
        </footer>

    </div>


    <script src="<?php echo e(asset('assets/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/styles/bootstrap4/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/styles/bootstrap4/bootstrap.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/Isotope/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/easing/easing.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset("assets/js//toastr.min.js")); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#646478", // Uyarının arkaplan rengi
                        "text": "#ffffff" // Uyarının üzerindeki yazı rengi
                    },
                    "button": {
                        "background": "#8ec760", // Tamam butonunun arkaplan rengi - "transparent" kullanırsanız border özelliğini açabilirsiniz.
                        //"border": "#14a7d0", // Arkaplan rengini transparent yapıp çerçeve kullanabilmek için
                        "text": "#ffffff" // Tamam butonunun yazı rengi
                    }
                },
                "theme": "block", // Kullanabileceğiniz temalar; block, edgeless, classic. Sitenizin görüntüsüne uygun olanı seçebilirsiniz.
                "type": "opt-out", // Gizle uyarısını aktif etmek için
                "position": "bottom", // Aktif ederseniz uyarı üst kısımda görünür
                //"static": true, //Aktif ederseniz uyarı üst kısımda sabit olarak görünür
                // "position": "bottom-left", // Aktif ederseniz uyarı solda görünür.
                //"position": "bottom-right", // Aktif ederseniz uyarı sağda görünür.
                "content": {
                    "message": "Sitemizden en iyi şekilde faydalanabilmeniz için çerezler kullanılmaktadır. Sitemize giriş yaparak çerez kullanımını kabul etmiş sayılıyorsunuz.",
                    "dismiss": "Tamam",
                    "link": "Daha fazla bilgi",
                    "href": "https://konudenizi.com"
                }
            })});
        $(document).ready(function() {

            $('.submit_on_enter').keydown(function(event) {
                // enter has keyCode = 13, change it if you want to use another button
                if (event.keyCode == 13) {
                    this.form.submit();
                    return false;
                }
            });

        });
    </script>
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
    <?php echo $__env->yieldContent('js'); ?>



    </body>

    </html>
