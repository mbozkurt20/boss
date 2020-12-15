<?php $__env->startSection("content"); ?>
    <aside class="side-nav" id="show-side-navigation1">
        <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
        <div class="heading">
            <img src="https://images.theconversation.com/files/254694/original/file-20190121-100276-17apq9l.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=1200.0&fit=crop" alt="">
            <div class="info">
                <h3><a href="#"><?php echo e(config('app.name')); ?></a></h3>
            </div>
        </div>
        <div class="search">
            <input type="text" placeholder="
Buraya yaz"><i class="fa fa-search"></i>
        </div>
        <ul class="categories">
            <li><a href="<?php echo e(url('/admin-users')); ?>"> Kullanıcılar</a>
            </li>
            <li><a href="<?php echo e(route('hakkimizda.index')); ?>">Hakkımızda</a>
            </li>
            <li><a href="<?php echo e(url('/admin-category')); ?>"> Kategori Ekle</a></li>
            <li><a href="<?php echo e(url('/admin-products')); ?>"> Ürün Yönetimi</a>
            </li>
            <li><a href="<?php echo e(route('slider.index')); ?>"> Slider Yönetimi</a></li>
            <li><a href="<?php echo e(url('/admin-orders')); ?>"> Gelen Siparişler</a></li>
            <li><a href="<?php echo e(route('mainyonetim.index')); ?>">Main Yönetim</a></li>
            <li><a href="<?php echo e(route('contactadmin.index')); ?>">iletişim Yönetimi</a>
            </li>
            <li><a href="<?php echo e(route('sosyalmedya.index')); ?>">Sosyan Medya</a>
            </li>

            <p>Detaylar</p>
            <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="<?php echo e(route('gelenmesajlar.index')); ?>"> Gelen Mesajlar <span class="num dang"><?php echo e($message); ?></span></a></li>
            <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Ayarlar <span class="num prim">0</span></a>
            </li>
        </ul>
    </aside>
    <section id="contents">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
                                <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Log out</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
                        <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="welcome">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                            <h2 class="text-white"><?php echo e(config('app.name')); ?> Kontrol Paneline Hoşgeldiniz</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="statistics">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <i class="fa fa-envelope fa-fw bg-primary"></i>
                            <div class="info">
                                <a href="<?php echo e(route('gelenmesajlar.index')); ?>"> Gelen Mesajlar <span class="num dang"></span></a>
                                <p class="text-center"><?php echo e($message); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <i class="fa fa-file fa-fw danger"></i>
                            <div class="info">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <i class="fa fa-users fa-fw success"></i>
                            <div class="info">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='statis text-center'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box bg-primary">
                            <i class="fa fa-shopping-cart"></i>
                            <h5>Toplam Sipariş Sayısı</h5>
                            <br>
                            <p class="lead"><?php echo e($order); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box danger">
                            <i class="fa fa-user-o"></i>
                            <h5>Kullanıcı Sayısı</h5>
                            <br>
                            <p class="lead"><?php echo e($user); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box warning">
                            <i class="fa fa-handshake-o"></i>
                            <h5>Toplam Kasa.</h5>
                            <br>
                            <p class="lead"><?php echo e($price); ?> ₺</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box success">

                            <h3>...</h3>
                            <p class="lead">...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="chrt3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="chart-container">
                            <canvas id="chart3" width="100%"></canvas>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>











