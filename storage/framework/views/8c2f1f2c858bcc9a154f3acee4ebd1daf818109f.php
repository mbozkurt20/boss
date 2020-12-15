<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/single_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/single_responsive.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="container single_product_container">
        <div class="row">
            <div class="col">
                <!-- Breadcrumbs -->
                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="/">Anasayfa</a></li>
                        <?php $__currentLoopData = $bcrumb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="/category/<?php echo e($bc->slug); ?>"><i class="fa fa-angle-right"
                                                                     aria-hidden="true"></i><?php echo e($bc->category_name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="active"><a href="<?php echo e(route('product', $product->slug)); ?>"><i class="fa fa-angle-right"
                                                                                             aria-hidden="true"></i><?php echo e($product->product_name); ?>

                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="single_product_pics">
                    <div class="row">
                        <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                            <div class="single_product_thumbnails">
                                <ul>
                                    <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="active">
                                            <img src="<?php echo asset("uploads/thumb_".$image->name); ?>" alt=""
                                                 data-image="<?php echo asset("uploads/".$image->name); ?>">
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single_product_image_background"
                                         style="background-image:url('<?php echo asset("uploads/thumb_".$image->name); ?>')"></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="product_details">
                    <div class="product_details_title text-center">
                        <h5> <?php echo e($product->product_name); ?></h5>
                        <p><?php echo $product->product_detail; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="product_price col-md-4 col-sm-4"><?php echo e(number_format($product->product_price)); ?> <small>₺</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="product_details_title">
                        <?php if($product->status==1): ?>
                            <input type="number" class="quantity" id="quantity" name="quantity" value="1" min="0" max="<?php echo e($product->miktar); ?>"
                                   style="width: 50px; margin-right: 10px;height: 18px;border: 1px solid #FE7C7F;margin-bottom: 5px">
                        <?php else: ?>
                          <div>  <span style="border-radius: 5px" class="alert-light text-danger p-2 font-weight-bolder mt-2">Stokda ürün mevcut değil !</span></div>
                        <?php endif; ?>

                    </div>
                    <?php if($product->status ==1): ?>

                        <div class="red_button" style="margin-top: 30px;">
                            <a href="<?php echo e(route('basket.create', ['id' => $product->id])); ?>">Sepete ekle</a>
                        </div>
                    <?php else: ?>
                        <form action="<?php echo e(route('gelince_haber_ver')); ?>" method="post" class="text-center">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e(auth()->id()); ?>" name="user_id">
                            <input type="hidden" value="<?php echo e($product->id); ?>" name="product_id">
                            <button type="submit" class="btn btn btn-warning mt-1 "><i class="fa fa-bullhorn"></i> Gelince Haber Ver</button>
                        </form>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $('.red_button').find('a').click(function (event) {
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
    <script src="<?php echo e(asset('assets/js/single_custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>