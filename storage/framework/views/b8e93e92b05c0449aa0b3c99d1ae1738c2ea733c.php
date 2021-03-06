<?php $__env->startSection('content'); ?>
    <!--
Please note, that you can apply .m--global-blending-active to .fnc-slider
to enable blend-mode for all background-images or apply .m--blend-bg-active
to some specific slides (.fnc-slide). It's disabled by default in this demo,
because it requires specific images, where more than 50% of bg is transparent or monotone
-->
    <div class="demo-cont">
        <!-- slider start -->
        <div class="fnc-slider example-slider">
            <div class="fnc-slider__slides">
                <!-- slide start -->
                <div class="fnc-slide m--blend-green m--active-slide">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">

                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">

                            </h2>

                        </div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-dark">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">

                        </div>
                        <div class="fnc-slide__content">



                        </div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-red">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">

                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">

                            </h2>

                        </div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-blue">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">

                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">

                                </div>
                                <div class="fnc-slide__heading-line">

                                </div>
                            </h2>

                        </div>
                    </div>
                </div>
                <!-- slide end -->
            </div>
            <nav class="fnc-nav">
                <div class="fnc-nav__bgs">
                    <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                    <div class="fnc-nav__bg m--navbg-dark"></div>
                    <div class="fnc-nav__bg m--navbg-red"></div>
                    <div class="fnc-nav__bg m--navbg-blue"></div>
                </div>
                <div class="fnc-nav__controls">
                    <button class="fnc-nav__control">
                        VEOS
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        VEOS
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                     VEOS
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        VEOS
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                </div>
            </nav>
        </div>
        <!-- slider end -->
        <div class="demo-cont__credits">
            <div class="demo-cont__credits-close"></div>
            <h2 class="demo-cont__credits-heading">Made by</h2>
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="demo-cont__credits-img" />
            <h3 class="demo-cont__credits-name">Nikolay Talanov</h3>
            <a href="https://codepen.io/suez/" target="_blank" class="demo-cont__credits-link">My codepen</a>
            <a href="https://twitter.com/NikolayTalanov" target="_blank" class="demo-cont__credits-link">My twitter</a>
            <h2 class="demo-cont__credits-heading">Based on</h2>
            <a href="https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation" target="_blank" class="demo-cont__credits-link">Concept by Kreativa Studio</a>
            <h4 class="demo-cont__credits-blend">Global Blend Mode</h4>
            <div class="colorful-switch">
                <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
                <label class="colorful-switch__label" for="colorful-switch-cb">
                    <span class="colorful-switch__bg"></span>
                    <span class="colorful-switch__dot"></span>
                    <span class="colorful-switch__on">
          <span class="colorful-switch__on__inner"></span>
        </span>
                    <span class="colorful-switch__off"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="new_arrivals">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title new_arrivals_title">
                            <h2>Yeni Ürünlerimiz</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col text-center">
                        <div class="new_arrivals_sorting">
                            <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"
                                    data-filter="*">Tümü
                                </li>
                                <?php $__currentLoopData = $categoryMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                        data-filter=".<?php echo e($menu->id); ?>"><?php echo e($menu->category_name); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="product-grid"
                             data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/product/<?php echo e($product->slug); ?>">
                                    <div class="product-item <?php echo e($product->category_id); ?> ">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <?php echo $product->thumbs; ?>

                                            </div>

                                            <div class="product_info">
                                                <h6 class="product_name"><a
                                                            href="/product/<?php echo e($product->slug); ?>"><?php echo e($product->product_name); ?></a>
                                                </h6>

                                                <div class="product_price"><?php echo e(number_format($product->product_price)); ?> ₺<span><?php echo e(number_format($product->original_price )); ?>

                                                ₺</span></div>

                                                <input type="number" class="quantity" id="quantity" name="quantity" value="1"
                                                       style="width: 50px; margin-right: 10px;">
                                            </div>
                                        </div>
                                        <div class="add_to_cart_button red_button"><a
                                                    href="<?php echo e(route('basket.create', ['id' => $product->id])); ?>">Ürünü Ekle</a>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Deal of the week -->

    <div class="deal_ofthe_week">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="deal_ofthe_week_img">
                        <img src="<?php echo e(asset('assets/new images/WhatsApp Image 2020-02-01 at 15.02.47 (1).jpeg')); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 text-right deal_ofthe_week_col">
                    <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                        <div class="section_title">
                            <h2>Fırsat Ürünü</h2>
                        </div>
                        <ul class="timer">
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="day" class="timer_num">03</div>
                                <div class="timer_unit">Gün</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="hour" class="timer_num">15</div>
                                <div class="timer_unit">Saat</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="minute" class="timer_num">45</div>
                                <div class="timer_unit">Dakika</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="second" class="timer_num">23</div>
                                <div class="timer_unit">Saniye</div>
                            </li>
                        </ul>
                        <div class="red_button deal_ofthe_week_button"><a href="#">Satın Al</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Benefit -->

    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>free shipping</h6>
                            <p>Suffered Alteration in Some Form</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>cash on delivery</h6>
                            <p>The Internet Tend To Repeat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>45 days return</h6>
                            <p>Making it Look Like Readable</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>opening all week</h6>
                            <p>8AM - 09PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


    <script>

        $('.add_to_cart_button').find('a').click(function (event) {
            event.preventDefault();
            var quantity = $(this).parent().prev().find('input').val();
            $.ajax({
                type: "POST",
                url: $(this).attr('href'),
                data: {quantity: quantity}
                , success: function (data) {
                    console.log(data);
                    $('#checkout_items').html(data.cartCount);
                }
            });
            return false; //for good measure
        });
    </script>
    <script>

        (function() {

            var $$ = function(selector, context) {
                var context = context || document;
                var elements = context.querySelectorAll(selector);
                return [].slice.call(elements);
            };

            function _fncSliderInit($slider, options) {
                var prefix = ".fnc-";

                var $slider = $slider;
                var $slidesCont = $slider.querySelector(prefix + "slider__slides");
                var $slides = $$(prefix + "slide", $slider);
                var $controls = $$(prefix + "nav__control", $slider);
                var $controlsBgs = $$(prefix + "nav__bg", $slider);
                var $progressAS = $$(prefix + "nav__control-progress", $slider);

                var numOfSlides = $slides.length;
                var curSlide = 1;
                var sliding = false;
                var slidingAT = +parseFloat(getComputedStyle($slidesCont)["transition-duration"]) * 1000;
                var slidingDelay = +parseFloat(getComputedStyle($slidesCont)["transition-delay"]) * 1000;

                var autoSlidingActive = false;
                var autoSlidingTO;
                var autoSlidingDelay = 5000; // default autosliding delay value
                var autoSlidingBlocked = false;

                var $activeSlide;
                var $activeControlsBg;
                var $prevControl;

                function setIDs() {
                    $slides.forEach(function($slide, index) {
                        $slide.classList.add("fnc-slide-" + (index + 1));
                    });

                    $controls.forEach(function($control, index) {
                        $control.setAttribute("data-slide", index + 1);
                        $control.classList.add("fnc-nav__control-" + (index + 1));
                    });

                    $controlsBgs.forEach(function($bg, index) {
                        $bg.classList.add("fnc-nav__bg-" + (index + 1));
                    });
                };

                setIDs();




                function afterSlidingHandler() {
                    $slider.querySelector(".m--previous-slide").classList.remove("m--active-slide", "m--previous-slide");
                    $slider.querySelector(".m--previous-nav-bg").classList.remove("m--active-nav-bg", "m--previous-nav-bg");

                    $activeSlide.classList.remove("m--before-sliding");
                    $activeControlsBg.classList.remove("m--nav-bg-before");
                    $prevControl.classList.remove("m--prev-control");
                    $prevControl.classList.add("m--reset-progress");
                    var triggerLayout = $prevControl.offsetTop;
                    $prevControl.classList.remove("m--reset-progress");

                    sliding = false;
                    var layoutTrigger = $slider.offsetTop;

                    if (autoSlidingActive && !autoSlidingBlocked) {
                        setAutoslidingTO();
                    }
                };

                function performSliding(slideID) {
                    if (sliding) return;
                    sliding = true;
                    window.clearTimeout(autoSlidingTO);
                    curSlide = slideID;

                    $prevControl = $slider.querySelector(".m--active-control");
                    $prevControl.classList.remove("m--active-control");
                    $prevControl.classList.add("m--prev-control");
                    $slider.querySelector(prefix + "nav__control-" + slideID).classList.add("m--active-control");

                    $activeSlide = $slider.querySelector(prefix + "slide-" + slideID);
                    $activeControlsBg = $slider.querySelector(prefix + "nav__bg-" + slideID);

                    $slider.querySelector(".m--active-slide").classList.add("m--previous-slide");
                    $slider.querySelector(".m--active-nav-bg").classList.add("m--previous-nav-bg");

                    $activeSlide.classList.add("m--before-sliding");
                    $activeControlsBg.classList.add("m--nav-bg-before");

                    var layoutTrigger = $activeSlide.offsetTop;

                    $activeSlide.classList.add("m--active-slide");
                    $activeControlsBg.classList.add("m--active-nav-bg");

                    setTimeout(afterSlidingHandler, slidingAT + slidingDelay);
                };

                function controlClickHandler() {
                    if (sliding) return;
                    if (this.classList.contains("m--active-control")) return;
                    if (options.blockASafterClick) {
                        autoSlidingBlocked = true;
                        $slider.classList.add("m--autosliding-blocked");
                    }

                    var slideID = +this.getAttribute("data-slide");

                    performSliding(slideID);
                };

                $controls.forEach(function($control) {
                    $control.addEventListener("click", controlClickHandler);
                });

                function setAutoslidingTO() {
                    window.clearTimeout(autoSlidingTO);
                    var delay = +options.autoSlidingDelay || autoSlidingDelay;
                    curSlide++;
                    if (curSlide > numOfSlides) curSlide = 1;

                    autoSlidingTO = setTimeout(function() {
                        performSliding(curSlide);
                    }, delay);
                };

                if (options.autoSliding || +options.autoSlidingDelay > 0) {
                    if (options.autoSliding === false) return;

                    autoSlidingActive = true;
                    setAutoslidingTO();

                    $slider.classList.add("m--with-autosliding");
                    var triggerLayout = $slider.offsetTop;

                    var delay = +options.autoSlidingDelay || autoSlidingDelay;
                    delay += slidingDelay + slidingAT;

                    $progressAS.forEach(function($progress) {
                        $progress.style.transition = "transform " + (delay / 1000) + "s";
                    });
                }

                $slider.querySelector(".fnc-nav__control:first-child").classList.add("m--active-control");

            };

            var fncSlider = function(sliderSelector, options) {
                var $sliders = $$(sliderSelector);

                $sliders.forEach(function($slider) {
                    _fncSliderInit($slider, options);
                });
            };

            window.fncSlider = fncSlider;
        }());

        /* not part of the slider scripts */

        /* Slider initialization
        options:
        autoSliding - boolean
        autoSlidingDelay - delay in ms. If audoSliding is on and no value provided, default value is 5000
        blockASafterClick - boolean. If user clicked any sliding control, autosliding won't start again
        */
        fncSlider(".example-slider", {autoSlidingDelay: 4000});

        var $demoCont = document.querySelector(".demo-cont");

        [].slice.call(document.querySelectorAll(".fnc-slide__action-btn")).forEach(function($btn) {
            $btn.addEventListener("click", function() {
                $demoCont.classList.toggle("credits-active");
            });
        });

        document.querySelector(".demo-cont__credits-close").addEventListener("click", function() {
            $demoCont.classList.remove("credits-active");
        });

        document.querySelector(".js-activate-global-blending").addEventListener("click", function() {
            document.querySelector(".example-slider").classList.toggle("m--global-blending-active");
        });

    </script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="<?php echo e(asset("css/slider.css")); ?>">

    <style>
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:15px;width:15px;padding:0}
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>