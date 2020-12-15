<?php $__env->startSection('content'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="CSSgal">
        <!-- Don't wrap targets in parent -->
        <s id="s1"></s>
        <s id="s2"></s>
        <s id="s3"></s>
        <s id="s4"></s>
        <div class="slider">
            <?php $__empty_1 = true; $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div>
                    <img class="img-fluid" style="height: 510px;width: 100%"  src="<?php echo e(\Illuminate\Support\Facades\Storage::url($slider->cover)); ?>" alt="" />
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <img class="img-fluid" style="height: 510px" src='https://images.pexels.com/photos/306198/pexels-photo-306198.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940' alt="">
            <?php endif; ?>
        </div>
        <div class="prevNext ">
            <div><a href="#s4"></a><a href="#s2"></a></div>
            <div><a href="#s1"></a><a href="#s3"></a></div>
            <div><a href="#s2"></a><a href="#s4"></a></div>
            <div><a href="#s3"></a><a href="#s1"></a></div>
        </div>
        <div class="bullets">
            <a href="#s1"></a>
            <a href="#s2"></a>
            <a href="#s3"></a>
            <a href="#s4"></a>
        </div>
    </div>
    <div class="row">
        <div class="new_arrivals">
            <div class="container">
                <div class="row" style="margin-top: -10px">
                    <div class="col text-center">
                        <div class="section_title new_arrivals_title">
                            <h2 style="font-family: 'Harlow Solid Italic'">VİTRİN</h2>
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
                                            <div class="product_image ">
                                                <?php echo $product->thumbs; ?>

                                            </div>
                                            <div class="product_info mt-3">
                                                <small class="product_name"><a title="<?php echo e(( $product->product_name)); ?>" href="/product/<?php echo e($product->slug); ?>"><?php echo e(str_limit( $product->product_name,30)); ?></a></small>
                                                <div class="col-md-4 col-sm-12 product_price" style="font-size:12px"><?php echo e(number_format($product->product_price)); ?><small>₺</small></div>
                                                <?php if($product->status==1): ?>
                                                    <input type="number" class="quantity" id="quantity" name="quantity" value="1" min="0" max="<?php echo e($product->miktar); ?>"
                                                           style="width: 50px; margin-right: 10px;height: 18px;border: 1px solid #FE7C7F;margin-bottom: 5px">
                                                <?php else: ?>
                                                    <div class="my-1">
                                                        <small style="border-radius: 5px" class="alert-danger p-2 font-weight-bolder">Stokda ürün mevcut değil !</small>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if($product->status == 1): ?>
                                                <div class="add_to_cart_button red_button"><a href="<?php echo e(route('basket.create', ['id' => $product->id])); ?>">Ürünü Ekle</a></div>
                                            <?php else: ?>
                                                <form action="<?php echo e(route('gelince_haber_ver')); ?>" method="post" class="text-center my-2">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" value="<?php echo e(auth()->id()); ?>" name="user_id">
                                                    <input type="hidden" value="<?php echo e($product->id); ?>" name="product_id">
                                                    <button type="submit" class="btn btn btn-warning mt-1 "><i class="fa fa-bullhorn"></i> Gelince Haber Ver</button>
                                                </form>
                                            <?php endif; ?>

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
    <div class="container-fluid mb-5" style="width: 100%" >
        <h2 class="text-center" style="color:white;background:#cdd6f9;font-family:'Open Sans'" ><strong>  ↓  &nbsp;F I R S A T&nbsp;&nbsp; Ü R Ü N L E R  &nbsp; ↓  </strong></h2><br><br>
        <section class="customer-logos slider">
            <?php $__currentLoopData = $f_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f_products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="slide" ><a href="/product/<?php echo e($f_products->slug); ?>"><i class="" title="<?php echo e($f_products->product_name); ?> <?php echo e($f_products->product_price); ?> ₺"><?php echo $f_products->thumbs; ?> </i></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    <script>
        $('.add_to_cart_button').find('a').click(function (event) {
            event.preventDefault();
            var quantity = $(this).parent().prev().find('input').val();
            var max= $(this).parent().prev().find('input').attr('max')

            if(quantity > max) {
                Swal.fire({
                    icon: 'error',
                    title: 'Uyarı',
                    text: 'Girdiğiniz ürün miktarı ürün stoğunu aşmaktadır.',
                    footer: '<span class="alert alert-primary w-auto font-weight-bold"> Ürün stok durumu :'+ max +' ürün mevcut</span>'
                })
            }else{
                $.ajax({
                    type: "POST",
                    url: $(this).attr('href'),
                    data: {quantity: quantity , _token: '<?php echo e(csrf_token()); ?>' }
                    , success: function (data) {
                        console.log(data);
                        $('#checkout_items').html(data.cartCount);
                    }
                });
                return false; //for good measure
            }
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/altslider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("css/slider.css")); ?>">
    <style>
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:15px;width:15px;padding:0}
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/categories_responsive.css')); ?>">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>