    <!DOCTYPE html>
    <html lang="en">
    <head>

        <title>{{config('app.name')}}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap4/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet"
              type="text/css">
        <link href="{{ asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet"
              type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css"
              href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/main_styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/responsive.css') }}">
        <link href="{{asset("assets/styles/toastr.min.css")}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset("css/footer.css")}}">


        @yield('css')

        <script>
            window.csrfToken = "{{ csrf_token() }}"
        </script>
    </head>

    <body data-status="{{Session::get("status")}}">

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

                                    <a href="/"> <p class="text-uppercase font-weight-bold" style="color: black  ;letter-spacing: 3px "> <img style="" src="{{asset("assets/new images/logo2.png")}}"> {{config('app.name')}}</p></a>

                                </div>

                            <nav class="navbar" >
                                <ul class="navbar_menu">
                                    <div class="dropdown"style="z-index: 100">
                                        <button class="dropbtn " style="font-size:14px">BİZ KİMİZ</button>
                                        <div class="dropdown-content">
                                            <a href="{{route('hakkimizda')}}">Hakkımızda</a>
                                            <link rel="stylesheet" href="{{asset("css/veosnet.css")}}">
                                        </div>
                                    </div>
                                    <div class="dropdown"style="z-index: 100">
                                        <button class="dropbtn " style="font-size:14px">ÜRÜNLERİMİZ</button>
                                        <div class="dropdown-content">
                                            <a href="{{route('hakkimizda')}}">Hakkımızda</a>
                                            <link rel="stylesheet" href="{{asset("css/veosnet.css")}}">
                                        </div>
                                    </div>
                                    <div class="dropdown"style="z-index: 100">
                                        <button class="dropbtn " style="font-size:14px">HİZMETLERİMİZ</button>
                                        <div class="dropdown-content">
                                            <a href="{{route('hakkimizda')}}">Hakkımızda</a>
                                            <link rel="stylesheet" href="{{asset("css/veosnet.css")}}">
                                        </div>
                                    </div>
                                    <div class="dropdown"style="z-index: 100">
                                        <button class="dropbtn " style="font-size:14px">KABLO LABORATUVAR</button>
                                        <div class="dropdown-content">
                                            <a href="{{route('hakkimizda')}}">Hakkımızda</a>
                                            <link rel="stylesheet" href="{{asset("css/veosnet.css")}}">
                                        </div>
                                    </div>

                                </ul>
                                @if(Auth::guest())
                                    <div class="dropdown show mx-4">
                                        <a class="btn btn-outline-warning dropdown-toggle mt-2" style="font-size: small" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Giriş Yap
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item mx-1" href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                                Giriş Yap</a>
                                            <a class="dropdown-item" href="{{ route('register') }}"><i class="fa fa-user-plus mx-1"
                                                                                                       aria-hidden="true" ></i>Kayıt Ol</a>
                                        </div>
                                    </div>
                                @else
                                    <li class="account" style="background-color: transparent;color: black;z-index: 10">
                                        <a href="#">
                                            {{ Auth::user()->name }}
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            @if(Auth::user()->isItAuthorized("admin"))
                                                <li><b>Yönetici</b></li>
                                                <li><a href="{{ route('dashboard')}}"><i
                                                                class="fa fa-btn fa-dashboard"></i>Kontrol Paneli</a>
                                                </li>
                                            @endif
                                            @if(Auth::user())
                                                <li><b>Kullanıcı</b></li>
                                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profilim</a>
                                                </li>
                                                <li><a href="{{ url('/orders') }}"><i class="fa fa-btn fa-list-alt"></i>Tekliflerim
                                                    </a>
                                                </li>
                                                    <li><a href="{{ route('userMesaj') }}"><i class="fa fa-btn fa-list-alt"></i>Mesajlarım
                                                        </a>
                                                    </li>
                                                <li><a href="{{route('change.password') }}"><i class="fa fa-btn fa-key"></i>Şifre Yenileme</a></li>
                                            @endif
                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Çıkış Yap</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fa fa-search"></i>
                                </a>
                                <div class="collapse" id="collapseExample" >
                                    <ul class="visible-for-medium-down hidden-sm hidden-xs">
                                        <form class="navbar-form" action="{{route('search.product')}}" method="post">
                                            @csrf
                                            <div class="form-group-sm">
                                                <input type="text" class="form-control input-group-sm submit_on_enter" name="search" placeholder="Product Search">
                                            </div>
                                            <button type="submit"  class="btn btn-default hide" hidden>Ara</button>
                                        </form>
                                    </ul>
                                </div>
                                <ul class="navbar_user">

                                    <li class="checkout">
                                        <a href="{{route('basket')}}">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            <span id="checkout_items" class="checkout_items">{{ Cart::count() }}</span>
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
                    <li class="menu_item"><a href="{{ route('home') }}">HOMEPAGE</a></li>
                    @foreach($categoryMenu as $menu)
                        <li class="menu_item"><a href="/category/{{ $menu->slug }}">{{ $menu->category_name }}</a>
                        </li>
                    @endforeach
                    <li class="menu_item"><a href="{{ route('contact') }}">CONTACT</a></li>


                    @if(Auth::guest())
                        <li class="menu_item">
                            <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                Sign In</a>
                        </li>
                        <li class="menu_item">
                            <a href="{{ route('register') }}"><i class="fa fa-user-plus"
                                                                 aria-hidden="true"></i> Register</a>
                        </li>
                    @else
                        <li class="menu_item has-children">
                            <a href="#">
                                {{ Auth::user()->name }} {{ Auth::user()->surname}}
                                <i class="fa fa-angle-down"></i>
                            </a>

                            <ul class="menu_selection">
                                @if(Auth::user()->isItAuthorized("admin"))
                                    <li><b>ADMIN</b></li>
                                    <li><a href="{{ url('/admin-users') }}">Users</a></li>
                                    <li><a href="{{ url('/admin-category') }}">Category</a></li>
                                    <li><a href="{{ url('/admin-products') }}">Products</a>
                                    </li>
                                    <li><a href="{{ url('/admin-orders') }}">Orders</a></li>
                                @endif

                                @if(Auth::user())
                                    <li><b>USER</b></li>
                                    <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                    <li><a href="{{ url('/orders') }}"><i class="fa fa-btn fa-list-alt"></i>Orders</a></li>
                                @endif
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                                </li>
                            </ul>


                        </li>
                    @endif


                </ul>
            </div>

        </div>


    @yield('content')

    <!-- Site footer -->
        <footer class="site-footer" style="background-image: url('https://images.pexels.com/photos/1843717/pexels-photo-1843717.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
            <div class="container">
                <div class="row">


                    <div class="col-xs-6 col-md-3">
                        <h6 class="text-dark">KURUMSAL</h6>
                        <ul class="footer-links">
                            <li>
                                @foreach($mainyonetim as $m)
                                    @if($m->ustbaslik == 1)
                                        <a class="text-secondary" href="{{route('homecontrol.edit',$m->id)}}">{{$m->baslik}}</a><br>
                                    @endif
                                @endforeach
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <h6 class="text-dark">KATEGORİLER</h6>
                        <ul class="footer-links">
                            @foreach($categoryMenu as $menu)
                                    <a class="text-secondary" href="/category/{{ $menu->slug }}">{{ $menu->category_name }}</a><br>
                            @endforeach

                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6 class="text-dark">GÜVENLİ ALIŞVERİŞ</h6>
                        <ul class="footer-links">
                            <li>
                                    @foreach($mainyonetim as $m)
                                   @if($m->ustbaslik == 2)
                                        <a class="text-secondary" href="{{route('homecontrol.edit',$m->id)}}">{{$m->baslik}}</a><br>
                                    @endif
                                        @endforeach
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <h6 class="text-dark">Bize Ulaşın</h6>
                        @foreach($mainyonetim as $m)
                            @if($m->ustbaslik == 3)
                                <a class="text-secondary" href="#">{{$m->baslik}}</a><br>
                            @endif
                        @endforeach
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12 mt-5">
                        <p class="copyright-text mb-3">Copyright &copy; 2020 Tüm Haklara Sahiptir.
                            <a href="">{{config('app.name')}}</a>
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
                        <a style="margin-left: 395px" title="Mesaj Gönder" href="{{ route('contact') }}"><img style="margin-bottom: -10px;height: 55px;width: 55px" src="https://4.bp.blogspot.com/-fVWyPSmY0Uw/VTzJBTcntrI/AAAAAAAAATg/LCIYIThm198/s1600/erkekler%2Bneden%2Bmesaj%2Batmaz.png " alt=""></a>
                    </div>
                </div>
            </div>
        </footer>

    </div>


    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{asset("assets/js//toastr.min.js")}}"></script>
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
    @if(session()->has('success'))
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
                title: '{{session()->get('success')}}'
            })
        </script>
    @endif
    @if(session()->has('error'))
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
                title: '{{session()->get('error')}}'
            })
        </script>
    @endif
    @yield('js')



    </body>

    </html>
