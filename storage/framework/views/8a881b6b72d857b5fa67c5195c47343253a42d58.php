<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/categories_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/categories_responsive.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="active"><a href="<?php echo e(route('category', $category->slug)); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo e($category->category_name); ?></a></li>
                    </ul>
                </div>

                <!-- Sidebar -->



                <!-- Main Content -->

                <div class="main_content">

                    <!-- Products -->

                    <div class="products_iso">
                        <div class="row">
                            <div class="col">
                                <div class="product-grid"
                                     data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>


                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="/product/<?php echo e($product->slug); ?>">
                                            <div class="product-item <?php echo e($product->id); ?> my-2">
                                            <div class="product discount product_filter">
                                                <div class="product_image " >
                                                    <?php echo $product->thumbs; ?>

                                                </div>

                                                <div class="product_info">
                                                    <h6 class="product_name"><a
                                                                href="/product/<?php echo e($product->slug); ?>"><?php echo e($product->product_name); ?></a>
                                                    </h6>

                                                    <div class="product_price my-1"><?php echo e(number_format($product->product_price)); ?> ₺<span><?php echo e(number_format($product->original_price )); ?>

                                                            ₺</span>
                                                    </div>
                                                    <?php if($product->status==1): ?>
                                                        <span>Miktar:</span>
                                                        <input type="number" class="quantity" id="quantity" name="quantity" value="1" min="0" max="<?php echo e($product->miktar); ?>"
                                                               style="width: 50px; margin-right: 10px;">
                                                    <?php else: ?>
                                                        <span style="border-radius: 5px" class="alert-info p-2 font-weight-bolder">Stokda ürün mevcut değil !</span>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if($product->status==1): ?>
                                                    <div class="add_to_cart_button red_button"><a href="<?php echo e(route('basket.create', ['id' => $product->id])); ?>">Ürünü Ekle</a></div>
                                                <?php else: ?>
                                                    <form action="<?php echo e(route('gelince_haber_ver')); ?>" method="post" class="text-center mt-2">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" value="<?php echo e(auth()->id()); ?>" name="user_id">
                                                        <input type="hidden" value="<?php echo e($product->id); ?>" name="product_id">
                                                        <button type="submit" class="btn btn btn-warning "><i class="fa fa-bullhorn"></i> Gelince Haber Ver</button>
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
        </div>
    </div>

    <!-- Benefit -->
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