<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script >
        $(function () {

            'use strict';

            var aside = $('.side-nav'),
                showAsideBtn = $('.show-side-btn'),
                contents = $('#contents'),
                _window = $(window)

            showAsideBtn.on("click", function () {
                $("#" + $(this).data('show')).toggleClass('show-side-nav');
                contents.toggleClass('margin');
            });

            if (_window.width() <= 767) {
                aside.addClass('show-side-nav');
            }

            _window.on('resize', function () {
                if ($(window).width() > 767) {
                    aside.removeClass('show-side-nav');
                }
            });

            // dropdown menu in the side nav
            var slideNavDropdown = $('.side-nav-dropdown');

            $('.side-nav .categories li').on('click', function () {

                var $this = $(this)

                $this.toggleClass('opend').siblings().removeClass('opend');

                if ($this.hasClass('opend')) {
                    $this.find('.side-nav-dropdown').slideToggle('fast');
                    $this.siblings().find('.side-nav-dropdown').slideUp('fast');
                } else {
                    $this.find('.side-nav-dropdown').slideUp('fast');
                }
            });

            $('.side-nav .close-aside').on('click', function () {
                $('#' + $(this).data('close')).addClass('show-side-nav');
                contents.removeClass('margin');
            });


            // Start chart
            var chart = document.getElementById('myChart');
            Chart.defaults.global.animation.duration = 2000; // Animation duration
            Chart.defaults.global.title.display = false; // Remove title
            Chart.defaults.global.title.text = "Chart"; // Title
            Chart.defaults.global.title.position = 'bottom'; // Title position
            Chart.defaults.global.defaultFontColor = '#999'; // Font color
            Chart.defaults.global.defaultFontSize = 10; // Font size for every label

            // Chart.defaults.global.tooltips.backgroundColor = '#FFF'; // Tooltips background color
            Chart.defaults.global.tooltips.borderColor = 'white'; // Tooltips border color
            Chart.defaults.global.legend.labels.padding = 0;
            Chart.defaults.scale.ticks.beginAtZero = true;
            Chart.defaults.scale.gridLines.zeroLineColor = 'rgba(255, 255, 255, 0.1)';
            Chart.defaults.scale.gridLines.color = 'rgba(255, 255, 255, 0.02)';
            Chart.defaults.global.legend.display = false;

            var myChart = new Chart(chart, {
                type: 'bar',
                data: {
                    labels: ["January", "February", "March", "April", "May", 'Jul'],
                    datasets: [{
                        label: "Lost",
                        fill: false,
                        lineTension: 0,
                        data: [45, 25, 40, 20, 45, 20],
                        pointBorderColor: "#4bc0c0",
                        borderColor: '#4bc0c0',
                        borderWidth: 2,
                        showLine: true,
                    }, {
                        label: "Succes",
                        fill: false,
                        lineTension: 0,
                        startAngle: 2,
                        data: [20, 40, 20, 45, 25, 60],
                        // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
                        backgroundColor: "transparent",
                        pointBorderColor: "#ff6384",
                        borderColor: '#ff6384',
                        borderWidth: 2,
                        showLine: true,
                    }]
                },
            });

            //  Chart ( 2 )
            var Chart2 = document.getElementById('myChart2').getContext('2d');
            var chart = new Chart(Chart2, {
                type: 'line',
                data: {
                    labels: ["January", "February", "March", "April", 'test', 'test', 'test', 'test'],
                    datasets: [{
                        label: "My First dataset",
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 79, 116)',
                        borderWidth: 2,
                        pointBorderColor: false,
                        data: [5, 10, 5, 8, 20, 30, 20, 10],
                        fill: false,
                        lineTension: .4,
                    }, {
                        label: "Month",
                        fill: false,
                        lineTension: .4,
                        startAngle: 2,
                        data: [20, 14, 20, 25, 10, 15, 25, 10],
                        // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
                        backgroundColor: "transparent",
                        pointBorderColor: "#4bc0c0",
                        borderColor: '#4bc0c0',
                        borderWidth: 2,
                        showLine: true,
                    }, {
                        label: "Month",
                        fill: false,
                        lineTension: .4,
                        startAngle: 2,
                        data: [40, 20, 5, 10, 30, 15, 15, 10],
                        // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
                        backgroundColor: "transparent",
                        pointBorderColor: "#ffcd56",
                        borderColor: '#ffcd56',
                        borderWidth: 2,
                        showLine: true,
                    }]
                },

                // Configuration options
                options: {
                    title: {
                        display: false
                    }
                }
            });

            var chart = document.getElementById('chart3');
            var myChart = new Chart(chart, {
                type: 'line',
                data: {
                    labels: ["One", "Two", "Three", "Four", "Five", 'Six', "Seven", "Eight"],
                    datasets: [{
                        label: "Lost",
                        fill: false,
                        lineTension: .5,
                        pointBorderColor: "transparent",
                        pointColor: "white",
                        borderColor: '#d9534f',
                        borderWidth: 0,
                        showLine: true,
                        data: [0, 40, 10, 30, 10, 20, 15, 20],
                        pointBackgroundColor: 'transparent',
                    },{
                        label: "Lost",
                        fill: false,
                        lineTension: .5,
                        pointColor: "white",
                        borderColor: '#5cb85c',
                        borderWidth: 0,
                        showLine: true,
                        data: [40, 0, 20, 10, 25, 15, 30, 0],
                        pointBackgroundColor: 'transparent',
                    },
                        {
                            label: "Lost",
                            fill: false,
                            lineTension: .5,
                            pointColor: "white",
                            borderColor: '#f0ad4e',
                            borderWidth: 0,
                            showLine: true,
                            data: [10, 40, 20, 5, 35, 15, 35, 0],
                            pointBackgroundColor: 'transparent',
                        },
                        {
                            label: "Lost",
                            fill: false,
                            lineTension: .5,
                            pointColor: "white",
                            borderColor: '#337ab7',
                            borderWidth: 0,
                            showLine: true,
                            data: [0, 30, 10, 25, 10, 40, 20, 0],
                            pointBackgroundColor: 'transparent',
                        }]
                },
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>