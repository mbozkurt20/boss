<?php $__env->startSection('content'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Slider-->
    <!-- reference examples at https://www.idangero.us/swiper/demos/#.Vl8kD9-rRHc -->
    <section id="lab_video_slider">
        <div class="container-fluid">
            <div class="row">
                <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

                <!-- Link Swiper's CSS -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/css/swiper.min.css">

                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div id="slide_one" class="swiper-slide">
                            <!-- VIDEO -->
                            <div id="lab_video_text_overlay">
                                <div class="container">
                                    <h2>Lorum Ipsum Deloras </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie</p>
                                    <a href="#" class="btn btn-default">View Our Work</a>
                                    <a href="#" class="btn btn-warning">Learn About Us</a>

                                </div>
                            </div>
                            <video class="slider-video" width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" poster="">
                                <source src="<?php echo e(asset('assets/new images/videoplayback.mp4')); ?>" type="video/mp4">
                            </video>
                            <!-- END VIDEO -->
                        </div>

                        <div id="slide_two" class="swiper-slide">
                            <div id="lab_video_text_overlay">
                                <div class="container">
                                    <h2>Lorum Ipsum Deloras </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie</p>
                                    <a href="#" class="btn btn-default">View Our Work</a>
                                    <a href="#" class="btn btn-warning">Learn About Us</a>

                                </div>
                            </div>
                            <!-- end #lab_overlay -->

                            <video class="slider-video" width="100%" preload="auto" loop="" autoplay style="visibility: visible; width: 100%;" poster="//dl.dropbox.com/s/ijyaav8qzkdtyt5/lab-coding-screenshot.jpg">

                                <source type="video/mp4" src="//dl.dropbox.com/s/5z4jupv385iboiu/lab-coding.mp4">
                                <source src="//dl.dropbox.com/s/5z4jupv385iboiu/lab-coding.mp4" type="video/mp4">
                                <source src="//dl.dropbox.com/s/79msa1jcni374v8/lab-coding.webm" type="video/webm">
                                <source src="//dl.dropbox.com/s/7bq2tyma5de88bt/lab-coding.ogg" type="video/ogg">
                            </video>

                        </div>

                        <div id="slide_three" class="swiper-slide">
                            <!-- VIDEO -->
                            <video class="slider-video" width="100%" preload="auto" loop="" autoplay style="visibility: visible; width: 100%;" poster="//dl.dropbox.com/s/5aeyg9ntj1fs8v1/typing-numbers.jpg">
                                <source src="//dl.dropbox.com/s/xmosdvoleruexky/typing-numbers.mp4" type="video/mp4">
                                <source src="//dl.dropbox.com/s/13z1t97pcvka88k/typing-numbers.webm" type="video/webm">
                                <source src="//dl.dropbox.com/s/5pyuc35wnv5khe1/typing-numbers.ogv" type="video/ogg">
                            </video>
                            <!-- END VIDEO -->
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <!-- Swiper JS -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/js/swiper.min.js"></script>

                <!-- Initialize Swiper -->
                <script>
                    var swiper = new Swiper('.swiper-container', {
                        pagination: '.swiper-pagination',
                        paginationClickable: true,
                        nextButton: '.swiper-button-next',
                        prevButton: '.swiper-button-prev',
                        spaceBetween: 30,
                        autoplay: 10000,
                        autoplayDisableOnInteraction: false
                    });
                </script>
            </div>
            <!-- end .row -->
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title new_arrivals_title">
                    <div class="text-center">

                    </div>
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
                                    <?php if(isset($product->image)): ?>
                                        <img class="h-50" src="<?php echo e($product->image); ?>" alt="">
                                    <?php else: ?>
                                        <img class="h-25"  src="<?php echo e(asset('assets/new images/WebsiteBOSS.png')); ?>" alt="">
                                    <?php endif; ?>
                                    <div class="product_info mt-3">
                                        <small class="product_name " ><a href="/product/<?php echo e($product->slug); ?>"><?php echo e($product->product_name); ?></a></small><br>
                                        <small class="product_name" ><a href="/product/<?php echo e($product->slug); ?>"><?php echo e($product->code); ?></a><i class="fa fa-search mx-2"></i></small><br>

                                        <?php if(! Auth::guest()): ?>
                                            <div class="col-md-4 col-sm-12 text-center " style="font-size: 12px"><?php echo e(number_format($product->product_price,2,',','.').'$'); ?> </div>
                                        <?php else: ?>
                                            <span>Gizli</span>
                                        <?php endif; ?>
                                        <br>
                                        <input type="number" class="quantity" id="quantity" name="quantity" value="1" min="0" max="<?php echo e($product->miktar); ?>"
                                               style="width: 50px; margin-right: 10px;height: 18px;border: 1px solid #FE7C7F;margin-bottom: 5px">
                                    </div>
                                    <div class="add_to_cart_button red_button"><a href="<?php echo e(route('basket.create', ['id' => $product->id])); ?>">Ürünü Ekle</a></div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        var slides = document.querySelectorAll(".slide");
        var dots = document.querySelectorAll(".dot");
        var index = 0;


        function prevSlide(n){
            index+=n;
            console.log("prevSlide is called");
            changeSlide();
        }

        function nextSlide(n){
            index+=n;
            changeSlide();
        }

        changeSlide();

        function changeSlide(){

            if(index>slides.length-1)
                index=0;

            if(index<0)
                index=slides.length-1;



            for(let i=0;i<slides.length;i++){
                slides[i].style.display = "none";

                dots[i].classList.remove("active");


            }

            slides[index].style.display = "block";
            dots[index].classList.add("active");



        }



    </script>
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