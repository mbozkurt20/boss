<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/categories_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/categories_responsive.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
    <meta type="keywords" content="Ürünler,Arama">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','VeosNet Kategori Ürün Sayfası || VeosNet Network&Marketing'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">
                <!-- Breadcrumbs -->

                <!-- Sidebar -->
                <!-- Main Content -->
                <div class="main_content">
                    <!-- Products -->
                    <div class="products_iso">
                        <div class="row">
                            <div class="col">
                                <?php if(isset($details)): ?>
                                    <p class="mt-3" style="font-size: 16px"><b> <?php echo e($query); ?> </b><small class="text-secondary">araması için bulunan ürünler</small></p>
                                    <h4 style="font-family: 'Harlow Solid Italic'" class="text-center" >ÜRÜN DETAYLARI</h4>
                                    <div class="product-grid"
                                         data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                                        <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="/product/<?php echo e($product->slug); ?>">
                                                <div class="product-item <?php echo e($product->id); ?> ">
                                                    <div class="product discount product_filter">
                                                        <div class="product_image"style="margin-top: -22px">
                                                            <?php echo $product->thumbs; ?>

                                                        </div>
                                                    </div>
                                                    <div class="product_info" style="margin-top: -35px">
                                                        <small class="product_name"><a class="text-secondary" href="/product/<?php echo e($product->slug); ?>"><?php echo e($product->product_name); ?></a></small>
                                                        <div class="product_price text-center" style="font-size: 11px;margin-top: -3px"><?php echo e(number_format($product->product_price)); ?> <small>₺</small></div>
                                                        <div class="add_to_cart_button red_button"><a href="<?php echo e(route('basket.create', ['id' => $product->id])); ?>">Sepete Ekle</a></div>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
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
            var max= $(this).parent().prev().find('input').attr('max');
            max = parseInt(max);
            quantity = parseInt(quantity);
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
                    data: {quantity: quantity}
                    , success: function (data) {
                        console.log(data);
                        $('#checkout_items').html(data.cartCount);
                    }
                });
                return false; //for good measure
            }
        });
    </script>
    <script src="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/categories_custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>