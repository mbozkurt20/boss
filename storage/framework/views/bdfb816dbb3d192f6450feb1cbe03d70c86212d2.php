<!DOCTYPE html>
<html lang="en">
<head>

    <title>Deneme -  </title>
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

        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top_nav_left">VEOS NETWORK & MARKETİNG </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="top_nav_right">

                            <ul class="top_nav_menu">

                                <!-- Currency / Language / My Account -->
                                <?php if(Auth::guest()): ?>
                                    <li class="language">
                                        <a href="<?php echo e(route('login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                           Giriş Yap</a>
                                    </li>
                                    <li class="language">
                                        <a href="<?php echo e(route('register')); ?>"><i class="fa fa-user-plus"
                                                                             aria-hidden="true"></i> Üye Kayıt</a>
                                    </li>
                                <?php else: ?>
                                    <a href="<?php echo e(route("pmenu")); ?>" class="btn text-white border-light btn-sm" style="background:transparent "> PRİM MENÜ</a>   <a href="<?php echo e(route('home')); ?>" class="btn text-white border-light btn-sm" style="background:transparent" >HESABIM</a>
                                    <li class="account">

                                        <a href="#">
                                            <?php echo e(Auth::user()->name); ?>

                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            <?php if(Auth::user()->isItAuthorized("admin")): ?>
                                                <li><b>Yönetici</b></li>
                                                <li><a href="<?php echo e(url('/admin-users')); ?>"><i
                                                                class="fa fa-btn fa-users"></i>Kullanıcılar</a>
                                                </li>
                                                <li><a href="<?php echo e(url('/admin-category')); ?>"><i
                                                                class="fa fa-btn fa-list-ul"></i>Kategori</a></li>
                                                <li><a href="<?php echo e(url('/admin-products')); ?>"><i
                                                                class="fa fa-btn fa-cubes"></i>Ödemeler</a>
                                                </li>
                                                <li><a href="<?php echo e(url('/admin-orders')); ?>"><i
                                                                class="fa fa-btn fa-cogs"></i>Ayarlar</a></li>
                                                <li class="divider"></li>
                                            <?php endif; ?>

                                            <?php if(Auth::user()): ?>
                                                <li><b>Kullanıcı</b></li>
                                                <li><a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-btn fa-user"></i>Profilim</a>
                                                </li>
                                                <li><a href="<?php echo e(url('/orders')); ?>"><i class="fa fa-btn fa-list-alt"></i>Ödemeler</a>
                                                </li>
                                            <?php endif; ?>
                                            <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Çıkış Yap</a>
                                            </li>
                                        </ul>


                                    </li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <div class="main_nav_container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-right">
                            <div class="logo_container text-center">
                                <img src="<?php echo e(asset("assets/new images/logoms.png")); ?>">
                                <p>Network & Marketing</p>
                            </div>
                        <nav class="navbar">
                            <ul class="navbar_menu">
                                <li><a href="/">Anasayfa</a></li>
                                <li><a href="/hakkmizda">Hakkımızda</a></li>

                                <?php $__currentLoopData = $categoryMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="/category/<?php echo e($menu->slug); ?>"><?php echo e($menu->category_name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <li><a href="<?php echo e(route('contact')); ?>">İletişim</a></li>

                            </ul>
                            <ul class="navbar_user">

                                <li class="checkout">
                                    <a href="<?php echo e(route('basket')); ?>">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
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
                <li class="menu_item"><a href="<?php echo e(route('home')); ?>">anasayfa</a></li>
                <?php $__currentLoopData = $categoryMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="menu_item"><a href="/category/<?php echo e($menu->slug); ?>"><?php echo e($menu->category_name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="menu_item"><a href="<?php echo e(route('contact')); ?>">İletişim</a></li>


                <?php if(Auth::guest()): ?>
                    <li class="menu_item">
                        <a href="<?php echo e(route('login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>
                            Kayıt Yap</a>
                    </li>
                    <li class="menu_item">
                        <a href="<?php echo e(route('register')); ?>"><i class="fa fa-user-plus"
                                                             aria-hidden="true"></i> Kayıt yap</a>
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
                                <li><a href="<?php echo e(url('/admin-users')); ?>">Kullanıcı</a></li>
                                <li><a href="<?php echo e(url('/admin-category')); ?>">Kategori</a></li>
                                <li><a href="<?php echo e(url('/admin-products')); ?>">Products</a>
                                </li>
                                <li><a href="<?php echo e(url('/admin-orders')); ?>">Ödemeler</a></li>
                            <?php endif; ?>

                            <?php if(Auth::user()): ?>
                                <li><b>Kullanıcı</b></li>
                                <li><a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-btn fa-user"></i>Profil</a></li>
                                <li><a href="<?php echo e(url('/orders')); ?>"><i class="fa fa-btn fa-list-alt"></i>Ödemeler</a></li>
                            <?php endif; ?>
                            <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Çıkış Yap</a>
                            </li>
                        </ul>


                    </li>
                <?php endif; ?>


            </ul>
        </div>
    </div>


<?php echo $__env->yieldContent('content'); ?>

<!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">


                <div class="col-xs-6 col-md-3">
                    <h6>KURUMSAL</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/front-end-development/">Hakkımızda</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">Neden VEOS </a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Belgelerimiz</a></li>
                        <li><a href="http://scanfcode.com/category/android/">İletişim</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Kullanıcı Sözleşmesi</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-3">
                    <h6>KATEGORİLER</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">VEOS Ürünler</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">Takviye Ürünler</a></li>

                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>GÜVENLİ ALIŞVERİŞ</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">Sepete Bak</a></li>
                        <li><a href="http://scanfcode.com/contact/">Satın Al</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Kargo Bilgilerim</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Satış Sözleşmesi</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Gizlilik Politikası</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">İade Şartları</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-3">
                    <h6>VEOS</h6>
                    <p>Veos Hakkında Bilgiler</p>


            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2020 Tüm Haklara Sahiptir.
                        <a href="">VEOS</a>

                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
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

<?php echo $__env->yieldContent('js'); ?>



</body>

</html>
